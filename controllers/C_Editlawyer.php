


<h2 class="addlaw"><a href="?page=controllers/C_Editlawyer&action=add"> Add New Lawyer </a></h2>

<!--$data['username'] = $data['password'] = $data['email']  =  $data['name'] = $data['age'] =$data['city'] =$data['secret-->

<?php
$usernameErr = $emailErr = $passwordErr= $nameErr = $ageErr = $cityErr = $countryErr = $secretwordErr = $telephonenumErr = $natidErr = "";
    $data['username'] = $data['password'] = $data['email']  =  $data['name'] = $data['age']  =$data['secretword'] = $data['nationalid'] = "";
if($_POST OR @$_GET['action'])
{

    if(isset($_GET['action']) AND $_GET['action']=="add")
    {
        include 'views/V_LawyerRegister.php';
    }
    if(isset($_POST['submit']) AND $_POST['submit'] == "Register" )
    {
        
        
        
        $check1               =$_POST['name'];
        $check2               =$_POST['username'];
        $check3               =$_POST['nationalid'];
        $check4               =$_POST['age'];
        $check5               =$_POST['email'];
        
        
        if (preg_match("/^[a-zA-Z ]*$/",$check1)&&preg_match("/^[a-zA-Z]*$/",$check2)&&preg_match("/^[1-9][0-9]{14,14}$/",$check3)&&preg_match("~^(1[89]|[2345]\d|60)$~",$check4)&&preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$check5))
        {
         $data['usertypeid']   = 2;
         $data['position']     = $_POST['position'];
         $data['name']         = test_input($_POST['name']);
         $data['username']     = test_input($_POST['username']);
         $data['password']     = test_input($_POST['password']);
         $data['nationalid']   = test_input($_POST['nationalid']);
         $data['gender']       = $_POST['gender'];
         $data['age']          = test_input($_POST['age']);
         $data['email']        = test_input($_POST['email']);
         $data['secretword']   = test_input($_POST['secretword']);
         
         
         include_once './models/DBConnect.php';
         include './models/Add.php';
          
         $tablename = "users";
         $AddNewClient = new Add($data, $tablename);
         $queryid= "SELECT `id` FROM `users` ORDER BY `id` DESC LIMIT 1";
         $sql2=  mysql_query($queryid);
         $showid;
         while($row = mysql_fetch_assoc($sql2)){
         foreach($row as $cname => $cvalue){
         $showid = $cvalue;
         }
          
         
        }
       
        if($AddNewClient)   { 
                    echo '<script type="text/javascript">alert("Registered Successfully! Lawyer ID IS '.$showid.'"); history.back();</script>';
                    }                  
        
        
        
         
        }
        else
        {
            echo '<script type="text/javascript">alert("Invalid Registeration Form!"); history.back();</script>';
        }
        
  
        }

    
     //Delete function
    if(isset($_GET['action']) AND $_GET['action']=="delete")
    {
        try {
        include './models/DBConnect.php';
        include './models/Delete.php';
        
        $tablename ="users";
        $id = $_GET['id'];
        $LawDelete = new Delete($tablename);
        $LawDelete->deleteRecordByID($id);
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
  $displayLawyer = new Display($tablename);
  $LawyerDataDisplay = $displayLawyer->getTypeData(2);
  
  include 'views/V_Editlawyer.php';   
}
    function test_input($data)
      {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
?>

