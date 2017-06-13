
<?php

$result_list3 = array();


$sorttype = 'date';
$order = 'ASC';

$sql = "SELECT * FROM mb_agenda
        ORDER BY $sorttype $order";

$result3 = $mysqli->query($sql);

while($item3= $result3->fetch_assoc()) {

    $result_list3[] = $item3;

}