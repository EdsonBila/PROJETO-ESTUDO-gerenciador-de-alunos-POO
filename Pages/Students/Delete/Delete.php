<?php
include("../../../Classes/DataBase.php");

$id = $_GET["id"];

    $edit = new database();
    $edit->delete($id);

header("Location: ../../Index/index.php");
?>


