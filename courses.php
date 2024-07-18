<?php
include 'header.php';
$courses = $db->select('courses', "*");
?>
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Courses</h1>
            
        </div>
    </div>
    <!-- Breadcrumbs End -->

    

    <!-- Popular Courses Section Start -->
    <div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <?php foreach ($courses as $course) {?>
                <div class="col-lg-6 mb-40">
                    <div class="course-item">
                        <div class="">
                            <a href="course.php?course_id=course.php?course_id=<?php echo $course['course_id']?>">
                                <img style="height:200px;width: 200px" src="<?php echo $course['image'];?>" alt="images">
                            </a>
                        </div>
                        <div class="course-info">
                            <ul class="meta-part">
                                <li><span class="price">₹<?php echo$course['fees'];?></span></li>
                            </ul>
                            <h3 class="course-title">
                                <a href="course.php?course_id=<?php echo$course['course_id'];?>">
                                   <?php echo $course['course_name'];?>
                                </a>
                            </h3>
                            <div class="bottom-part">
                               
                                <div class="btn-part">
                                    <a href="course.php?course_id=<?php echo$course['course_id'];?>">View Course<i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->

    <!-- Newsletter section start -->
   
<?php include 'footer.php'; ?>