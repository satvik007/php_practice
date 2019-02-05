<?php
  $DBhost = "localhost";
  $DBuser = "root";
  $DBpass = "password";
  $DBname = "university";
  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
     if ($DBcon->connect_errno) {
        die("ERROR : -> ".$DBcon->connect_error);
     } 
    //  else {
        // $query_result = $DBcon->query("show tables;");
        // while ($row = $query_result->fetch_array()){
        //     echo($row["Tables_in_ctf_iitpkd"]."<br/>");
        // }
    // }
?>