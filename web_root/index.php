<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG APP</title>
</head>
<body>
    <h1>Article List</h1>
    <a href="create.php">New</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
<?php
require("./function.php");

$articles = get_articles();

for($i = 0; $i < count($articles); $i++) {
    $id = $articles[$i][0];
    $title = $articles[$i][1];
?>
    <tr>
        <td>
            <a href="detail.php?id=<?= $id ?>"><?= $id ?></a>
        </td>
        <td><?= $title ?></td>
        <td><a href="edit.php?id=<?= $id ?>">Edit</a></td>
        <td>
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
<?php
}
?>
    </table>
</body>
</html>