<?php
      require_once './models/DBConnect.php';
      include_once './models/Display.php';

        $tablename2 = "users";
        $position1 = "marriage";
        $DisUsers = new Display($tablename2);
        $UsersDisplay = $DisUsers->geAppData($position1);
        $DisUsers->close();
if($_POST OR @$_GET['action'])
{
      
    if(isset($_GET['action']) AND $_GET['action']=="add")
    {
       include 'views/V_contact1.php';
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "send")
    {
       
        $newData['clientid']    = $_SESSION['id'];
        $newData['lawyerid']     = $_POST['lawyerid'];
        $newData['time']       = $_POST['time'];
        $newData['about']        = $_POST['about'];
        $tablename = "appointments";
        $tablename1 = "appointmentshistory";
        include './models/Add.php';
        $addNew = new Add($newData, $tablename);
        $addNew1 = new Add($newData, $tablename1);
        $addNew->count("appointments");
        echo '<script type="text/javascript">alert("Appointment Submitted Successfully!");history.back(); </script>';
        
    
    }
}
else
{
  
  include 'views/V_contact1.php';
}
?>