# study-phpunit

This is a simple sample.

- docker/php
- src

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
$ git clone https://github.com/hirotomoz/study-phpunit.git
$ cd study-phpunit

// コンテナ起動
$ docker-compose up -d
// コンテナ入り
$ docker exec -ti php /bin/bash
// composerでphpunitインストール
# composer require --dev phpunit/phpunit:7.4.3
// テスト実行
# php vendor/bin/phpunit tests/
```
