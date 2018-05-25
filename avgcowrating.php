<?php

if (!$link = mysql_connect('localhost', 'eatrev', 'youthrocker')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('EatRev', $link)) {
    echo 'Could not select database';
    exit;
}

$sql    = 'SELECT AVG(rate) FROM cowrating';
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo round($row['AVG(rate)'],1);
}

mysql_free_result($result);

?>
