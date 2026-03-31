<?php
//include('db.php')
?>
<!DOCTYPE html>
<html >
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>حجز موعد</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> الصفحه الرئيسيه</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
    
        <div id="page-wrapper" >
          <div id="page-inner">
			 <div class="row">                                                                                         
                    <div class="col-md-12">
                        <h1 class="page-header">
						<div class="panel-heading">
                           <h1 style="text-align:right;color:black;font-size:30px"> الحجز</h1> 
						   </div
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <p style="text-align:right;color:white;font-size:20px">معلومات شخصية</p>
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                           
                              </div>
							  <div class="form-group">
                                            <p style="text-align:right;color:black;font-size:20px">الاسم</p>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   
							   <div class="form-group">
                                            <p style="text-align:right;color:black;font-size:20px">الايميل</p>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <p style="text-align:right;color:black;font-size:20px">الجنسيه</p>
                                            <p style="text-align:right;color:black;font-size:20px" >
                                                <input type="radio" name="nation"  value="sudanes" checked="">سوداني
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non sudanes ">اجنبي
                                            </label>
                         
                                </div>
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
								<div class="form-group">
                                            <p style="text-align:right;color:black;font-size:20px">بلد جواز السفر</p>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                           <p style="text-align:right;color:black;font-size:20px">رقم الهاتف</p>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             <p style="text-align:right;color:white;font-size:20px">معلومات الحجز</p>
                        </div>
                        <div>
								<div>
                                             <p style="text-align:right;color:black;font-size:20px">نوع الطبيب</p>
                                            <select name="doctor"  class="form-control" required>
												<option value selected ></option>
                                                <option value="طبيب قلب">طبيب قلب</option>
                                                <option value="طبيب باطنيه">طبيب باطنيه</option>
												<option value="طبيب اسنان">طبيب اسنان</option>
												<option value="طبيب نساء وتوليد">طبيب نساء وتوليد</option>
                                            </select>
                              </div>
							 
							  <div class="form-group">
                                            <p style="text-align:right;color:black;font-size:20px">زمن الحجز</p>
                                            <select name="revt" class="form-control" required>
												<option value selected ></option>
                                                <option value="صباحا">صباحا</option>
												<option value="مساء">مساء</option>
                                              <!--  <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                            </select>
                              </div>
							 
							 
							
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <p style="text-align:right;color:black;font-size:20px">تاريخ الحجز</p>
                                            <input name="revd" type ="date" class="form-control">
                                            
                               </div>
							   
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>التحقق</h4>
                        <p>اكتب الرمز ادناه <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>ادخل الرمز<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit"  value="ارسال" class="btn btn-primary">
						
												<?php
$con =mysql_connect("localhost","root","root");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("clinc", $con);
$sql="INSERT INTO reserv (fname,email,nation,country,phone,doctor,revt,revd)
VALUES
('$_POST[fname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[doctor]','$_POST[revt]','$_POST[revd]')";
mysql_query("set character _set_server='utf8'");
if (!mysql_query($sql,$con))
{
die('Error:'. mysql_error());
}
echo "1 record added";
//mysql_close($con);

							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
