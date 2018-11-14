<?php

 require_once './models/DBConnect.php';
  include_once './models/Display.php';
  $tablename = "casesdata";
  $ClientCases = new Display($tablename);
  $ClientCasesDisplay = $ClientCases->ClientCase();
  
  include 'views/V_ClientCases.php';  
?>
