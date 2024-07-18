<?php
include 'header.php';
$slides = $db->select('slides', "*");
$achievement = $db->select('achievement', "*");
$reviews = $db->select('reviews', "*",['is_verified'=>1]);

$batches = $db->select('batches', "*");
$ten_days_ago = date('Y-m-d', strtotime('-30 days'));
$upcoming_batches = $db->select('batches', '*', ["AND"=>[
    'date[>]' => date('Y-m-d')
]]);

?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $c = 1;
        foreach ($slides as $slide) {
            ?>
            <div class="carousel-item <?php
            echo $c == 1 ? "active" : '';
            $c++;
            ?>">

                <img style="height:620px;" class="d-block w-100" src="<?php echo $slide['image']; ?>" alt="First slide">
            </div>
        <?php } ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Events Section Start -->
<div class="rs-event home12style">
    <div class="container">
                    <div class="sec-title4 text-center mb-50">
                        <div class="sub-title">Our</div>
                        <h2 class="title purple-color">Upcoming Batches</h2>
                    </div> 
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    <?php

                          foreach ($upcoming_batches as $batch) {
                          $course = $db->select('courses', '*', ['course_id' => $batch['course_id']])[0] ;

                    ?>
                    <div class="event-item home12-style">
                        <div class="event-short">
                           <div class="featured-img">
                               <img  style="width:500px; height: 200px" src="<?php echo $course['image']; ?>" alt="Image">
                           </div>
                           <div class="content-part">
                                <div class="all-dates-time"> 
                                    <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo date("g:i A", strtotime($batch['start_time'])) . " - " . date("g:i A", strtotime($batch['end_time'])); ?> </div>    
                                </div>
                               <h6 class="title"><a href="course.php?course_id=<?php echo $course['course_id'];?> "><?php echo $course["course_name"]; ?></a><br></h2>
                               
                            <!--   <div class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php // echo date("g:i A", strtotime($batch['start_time'])); ?></div> -->
                               <div class="event-btm">
                                   <div class="date-part">
                                       <div class="date">
                                           <i class="fa fa-calendar-check-o"></i>
                                           <?php echo date('M d, Y', strtotime($batch['date'])); ?>
                                       </div>
                                   </div>
                                   <div class="btn-part">
                                       <a href="batches.php">More Batches</a>
                                   </div>
                               </div>
                           </div> 
                        </div>
                    </div>

                    <?php } ?>

                </div>
    </div> 
</div>
            <!-- Events Section End -->

                  

<!-- Popular Courses Section Start -->
<div id="rs-popular-courses" class="rs-popular-courses home11-style pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title2 text-center">
            <div class="sub-title text-danger">Achievements</div>
            <h2 class="title black-color">Our Students</h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            <?php foreach ($achievement as $achiev) { ?>
                <div class="courses-item">
                    <div class="img-part">
                       <center> <img style=" border-radius:20px; height:144px; width:180x;" src="<?php echo $achiev['achievement_photo']; ?>" alt=""></center>
                    </div>
                    <div class="content-part text-center">
                        <div class="course-body">
                            <h2 class="title"><a href="#"><?php echo ucwords($achiev['achievement_name']); ?></a></h2>
                            <h6 class="text-part">
                                <?php echo $achiev['achievement_details']; ?>
                            </h6>
                        </div>
                        <div class="bottom-part">
                            <div class="course-footer">
                                <span class="label">Subject</span>
                                <span class="desc"><?php echo ucwords($achiev['achievement_subject']); ?></span>
                            </div>

                            <div class="course-footer border-none">
                                <span class="label">Marks</span>
                                <span class="desc"><?php echo ucwords($achiev['achievement_marks']); ?></span>
                            </div>
                        </div>

                    </div>
                    <div class="btn-part">
                        <a href="#"><i class="fa fa-trophy"></i></a>
                    </div>
                </div>

                <?php
            }
            ?>   

        </div>                 
    </div>
</div>

