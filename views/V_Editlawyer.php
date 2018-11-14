<!--<div id="contents">
		<div class="clearfix1">
			<table class="table table-hover table-bordered lawyerTable">
    <tr class="danger">
        <th>id</th>
        <th>User Type</th>
        <th>Position</th>
        <th>Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>National ID</th>
        <th>Address id</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Email</th>
        <th>Secret Word</th>
        <th>Delete</th>
    </tr>
    <?ph
    for($i = 0; $i < count($LawyerDataDisplay); $i++)
     {
        echo "
            <tr>
                <td>{$LawyerDataDisplay[$i]['id']}</td>
                <td>{$LawyerDataDisplay[$i]['usertypeid']}</td>
                <td>{$LawyerDataDisplay[$i]['position']}</td>
                <td>{$LawyerDataDisplay[$i]['name']}</td>
                <td>{$LawyerDataDisplay[$i]['username']}</td>
                <td>{$LawyerDataDisplay[$i]['password']}</td>
                <td>{$LawyerDataDisplay[$i]['nationalid']}</td>
                <td>{$LawyerDataDisplay[$i]['addressid']}</td>
                <td>{$LawyerDataDisplay[$i]['gender']}</td>
                <td>{$LawyerDataDisplay[$i]['age']}</td>
                <td>{$LawyerDataDisplay[$i]['email']}</td>
                <td>{$LawyerDataDisplay[$i]['secretword']}</td>
                <td>
                    <a href='?page=controllers/C_Editlawyer&action=delete&id={$LawyerDataDisplay[$i]['id']}'><img src='resources/images/Delete.png'>
              
                </td>
            </tr>
                
           ";
        }
    ?>
    
</table>
                   
			
                     
		</div>
	</div>-->


<!DOCTYPE>

<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | Edit Lawyers</title>
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
                    <h3 style="text-align:left;">EDIT LAWYERS</h3><hr />
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
                            <li>TYPE</li>
                        </div>  
                        <div class="col-sm-1">    
                            <li>POSITION</li>
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
                            for($i = 0; $i < count($LawyerDataDisplay); $i++)
                             {
                                echo "
                                     <ul>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['id']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['usertypeid']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['position']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['name']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['username']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['password']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['nationalid']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['addressid']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['gender']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['age']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['email']} </div>
                                        <div class='col-sm-1'>{$LawyerDataDisplay[$i]['secretword']} </div>
                                       <div class='col-sm-1'>
                                            <a href='?page=controllers/C_Editlawyer&action=delete&id={$LawyerDataDisplay[$i]['id']}'><img class='glyphicon glyphicon-trash' src='resources/images/Delete.png'>

                                         </div>
                                    </ul>

                                   ";
                                }
                    ?>
<!--                    <ul>
                        <div class='col-sm-1'>
                            <li> Put PHP code here that displays ID  </li>
                        </div>
                        <div class="col-sm-1">
                            <li> Put PHP code here that displays NAME  </li>
                        </div>    
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays USERNAME  </li>
                        </div>    
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays TYPE  </li>
                        </div>    
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays POSITION  </li>
                        </div> 
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays NATIONAL ID  </li>
                        </div>    
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays ADDRESS ID  </li>
                        </div>    
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays AGE  </li>
                         </div>   
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays EMAIL  </li>
                         </div>   
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays GENDER  </li>
                         </div>   
                        <div class="col-sm-1">    
                            <li> Put PHP code here that displays SECRET WORD  </li>
                        </div>    
                        <div class="col-sm-1">    
                            <li><a href="#"><span class="glyphicon glyphicon-trash"></span></a></li>
                        </div>
                    </ul>-->
                </div>
                <!-- *********************** The End of the DIV ***********************  -->
                
            </section><hr />
                
            <footer class="row footer navbar-fixed-bottom">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>

</html>

