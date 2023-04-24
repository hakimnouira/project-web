<?php
include '../Controller/eventC.php';
$eventC = new eventC();

$eventC->deleteEvent( $_GET["id_event"]);
    header('Location:listevent.php');
