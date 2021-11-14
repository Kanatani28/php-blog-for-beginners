<?php
require("./function.php");

$id = $_POST["id"];

delete_article($id);

redirect("/");