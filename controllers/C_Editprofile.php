
<?php 
if(isset($_POST['submit']) && $_POST['submit'] == "update")
{
  //  `name`, `username`, `password`,
   //      `nationalid`, `addressid`, `gender`, `age`, `email`, `secretword`
    
    $profile['name']          = $_POST['name'];
    $profile['username']      = $_POST['username'];
    $profile['password']      = $_POST['password'];
    $profile['nationalid']    = $_POST['nationalid'];
    $profile['gender']        = $_POST['gender'];
    $profile['age']           = $_POST['age'];
    $profile['email']         = $_POST['email'];
    $profile['secretword']    = $_POST['secretword'];
    
    
    
try
          {
              $id =$_SESSION['id'];
              include './models/DBConnect.php';
              include './models/Update.php';
              $tablename = "users";
              $ProfileUpdate = new Update($profile, $tablename);
              $updateProfile = $ProfileUpdate->editData($id);
              if($updateProfile)
              {
                  echo '<script type="text/javascript">alert("Profile Was Updated Successfully!"); history.back();</script>';
              }
          }
        
     catch (Exception $exc) {
        echo $exc->getMessage();
    }
    
}

else
{
    try {
        $id =$_SESSION['id'];
        include './models/DBConnect.php';
        include './models/Display.php';
        
       $data = new Display("users");  
       
       $displayData = $data->getRecordByID($id);
       
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
    include 'views/V_Editprofile.php';
}

?>