

<!DOCTYPE>

<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | Edit Clients</title>
        <link rel="stylesheet" type="text/css" href="resources/css/homePAGE.css">
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
          
                
            <section class="">
                <br /><div class="heading col-md-12 section-head">
                    <h3 style="text-align:left;">EDIT CLIENTS</h3><hr />
                </div><br /><br />
                
                <div class="col-sm-12 case-form modal-body">
                    
                    <ul>
                        <div class="col-sm-1">
                            <li>ID</li>
                        </div>
                        <div class="col-sm-1">
                            <li>NAME</li>
                        </div>    
                        <div class="col-sm-1">    
                            <li>USERNAME</li>
                        </div>    
                        <div class="col-sm-1">    
                            <li>PASSWORD</li>
                        </div>    
                        <div class="col-sm-1">    
                            <li>NATIONAL ID</li>
                        </div>    
                        <div class="col-sm-1">    
                            <li>ADDRESS ID</li>
                        </div>    
                        <div class="col-sm-1">    
                            <li>AGE</li>
                         </div>   
                        <div class="col-sm-1">    
                            <li>EMAIL</li>
                         </div>   
                        <div class="col-sm-1">    
                            <li>GENDER</li>
                         </div>   
                        <div class="col-sm-1">    
                            <li>SECRET WORD</li>
                        </div>    
                        <div class="col-sm-1">    
                            <li>ACTION</li>
                        </div>
                    </ul>
                </div>
                
                <!-- The next DIV you will put it inside PHP code  -->
                
                <div class="col-sm-12 case-form modal-body">
                       <?php
                            for($i = 0; $i < count($ClientDataDisplay); $i++)
                             {
                                echo "
                                    <ul>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['id']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['name']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['username']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['password']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['nationalid']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['addressid']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['gender']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['age']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['email']}</div>
                                        <div class='col-sm-1'>{$ClientDataDisplay[$i]['secretword']}</div>
                                        <div class='col-sm-1'>   
                                         <li><a href='?page=controllers/C_Editclient&action=delete&id={$ClientDataDisplay[$i]['id']}'><img class='glyphicon glyphicon-trash' src='resources/images/Delete.png'></li>
                                         </div>>
                                    </ul>

                                   ";
                                }
                        ?>
    
                </div>
                <!-- *********************** The End of the DIV ***********************  -->
                
            </section><hr />
                
            <footer class="row footer navbar-fixed-bottom">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>

</html>