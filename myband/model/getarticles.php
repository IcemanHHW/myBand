<?php

$result_list = array();


$sorttype = 'date';
$order = 'DESC';

$sql = "SELECT * FROM mb_articles
        ORDER BY $sorttype $order";

$result = $mysqli->query($sql);

while($item = $result->fetch_assoc()) {

    $result_list[] = $item;

}
