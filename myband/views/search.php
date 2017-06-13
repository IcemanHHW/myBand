<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../styles/style.css"/>
</head>
<body>
<header>
    <h1 id="headertekst">MY Band</h1>
    <img id="headerimage" src="../img/logo.png" alt="logo" />
</header>
<nav>
    <ul>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=agenda">Agenda</a></li>
        <li><a href="?page=contact">Contact</a></li>
        <li><a href="?page=legal">Legal</a></li>
        <li>
            <form action="search.php" method="GET">
                <input type="text" name="query" id="searchterm" placeholder="searchterm" />
                <input type="submit" value="Search" id="submit" />
            </form>
        </li>
    </ul>
</nav>

<div id="wrapper">
    <div id="content">
        <h1>Search Results</h1>
<?php

include '../include/config.php';
$dbc = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
if($dbc->errno) {
    echo 'Error : ' . $dbc->connect_error();
}

$sorttype = 'date';
$order = 'DESC';

if (isset($_POST['submit_search'])){
    $searchterm = mysqli_real_escape_string($dbc,trim($_POST['searchterm']));
    $searchterm = '%' . $searchterm . '%';
}else{
    $searchterm = '%';
}
$query = "SELECT * FROM mb_articles 
                  WHERE title LIKE '$searchterm'
                  ORDER BY $sorttype $order";
$result = mysqli_query($dbc, $query);

while ($row = mysqli_fetch_array($result)) {
    $title = $row['title'];
    $date = $row['date'];
    $headline = $row['headline'];
    $content = $row['content'];
    $image = $row['image'];
    $alt = $row['alt'];
    echo '<h3>' . $title . '</h3>';
    echo '<p>' . $date . '</p>';
    echo '<p><b>' . $headline . '</b></p>';
    echo '<content>' . $content . '</content><br>';
    echo '<img  src="' . $image . '" alt="' . $alt . '"/><br>';
}
mysqli_close($dbc);
?>
    </div>
</div>
<footer>
    <p>
        MY Band <br /> Powered by IcemanHHW
    </p>
</footer>
</body>
</html>