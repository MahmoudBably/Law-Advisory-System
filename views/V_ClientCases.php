<!--<div id="contents">
		<div class="clearfix1">
			<table class="table table-hover table-bordered lawyerTable1">
    <tr class="danger">
        <th>Lawyer Name</th>
        <th>Time</th>
        <th>Case Description</th>
     
        
    </tr>
    <?ph
    for($i = 0; $i < count($ClientCasesDisplay); $i++)
    {
        echo "
            <tr>
                <td>{$ClientCasesDisplay[$i]['name']}</td>
                <td>{$ClientCasesDisplay[$i]['time']}</td>
                <td>{$ClientCasesDisplay[$i]['about']}</td>
            </tr>
                
           ";
        }
    ?>
    
</table>
                   
			
                     
		</div>
	</div>

<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					Follow our website for the latest law news  
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> Spaces, Cairo
				</p>
				<p>
					<span>Phone:</span> (+20) 011 2034 67 98
				</p>
				<p>
					<span>Email:</span> lAvocate@hotmail.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					Send us a message and we will reply as quick as possible.
				</p>
				
			</div>
		</div>
		
	</div>

-->


<!DOCTYPE>

<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | Appointments</title>
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
       
                
            <section class="container con-color">
                <br /><div class="heading col-md-12 section-head">
                    <h3 style="text-align:left;">CASES</h3><hr />
                </div><br /><br />
                
                <div class="col-sm-12 case-form modal-body">
                    
                    <ul>
                        <div class="col-sm-4">
                            <li>LAWYER NAME</li>
                        </div>
                        <div class="col-sm-4">
                            <li>DATE</li>
                        </div>    
                        <div>
                            <li class="app-style">CASE DESCRIPTION</li>
                         </div>
                    </ul>

                </div>
                
                <div class="col-sm-12 case-form modal-body">
                        <?php
                            for($i = 0; $i < count($ClientCasesDisplay); $i++)
                            {
                                echo "
                                    <ul>
                                        <div class='col-sm-4'>{$ClientCasesDisplay[$i]['name']} </div>
                                        <div class='col-sm-4'>{$ClientCasesDisplay[$i]['time']} </div>
                                        <div class='col-sm-4'>{$ClientCasesDisplay[$i]['about']} </div>
                                    </ul>

                                   ";
                                }
                            ?>
<!--                    <ul>
                        <div class='col-sm-4'>
                             Put PHP code here that displays LAWYER NAME  
                        </div>
                        <div class='col-sm-4'>
                             Put PHP code here that displays Date  
                        </div>    
                        <div class='col-sm-4'>
                             Put PHP code here that displays CASE DESCRIPTION  
                         </div>   
                    </ul>-->

                </div>
            </section><hr />
                
            <footer class="row footer navbar-fixed-bottom">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>

</html>