<?php

include 'header.php';

$batch_id = $_REQUEST['batch_id'];
$batch = $db->select("batches", "*", ['batch_id' => $batch_id])[0];
//print_r($batch);
//$t = $db->select("employee", "*" , ['emp_id' => $batch['teacher_id']])[0];
//$t_name=$t['fname']." ".$t['mname']." ".$t['lname'];
$courses = $db->select('courses',"*"); 

?>
<div class="vertical-overlay"></div>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Batches</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->


            <form action="batch-update-save.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Update Batch</h4>

                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <input type="hidden" name="batch_id" id="batch_id" class="form-control" value='<?php echo $batch_id; ?>'>

                                        

                                        <div class="col-xxl-6 col-md-6">
                                            <label for="exampleFormControlTextarea5" class="form-label">Course<span class="text-danger fs-15 "> *</span></label>
                                            <select class="form-select" aria-label="Default select example" name="course_id" id="course_id" required>
                                                <option value="">Select Course</option>

                                                <?php
                                                foreach ($courses as $course) {
                                                    ?>

                                                    <option  value="<?php echo $course['course_id']; ?>"><?php echo $course['course_name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>


                                      

                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Batch Starting-date<span class="text-danger fs-15 "> *</span></label>
                                                <input type="date" name="date" id="date" class="form-control" value='<?php echo $batch['date']; ?>'>


                                            </div>

                                        </div>
                                          <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Starting Time<span class="text-danger fs-15 "> *</span></label>
                                                <input type="time" name="start_time" id="time" class="form-control" value='<?php echo $batch['start_time']; ?>' required >


                                            </div>

                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Ending Time<span class="text-danger fs-15 "> *</span></label>
                                                <input type="time" name="end_time"  value="<?php echo $batch['end_time']; ?>"  class="form-control" value='' required >


                                            </div>

                                        </div>

                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <button type="submit" class="btn btn-primary" style='margin-top: 30px'>Submit</button>
                                        </div>

                                    </div>
                                    <!--end row-->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
            </form>
            <!--end row-->
            <!--end col-->
        </div>
        <!--end row-->

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->
<?php
include 'footer.php';
?>
<script>
    $(document).ready(function () {
                 $("#course_id").val('<?php echo $batch['course_id']; ?>');

        
       
        
    });

</script>