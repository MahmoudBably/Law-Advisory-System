<?php
  include 'models/DBConnect.php';
  include 'models/Display.php';
  $tablename1 = "report";
  $displayReport = new Display($tablename1);
  $ReportDisplay = $displayReport->getAllData();
  
  include 'views/V_Report.php';
  
?>