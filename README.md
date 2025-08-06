# contact-form

## 概要
◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯、◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯、◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯。

## 環境構築手順

リポジトリをClone
`` `
cd coachtech/laravel
git clone git@github.com:Estra-Coachtech/laravel-docker-template.git
mv laravel-docker-template contact-form
cd contact-form
git remote set-url origin 作成したリポジトリのurl
git remote -v
git add .
git commit -m "リモートリポジトリの変更"
git push origin main

エラーが発生する場合は　$ sudo chmod -R 777 *で権限を変更
`` `

Dockerを起動
`` `
docker compose up -d --build
code .
`` `

Laravelパッケージをインストールする
`` `
docker-compose exec php bash
composer install　※「開発環境を共有してもらう」場合は、必ずcomposer installする
`` `

envファイルの準備
`` `
cp src/.env.example src/.env
exit
`` `

Laravelのセットアップ
`` `
docker-compose exec php bash
composer install
php artisan xxx
php artisan xxx
php artisan xxx
`` `

「Dockerを起動」の「code .」コマンドで開いたVSCodeで、.envファイルの修正を行う
`` `
// 前略

DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
+ DB_HOST=mysql
DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=
+ DB_DATABASE=laravel_db
+ DB_USERNAME=laravel_user
+ DB_PASSWORD=laravel_pass

// 後略
`` `


各ページの view ファイルを作成
`` `
resources/views直下に以下 3 つの Blade ファイルを作成

index.blade.php
confirm.blade.php
thanks.blade.php
`` `

css ファイルの作成
`` `
public/cssに直下に以下 4 つの CSS ファイルを作成

sanitize.css
index.css
confirm.css
thanks.css
`` `

## 使用技術(実行環境)
- PHP 8.4.8 
- Laravel 8.83.8
- MySQL 8.0.26

## ER図
![alt](erd.png)

## 動作URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/