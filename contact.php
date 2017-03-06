<?php 
	$filename = 'contact';
	$title = 'Golden Visa Experts | Contact Atlas Global Advisors';
	$description = '';
?>
<?php include 'includes/global_vars.php' ?>
<?php include 'includes/header.php' ?>
			<div class="inner-page-header-area">
				<!-- <img alt="banner-image" src="images/portugal_night.jpg"> -->
				<div class="container">
					<div class="inner_slider_text">
						<div class="property_info_header">
							<h2>"How can we assist you today..."</h2>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="alert-container">
           <div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
			  <strong>Success!</strong> <span class="alert-message">Better check yourself, you're not looking too good.</span>
			</div>
		</div>	
		<section class="no-margin">
			<div class="inner-contact">
				<div class="container">
					<h1>Contact Us</h1>
					<div class="row">
						<!--
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="row" id="">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<h2>Lisbon Office</h2>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12 inner-contact-border">
											<p>Largo Portas do Sol 2, 1100-411</p>
											<p>Lisboa, Portugal</p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<p><i class="fa fa-phone" aria-hidden="true"></i> : +351 21 888 1991</p>
											<p><i class="fa fa-envelope" aria-hidden="true"></i> : info@opeskey.com</p>									
										</div>
									</div>
								</div>
							</div>	
						</div>
						-->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12 ">
									<h2>UK Office</h2>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12 inner-contact-border">
											<p>49 Greek Street</p>
											<p>London, W1D 4EG</p>
											<p>United Kingdom</p>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<p><i class="fa fa-phone" aria-hidden="true"></i> : +44(0)20 7118 0778</p>
											<p><i class="fa fa-envelope" aria-hidden="true"></i> : info@atlasglobaladvisors.com</p>									
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--
					<section>
						<div class="row destination-guide">
							<div class="col-sm-6 text-center">
								<div class="item">
									<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
									Download Destination Guide
								</div>
							</div>
							<div class="col-sm-6 text-center">
								<div class="item">
									<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
									Download Buying Guide
								</div>
							</div>
						</div>
					</section>
					-->
					<div class="inner-contact-agent-area">
						<h2>Contact Us</h2>				
						<form class="agnet-contact-form" name="contact_form" method="post" action="functions.php" id="agnet-contact-form1">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="full_name" placeholder="Full Name" required>
									<input type="number" name="phone_number" placeholder="Phone Number" required>
									<input type="email" name="email_address" placeholder="Email Address" required>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<textarea name="message" placeholder="Message" required></textarea>
									<input type="submit" name="sendmessage" class="send-message" value="SUBMIT NOW" />
								</div>
							</div>
						</form>
					</div>
					<div class="inner-contact-location-map">
						<div id="googleMap" style="width:100%;height:100%;"></div>
					</div>				
				</div>				
			</div>
		</section>
		<div class="modal fade" id="contact_our_agent" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content" id="model-contact-form">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="image_lightbox_label">Contact Our Agent</h4>
					</div>
					<div class="modal-body">
						<div class="contact-form model-contact-form" id="contact-form">
							<form class="agnet-contact-form" name="contact_form" method="post" action="functions.php">
								<ul>
									<li>
										<input type="text" name="full_name" id="full_name" placeholder="Full Name" required>
										<input type="number" name="phone_number" id="phone_number" placeholder="Phone Number" required>
										<input type="email" name="email_address" id="email_address" placeholder="Email Address" required>
									</li>
									<li>
										<textarea name="message" id="message" placeholder="Message" required></textarea>
										<input type="submit" name="sendmessage" class="send-message" value="SUBMIT NOW" />
									</li>
								</ul>
							</form>
						</div>
						<p>&nbsp;</p>						
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'includes/footer.php' ?>

		
		<?php include 'includes/scripts.php' ?>
		

		<script src="http://maps.googleapis.com/maps/api/js?v=3.23&sensor=false&client=&key=AIzaSyB-NrCLUT3DLHzvyXjfh9WukUn9FU9vaAk&signed_in=false&region=US"></script>		
		<script src="js/google-map.js"></script>		
		<script type="text/javascript">
			$(document).ready(function(){
				function centerModals(){
				  $('.modal').each(function(i){
				    var $clone = $(this).clone().css('display', 'block').appendTo('body');
				    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
				    top = top > 0 ? top : 0;
				    $clone.remove();
				    $(this).find('.modal-content').css("margin-top", top);
				  });
				}
				$('.modal').on('show.bs.modal', centerModals);
				$(window).on('resize', centerModals);
			});
		</script>		
	</body>
</html>