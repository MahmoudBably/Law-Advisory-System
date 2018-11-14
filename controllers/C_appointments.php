<?php
if($_POST OR @$_GET['action'])
{
    //Edit Function
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
    //Delete function
    if(isset($_GET['action']) AND $_GET['action']=="delete")
    {
        try {
        include 'models/DBConnect.php';
        include 'models/Delete.php';
        
        $tablename ="appointments";
        $id = $_GET['id'];
        $CaseDelete = new Delete($tablename);
        $CaseDelete->deleteRecordByID($id);
        echo '<script type="text/javascript">alert("Deleted Successfully!"); history.back();</script>';
    } catch(Exception $exc)
    {
        echo $exc->getMessage();
    }
        
    }

}
else
{
  
  include 'models/DBConnect.php';
  include 'models/Display.php';
  $tablename = "appointments";
  $lawyername= "lawyerid";
  $clientname=  "clientid";
  $DisplayApp = new Display($tablename);
  $AppDisplay = $DisplayApp->LawApp($clientname,$lawyername);
  
  include 'views/V_appointments.php';   
}

?>