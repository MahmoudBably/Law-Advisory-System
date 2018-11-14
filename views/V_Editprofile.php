<!DOCTYPE>

<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | Edit Profile</title>
        <link rel="stylesheet" type="text/css" href="resources/css/homePAGE.css">
        <link rel="icon" href="resources/images/ICon.jpg">
        
        <script type="text/javascript" src="resources/js/jquery-3.1.0.js"></script>
        <script src="resources/js/JColor.js"></script>
        <script src="resources/js/jMouse.js"></script>
        <script type="text/javascript" src="resources/js/Go%20top.js"></script>
        
<!--         ************************* Bootstrap Links ************************* -->
        
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="resources/js/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        
        <script type="text/javascript" src="resources/js/bootstrap-3.3.7-dist/js/npm.js"></script>
        <script type="text/javascript" src="resources/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
    </head>

    <body>      
        
        <div class="container-fluid">
          
            <section class="container con-color">
                <br /><div class="heading col-md-12 section-head">
                    <h3 style="text-align:left;">EDIT PROFILE</h3><hr />
                </div><br /><br />
                
                <div class="col-sm-4">
                    <div class="info">
                        <h3 class="heading head" style="text-align:left;">CONTACT INFO.</h3><hr />

                        Phone1: (+20) 011 1090 47 62<br />
                        Phone2: (+20) 011 2034 67 98<br />

                        Phone3: (+20) 011 2702 00 79<br />
                        Phone4: (+20) 012 3659 46 55<br />
                        Fax: (+20) 000 252 564<br />

                        Email: lAvocate@hotmail.com
                    </div>
                </div>
                
                <div class="col-sm-1"></div>
                
                <div class="col-sm-7 case-form modal-body">
                    <form action="" method="post"> 
                    <input class="input-style form-control" type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
                    <input required="required" name="name" class="input-style form-control" type="text" placeholder="Real Name:[Letters Only]" value="<?php echo $displayData['name'];?>" ><br />
                    <input required="required" name="username" class="input-style form-control" type="text" placeholder="Username:[Letters Only]" value="<?php echo $displayData['username'];?>" ><br />
                    <input required="required" name="password" class="input-style form-control" type="text" placeholder="Password" value="<?php echo $displayData['password'];?>"><br />
                    <input required="required" name="nationalid" class="input-style form-control" type="text" placeholder="National ID:[15 Digits]" value="<?php echo $displayData['nationalid'];?>"><br />
                  
                    <label style="font-size: 20px;color:black;margin-left: 10px;">Choose Gender:</label>
                    <select style="margin-left: 13px;width: 120px;font-size:20px;color:black;" name="gender">
                        <option style="font-size:15px;color:black;" value="male">Male</option>
                        <option style="font-size:15px;color:black;" value="female">Female</option>
                    </select><br /><br />
                    
                    <input required="required" name="age" class="input-style form-control" type="number" placeholder="Age:[18->60]" value="<?php echo $displayData['age'];?>"><br />
                    <input required="required" name="email" class="input-style form-control" type="email" placeholder="Email" value="<?php echo $displayData['email'];?>" ><br />
                    <input required="required" name="secretword" class="input-style form-control" type="text" placeholder="Secret Word" value="<?php echo $displayData['secretword'];?>"><br />
                    
                    <button value="update" class="btn btn-primary">UPDATE</button>
                   </form>

                </div>
            </section><hr />
                
            <footer class="row footer navbar-fixed-bottom">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>

</html>