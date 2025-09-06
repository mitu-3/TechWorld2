<?php
    include("header.php");
?>
<div class="about_banner">
	<div class="container">
		<h2>Classified About</h2>
		<span class="breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i></a> / <a href="classified.php" class="home_desc">Members</a> / <span>About_member</span></span>
	</div>
</div>
<div class="about_top">
 <div class="container">
	<div class="col-md-3 column-1">
		<a href="#" class="btn btn_3 btn-primary" data-toggle="modal" data-target="#applyModal_1">Sign Up
          <span style="font-size: 20px;">Join Now</span>
          <h3>Click Here</h3>
        </a>
        <div class="list-group">
	       <a href="classified_detail-about.php" class="list-group-item active_1">About</a>
	       <a href="classified_detail-network.php" class="list-group-item ">Network <span class="badge badge_1">2</span></a>
	       <a href="classified_detail-photos.php" class="list-group-item ">Photos <span class="badge badge_1">3</span></a>
	       <a href="classified_detail-videos.php" class="list-group-item ">Videos <span class="badge badge_1">4</span></a>
        </div>
	</div>
	<div class="col-md-9 column-15">
	   <h6>About</h6> 
         <table class="details" width="100%" border="0" cellspacing="2" cellpadding="2">
                <tbody><tr>
                    <td colspan="2"><div><h3>Name</h3></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><strong>Mobile No : </strong></td>
                    <td width="80%" valign="top">
                        2154789324                                </td>
                </tr>
                                                                                                    <tr>
                    <td valign="top"><strong>Address : </strong></td>
                    <td valign="top"></td>
                </tr>
                <tr>
                    <td valign="top"><strong>Country : </strong> </td>
                    <td valign="top">India</td>
                </tr>
                <tr>
                    <td valign="top"><strong>State : </strong></td>
                    <td valign="top">Haryana</td>
                </tr>
                <tr>
                    <td valign="top"><strong>City/Village : </strong></td>
                    <td valign="top">praesentium</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong>About You : </strong>
                        <br>
                        <p></p>
                    </td>
                </tr>
                                            <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                                            <tr>
                    <td colspan="2"><strong>My Web Sites</strong><br>
                                                        </td>
                </tr>
            </tbody>
       </table>
       <!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#example1 a').Chocolat();
		});
		</script>
		 <!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
		<!-- start content_slider -->
		  <div id="example1">
		  	<h5>Newest Members</h5>
			<div id="owl-demo" class="owl-carousel text-center">
				<div class="item">
					<a href="images/pic19.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic19.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic20.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic20.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic21.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic21.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic22.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic22.jpg" alt="name">
					</a>
				</div>
				<div class="item">
					<a href="images/pic23.jpg" title="Rose" rel="title1">
						<img class="lazyOwl" data-src="images/pic23.jpg" alt="name">
					</a>
				</div>
		   </div>
		  </div>
		  <div class="icons_box1">
	       <div class="col-sm-6 box_1">
	        <div class="feature-box">
	         <i class="fa fa-meh-o face"></i>
		     <h4>fast and friendly</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
           <div class="col-sm-6 box_3">
	        <div class="feature-box">
	         <i class="fa fa-bullseye face"></i>
		     <h4>injected humour</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="icons_box2">
	       <div class="col-sm-6 box_1">
	        <div class="feature-box">
	         <i class="fa fa-html5 face"></i>
		     <h4> repeat predefined</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
           <div class="col-sm-6 box_3">
	        <div class="feature-box">
	         <i class="fa fa-thumbs-o-up face"></i>
		     <h4> nulla pariatur</h4> 
		     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		    </div>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
	  </div>
   </div>
 </div>
<?php
    include("footer.php");
?>