<?php

define('VERSION',      '1.0');
define('SCAN_DIR',     __DIR__);
define('QUARANTINE',   __DIR__ . '/quarantine_defend');
define('STATE_FILE',   __DIR__ . '/defend_state.json');
define('LOG_FILE',     __DIR__ . '/defend_log.txt');
define('BOT_TOKEN',    '8624383065:AAFBYCAER9i8bzpdRwS2h6YSF_GzVUkf6hg');
define('CHAT_ID',      '8434569259');
define('AUTO_DELETE',  true);

$PATTERNS = [
    '/eval\s*\(\s*base64_decode/i'                          => 'eval+base64_decode',
    '/eval\s*\(\s*gzinflate/i'                              => 'eval+gzinflate',
    '/eval\s*\(\s*str_rot13/i'                              => 'eval+str_rot13',
    '/eval\s*\(\s*gzuncompress/i'                           => 'eval+gzuncompress',
    '/assert\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'         => 'assert via user input',
    '/preg_replace\s*\(.*\/e[\'\"]/i'                       => 'preg_replace /e flag RCE',
    '/system\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'         => 'system() command injection',
    '/exec\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'           => 'exec() command injection',
    '/passthru\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'       => 'passthru() execution',
    '/shell_exec\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'     => 'shell_exec() via input',
    '/base64_decode\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'  => 'base64_decode via input',
    '/move_uploaded_file.*\$_FILES/i'                       => 'file upload handler',
    '/file_put_contents\s*\(.*\$_(POST|GET|REQUEST)/i'      => 'file_put_contents via input',
    '/FilesMan|r57shell|c99shell|b374k|wso shell|alfa shell/i' => 'known webshell signature',
    '/putenv\s*\([\'"]LD_PRELOAD/i'                         => 'LD_PRELOAD injection',
    '/uname\s+-a|\/etc\/passwd|\/etc\/shadow/i'             => 'system file access',
    '/proc_open\s*\(/i'                                     => 'proc_open execution',
    '/popen\s*\(\s*\$_(POST|GET|REQUEST|COOKIE)/i'          => 'popen via input',
];

function tg_send($msg) {
    if (BOT_TOKEN === '8624383065:AAFBYCAER9i8bzpdRwS2h6YSF_GzVUkf6hg') return;
    $url  = "https:
    $data = ['chat_id' => CHAT_ID, 'text' => $msg, 'parse_mode' => 'HTML'];
    $ch   = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 8,
        CURLOPT_SSL_VERIFYPEER => false,
    ]);
    curl_exec($ch);
    curl_close($ch);
}

function write_log($msg, $level = 'INFO') {
    $ts   = date('Y-m-d H:i:s');
    $ip   = $_SERVER['REMOTE_ADDR'] ?? '-';
    $line = "[$ts] [$level] [IP:$ip] $msg\n";
    file_put_contents(LOG_FILE, $line, FILE_APPEND | LOCK_EX);
}

function load_state() {
    if (!file_exists(STATE_FILE)) return ['files' => [], 'quarantined' => [], 'blocked_ips' => []];
    $d = json_decode(file_get_contents(STATE_FILE), true);
    return $d ?: ['files' => [], 'quarantined' => [], 'blocked_ips' => []];
}

function save_state($state) {
    file_put_contents(STATE_FILE, json_encode($state, JSON_PRETTY_PRINT), LOCK_EX);
}

function file_hash_sha($path) {
    return file_exists($path) ? hash_file('sha256', $path) : '';
}

function scan_file($path) {
    global $PATTERNS;
    $hits    = [];
    $content = @file_get_contents($path);
    if (!$content) return $hits;
    foreach ($PATTERNS as $pat => $desc) {
        if (preg_match($pat, $content)) $hits[] = $desc;
    }
    return $hits;
}

function get_php_files($dir) {
    $files = [];
    $ext   = ['php','php3','php4','php5','phtml','phar'];
    $it    = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS));
    foreach ($it as $f) {
        if (!$f->isFile()) continue;
        if (strpos($f->getPath(), 'quarantine_defend') !== false) continue;
        if (in_array(strtolower($f->getExtension()), $ext)) {
            $files[] = $f->getPathname();
        }
    }
    return $files;
}

