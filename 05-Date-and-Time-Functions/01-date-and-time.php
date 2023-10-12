<?php
/*
 * Date and Time Functions



  * date();
date($format,$timestamp)
Formats the local date/time.

  * getdate();
Retrieves date/time information.

  * time();
Returns the time elapsed in seconds since the Unix Epoch
(January 1, 1970 00:00:00 GMT).
*/

# ***   SET TIMEZONE    ***
$format = 'd-m-Y H:i:s';
date_default_timezone_set('Europe/Istanbul'); 
echo date($format);
echo "<hr>";

# ***   DATE FUNCTION   ***
$format = "j";
echo date($format); // day
echo date('n'); // month
echo date ('y'); // year
echo "<hr>";

$format = "l F z";
echo date($format); // day name, month name and day of the year
echo "<hr>";

function _date($date){
    $date_en = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    $date_tr = [
        'Ocak',
        'Şubat',
        'Mart',
        'Nisan',
        'Mayıs',
        'Haziran',
        'Temmuz',
        'Ağustos',
        'Eylül',
        'Ekim',
        'Kasım',
        'Aralık'
    ];
    
    return str_replace($date_en,$date_tr,$date);
}

//turkish version
echo _date(date($format));
echo "<hr>";

# ***   TIME FUNCTION   ***
echo time(); echo "<br>";
echo strtotime('+1 hours'); echo "<br>";

$unix = strtotime('+3 month +5 days');
echo date("d-m-Y H:i:s",$unix);
echo "<hr>";

# ***   DATE TO UNIX   ***
$unix = strtotime('17-01-2024 11:16:40');
$unix = strtotime('-5 month', $unix);
echo $unix; echo "<br>";
echo date('d-m-Y H:i:s',$unix);
echo "<hr>";

# ***   DATETIME   ***
$dateTime = new DateTime('+1 month');
echo $dateTime->format('d-m-Y H:i:s');




