#!/bin/bash

clear
echo "======== SPM Phishing Framework (Education Only) ========"
echo "[*] Choose a phishing template to launch:"
echo

templates_dir="./templates"
i=1
declare -A options

# List all directories under templates/
for dir in "$templates_dir"/*/; do
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

echo "[*] Launching PHP server for '$selected' phishing page..."
cd "$templates_dir/$selected"
php -S 127.0.0.1:8080 &>/dev/null &
server_pid=$!

sleep 2
echo "[*] Open http://127.0.0.1:8080 in your browser"

read -p "[*] Press ENTER to stop the server..."

kill $server_pid
