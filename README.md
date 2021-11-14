`php -S` コマンドは `web_root`で実行すること。
こうすることでprivacyのデータにはアクセスできなくなる。

`web_root` 下に移動したデータについては `privacy/articles.csv` のパスを書き換える。

**function.php**

```php
<?php
define("ARTICLES_PATH", "../privacy/articles.csv");
```