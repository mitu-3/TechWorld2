<?php
    
        include("header.php");
?>

<div class="about_banner">
	<div class="container">
		<h2>Contact</h2>
		<span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <span>Contact</span></span>
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
	  <h3>Feedback</h3>
	   <p class="m_4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		   <form class="contact" method="post" action="">
               <?php if(count($errors) > 0): ?>
                                    <div class="error">
                                    <?php foreach($errors as $error): ?>
                                    <?php echo $error; ?><br>
                                    <?php endforeach ?>
                                    </div>
                                    <?php endif ?>
			  <input type="text" class="text" value="<?php echo @$cusername;?>" placeholder="NAME" name="cname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			  <input type="text" class="text" value="<?php echo @$cemail;?>" placeholder="EMAIL" name="cmail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			  <input type="text" class="text" value="<?php echo @$cphone;?>" placeholder="MOBILE NO" name="cphone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
			  <textarea value="Message" name="msg" placeholder="MESSEGE" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"><?php echo @$msg;?></textarea>
	          <div class="submit-wrap">
	          	<input type="submit" value="Send" name="cont">
	          	<input type="reset" value="Clear">
	          </div>
		   </form>
      </div>		
    <div class="clearfix"> </div>
 </div>
</div>
<?php
    include("footer.php");
?>