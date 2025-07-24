#!/bin/bash

echo "🔧 修正 Laravel 權限..."
sudo chown -R $USER:$USER storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "🐳 啟動 Laravel Sail 容器..."
./vendor/bin/sail up -d

echo "🛠 執行資料表 migrate..."
./vendor/bin/sail artisan migrate

echo "🔍 檢查 Git 設定..."
git_user_name=$(git config --global user.name)
git_user_email=$(git config --global user.email)

if [ -z "$git_user_name" ] || [ -z "$git_user_email" ]; then
  echo "請輸入 Git 使用者名稱："
  read username
  git config --global user.name "$username"

  echo "請輸入 Git 使用者 Email："
  read useremail
  git config --global user.email "$useremail"
fi

echo "📂 初始化 Git 專案..."
git init
cat <<EOF > .gitignore
/vendor
/node_modules
.env
/storage/*.key
/storage/*.log
/public/storage
/storage/app/public
.phpunit.result.cache
EOF

git add .
git commit -m "Initial Laravel project with Docker Sail"
echo "✅ Laravel 初始化完成，可開始開發！"

