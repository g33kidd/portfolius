<?php
require_once("../system/init.php");
include("inc/header.php");


if(!isset($_GET['code'])||$_GET['code']=="" && !isset($_GET['email'])||$_GET['email']=="") : ?>
	<div class="container">
		<div class="main_content row-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget">
						<section class="welly group">
							<form action="" method="GET">
								<table cellspacing="3" cellpadding="3" align="center">
									<tr>
										<td align="center" colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td align="right">Email Address :</td>
										<td align="left">
											<input type="email" id="email" name="email" value="" class="txtBox">
										</td>
										<td align="left"><span id="msg_username"></span>&nbsp;</td>
									</tr>
									<tr>
										<td align="right">Confirmation Code :</td>
										<td align="left">
											<input type="text" id="code" name="code" value="" class="txtBox">
										</td>
										<td align="left"><span id="msg_username"></span>&nbsp;</td>
									</tr>
									<tr>
										<td align="right">&nbsp;</td>
										<td align="right"><input type="submit" value="Setup My Account"></td>
									</tr>
								</table>
							</form>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>

<? else : ?>

<div class="container">              
	<div class="main_content row-fluid">
		<div class="row-fluid">
			<div class="span12">    

				<div class="span12 no_space form_align">
					<div class="widget">
						<header>
							<h3>Account Setup</h3>
						</header>
						<section class="welly group">                         
							<form action="" id="setupAccount">
								<input type='hidden' name="issubmit" value="1">
								<input type="hidden" name="code" value="<? echo $_GET['code']; ?>">
								<!-- Tabs -->
								<div id="wizard" class="swMain">
									<ul>
										<li><a href="#step-1">
											<label class="stepNumber">1</label>
											<span class="stepDesc">
												Account Details<br />
												<small>Fill your account details</small>
											</span>
										</a></li>
										<li><a href="#step-2">
											<label class="stepNumber">2</label>
											<span class="stepDesc">
												Profile Details<br />
												<small>Fill your profile details</small>
											</span>
										</a></li>
										<li><a href="#step-3">
											<label class="stepNumber">3</label>
											<span class="stepDesc">
												Contact Details<br />
												<small>Fill your contact details</small>
											</span>
										</a></li>
										<li><a href="#step-4">
											<label class="stepNumber">4</label>
											<span class="stepDesc">
												Other Details<br />
												<small>Fill your other details</small>
											</span>
										</a></li>
									</ul>
									<div id="step-1"> 
										<h2 class="StepTitle">Step 1: Account Details</h2>
										<table cellspacing="3" cellpadding="3" align="center">
											<tr>
												<td align="center" colspan="3">&nbsp;</td>
											</tr>        
											<tr>
												<td align="right">Username :</td>
												<td align="left">
													<input type="text" id="username" name="username" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_username"></span>&nbsp;</td>
											</tr>
											<tr>
												<td align="right">Email :</td>
												<td align="left">
													<input type="text" id="email" name="email" value="<? echo $_GET['email']; ?>" class="txtBox">
												</td>
												<td align="left"><span id="msg_email"></span>&nbsp;</td>
											</tr>
											<tr>
												<td align="right">Password :</td>
												<td align="left">
													<input type="password" id="password" name="password" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_password"></span>&nbsp;</td>
											</tr> 
											<tr>
												<td align="right">Confirm Password :</td>
												<td align="left">
													<input type="password" id="cpassword" name="cpassword" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_cpassword"></span>&nbsp;</td>
											</tr>                                         
										</table>               
									</div>
									<div id="step-2">
										<h2 class="StepTitle">Step 2: Profile Details</h2>  
										<table cellspacing="3" cellpadding="3" align="center">
											<tr>
												<td align="center" colspan="3">&nbsp;</td>
											</tr>        
											<tr>
												<td align="right">First Name :</td>
												<td align="left">
													<input type="text" id="firstname" name="firstname" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_firstname"></span>&nbsp;</td>
											</tr>
											<tr>
												<td align="right">Last Name :</td>
												<td align="left">
													<input type="text" id="lastname" name="lastname" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_lastname"></span>&nbsp;</td>
											</tr> 
											<tr>
												<td align="right">Gender :</td>
												<td align="left">
													<select id="gender" name="gender" class="txtBox">
														<option value="">-select-</option>
														<option value="Female">Female</option>
														<option value="Male">Male</option>                 
													</select>
												</td>
												<td align="left"><span id="msg_gender"></span>&nbsp;</td>
											</tr>                                         
										</table>        
									</div>                      
									<div id="step-3">
										<h2 class="StepTitle">Step 3: Contact Details</h2>  
										<table cellspacing="3" cellpadding="3" align="center">
											<tr>
												<td align="center" colspan="3">&nbsp;</td>
											</tr>
											<tr>
												<td align="right">Phone :</td>
												<td align="left">
													<input type="text" id="phone" name="phone" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_phone"></span>&nbsp;</td>
											</tr>               
											<tr>
												<td align="right">Address :</td>
												<td align="left">
													<textarea name="address" id="address" class="txtBox" rows="3"></textarea>
												</td>
												<td align="left"><span id="msg_address"></span>&nbsp;</td>
											</tr>                                         
										</table>                                 
									</div>
									<div id="step-4">
										<h2 class="StepTitle">Step 4: Other Details</h2>  
										<table cellspacing="3" cellpadding="3" align="center">
											<tr>
												<td align="center" colspan="3">&nbsp;</td>
											</tr>        
											<tr>
												<td align="right">Hobbies :</td>
												<td align="left">
													<input type="text" id="phone" name="phone" value="" class="txtBox">
												</td>
												<td align="left"><span id="msg_phone"></span>&nbsp;</td>
											</tr>               
											<tr>
												<td align="right">About You :</td>
												<td align="left">
													<textarea name="address" id="address" class="txtBox" rows="5"></textarea>
												</td>
												<td align="left"><span id="msg_address"></span>&nbsp;</td>
											</tr>                                         
										</table>                       
									</div>
								</div>
								<!-- End SmartWizard Content -->      
							</form> 

						</section>
					</div>                  
				</div>

			</div>                  
		</div><!--/row-->
	</div>
</div>

<? endif; ?>

<!-- ===================== JS ===================== -->
<script src="https://js.stripe.com/v1/"></script>
    <script src="js/libs/jquery-1.7.2.min.js"></script>    
    <script src="js/libs/bootstrap.min.js"></script>   
    <script src="js/libs/ios-orientationchange-fix.js"></script>      
    <script src="js/libs/jquery-ui-1.8.20.custom.min.js"></script>      
    <script src="js/common.js"></script>                 
    
    <!-- Site specific - JS -->     
    <script src="js/plugins/formswizard/jquery.smartWizard-2.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/specific/setup.js"></script>


</body>
</html>