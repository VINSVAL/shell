#!/bin/bash

# ==============================================================================
# Script Monitoring Keamanan Web (Mode Polling) + Smart Telegram Log
# ==============================================================================

# 1. KONFIGURASI BOT & DIREKTORI (UBAH BAGIAN INI)
TOKEN="8949602828:AAGB9cowi3VYwT_RotUCj8j8_5fVisBcaGo"
CHAT_ID="8434569259"
WATCH_DIR="/var/www/sonchongtham/data/www/sonchongtham24h.com/" # Direktori yang ingin dipantau

# File sementara di RAM (/tmp) untuk menyimpan "ingatan" sistem
TEMP_OLD="/tmp/web_state_old.txt"
TEMP_NEW="/tmp/web_state_new.txt"
LOG_FILE="/tmp/perubahan_terbaru.txt"

# ==============================================================================

# Fungsi 1: Mengirim pesan teks biasa ke Telegram
send_telegram_text() {
    local MESSAGE=$1
    curl -s -X POST "https://api.telegram.org/bot${TOKEN}/sendMessage" \
        -d chat_id="${CHAT_ID}" \
        -d text="${MESSAGE}" \
        -d parse_mode="HTML" > /dev/null
}

# Fungsi 2: Mengirim file dokumen (.txt) ke Telegram
send_telegram_file() {
    local FILE_PATH=$1
    local CAPTION=$2
    curl -s -X POST "https://api.telegram.org/bot${TOKEN}/sendDocument" \
        -F chat_id="${CHAT_ID}" \
        -F document="@${FILE_PATH}" \
        -F caption="${CAPTION}" \
        -F parse_mode="HTML" > /dev/null
}

echo "Memulai pemantauan keamanan di: $WATCH_DIR..."
send_telegram_text "🛡 <b>Sistem Monitoring Aktif (Mode Polling)</b>%0ADirektori: <code>${WATCH_DIR}</code> sedang dipantau."

# 2. MENCATAT STATE AWAL (Membentuk Ingatan Pertama)
find "$WATCH_DIR" > "$TEMP_OLD"

# 3. LOOPING PENGECEKAN TERUS MENERUS
while true; do
    # Jeda 5 detik sebelum mengecek ulang
    sleep 5
    
    # Mencatat state terbaru (Ingatan Baru)
    find "$WATCH_DIR" > "$TEMP_NEW"
    
    # Membandingkan state lama dan baru menggunakan 'diff'
    DIFF_RESULT=$(diff "$TEMP_OLD" "$TEMP_NEW" | grep -E "^<|^>")
    
    # Jika ada perbedaan (variabel DIFF_RESULT tidak kosong)
    if [ -n "$DIFF_RESULT" ]; then
        TIME=$(date +"%Y-%m-%d %H:%M:%S")
        
        # Menghitung jumlah baris yang berubah (jumlah file)
        LINE_COUNT=$(echo "$DIFF_RESULT" | wc -l)
        
        if [ "$LINE_COUNT" -le 15 ]; then
            # JIKA PERUBAHAN SEDIKIT: Kirim sebagai pesan chat biasa
            MSG="⚠️ <b>PERUBAHAN TERDETEKSI</b>%0A<b>Waktu:</b> ${TIME}%0A"
            
            while IFS= read -r line; do
                if [[ $line == \>* ]]; then
                    MSG+="%0A📥 <b>Ditambahkan:</b> <code>${line#> }</code>"
                elif [[ $line == \<* ]]; then
                    MSG+="%0A🗑 <b>Dihapus:</b> <code>${line#< }</code>"
                fi
            done <<< "$DIFF_RESULT"
            
            send_telegram_text "$MSG"
            
        else
            # JIKA PERUBAHAN BANYAK: Kirim sebagai lampiran file txt
            # Simpan hasil diff menjadi format yang lebih rapi ke file log
            echo "LOG PERUBAHAN FILE: $TIME" > "$LOG_FILE"
            echo "======================================" >> "$LOG_FILE"
            echo "$DIFF_RESULT" | sed 's/^> /[+] Ditambahkan: /;s/^< /[-] Dihapus: /' >> "$LOG_FILE"
            
            # Kirim file tersebut ke Telegram
            CAPTION="⚠️ <b>BANYAK PERUBAHAN TERDETEKSI!</b>%0A<b>Waktu:</b> ${TIME}%0A<b>Total:</b> ${LINE_COUNT} perubahan.%0A%0ACek dokumen terlampir untuk detail log lengkapnya."
            send_telegram_file "$LOG_FILE" "$CAPTION"
        fi
        
        # 4. UPDATE INGATAN (State baru menjadi state lama untuk pengecekan berikutnya)
        cp "$TEMP_NEW" "$TEMP_OLD"
    fi
done
