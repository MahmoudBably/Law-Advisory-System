

<!--$data['username'] = $data['password'] = $data['email']  =  $data['name'] = $data['age'] =$data['city'] =$data['secret-->

<?php
$usernameErr = $emailErr = $passwordErr= $nameErr = $ageErr = $cityErr = $countryErr = $secretwordErr = $telephonenumErr = $natidErr = "";
    $data['username'] = $data['password'] = $data['email']  =  $data['name'] = $data['age']  =$data['secretword'] = $data['nationalid'] = "";
if($_POST OR @$_GET['action'])
{

    
     //Delete function
    if(isset($_GET['action']) AND $_GET['action']=="delete")
    {
        try {
        include './models/DBConnect.php';
        include './models/Delete.php';
        
        $tablename ="users";
        $id = $_GET['id'];
        $ClientDelete = new Delete($tablename);
        $ClientDelete->deleteRecordByID($id);
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
  $tablename = "users";
  $displayClient = new Display($tablename);
  $ClientDataDisplay = $displayClient->getTypeData(1);
  
  include 'views/V_Editclient.php';   
}

?>

