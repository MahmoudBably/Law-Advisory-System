<?php

if($_POST OR @$_GET['action'])
{

    
    if (isset($_GET['action']) AND $_GET['action'] == "edit")
     {
         $id = $_GET['id'];
         $tablename = "appointments";
         include 'models/DBConnect.php';
         include 'models/Display.php';
         $editSecDis = new Display($tablename);
         $recSecdata = $editSecDis->getRecordByID($id);
         
         include 'views/V_EditRescheduling.php';
     }
     if (isset($_POST['submit']) && $_POST['submit'] == "Edit")
     {
        $AppDataedit['time']    = $_POST['time'];
         include './models/Update.php';
            
            $tablename = "appointments";
            $tablename1 = "appointmentshistory";
            $AppUpdate = new Update($AppDataedit, $tablename);
            $addNew1 = new Update($AppDataedit, $tablename1);
            $updtApp = $AppUpdate->editData($id);
            $updtApp1 = $addNew1->editData($id);
            
            
            if($updtApp)
            {
                echo '<script type="text/javascript"> alert("The Appointment Date was updated !"); history.back();</script>';
            }          
     } 
       
              
}
    




else
{
  
  include 'models/DBConnect.php';
  include 'models/Display.php';
  $tablename = "appointments";
  $client = "clientid";
  $lawyer = "lawyerid";
  $DisplayApp = new Display($tablename);
  $UserAppDisplay = $DisplayApp->LawApp($lawyer,$client);
  
  include 'views/V_Rescheduling.php';   
}


?>