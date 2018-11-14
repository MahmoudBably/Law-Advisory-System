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
                           
				<h1>Add New Case</h1>
				<form action="" method="post" class="message">
					
                                        
                                        <select style="margin-left: 0px;width: 225px;" name="clientid">
                                        <option  value="active">Choose a Client: </option>
                                        <?php
                                        

                                        for ($i = 0; $i < count($ClientDisplay1); $i++)
                                        {

                                            echo "<option value='{$ClientDisplay1[$i]['id']}'>{$ClientDisplay1[$i]['name']}</option>";
                                        }
                                        ?>
                                        </select>
                                                                            <br></br>

                                         <label>Time Of Hearing</label>
                                         <input required="required" type="datetime-local" name="time" min="2017-05-15T00:00:00" value="2017-05-15T00:00:00">
                                        <br></br>
                                        
					<label>Case Description</label>
					<textarea name="about" ></textarea>
                                        
					<button value="send" class="btn btn-success">SEND</button>
				</form>
			</div>
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
</body>
</html>