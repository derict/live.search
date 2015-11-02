<?php
    $key=$_GET['key'];
    $col=$_GET['col'];
    $array = array();
    $con=mysql_connect("localhost","root","root");
    $db=mysql_select_db("library",$con);
    $query=mysql_query("select * from $col where name LIKE '%{$key}%'");
	//echo $query;
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['name'];
    }
    echo json_encode($array);
?>
