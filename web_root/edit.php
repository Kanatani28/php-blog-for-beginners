<?php
require("./function.php");

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $body = $_POST["body"];

    update_article($id, $title, $body);
    redirect('/');
} else {
    $id = $_GET["id"];

    $article = get_article($id);
    
    $title = $article[1];
    $body = $article[2];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG APP</title>
</head>
<body>
    <form action="edit.php" method="post">
        <table>
            <tr>
                <td>
                  <label>Title</label>
                </td>
                <td>
                    <input type="text" name="title" value="<?= $title ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Body</label>
                </td>
                <td>
                    <input type="text" name="body" value="<?= $body ?>" />
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                   <button type="submit">Update</button>
                </td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?= $id ?>">
    </form>
</body>
</html>