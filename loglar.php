<?php
session_start();
// KENDİ ŞİFRENİ BURAYA YAZ
$adminPassword = 'supergizlisifre123';

// Çıkış İşlemi
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: loglar.php");
    exit;
}

// Giriş İşlemi
if (isset($_POST['password']) && $_POST['password'] === $adminPassword) {
    $_SESSION['auth_logs'] = true;
}

// Şifre Ekranı
if (empty($_SESSION['auth_logs'])) {
    echo '<!DOCTYPE html><html><head><title>Log Girişi</title><style>body{font-family:sans-serif; background:#f4f4f9; display:flex; justify-content:center; align-items:center; height:100vh;} form{background:#fff; padding:30px; border-radius:8px; box-shadow:0 4px 6px rgba(0,0,0,0.1); text-align:center;} input{padding:10px; border:1px solid #ccc; border-radius:4px; width:200px; margin-bottom:15px; display:block;} button{padding:10px 20px; background:#007BFF; color:#fff; border:none; border-radius:4px; cursor:pointer;} button:hover{background:#0056b3;}</style></head><body>';
    echo '<form method="POST"><h3>Güvenli Log Paneli</h3><input type="password" name="password" placeholder="Şifrenizi girin" required><button type="submit">Giriş Yap</button></form>';
    echo '</body></html>';
    exit;
}

// Logları Oku
$logFile = __DIR__ . '/bot_logs.txt';
$logs = [];
if (file_exists($logFile)) {
    $lines = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    // En yeni loglar en üstte görünsün diye diziyi tersine çeviriyoruz
    $lines = array_reverse($lines);
    // Sadece son 1000 logu göster (tarayıcıyı yormamak için)
    $lines = array_slice($lines, 0, 1000);
    foreach ($lines as $line) {
        $logs[] = json_decode($line, true);
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Bot ve AMP Logları</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; color: #333; margin: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h1 { font-size: 24px; color: #2c3e50; }
        .btn { padding: 8px 15px; background: #e74c3c; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .btn:hover { background: #c0392b; }
        table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; font-size: 14px; }
        th { background-color: #2c3e50; color: white; position: sticky; top: 0; }
        tr:hover { background-color: #f1f1f1; }
        .status-amp { color: #27ae60; font-weight: bold; }
        .status-normal { color: #2980b9; }
        .status-fake { color: #c0392b; font-weight: bold; }
        input[type="text"] { padding: 10px; width: 100%; max-width: 300px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; }
    </style>
</head>
<body>

    <div class="header">
        <h1>🔍 Canlı Trafik ve Bot Logları (Son 1000 Kayıt)</h1>
        <a href="?logout=true" class="btn">Güvenli Çıkış Yap</a>
    </div>

    <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="IP, Bot, Status veya URL ara...">

    <table id="logTable">
        <thead>
            <tr>
                <th>Tarih</th>
                <th>IP Adresi</th>
                <th>URL</th>
                <th>Kullanıcı Ajanı (User Agent)</th>
                <th>Durum / Sonuç</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): 
                $statusClass = '';
                if (strpos($log['status'], 'Engellendi') !== false) $statusClass = 'status-fake';
                elseif (strpos($log['status'], 'AMP') !== false) $statusClass = 'status-amp';
                else $statusClass = 'status-normal';
            ?>
            <tr>
                <td><?php echo htmlspecialchars($log['date']); ?></td>
                <td><?php echo htmlspecialchars($log['ip']); ?></td>
                <td><?php echo htmlspecialchars($log['url']); ?></td>
                <td style="word-break: break-all; font-size:12px;"><?php echo htmlspecialchars($log['ua']); ?></td>
                <td class="<?php echo $statusClass; ?>"><?php echo htmlspecialchars($log['status']); ?></td>
            </tr>
            <?php endforeach; ?>
            <?php if(empty($logs)): ?>
                <tr><td colspan="5" style="text-align:center;">Henüz log kaydı bulunmuyor.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <script>
    function filterTable() {
        let input = document.getElementById("searchInput");
        let filter = input.value.toUpperCase();
        let table = document.getElementById("logTable");
        let tr = table.getElementsByTagName("tr");

        for (let i = 1; i < tr.length; i++) {
            let rowText = tr[i].innerText.toUpperCase();
            if (rowText.indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
    </script>
</body>
</html>