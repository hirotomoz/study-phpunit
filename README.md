# docker-nginx-laravel-mysql

This is a simple sample.

- docker
- nginx
- php-fpm
- mysql

(with Docker for Mac. )

# Prerequisites

Make sure that you installed Docker (for Mac).

Ref. [Docker for Mac](https://docs.docker.com/docker-for-mac/)

```
$ docker -v
Docker version 18.06.0-ce, build 0ffa825

$ docker-compose -v
docker-compose version 1.22.0, build f46880f

$ docker-machine -v
docker-machine version 0.15.0, build b48dc28d
```

# Usage

```
$ git clone git@github.com:hirotomoz/docker-nginx-laravel-mysql.git
$ cd docker-nginx-laravel-mysql

// コンテナ起動
$ docker-compose up -d
// プロジェクト作成
$ docker-compose exec php laravel new
```

Access `localhost`, then you can get laravel top page. 

```
$ docker-compose ps
$ docker-compose down
```

* mysql設定

./src/laravel/.env

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=root
DB_USERNAME=root
DB_PASSWORD=root
```
*  マイグレーション
```
docker-compose exec php php artisan migrate
```
*  認証作成
```
docker-compose exec php php artisan make:auth
```
