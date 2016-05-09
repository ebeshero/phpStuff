<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Read a document</title>
</head>
<body>
<h1>Choose a document to read from the list below</h1>
<hr/>
<ul>
<?php
    require_once("config.php");
    $year = htmlspecialchars($_GET["year"]);
//ebb: when I change this to $_POST, I generate an HTML page with the h1 element, but no PHP generated output.
    $url = REST_PATH . "/db/queries/postLetterList.xql?year=$year";
$data = array('type' => 'input', 'target' => $year);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    echo $result;
?>
</ul>
</body>
</html>
