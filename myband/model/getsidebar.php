<?php

$result_list2 = array();


$sql = "SELECT * FROM mb_sidebar";

$result2 = $mysqli->query($sql);

while($item2 = $result2->fetch_assoc()) {

    $result_list2[] = $item2;

}
