<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");

    require_once ('../admin/config.php');

    $rssfeed .= '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>RSS Feed MY Band</title>';
    $rssfeed .= '<link>http://ma.kampmeijer.nl/myband/</link>';
    $rssfeed .= '<description>RSS Feed from MY Band</description>';
    $rssfeed .= '<language>en-us</language>';

    $dbc = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
    if (mysqli_connect_error()) {
        echo "MySQL fout: " . mysqli_connect_error();
    }

    $query = "SELECT * FROM mb_articles ORDER BY date DESC";
    $result = mysqli_query($dbc, $query);

    while($row = mysqli_fetch_array($result)) {
        extract($row);

        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $row['title'] . '</title>';
        $rssfeed .= '<description>'  . $row['content'] . '</description>';
        $rssfeed .= '<pubDate>' . $row['date'] . '</pubDate>';
        $rssfeed .= '</item>';
    }

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
