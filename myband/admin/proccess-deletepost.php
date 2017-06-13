<?php

require_once ('config.php');
$dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_error()) {
    echo "MySQL fout: " . mysqli_connect_error();
}

$id = $_GET['id'];

$query = "DELETE FROM mb_articles WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die('Error querying.');

mysqli_close($dbc);
header('location: posts.php?message=verwijderd');