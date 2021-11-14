<?php
require("./function.php");

if($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST["title"];
    $body = $_POST["body"];

    create_article($title, $body);
    redirect('/');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG APP - create article</title>
</head>
<body>
    <form action="create.php" method="post">
        <table>
            <tr>
                <td>
                    <label>Title</label>
                </td>
                <td>
                    <input type="text" name="title" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Body</label>
                </td>
                <td>
                    <input type="text" name="body" />
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <button type="submit">Create</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>