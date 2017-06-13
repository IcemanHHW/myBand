<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");

    define('DB_HOST','localhost');
    define('DB_NAME','myband');
    define('DB_USERNAME','22617');
    define('DB_PASSWORD','cnibcu');

    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>RSS Feed MY Band</title>';
    $rssfeed .= '<link>http://ma.kampmeijer.nl/myband/</link>';
    $rssfeed .= '<p>RSS Feed from MY Band</description>';
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
        $rssfeed .= '<title>' . $title . '</title><br />';
        $rssfeed .= '<description>' . $content . '</description><br />';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate><br />';
        $rssfeed .= '</item>';
    }

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
