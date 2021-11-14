<?php
require("./function.php");

$id = $_GET["id"];

$article = get_article($id);

$title = $article[1];
$body = $article[2];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG APP - <?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <div><?= $body ?></div>
    <a href="/">Back</a>
</body>
</html>