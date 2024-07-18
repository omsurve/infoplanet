<?php
include 'header.php';
$course_id = $_REQUEST['course_id'];
$course = $db->select('courses', "*", ['course_id' => $course_id])[0];
$courses = $db->select('courses', "*",);

$batches = $db->select('batches', "*", ['course_id' => $course_id]);
$ten_days_ago = date('Y-m-d', strtotime('-10 days'));
$resent_batches = $db->select('batches', '*', ["AND" => [
        'date[<=]' => date('Y-m-d'), 'date[>]' => $ten_days_ago,
        ]]);
$lectures = $db->select("lectures", "*", ['course_id' => $course_id]);
?>
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title"></h1>

        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Intro Courses -->
    <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70 rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="col-lg-8 md-mb-50">
                    <!-- Intro Info Tabs-->
                    <div class="intro-info-tabs ">
                        <ul  class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                            <li style="width:250px" class="nav-item tab-btns">
                                <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Overview</a>
                            </li>
                            <li style="width:250px" class="nav-item tab-btns">
                                <a class="nav-link tab-btn" id="prod-curriculum-tab" data-toggle="tab" href="#prod-curriculum" role="tab" aria-controls="prod-curriculum" aria-selected="false">Curriculum</a>
                            </li>
                            <li style="width:250px" class="nav-item tab-btns">
                                <a class="nav-link tab-btn" id="prod-instructor-tab" data-toggle="tab" href="#prod-instructor" role="tab" aria-controls="prod-instructor" aria-selected="false">Batches</a>
                            </li>


                        </ul>
                        <div class="tab-content tabs-content" id="myTabContent">
                            <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                <div class="content white-bg pt-30">
                                    <!-- Cource Overview -->
                                    <div class="course-overview">
                                        <div class="inner-box">
                                            <h4><?Php echo$course['course_name']; ?></h4>
                                            <p><?Php echo$course['details']; ?>.</p>
                                            <ul class="student-list">
                                                <li>23,564 Total Students</li>
                                                <li><span class="theme_color">Course Duration </span> <span><?php echo$course['duration']; ?></span></li>

                                            </ul>
                                            <div class="row">
                                                <div class="col-xl-6 col-md-12">
                                                    <h3>Prerequisites</h3>
                                                    <ul class="review-list">
                                                        <?php
                                                        $pre = explode(",", $course['prerequisites']);
                                                        $nop = count($pre);
                                                        $divp = intdiv($nop, 2);
                                                        for ($i = $divp; $i < $nop; $i++) {
                                                            ?>                                                  
                                                            <li><?php echo $pre[$i]; ?></li>

                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 col-md-12">
                                                    <br>


                                                    <ul style="margin-top:20px" class="review-list">
                                                        <?php
                                                        for ($i = 0; $i < $divp; $i++) {
                                                            ?>


                                                            <li><?php echo $pre[$i]; ?></li>

                                                        <?php } ?>

                                                    </ul>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-md-12">
                                                    <h3>What you’ll learn?</h3>


                                                    <ul style="margin-top:20px" class="review-list">
                                                        <?php
                                                           $curriculams = explode(",", $course['curriculam']);
                                                        $noc = count($curriculams);
                                                        $divc = intdiv($noc, 2);
                                                        for ($i = 0; $i < $divc; $i++) {
                                                            ?>


                                                            <li><?php echo $curriculams[$i]; ?></li>

                                                        <?php } ?>

                                                    </ul>


                                                </div>
                                                <div class="col-xl-6 col-md-12">
                                                    <br>
                                                    <ul class="review-list">
                                                        <?php
                                                     
                                                        for ($i = $divc; $i < $noc; $i++) {
                                                            ?>                                                  
                                                            <li><?php echo $curriculams[$i]; ?></li>

                                                        <?php } ?>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-md-12">
                                                    <h3>Course Objective</h3>
                                                    <ul class="review-list">
                                                        <?php
                                                        $objs = explode(",", $course['objective']);
                                                        $no = count($objs);
                                                        $div = intdiv($no, 2);
                                                        for ($i = $div; $i < $no; $i++) {
                                                            ?>                                                  
                                                            <li><?php echo $objs[$i]; ?></li>

                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-6 col-md-12">
                                                    <br>


                                                    <ul style="margin-top:20px" class="review-list">
                                                        <?php
                                                        for ($i = 0; $i < $div; $i++) {
                                                            ?>


                                                            <li><?php echo $objs[$i]; ?></li>

                                                        <?php } ?>

                                                    </ul>


                                                </div>
                                            </div>


                                        </div>
                                    </div>                                                
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-curriculum" role="tabpanel" aria-labelledby="prod-curriculum-tab">
                                <div class="content">
                                    <div id="accordion" class="accordion-box">
                                        <div class="card accordion block">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link acc-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Demo Lectutes</button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body acc-content current">
                                                    <?php
                                                    foreach ($lectures as $lecture) {
                                                        ?>
                                                        <div class="content">
                                                            <div class="clearfix">
                                                                <div class="pull-left">
                                                                    <a class="popup-videos play-icon" href="<?php echo $lecture['lecture_link']; ?>"><i class="fa fa-play"></i><?php echo $lecture['lecture_title']; ?></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>


                                    </div>                                             
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prod-instructor" role="tabpanel" aria-labelledby="prod-instructor-tab">
                                <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                                    <div class="container">
                                        <div class="row">
                                            <?php
                                            foreach ($batches as $batch) {
                                                ?>
                                                <div class="col-lg-6 mb-30 col-md-6">
                                                    <div class="event-item">
                                                        <div class="event-short">
                                                            <div class="featured-img">
                                                                <div class="dates">
                                                                    <?php echo date('d-M-Y', strtotime($batch['date'])); ?> 
                                                                </div>
                                                            </div>
                                                            <div class="content-part card">
                                                                <h4 class="title"><?php echo $course['course_name'] . "-" . date("g:i A", strtotime($batch['start_time'])); ?></h4>
                                                                <div class="time-sec">
                                                                    <div class="timesec"><i class="fa fa-clock-o"></i> <?php echo date("g:i A", strtotime($batch['start_time'])) . " - " . date("g:i A", strtotime($batch['end_time'])); ?> 
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div> 
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class=" col-lg-4">
                    <div class="inner-column ">
                        <!-- Video Box -->

                        <!-- End Video Box -->




                        <div class="card" style=" height:340px">
                            <img style="height:200px"  src="<?php echo$course['image']; ?>" alt=""><br>


                            <a href="#" class="btn readon2 orange-transparent">₹<?php echo$course['fees'] ?></a><br>

                            <a href="enquiry.php" class="btn readon2 orange-transparent">Enquiry Now</a>

                        </div>
                        <br>

                        <div class="widget-area ">

                            <div class="recent-posts-widget mb-50">
                                <h3 class="widget-title">Recenty Started</h3>
                                <?php
                                foreach ($resent_batches as $b) {
                                    $c = $db->select('courses', "course_name", ['course_id' => $b['course_id']])[0];
                                    ?>
                                    <div class="show-featured ">
                                        <div class="post-img">
                                            <!--<a href="#"><img src="assets/images/blog/style2/1.jpg" alt=""></a>-->
                                        </div>
                                        <div class="post-desc">
                                            <a href="course.php?course_id=<?php echo $b['course_id']; ?>"><?php echo $c . "-" . date("g:i A", strtotime($b['start_time'])); ?></a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                <?php echo date('M d,Y', strtotime($b['date'])); ?> 
                                            </span>
                                        </div>
                                    </div> 
                                <?php } ?>

                            </div>

                        </div>
                    </div>
                </div>

            </div>                
        </div>
    </section>
    <!-- End intro Courses -->

    <!-- Newsletter section start -->

    <?php include 'footer.php'; ?>

