<!DOCTYPE>

<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | My Cases</title>
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
                    <h3 style="text-align:left;">MY CASES</h3><hr />
                </div><br /><br />
                
                <div class="col-sm-1">
                    <a class="btn btn-primary" href="?page=controllers/C_addCase&action=add">Add New Case</a>
                </div>
                
                
                <div class="col-sm-12 case-form modal-body">
                    
                    <ul>
                        <div class="col-sm-3">
                            <li>CLIENT NAME</li>
                        </div>
                        <div class="col-sm-3">
                            <li>DATE</li>
                        </div>    
                        <div  class="col-sm-3">
                            <li>CASE DESCRIPTION</li>
                        </div>
                        <div  class="col-sm-3">
                            <li>ACTION</li>
                        </div>
                    </ul>

                </div>
                
                <div class="col-sm-12 case-form modal-body">
                    
                             <?php
                                for($i = 0; $i < count($CasesDisplay); $i++)
                                {
                                    echo "
                                        <ul>

                                            <div class='col-sm-3'>{$CasesDisplay[$i]['name']}</div> 
                                            <div class='col-sm-3'>{$CasesDisplay[$i]['time']}</div> 
                                            <div class='col-sm-3'>{$CasesDisplay[$i]['about']}</div> 

                                            <div class='col-sm-3'>
                                                <li><a href='?page=controllers/C_addCase&action=delete&id={$CasesDisplay[$i]['id']}'><span class='glyphicon glyphicon-trash'></span></li>
                                                <li><a href='?page=controllers/C_addCase&action=edit&id={$CasesDisplay[$i]['id']}'><span class='glyphicon glyphicon-edit'></span></a></li>           
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