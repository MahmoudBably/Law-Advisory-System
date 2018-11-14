<!DOCTYPE>

<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | Reports</title>
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
          
            <section class="con-color">
                <br /><div class="heading col-md-12 section-head">
                    <h3 style="text-align:left;">REPORTS</h3><hr />
                </div><br /><br />
                
                <div class="col-sm-12 case-form modal-body">
                    
                    <ul>
                        <div class="col-sm-3">
                            <li>REGISTERED USERS</li>
                        </div>
                        <div class="col-sm-3">
                            <li>LOG IN NO.</li>
                        </div>    
                        <div class="col-sm-3">
                            <li>CASES ADDED</li>
                        </div>
                        <div class="col-sm-3">
                            <li>APPOINTMENTS ADDED</li>
                        </div>
                    </ul>

                </div>
                
                <div class="col-sm-12 case-form modal-body">
                     <?php
                        for($i = 0; $i < count($ReportDisplay); $i++)
                         {
                            echo "
                                 <ul>
                                    <div class='col-sm-3'>{$ReportDisplay[$i]['r_users']}</div>
                                    <div class='col-sm-3'>{$ReportDisplay[$i]['l_users']}</div>
                                    <div class='col-sm-3'>{$ReportDisplay[$i]['cases']}</div>
                                    <div class='col-sm-3'>{$ReportDisplay[$i]['appointments']}</div>

                                    </div>
                                </ul>

                               ";
                            }
                    ?>
         
                </div>
            </section><hr />
                
            <footer class="row footer navbar-fixed-bottom">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>

</html>


