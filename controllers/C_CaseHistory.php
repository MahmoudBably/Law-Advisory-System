<?php
  include 'models/DBConnect.php';
  include 'models/Display.php';
  $tablename = "casesdatahistory";
  $displaycasesdata = new Display($tablename);
  $HistoryDisplay = $displaycasesdata->getAllData();
  
  include 'views/V_CaseHistory.php';
  
?>