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
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
<?php
require("./function.php");

$articles = get_articles();

for($i = 0; $i < count($articles); $i++) {
    echo "<tr>";
    echo "  <td>" . $articles[$i][0] . "</td>";
    echo "  <td>" . $articles[$i][1] . "</td>";
    echo "</tr>";
}
?>
    </table>
</body>
</html>