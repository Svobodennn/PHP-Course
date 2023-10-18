<?php


// * XML (Extensible Markup Language)
//is a markup language similar to HTML.
//Data is stored hierarchically between tags.
//XML data can be contained within files with the .xml extension.

header("Content-type: text/xml;");

$xml = new SimpleXMLElement('<people><>');
$person = $xml->addChild('person');
$person->addChild('name', 'Melih');
$person->addChild('surname', 'Sarac');
$person->addChild('age', 22);

echo $xml->asXML();

//$people = simplexml_load_file('02-xml.xml');
//echo "<pre>";
//print_r($people);


// getting database data
require '../08-PDO/01-pdo-mysqli-connection.php';
$sql = "Select * from users";
$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user):
    $person = $xml->addChild('person');
    $person->addChild('name', $user['name']);
    $person->addChild('mail', $user['mail']);
    $person->addChild('age', $user['age']);
endforeach;
echo $xml->asXML();
