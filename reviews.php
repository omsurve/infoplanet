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
                    <h1 class="page-title">Reviews</h1>
                    
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		
            		<div class="row align-items-end contact-bg1">
            			<div class="col-lg-8 lg-pl-0">
			        		<div class="rs-quick-contact new-style">
                                <div class="inner-part mb-35">
                                    <h2 class="title mb-15">Get In Touch</h2>
                                    <p>Fill This Form And Give Your Valueable Reviews About The Info Planet.</p>
                                </div>
                                
                                <form action="review-save.php" method="POST">
                                
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text"  name="review_name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="email"  name="review_email" placeholder="Email" required>
                                        </div>   
                                     
                                        <div class="col-lg-12 mb-40">
                                            <textarea maxlength="255" class="from-control" name="review_details" placeholder=" Message" required></textarea>
                                        </div>
                                        <div style="float:right;" class="col-lg-12 form-group mb-0">
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
