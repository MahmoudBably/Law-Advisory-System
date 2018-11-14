
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Law Firm</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Contact Info</h2>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span> <em>L'Avocat<br> Law Firm</em> Spaces, Cairo
							</p>
						</li>
						<li>
							<p class="phone">
                                                            Phone1: (+20) 011 1090 47 62 <br>
                                                                    
							</p>
                                                        <p class="phone">
                                                            Phone2: (+20) 011 2034 67 98
                                                              
							</p>
                                                        <p class="phone">
                                                            Phone3: (+20) 011 2702 00 79<br>
							</p>
                                                        <p class="phone">
                                                            Phone4: (+20) 012 8632 48 58<br>
							</p>
						</li>
                                                
						<li>
							<p class="fax">
								Fax: (+20) 000 252 564
							</p>
						</li>
						<li>
							<p class="mail">
								Email: lAvocate@hotmail.com
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="main">
				<div class="container">
            <div class="contents logincont">
                <form class="regform1" action="" method="post">
                        <h1 style="color:black">Register new Lawyer:-</h1>
                        <label>Specialty:-</label>
                        <select style="width:180px;margin-left: -3px;" name="position">
                        <option value="marriage">Marriage</option>
                        <option value="business">Business</option>
                        <option value="employment">Employment</option>
                        <option value="wills">Wills</option>
                        <option value="Property">Property</option>
                        
                        </select><br>
                        
                        <input required="required" name="name" class="input-lg" type="text" placeholder="Real Name:[Letters Only]" value="">
                        <br>
                        <input required="required" name="username" class="input-lg" type="text" placeholder="Username:[Letters Only]" value="">
                        <br>
                        <input required="required" name="password" class="input-lg" type="password" placeholder="Enter your password" value=""> 
                        <br>
                        <input required="required" name="nationalid" class="input-lg" type="text" placeholder="National ID:[15 Digits]"value="">
                        <br>
                        <label style="color:black;margin-left: 5px;">Choose gender:</label>
                        <select style="margin-left: 13px;width: 120px;" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                        <br>
                        <input required="required" name="age" class="input-lg" type="text" placeholder="Age:[18->60]" value="<?php echo $data['age'];?>">
                        <br>
                        <input required="required" name="email" class="input-lg" type="email" placeholder="Email" value="<?php echo $data['email'];?>">
                        <br>
                        <input required="required" name="secretword" class="input-lg" type="password" placeholder="Secret word"value="">
                                               
                        <br>
                       <br>
                       <input style="margin-left: 20px;" class="btn-lg" type="submit" name="submit" value="Register">

                    </form>
                       
                        

                    
                     
                </div>
            </div>
</div>
			</div>
		</div>
	</div>
	
</body>
</html>
      
 