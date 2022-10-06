<?php
require_once "vendor/autoload.php";

use ProtoTypeDesignPattern\Prototype;
use ProtoTypeDesignPattern\Author;


function clientCode()
{
    $author      = new Author("Aaira");
    $prototype   = new Prototype("Title", "body text here.", $author);
    // $prototype->addUserComment("nice work ");

    $draft = clone $prototype;
    echo "Dump of the clone.\n\n";
    print_r($draft);
}

clientCode();
?>