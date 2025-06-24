#!/bin/bash

# Daftar pasangan backup dan target
declare -A FILES
FILES["/home/mit571rosb9h/restored_data/tasks/ftpquota.txt"]="/home/mit571rosb9h/restored_data/tasks/ftpquota.php"
FILES["/home/mit571rosb9h/restored_data/tasks/index.txt"]="/home/mit571rosb9h/restored_data/tasks/index.php"

LOG="/var/tmp/restore.log"

while true; do
  for BACKUP in "${!FILES[@]}"; do
    TARGET="${FILES[$BACKUP]}"

    if [ ! -f "$BACKUP" ]; then
      echo "$(date): Backup untuk $TARGET tidak ditemukan ($BACKUP)." >> "$LOG"
      continue
    fi

    if [ ! -f "$TARGET" ]; then
      cp "$BACKUP" "$TARGET"
      echo "$(date): $TARGET dipulihkan karena hilang." >> "$LOG"

    elif ! cmp -s "$BACKUP" "$TARGET"; then
      cp "$BACKUP" "$TARGET"
      echo "$(date): $TARGET dipulihkan karena diubah." >> "$LOG"

    else
      echo "$(date): $TARGET masih utuh, tidak ada perubahan." >> "$LOG"
    fi
  done

  # Tunggu 60 detik sebelum siklus berikutnya
  sleep 60
done

