<p align="center">
  <samp>
    <b>
      <h1 align="center">
        お問合せフォーム
      </h1>
    </b>
  </samp>
</p>

<h2>環境構築</h2>
## Dockerビルド
1.
2.docker-compose up -d -build

※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose up -d -buildファイルを編
集してください

## Laravel環境開発
1.docker-compose exec php bash
2.composer install
3.env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

### 使用技術
・php8.0
・Laravel10.0
・MySQL8.0

### URL
・開発環境：http://localhost/
・phpMyadmin:http://localhost:8080/