function quarantine_file($path, &$state, $reason) {
    if (!is_dir(QUARANTINE)) mkdir(QUARANTINE, 0755, true);
    $fname = basename($path);
    $dest  = QUARANTINE . '/' . date('Ymd_His') . '_' . $fname;
    @copy($path, $dest);
    if (AUTO_DELETE) {
        @unlink($path);
        $action = 'DELETED';
    } else {
        @rename($path, $path . '.quarantined');
        $action = 'QUARANTINED';
    }
    $state['quarantined'][] = [
        'original' => $path,
        'backup'   => $dest,
        'reason'   => $reason,
        'action'   => $action,
        'time'     => date('Y-m-d H:i:s'),
    ];
    write_log("$action: $path | Reason: " . implode(', ', $reason), 'ALERT');
    $tg_msg = "🚨 <b>DEFEND MANAGER ALERT</b>\n"
            . "⚠️ File berbahaya terdeteksi!\n\n"
            . "📁 <b>File:</b> <code>$path</code>\n"
            . "🔍 <b>Alasan:</b>\n" . implode("\n", array_map(fn($r) => "  • $r", $reason)) . "\n"
            . "🗑️ <b>Action:</b> $action\n"
            . "💾 <b>Backup:</b> <code>$dest</code>\n"
            . "🕐 <b>Waktu:</b> " . date('Y-m-d H:i:s') . "\n"
            . "🌐 <b>Server:</b> " . ($_SERVER['HTTP_HOST'] ?? 'unknown');
    tg_send($tg_msg);
}

function block_ip($ip, &$state, $reason = '') {
    if (!in_array($ip, $state['blocked_ips'] ?? [])) {
        $state['blocked_ips'][] = $ip;
        write_log("BLOCKED IP: $ip | $reason", 'BLOCK');
        tg_send("🚫 <b>IP DIBLOKIR</b>\n📍 IP: <code>$ip</code>\n📝 Alasan: $reason\n🕐 " . date('Y-m-d H:i:s'));
    }
}

function check_blocked() {
    $state = load_state();
    $ip    = $_SERVER['REMOTE_ADDR'] ?? '';
    if (in_array($ip, $state['blocked_ips'] ?? [])) {
        http_response_code(403);
        die('<h1>403 Forbidden</h1>');
    }
}

function scan_all() {
    $state    = load_state();
    $files    = get_php_files(SCAN_DIR);
    $new      = [];
    $modified = [];
    $danger   = [];
    $known    = $state['files'] ?? [];

    foreach ($files as $f) {
        $hash  = file_hash_sha($f);
        $mtime = filemtime($f);
        if (!isset($known[$f])) {
            $new[] = $f;
            write_log("FILE BARU: $f", 'WARN');
        } elseif ($hash !== $known[$f]['hash']) {
            $modified[] = $f;
            write_log("FILE BERUBAH: $f", 'WARN');
        }
        $state['files'][$f] = ['hash' => $hash, 'mtime' => $mtime];
    }

    $check = array_merge($new, $modified);
    foreach ($check as $f) {
        $hits = scan_file($f);
        if ($hits) {
            $danger[] = ['file' => $f, 'hits' => $hits];
            quarantine_file($f, $state, $hits);
        }
    }

    if (($new || $modified) && !$danger) {
        $msg = "📢 <b>DEFEND MONITOR</b>\n"
             . "📁 File baru: " . count($new) . "\n"
             . "✏️ File berubah: " . count($modified) . "\n"
             . "✅ Tidak ada yang mencurigakan\n"
             . "🕐 " . date('Y-m-d H:i:s');
        tg_send($msg);
    }

    $state['last_scan'] = date('Y-m-d H:i:s');
    $state['scan_count'] = ($state['scan_count'] ?? 0) + 1;
    save_state($state);

    return ['new' => $new, 'modified' => $modified, 'danger' => $danger, 'total' => count($files)];
}

function build_baseline() {
    $state = load_state();
    $files = get_php_files(SCAN_DIR);
    $state['files'] = [];
    foreach ($files as $f) {
        $state['files'][$f] = ['hash' => file_hash_sha($f), 'mtime' => filemtime($f)];
    }
    $state['last_baseline'] = date('Y-m-d H:i:s');
    save_state($state);
    write_log("Baseline dibangun: " . count($files) . " file", 'INFO');
    tg_send("✅ <b>DEFEND MANAGER</b>\nBaseline dibangun: <b>" . count($files) . " file PHP</b>\n🕐 " . date('Y-m-d H:i:s'));
    return count($files);
}

function read_log($lines = 50) {
    if (!file_exists(LOG_FILE)) return [];
    $all = file(LOG_FILE);
    return array_reverse(array_slice($all, -$lines));
}

check_blocked();
$state  = load_state();
$action = $_GET['action'] ?? 'dashboard';
$result = null;

