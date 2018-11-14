<?php
  include 'models/DBConnect.php';
  include 'models/Display.php';
  $tablename = "appointmentshistory";
  $displaycasesdata = new Display($tablename);
  $AppointmentDisplay = $displaycasesdata->getAllData();
  
  include 'views/V_AppointmentHistory.php';
  
?>
