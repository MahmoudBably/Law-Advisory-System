<!--<h2 class="addlaw"><a href="?page=controllers/C_addCase&action=add"> Add New Case </a></h2>-->

<!--$data['username'] = $data['password'] = $data['email']  =  $data['name'] = $data['age'] =$data['city'] =$data['secret-->

<?php
  require_once './models/DBConnect.php';
  include_once './models/Display.php';

        $tablename2 = "users";
        $DisUsers = new Display($tablename2);
        $CasesDisplay = $DisUsers->getTypeData(1);
        $DisUsers->close();
if($_POST OR @$_GET['action'])
{
    
     //Delete function
    if(isset($_GET['action']) AND $_GET['action']=="delete")
    {
        try {
        //include 'models/DBConnect.php';
        include './models/Delete.php';
        
        $tablename ="casesdata";
        $id = $_GET['id'];
        $LawDelete = new Delete($tablename);
        $LawDelete->deleteRecordByID($id);
        echo '<script type="text/javascript">alert("Deleted Successfully!"); history.back();</script>';
    } catch(Exception $exc)
    {
        echo $exc->getMessage();
    }
        
    }
    
    if (isset($_GET['action']) AND $_GET['action'] == "edit")
     {
         $id = $_GET['id'];
         $tablename = "casesdata";
         
         $editSecDis = new Display($tablename);
         $recSecdata = $editSecDis->getRecordByID($id);
         
         include 'views/V_EditCases.php';
     }
     if (isset($_POST['submit']) && $_POST['submit'] == "Edit")
     {
        $CasesDataedit['time']    = $_POST['time'];
        $CasesDataedit['about']    = $_POST['about'];

     
         try {             
            include './models/Update.php';
            
            $tablename = "casesdata";
            $tablename1 = "casesdatahistory";
            $CaseUpdate = new Update($CasesDataedit, $tablename);
            $addNew1 = new Update($CasesDataedit, $tablename1);
            $updtCase = $CaseUpdate->editData($id);
            $updtCase1 = $addNew1->editData($id);
            
            
            if($updtCase)
            {
                echo '<script type="text/javascript"> alert("Case Updated Successfully!"); history.back();</script>';
            }            
         } catch (Exception $exc) {
             echo $exc->getMessage();
         }
     }

   if(isset($_GET['action']) AND $_GET['action']=="add")
    {
       
        $tablename = "users";
        $DisUsers = new Display($tablename);
        $ClientDisplay1 = $DisUsers->getTypeData(1);
        $DisUsers->close();
       include 'views/V_addCase.php';
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "send")
    {
        $newData['lawyerid']    = $_SESSION['id'];
        $newData['clientid']     = $_POST['clientid'];
        $newData['time']       = $_POST['time'];
        $newData['about']        = $_POST['about'];
        $tablename = "casesdata";
        $tablename1 = "casesdatahistory";
        include './models/Add.php';
        $addNew = new Add($newData, $tablename);
        $addNew1 = new Add($newData, $tablename1);
        $addNew->count("cases");
        
        echo '<script type="text/javascript">alert("Case Submitted Successfully!");history.back(); </script>';
    }   
  
    
}
else
{
  //include 'models/DBConnect.php';
 
  $tablename = "casesdata";
  $displaycasesdata = new Display($tablename);
  $CasesDisplay = $displaycasesdata->LawCase();
  
  include 'views/V_mycases.php';   
}

?>
>

