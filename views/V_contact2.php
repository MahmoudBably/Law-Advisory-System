<!DOCTYPE>
<html>
    <head>
        
        <meta charset="UTF-8"> 
    
        <title>L'AVOCATE - Offical Website | Add Case</title>
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
                <br /><div class="heading col-md-12">
                    <h3 style="text-align:left;">DIVORCE CASE</h3><hr />
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
                <div class="col-sm-6 case-form modal-body">
                    <img class="img-resposive" src="resources/images/Business%20Banner.jpg" /><hr />
                    <form action="" method="post">
                    <select required="required"  class="form-control" name="lawyerid">
                    <option  value="active">Choose Lawyer: </option>
                       <?php

                                        for ($i = 0; $i < count($UsersDisplay); $i++)
                                        {

                                            echo "<option value='{$UsersDisplay[$i]['id']}'>{$UsersDisplay[$i]['name']}</option>";
                                        }
                                        ?>
                    </select><br>

                     <label>Time Of Meeting</label>
                     <input required="required" class="input-style form-control" type="datetime-local" name="time" min="2017-05-15T00:00:00" value="2017-05-15T00:00:00">
                    <br></br>
                                        
					<label>Case Description</label>
					<textarea required="required" rows="7" name="about" class="input-style form-control" ></textarea></br>
                                        
					<button value="send" class="btn btn-success">SEND</button>
                    </form>
                </div>
            </section>
                
            <footer class="row footer">
                All Copyrights Reserved 2017 | L'AVOCATE Lawyer Firm
            </footer>
        </div>
    </body>

</html>