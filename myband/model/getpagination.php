<?php

// AANTAL ITEMS PER PAGINA
$results_per_page = 2;

// AANTAL PAGINA'S BEREKEN
$query = "SELECT * FROM mb_articles";
$result = mysqli_query($mysqli,$query) or die ('Error querying');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

//PAGINA CHECKEN MET TERNARY OPERATOR
!isset($_GET['page']) ? $page = 1 : $page = $_GET['page'];

// EERSTE ITEM VAN QUERY BEPALEN
$limit_starting_number = ($page - 1) * $results_per_page;
