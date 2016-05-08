<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>View the documents from a particular year</title>
</head>
<body>
<h1>Select a document to view</h1>
<hr/>
<ul>
<?php
    require_once("config.php");
    $year = htmlspecialchars($_GET["year"]);
    $contents = REST_PATH . "/db/queries/letterList.xql?year=$year";
    $result = file_get_contents($contents);
    echo $result;
?>
</ul>
</body>
</html>
