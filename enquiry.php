<?php
include 'header.php';

$courses = $db->select("courses", "*");

?>

<!-- Main content Start -->
<div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/5.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title">Enquiry</h1>
                    
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row align-items-center pb-50">
                        <div class="col-lg-4 md-mb-50">
                            <div class="contact-address-section style2">                            
            					<div class="contact-info mb-15 md-mb-30">
            						<div class="icon-part">
            							<i class="fa fa-home"></i>
            						</div>
            						<div class="content-part">
    	        						<h5 class="info-subtitle">Address</h5>
    	        						<h4 class="info-title">Plot No.1, Laxmi Nagar, Girna Taki Road, near Sanika Corner, behind M J College, Jalgaon
                                            <br>Maharashtra, India </h4>
    	        					</div>
            					</div>
            					<div class="contact-info mb-15 md-mb-30">
            						<div class="icon-part">
            							<i class="fa fa-envelope-open-o"></i>
            						</div>
            						<div class="content-part">
    	        						<h5 class="info-subtitle">Email Address</h5>
    	        						<h5><a href="#">infoplanet@gmail.com</a></h5>
    	        					</div>
            					</div>
            					<div class="contact-info">
            						<div class="icon-part">
            							<i class="fa fa-headphones"></i>
            						</div>
            						<div class="content-part">
    	        						<h5 class="info-subtitle">Phone Number</h5>
    	        						<h6 class="info-title"><a href="tel:(+91)9422279260">(+91)9422279260 </a></h6>
                                        <h6 class="info-title"><a href="tel:(+91)9420213481">(+91)9420213481 </a></h6>
    	        					</div>
            					</div>
                			</div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Map Section Start --> 
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14899.443099361733!2d75.5530395!3d20.9982173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90fb505bd1a9f%3A0xac718d12e6331096!2sInfo%20Planet%20Computers!5e0!3m2!1sen!2sin!4v1683208845602!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- Map Section End -->
                        </div>
            		</div>

            		<div class="row align-items-end contact-bg1">
            			<div class="col-lg-8 lg-pl-0">
			        		<div class="rs-quick-contact new-style">
                                <div class="inner-part mb-35">
                                    <h2 class="title mb-15">Get In Touch</h2>
                                    <p>Fill This Form For Any Enquiry About The Info Planet, 
                                        We Are Stand Up For Your Help.</p>
                                </div>
                                
                                <form action="enquiry-save.php" method="POST">
                                
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text"  name="enquiry_name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="email"  name="enquiry_email" placeholder="Email" required>
                                        </div>   
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="tel" size="20" minlength="10" maxlength="10" name="enquiry_phone_no" placeholder="Phone" required>
                                        </div>   

                                        
                                        
                                        <div class="col-sm-6 col-12">
                                            <select name="subject" class="from-control"  id="course_id" required>
                                                <option value="">Select Subject</option>
                                                <?php 
                                                  foreach ($courses as $course) {
                                                ?> 
                                                <option><?php echo $course['course_name']; ?></option>
                                                <?php
                                                  }
                                                ?>
                                            </select>
                                        </div><br><br><br>


                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" name="enquiry_address" placeholder="Address" required>
                                        </div>
                                     
                                        <div class="col-lg-12 mb-40">
                                            <textarea maxlength="255" class="from-control" name="enquiry_details" placeholder=" Message" required></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group mb-0">
                                            <input type="submit" name="submit" class="btn-send">
                                        </div>       
                                    </div>
                                    
                                </form>
                                   
                            </div> 
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->  

            
            
        <!-- Main content End --> 


<?php

include 'footer.php';

?>
