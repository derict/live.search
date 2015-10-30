<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","root");
    $db=mysql_select_db("library",$con);
    $query=mysql_query("select * from actress where name LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query)){
      $array[] = $row['name'];
    }
    echo json_encode($array);
?>
