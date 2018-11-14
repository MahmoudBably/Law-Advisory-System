<?php
      
  include './models/DBConnect.php';
if($_POST OR @$_GET['action'])
{
    
      
    if(isset($_POST['submit']) && $_POST['submit'] == "send")
    {
        
        $newData['commtypeid']    = 2;
        $newData['senderid']     = $_SESSION['id'];
        $newData['recieverid']    = 7;
        $newData['content']        = $_POST['content'];
        $tablename = "communication";
        include './models/Add.php';
        $addNew = new Add($newData, $tablename);
        echo '<script type="text/javascript">alert("Feedback Submitted Successfully!");history.back(); </script>';
        
        
        
 
    
    }
}
else
{
  
  include 'views/V_feedback.php';
}
?>