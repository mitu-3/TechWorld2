<?php
    
        include("header.php");
?>

<div class="about_banner">
	<div class="container">
		<h2>Registration</h2>
		<span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Register</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-1 column-13">
	   <i class="fa fa-envelope-o envelop"></i>
	      <address class="address">
              <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
              <dl>
                 <dt></dt>
                 <dd>Freephone :&nbsp;<span> +1 800 254 2478</span></dd>
                 <dd>Telephone :&nbsp;<span> +1 800 547 5478</span></dd>
                 <dd>FAX :&nbsp;<span>+1 800 658 5784</span></dd>
                 <dd>E-mail :&nbsp;<a href="mailto:@example.com">info@community.com</a></dd>
                 
              </dl>
           </address>
		
	</div>
	<div class="col-md-9 column-9">
	  <h3>Register</h3>
                <form method="post"  action=""> 
                                <?php if(count($errors) > 0): ?>
                                    <div class="error">
                                    <?php foreach($errors as $error): ?>
                                    <?php echo $error; ?><br>
                                    <?php endforeach ?>
                                    </div>
                                    <?php endif ?>
                                <div class="section">
                                  <label for="username" class="field prepend-icon">
                                    <input type="text" name="uName" value="<?php echo @$username;?>" placeholder="UserName">
                                    <label for="mobile number" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                  </label>
                                </div>
	                            <div class="section">
                                  <label for="username" class="field prepend-icon">
                                    <input type="text" name="email" value="<?php echo @$email;?>" placeholder="Email id">
                                    <label for="email id" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                  </label>
                               </div>
                              <div class="section">
                                 <label for="password" class="field prepend-icon">
                                    <input type="password" name="pass" placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                 </label>
                              </div>
                              <div class="section">
                                 <label for="password" class="field prepend-icon">
                                    <input type="password" name="cpass" placeholder="Confirm Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                 </label>
                               </div>
                               <div class="section">
                                  <div class="submit"><input type="submit" name="signup" value="Register"></div>
                               </div>
                                <ul class="new">
								<li class="new_right"><p class="sign">already have account ?&nbsp;&nbsp;<a href="Login.php">Sign In</a></p></li>
								<div class="clearfix"></div>
						     </ul>

						  </form>
            
        
	         </div>		
    <div class="clearfix"> </div>
 </div>
</div>
<?php
    include("footer.php");
?>