<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Document View</title>
</head>
<body>
<h1>Document View</h1>
<hr/>
<?php
    require_once("config.php");
    $uri = htmlspecialchars($_POST["uri"]);
    $contents = REST_PATH . "/db/queries/letterText.xql?uri=$uri";
$data = array('type' => 'input', 'target' => $uri);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
    $context = stream_context_create($options);
    $result = file_get_contents($contents, false, $context);
    echo $result;
?>
</body>
</html>
