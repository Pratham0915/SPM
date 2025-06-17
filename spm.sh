#!/bin/bash

clear
echo "======== SPM Phishing Framework (Localhost Mode) ========"
echo "[*] Choose a phishing template to launch:"
echo

TEMPLATES_DIR="./templates"
i=1
declare -A options

# List phishing templates
for dir in "$TEMPLATES_DIR"/*/; do
    name=$(basename "$dir")
    echo "[$i] $name"
    options[$i]="$name"
    ((i++))
done

echo
read -p "Enter the number: " choice
selected="${options[$choice]}"

if [[ -z "$selected" ]]; then
    echo "[!] Invalid option"
    exit 1
fi

echo "[*] Launching '$selected' phishing template on http://127.0.0.1:8080..."
cd "$TEMPLATES_DIR/$selected" || exit 1
php -S 127.0.0.1:8080 &
php_pid=$!
cd - > /dev/null || exit 1

# Confirm server is live
for i in {1..10}; do
  if curl -s http://127.0.0.1:8080 > /dev/null; then
    echo "[+] ✅ Server is live at http://127.0.0.1:8080"
    break
  fi
  echo "[*] Waiting for server... ($i/10)"
  sleep 1
done

echo
read -p "[*] Press ENTER to stop the server..."

kill $php_pid

