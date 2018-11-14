
<html>
   
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>Bikey - Offical Website | Home</title>
        <link rel="stylesheet" href="resources/css/homePAGE.css" type="text/css">
        <link rel="icon" href="resources/images/ICon.jpg">
        
        <script type="text/javascript" src="resources/js/jquery-3.1.0.js"></script>
        <script src="resources/js/JColor.js"></script>
        <script src="resources/js/jMouse.js"></script>
        <script type="text/javascript" src="resources/js/Go%20top.js"></script>
        
        <!-- ************************* Bootstrap Links ************************* -->
        
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        
        <script type="text/javascript" src="resources/js/bootstrap-3.3.7-dist/js/npm.js"></script>
        <script type="text/javascript" src="resources/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
    </head>
    <body>
         <div class="container-fluid">
            <nav class="n-color navbar navbar-toggleable-md navbar-fixed-top navbar-light bg-faded">
                <a class="navbar-brand" href="views/V_Home.php"><b class="slogan-position">L'AVOCATE <b class="name">LAWYER FIRM</b></a>
            </nav>
        <?php
     
        
         $usernameErr = $emailErr = $passwordErr= $nameErr = $ageErr = $cityErr = $countryErr = $secretwordErr = $telephonenumErr = $natidErr = "";
    $data['username'] = $data['password'] = $data['email']  =  $data['name'] = $data['age']  =$data['secretword'] = $data['nationalid'] = "";
    require_once './models/DBConnect.php';
      include './models/Display.php';
      
      $tablename2 = "usertypes";
     $DisTypes = new Display($tablename2);
     $typeid1 = $DisTypes->LastTypeID();
     for ($i = 0; $i < count($typeid1); $i++)
                        {
                            
                            $userid = $typeid1[$i]['id'];
                            
                        }
      
     $TypeDisplay = $DisTypes->UserTypes(1);
     $DisTypes->close();
         
    if($_POST)
{
    // Login
    if(isset($_POST['submit']) AND $_POST['submit'] == "Login" )
    {   
        
        
        $id  = $_POST['id'];
        $password  = $_POST['password'];
        
        try
        {   
            include './models/Login.php';
             

               $count1 ="l_clients";
             
            $login = new Login($id ,$password);
           
            $userdata = $login->getData();
            $login->close();
            for ($i = 0; $i < count($userdata); $i++)
                        {
                            
                            $ap = $userdata[$i]['usertypeid'];
                            
                        }
        if($login == TRUE)
            {
              session_start();
              $_SESSION['id'] = $id;
              
              if($ap == 1)
              {
              header('Location:index.php');
          
              }
              elseif($ap == 2)
              {
                   
                   header('Location:lawyerindex.php');
              }
              else if($ap == 3)
              { 
                   
                  header('Location:adminindex.php');
              }
            
              
             
            }
        }
        catch (Exception $exc)
        {
            echo '<script type="text/javascript">alert("ID or Password is Incorrect!"); history.back();</script>';
        }
        
    }
    // Register
    //`id`, `name`, `username`, `password`, `email`
    
         
    if(isset($_POST['submit']) AND $_POST['submit'] == "Register" )
    {
        //`id`, `usertypeid`, `name`, `username`, `password`,
        // `nationalid`, `addressid`, `gender`, `age`, `email`, `secretword`
        $check1               =$_POST['name'];
        $check2               =$_POST['username'];
        $check3               =$_POST['nationalid'];
        $check4               =$_POST['age'];
        $check5               =$_POST['email'];
        
        
        if (preg_match("/^[a-zA-Z ]*$/",$check1)&&preg_match("/^[a-z\d_]{2,20}$/i",$check2)&&preg_match("/^[1-9][0-9]{14,14}$/",$check3)&&preg_match("~^(1[89]|[2345]\d|60)$~",$check4)&&preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$check5))
        {
         include_once './models/DBConnect.php';
         include './models/Add.php';
         
         
         $data['usertypeid']   = 1;
         $data['name']         = $_POST['name'];
         $data['username']     = $_POST['username'];
         $data['password']     = $_POST['password'];
         $data['nationalid']   = $_POST['nationalid'];
         $data['gender']       = $_POST['gender'];
         $data['age']          = $_POST['age'];
         $data['email']        = $_POST['email'];
         $data['secretword']   = $_POST['secretword'];
         
        
          
         $tablename = "users";
         $AddNewClient = new Add($data, $tablename);
         $AddNewClient->count("r_users");
         
        
                     
         $queryid= "SELECT `id` FROM `users` ORDER BY `id` DESC LIMIT 1";
         $sql2=  mysql_query($queryid);
         $showid;
         while($row = mysql_fetch_assoc($sql2)){
         foreach($row as $cname => $cvalue){
         $showid = $cvalue;
         }
          
         
        }
       
        if($AddNewClient)   { 
                    echo '<script type="text/javascript">alert("Registered Successfully! Your ID IS '.$showid.'"); history.back();</script>';
                    }                  
        
        
        }
        else
        {
            echo '<script type="text/javascript">alert("Invalid Registeration Form!"); history.back();</script>';
        }

}
}


?>
       
         <div class="row main-style">
                <br /><div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="modal-header">
                        <h2 class="modal-title">SIGN UP</h2>
                    </div>
                    <form action="C_LoginController.php" method="post">
                    <div class="modal-body">
                        <br /><input required="required" name="name" style="background-color: transparent; color:white;" class="input-style form-control" type="text" placeholder="Full Name" value="<?php echo $data['name'];?>"><br />
                        <input required="required" name="username" style="background-color: transparent; color:white;" class="input-style form-control" type="text" placeholder="Username" value="<?php echo $data['username'];?>"><br />
                        <input required="required" name="password" style="background-color: transparent; color:white;" class="input-style form-control" type="password" placeholder="Password" value=""><br />
                        <input required="required" name="nationalid" style="background-color: transparent; color:white;" class="input-style form-control" type="text" placeholder="National ID:[15 Digits]" value="<?php echo $data['nationalid'];?>"><br />
                        <select class="form-control input-style" style="background-color: transparent; color: #aac7cd;" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br />
                        <input required="required" name="age" style="background-color: transparent; color:white;" class="input-style form-control" type="text" placeholder="Age:[18->60]" value="<?php echo $data['age'];?>"><br />
                        <input required="required" name="email" style="background-color: transparent; color:white;" class="input-style form-control" type="email" placeholder="Email" value="<?php echo $data['email'];?>"><br />
                        <input required="required" name="secretword" style="background-color: transparent; color:white;" class="input-style form-control" type="text" placeholder="Secret Word" value=""><br />
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-success" type="submit"  name="submit" value="Register">
                    </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="modal-header">
                        <h2 class="modal-title">LOG IN</h2>
                    </div>
                    <form action="C_LoginController.php" method="post">
                    <div class="modal-body" style="background-color: transparent;">
                        <br /><input required="required" name="id"  style="background-color: transparent; color:white;" class="input-style form-control" type="number" placeholder="ID" /><br />
                        <input required="required"  name="password" style="background-color: transparent; color:white;" class="input-style form-control" type="password" placeholder="Password" /><br />

                    </div>
                    <div class="modal-footer" >
                        <input class="btn btn-primary" type="submit"  name="submit" value="Login">
                    </div>
                    </form>
                </div>
            </div>
             <footer class="row footer">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>
   
</html>
