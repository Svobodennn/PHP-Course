<?php
//PDO IN - NOT IN
//"IN" and "NOT IN" are operators used to check if a query result is inside (IN) or outside (NOT IN) a set of data.
// These operators are particularly useful for comparing a query result to an array of values.
$sql = "SELECT * FROM users WHERE id IN (1,2,3)";
$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}
$sql = "SELECT * FROM users WHERE id NOT IN (1,2,3)";
$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}


//PDO FIND IN SET
//The "FIND_IN_SET" function is used to find a specific value within a string. It is often used when searching for
//a value in a string that contains comma-separated values, especially in a column.
$sql = "SELECT * FROM test WHERE FIND_IN_SET('B', grup)"; $query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}

//PDO BETWEEN
//The "BETWEEN" operator is used to query values within a specific range. It is commonly used for querying numerical
// or date values within a specified range.
$sql = "SELECT * FROM test WHERE id BETWEEN 2 AND 4";
$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}



//PDO JOIN
//INNER JOIN
//"JOIN" operators are used to combine or relate data from different tables. "LEFT JOIN" and "RIGHT JOIN" specify the
// direction (left or right) in which the joining operation continues. These operators are crucial for handling
// relationships and merging data between databases.
$sql = "SELECT page_category, ptc.page_title FROM page INNER JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}
//LEFT JOIN
$sql = "SELECT page_category, ptc.page_title FROM page LEFT JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}

//RIGHT JOIN
$sql = "SELECT page_category, ptc.page_title FROM page RIGHT JOIN page_to_content ptc on page.page_id = ptc.page_id
        WHERE page_type = 'service'";


$query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}


//PDO GROUP
$sql = "SELECT COUNT(id) toplam, soyisim FROM test GROUP BY soyisim"; $query = $db->query($sql);

if ( $query->rowCount() ){
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
}