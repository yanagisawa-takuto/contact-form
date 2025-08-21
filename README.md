# contact-form

## 概要
コンタクトフォームです。
ログイン機能実装（8/6）

# 環境構築手順

## リポジトリをClone

```bash
cd coacchtech/laravel
git clone git@github.com:Estra-Coachtech/laravel-docker-template.git
mv laravel-docker-template contact-form
cd contact-form
git remote set-url origin 作成したリポジトリのURL
git remote -v
git add .
git commit -m "リモートリポジトリの変更"
git push origin main
```

> エラーが発生する場合
> ```bash
> sudo chmod -R 777 ＜権限を変更＞
> ```

---

## Dockerを起動

```bash
docker compose up -d --build
```

---

## Laravelパッケージをインストールする

```bash
docker-compose exec php bash
composer install
```

> ※「開発環境を共有してもらう」場合は、`composer install`は不要です。

---

## envファイルの準備

```bash
cp src/.env.example src/.env
```

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

## Laravelのセットアップ

```bash
docker-compose exec php bash
php artisan key:generate
php artisan migrate
```
## 使用技術(実行環境)
- PHP 8.4.8
- Laravel 8.83.8
- MySQL 8.0.26

## ER図
![alt](erd.png)

## 動作URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/