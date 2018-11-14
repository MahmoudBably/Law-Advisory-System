<?php
if($_POST OR @$_GET['action'])
{
       
    //Delete function
    if(isset($_GET['action']) AND $_GET['action']=="delete")
    {
        try {
        include 'models/DBConnect.php';
        include 'models/Delete.php';
        
        $tablename ="casesdata";
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
  $tablename = "casesdata";
  $DisplayCases = new Display($tablename);
  $CasesDisplay = $DisplayCases->getCases();
  
  include 'views/V_mycases.php';   
}

?>
