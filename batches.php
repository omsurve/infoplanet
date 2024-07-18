
<?php
include 'header.php';
$date=date("Y-m-d",strtotime('- 15 days'));
$today=date("Y-m-d");
if(isset($_REQUEST['batch_name']))
{
    if($_REQUEST['batch_name']=="upcoming"){
        $batches = $db->select('batches', "*",['date[>]'=>$today]);
    }
    else
    if($_REQUEST['batch_name']=="ongoing"){
        //$batches = $db->select('batches', "*",['date[>=]'=>$date,'date[<=]'=>$today]);
        $batches = $db->select("batches", "*", [
            'date[<>]' => [$date, $today]]
        );
    }
    else{
        $batches = $db->select('batches', "*");

    }
}
else{
    $batches = $db->select('batches', "*");

}

?>
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Batches</h1>
            
        </div>
    </div>
    <!-- Breadcrumbs End -->     
    

    <!-- Popular Course Section Start -->
    <div class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70">            
                        <div style="float:right;" class="col-lg-6 pr-50 md-pr-15">                            
                            <div class="course-search-part">
                                <div class="course-view-part">
                                    <div class="view-icons"> 
                                    <a href="#" class="view-grid mr-10"><i class="fa fa-th-large"></i></a> 
                                      
                                    </div>
                                    <div class="view-text">Showing Batches Results</div>
                                </div>
                                <div class="type-form">
                                    <form method="post" action="" >
                                        <!-- Form Group -->
                                        <div class="form-group mb-0">
                                            <div class="custom-select-box">
                                                <select id="batch" name="batch_name" onchange="location.href='batches.php?batch_name='+this.value">
                                                    <option value='all'>All</option>
                                                    <option value='upcoming'>Upcoming Batches</option>
                                                    <option value='ongoing'>Ongoing Batches</option>
                                                </select>
                                            </div>   
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
            </div>
            <!-- Popular Course Section End -->



    <!-- Events Section Start -->
    <div class="rs-event modify1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <?php
                foreach ($batches as $batch) {
                    $course = $db->select('courses', '*', ['course_id' => $batch['course_id']])[0];
                    ?>
                    <div class="col-lg-4 mb-30 col-md-6">
                        <div class="event-item">
                            <div class="event-short">
                                <div class="featured-img">
                                    <img  style="width:500px;height: 200px" src="<?php echo $course['image']; ?>" alt="Image">
                                    <div class="dates">
                                        <?php echo date('M d, Y', strtotime($batch['date'])); ?>
                                    </div>
                                </div>
                                <div class="content-part" style="height: 200px">
                                    <h4 class="title"><a href=" course.php?course_id=<?php echo $course['course_id'];?> "><?php echo $course["course_name"]; ?></a></h4>
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
    <!-- Events Section End -->    



    <!-- Newsletter section start -->


    <?php
    include 'footer.php';
   
if (isset($_REQUEST['batch_name'])) {
    ?>
    <script>
        $(document).ready(function () {

            $("#batch").val('<?php echo $_REQUEST['batch_name']; ?>');
        });
    </script>
    <?php
}
?>