if ($action === 'baseline') {
    $count  = build_baseline();
    $state  = load_state();
    $result = ['msg' => "✅ Baseline selesai: $count file PHP tercatat", 'type' => 'success'];
}
if ($action === 'scan') {
    $result = scan_all();
    $state  = load_state();
}
if ($action === 'block_ip' && isset($_GET['ip'])) {
    $ip = filter_var($_GET['ip'], FILTER_VALIDATE_IP);
    if ($ip) { block_ip($ip, $state); save_state($state); $result = ['msg' => "✅ IP $ip diblokir", 'type' => 'success']; }
}
if ($action === 'unblock_ip' && isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    $state['blocked_ips'] = array_values(array_filter($state['blocked_ips'] ?? [], fn($x) => $x !== $ip));
    save_state($state);
    $result = ['msg' => "✅ IP $ip diunblokir", 'type' => 'success'];
}
if ($action === 'restore' && isset($_GET['idx'])) {
    $idx = (int)$_GET['idx'];
    $q   = $state['quarantined'][$idx] ?? null;
    if ($q && file_exists($q['backup'])) {
        @copy($q['backup'], $q['original']);
        array_splice($state['quarantined'], $idx, 1);
        save_state($state);
        $result = ['msg' => "✅ File di-restore: " . basename($q['original']), 'type' => 'success'];
    }
}

