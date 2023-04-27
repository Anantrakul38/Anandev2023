<?php  
    error_reporting(0);
    $condb = mysqli_connect("localhost","root","anan090738","")
    or die("Error :" . mysqli_error($condb));

    mysqli_query($condb, "SET NAME UTF8");
    date_default_timezone_set('Asia/Bangkok');

    error_reporting(error_reporting() & ~E_NOTICE);
    
/*     if($condb) {
        echo "Connected";
    } else {
        echo "No Connected";
    } */

?>