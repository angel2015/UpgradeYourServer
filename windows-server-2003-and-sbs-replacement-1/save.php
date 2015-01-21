
<?php

$renderer = $_GET['renderer'] ?  $_GET['renderer'] : $_POST['renderer'];

$html = new DOMDocument(); 
$html->loadHTMLFile('shawnedit.html'); 
$html->getElementById($_POST['id'])->nodeValue = $_POST['value'];
$html->saveHTMLFile("shawnedit.html");

print $_POST['value'];
