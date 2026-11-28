<?php
/**
 * Advanced WordPress Cache Purge - Safe Mode
 */

// 1. Pengaturan Error & Limit
// Kita nyalakan display_errors sementara untuk melihat pesan error asli jika 500 tetap muncul
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(180);

$status_logs = [];

/* 2. Fungsi Pembersih Folder (Tanpa Butuh WordPress) */
function force_purge_dir($dir) {
    if (!is_dir($dir)) return false;
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        $path = "$dir/$file";
        (is_dir($path)) ? force_purge_dir($path) : @unlink($path);
    }
    return @rmdir($dir);
}

/* 3. Mencoba Load WordPress (Dengan Proteksi Tinggi) */
$wp_path = __DIR__ . '/wp-load.php';
$wp_is_loaded = false;

if (file_exists($wp_path)) {
    // Gunakan include, bukan require, agar tidak mati total jika gagal
    if (@include_once($wp_path)) {
        $wp_is_loaded = true;
        $status_logs[] = ['task' => 'WP Core', 'status' => 'Success', 'msg' => 'WordPress terdeteksi.'];
    } else {
        $status_logs[] = ['task' => 'WP Core', 'status' => 'Warning', 'msg' => 'File ada tapi gagal dimuat (cek izin file).'];
    }
} else {
    $status_logs[] = ['task' => 'WP Core', 'status' => 'Error', 'msg' => 'wp-load.php tidak ketemu. Menjalankan mode manual.'];
}

/* 4. Eksekusi Cache WordPress (Jika WP Berhasil Load) */
if ($wp_is_loaded) {
    // Object Cache
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
        $status_logs[] = ['task' => 'Object Cache', 'status' => 'Success', 'msg' => 'Dibersihkan via WP.'];
    }

    // Transients
    global $wpdb;
    if (isset($wpdb)) {
        $wpdb->query("DELETE FROM $wpdb->options WHERE option_name LIKE '_transient_%'");
        $status_logs[] = ['task' => 'Transients', 'status' => 'Success', 'msg' => 'Database dibersihkan.'];
    }

    // Plugin specific
    if (class_exists('\LiteSpeed\Purge')) { \LiteSpeed\Purge::purge_all(); $status_logs[] = ['task' => 'LiteSpeed', 'status' => 'Success', 'msg' => 'LSCache purged.']; }
    if (function_exists('rocket_clean_domain')) { rocket_clean_domain(); $status_logs[] = ['task' => 'WP Rocket', 'status' => 'Success', 'msg' => 'Rocket purged.']; }
}

/* 5. Eksekusi Manual (Tetap Jalan Meski WP Error) */
$cache_paths = [
    'wp-content/cache',
    'wp-content/litespeed',
    'wp-content/uploads/cache'
];

foreach ($cache_paths as $rel_path) {
    $full_path = __DIR__ . '/' . $rel_path;
    if (is_dir($full_path)) {
        force_purge_dir($full_path);
        $status_logs[] = ['task' => 'Manual Disk', 'status' => 'Success', 'msg' => "Folder $rel_path dikosongkan."];
    }
}

// Terakhir reset OPcache jika tersedia
if (function_exists('opcache_reset')) { @opcache_reset(); }

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Purge Cache Safe WP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
        <div class="p-6 bg-gray-800 text-white">
            <h1 class="text-xl font-bold">Purge Cache For Wordpress</h1>
            <p class="text-xs text-gray-400">Mode perbaikan jika WordPress Error 500</p>
        </div>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="p-4">Modul</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($status_logs as $log): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-4 font-bold text-gray-700"><?php echo $log['task']; ?></td>
                    <td class="p-4">
                        <span class="px-2 py-1 rounded text-xs <?php echo $log['status'] === 'Success' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800'; ?>">
                            <?php echo $log['status']; ?>
                        </span>
                    </td>
                    <td class="p-4 text-sm text-gray-500"><?php echo $log['msg']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="p-6 text-center">
            <button onclick="location.reload()" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700">BERSIHKAN LAGI</button>
        </div>
    </div>
            <div class="bg-gray-800 rounded-b-xl p-4 text-center">
            <p class="text-gray-400 text-sm tracking-widest font-bold">
                CLEAR CACHE BY HINO.
            </p>
        </div>
</body>
</html>