<div class="rs-cta main-home">
    <div class="partition-bg-wrap">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6"></div>
                <div class="col-lg-6 pl-70 md-pl-15">
                    <div class="sec-title3 mb-40">
                        <h2 class="title white-color mb-16"> - Join Today -</h2>
                        <div class="desc white-color pr-100 md-pr-0">Learn how to code or build your skills in programming online to gain a better understanding of how websites and apps are designed and developed.</div>
                    </div>
                    <div class="btn-part">
                        <a target="_blank" class="readon orange-btn transparent" href="https://docs.google.com/forms/d/e/1FAIpQLSfPPtns_Nn7f-Xpx72cCzjVgsvoWJsN4CyLu5l6lR6CUJYr8g/viewform">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA Section End --> 

<!-- Faq Section Start -->
<div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 padding-0">
                <div class=" main-part">
                    <div class="title mb-40 md-mb-15">
                        <h2 class="text-part">Frequently Asked Questions</h2>
                    </div>
                    <div class="faq-content">
                        <div id="accordion" class="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne"> What is coding used for?</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Computer code is written to give instructions to computers to complete tasks. Every line of code tells the computer to do something, and it can be used to create software, apps, websites and more.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"> What coding language should I learn?</a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        There is no right or wrong answer to this question. Different coding languages are used for different purposes, so it depends on what your main aim is. However, if you’re interested in some of the principles of coding, languages such as Python and JavaScript are an easy place to get started.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"> How do you improve coding skills?</a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        The best way to improve your coding skills is to keep practising. Whether it’s taking one of our online courses or working on your own coding projects, you can keep developing the skills you’ve learned.
                                    </div>
                                </div>
                            </div>     
                            <div class="card">
                                <div class="card-header">

                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false"> What is object-oriented programming?</a>
                                </div>
                                <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        Object-oriented programming is a way of computer programming that focuses on designing software around data (object) as opposed to functions and logic. Programming languages such as Java, Python, and C++ are all object-oriented.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 padding-0">
                <div class="img-part media-icon orange-color">
                    <a class="popup-videos" href="./assets/video/index-info-video.mp4">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq Section Start -->


<!-- Testimonial Section Start -->
<div class="rs-testimonial main-home pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 mb-50 md-mb-30 text-center">
            <div class="sub-title primary">Testimonial</div>
            <h2 class="title white-color">What Students Saying</h2>
        </div>
        
        <div class="rs-carousel owl-carousel" 
             data-loop="true" 
             data-items="2" 
             data-margin="30" 
             data-autoplay="true" 
             data-hoverpause="true" 
             data-autoplay-timeout="5000" 
             data-smart-speed="800" 
             data-dots="true" 
             data-nav="false" 
             data-nav-speed="false" 

             data-md-device="2" 
             data-md-device-nav="false" 
             data-md-device-dots="true" 
             data-center-mode="false"

             data-ipad-device2="1" 
             data-ipad-device-nav2="false" 
             data-ipad-device-dots2="true"

             data-ipad-device="2" 
             data-ipad-device-nav="false" 
             data-ipad-device-dots="true" 

             data-mobile-device="1" 
             data-mobile-device-nav="false" 
             data-mobile-device-dots="false">

             <?php foreach ($reviews as $review) {  ?>

            <div class="testi-item">
                <div class="author-desc">                                
                    <div class="desc"><img class="quote" src="assets/images/testimonial/main-home/test-2.png" alt=""> <?php echo $review['review_details']; ?> </div>
                    <!--    <div class="author-img">
                            <img src="assets/images/pratik.jpeg"  height="70px" width="70px" alt="">
                        </div>  -->
                </div>
                <div class="author-part">
                    <a class="name" href="#"><?php echo $review['review_name']; ?></a>
                    <span class="designation">Student</span>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </div>
 <br><br>
    <center><div class="btn-part">
        <a class="readon orange-btn transparent" href="reviews.php">Add Review</a>
    </div></center><br>  

    <?php
    include 'footer.php';
    ?>