$logs = read_log(30);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Defend Manager v<?= VERSION ?></title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{background:
.wrap{max-width:960px;margin:0 auto;padding:20px}
.banner{text-align:center;padding:24px 0 16px;border-bottom:1px solid
.banner h1{color:
.banner p{color:
.nav{display:flex;gap:8px;margin-bottom:20px;flex-wrap:wrap}
.nav a{padding:7px 14px;background:
.nav a:hover{background:
.nav a.danger{color:
.nav a.danger:hover{background:
.card{background:
.card h3{color:
.stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:10px;margin-bottom:16px}
.stat{background:
.stat .num{font-size:28px;font-weight:bold;color:
.stat .num.red{color:
.stat .num.green{color:
.stat .num.yellow{color:
.stat .label{color:
.alert{padding:10px 14px;border-radius:4px;margin-bottom:14px;font-size:12px}
.alert.success{background:
.alert.danger{background:
.alert.warn{background:
table{width:100%;border-collapse:collapse;font-size:12px}
th{background:
td{padding:7px 10px;border-bottom:1px solid
tr:hover td{background:
.badge{display:inline-block;padding:2px 8px;border-radius:3px;font-size:11px;font-weight:bold}
.badge.red{background:
.badge.green{background:
.badge.yellow{background:
.badge.blue{background:
.log-box{background:
.log-box .ALERT{color:
.log-box .WARN{color:
.log-box .OK{color:
.log-box .INFO{color:
.log-box .BLOCK{color:
.ip-form{display:flex;gap:8px;margin-top:10px}
.ip-form input{background:
.ip-form button{padding:7px 14px;background:
.scan-result{margin-top:10px}
.scan-result .item{background:
.scan-result .item.new{border-left-color:
.scan-result .item.modified{border-left-color:
.path{color:
.hits{color:
a.btn{display:inline-block;padding:4px 10px;font-size:11px;border-radius:3px;text-decoration:none;margin-left:6px}
a.btn.red{background:
a.btn.green{background:
</style>
</head>
<body>
<div class="wrap">

<div class="banner">
  <h1>⚔ DEFEND MANAGER</h1>
  <p>PHP Security Guard v<?= VERSION ?> &nbsp;|&nbsp; author: @anakbiasa3302 &nbsp;|&nbsp; <?= date('Y-m-d H:i:s') ?></p>
</div>

<div class="nav">
  <a href="?action=dashboard">📊 Dashboard</a>
  <a href="?action=baseline">🔧 Build Baseline</a>
  <a href="?action=scan">🔍 Scan Sekarang</a>
  <a href="?action=quarantine">📦 Karantina</a>
  <a href="?action=blocked">🚫 IP Diblokir</a>
  <a href="?action=logs">📋 Log</a>
</div>

<?php if ($result): ?>
  <?php if (isset($result['msg'])): ?>
    <div class="alert <?= $result['type'] ?? 'success' ?>"><?= htmlspecialchars($result['msg']) ?></div>
  <?php elseif (isset($result['total'])): ?>
    <div class="alert <?= $result['danger'] ? 'danger' : 'success' ?>">
      🔍 Scan selesai — Total: <?= $result['total'] ?> file &nbsp;|&nbsp;
      Baru: <?= count($result['new']) ?> &nbsp;|&nbsp;
      Berubah: <?= count($result['modified']) ?> &nbsp;|&nbsp;
      Berbahaya: <b><?= count($result['danger']) ?></b>
    </div>
    <?php if ($result['danger']): ?>
      <div class="scan-result">
        <?php foreach ($result['danger'] as $d): ?>
          <div class="item">
            <div class="path">🚨 <?= htmlspecialchars($d['file']) ?></div>
            <div class="hits">↳ <?= htmlspecialchars(implode(', ', $d['hits'])) ?></div>
          </div>
        <?php endforeach ?>
      </div>
    <?php endif ?>
  <?php endif ?>
<?php endif ?>

<?php if ($action === 'dashboard' || $action === 'baseline' || $action === 'scan'): ?>
<div class="stats">
  <div class="stat">
    <div class="num"><?= count($state['files'] ?? []) ?></div>
    <div class="label">File Terpantau</div>
  </div>
  <div class="stat">
    <div class="num red"><?= count($state['quarantined'] ?? []) ?></div>
    <div class="label">Dikarantina</div>
  </div>
  <div class="stat">
    <div class="num yellow"><?= count($state['blocked_ips'] ?? []) ?></div>
    <div class="label">IP Diblokir</div>
  </div>
  <div class="stat">
    <div class="num green"><?= $state['scan_count'] ?? 0 ?></div>
    <div class="label">Total Scan</div>
  </div>
</div>

<div class="card">
  <h3>ℹ INFO SERVER</h3>
  <table>
    <tr><td style="color:
    <tr><td style="color:
    <tr><td style="color:
    <tr><td style="color:
    <tr><td style="color:
    <tr><td style="color:
  </table>
</div>

<?php endif ?>

<?php if ($action === 'quarantine'): ?>
<div class="card">
  <h3>📦 FILE DIKARANTINA (<?= count($state['quarantined'] ?? []) ?>)</h3>
  <?php if (!$state['quarantined']): ?>
    <p style="color:
  <?php else: ?>
  <table>
    <tr><th>
    <?php foreach ($state['quarantined'] as $i => $q): ?>
    <tr>
      <td><?= $i+1 ?></td>
      <td class="path"><?= htmlspecialchars(basename($q['original'])) ?></td>
      <td><span class="badge red"><?= htmlspecialchars(implode(', ', array_slice((array)$q['reason'], 0, 2))) ?></span></td>
      <td><?= htmlspecialchars($q['time'] ?? '-') ?></td>
      <td>
        <a href="?action=restore&idx=<?= $i ?>" class="btn green" onclick="return confirm('Restore file ini?')">Restore</a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
  <?php endif ?>
</div>
<?php endif ?>

<?php if ($action === 'blocked'): ?>
<div class="card">
  <h3>🚫 IP DIBLOKIR (<?= count($state['blocked_ips'] ?? []) ?>)</h3>
  <?php if (!($state['blocked_ips'] ?? [])): ?>
    <p style="color:
  <?php else: ?>
  <table>
    <tr><th>
    <?php foreach ($state['blocked_ips'] as $i => $ip): ?>
    <tr>
      <td><?= $i+1 ?></td>
      <td><?= htmlspecialchars($ip) ?></td>
      <td><a href="?action=unblock_ip&ip=<?= urlencode($ip) ?>" class="btn green">Unblock</a></td>
    </tr>
    <?php endforeach ?>
  </table>
  <?php endif ?>
  <div class="ip-form">
    <input type="text" id="ip_input" placeholder="Masukkan IP yang mau diblokir...">
    <button onclick="location.href='?action=block_ip&ip='+document.getElementById('ip_input').value">Blokir IP</button>
  </div>
</div>
<?php endif ?>

<?php if ($action === 'logs'): ?>
<div class="card">
  <h3>📋 LOG TERBARU</h3>
  <div class="log-box">
    <?php foreach ($logs as $line): 
      $cls = 'INFO';
      if (strpos($line,'ALERT') !== false) $cls = 'ALERT';
      elseif (strpos($line,'WARN') !== false) $cls = 'WARN';
      elseif (strpos($line,'OK') !== false) $cls = 'OK';
      elseif (strpos($line,'BLOCK') !== false) $cls = 'BLOCK';
    ?>
      <div class="<?= $cls ?>"><?= htmlspecialchars(trim($line)) ?></div>
    <?php endforeach ?>
    <?php if (!$logs): ?><span style="color:
  </div>
</div>
<?php endif ?>

</div>
</body>
</html>
