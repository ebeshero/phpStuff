<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>View the documents from a particular year</title>
</head>
<body>
<h1>Select a document to view</h1>
<hr/>
<?php
    require_once("config.php");
    $uri = htmlspecialchars($_GET["uri"]);
    $contents = REST_PATH . "/db/queries/letterText.xql?uri=$uri";
    $result = file_get_contents($contents);
    echo $result;
?>
</body>
</html>
