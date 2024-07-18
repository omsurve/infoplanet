<?php
$page = 'branches';
include 'header.php';


$courses = $db->select("courses", "*");

//print_r($branches);
?>
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



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex  bg-primary">
                            <h4 class="card-title mb-0 flex-grow-1 text-white">Create Batch</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="batch-save.php" novalidate class='needs-validation' method="POST" enctype="multipart/form-data">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <!--end col-->

                                        <!--end col-->

                                      

                                        <div class="col-xxl-6 col-md-6">
                                            <label for="exampleFormControlTextarea5" class="form-label">Course<span class="text-danger fs-15 "> *</span></label>
                                            <select class="form-select" aria-label="Default select example" name="course_id" id="course_id" required>
                                                <option value="">Select Course</option>

                                                <?php
                                                foreach ($courses as $course) {
                                                    ?>

                                                    <option class='courses course-<?php echo$course['branch_id'] ?>' value="<?php echo $course['course_id']; ?>"><?php echo $course['course_name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                    

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Starting Date<span class="text-danger fs-15 "> *</span></label>
                                                <input type="date" name="date" id="date" class="form-control" value='' required>


                                            </div>

                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Starting Time<span class="text-danger fs-15 "> *</span></label>
                                                <input type="time" name="start_time" id="time" class="form-control" value='' required >


                                            </div>

                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Ending Time<span class="text-danger fs-15 "> *</span></label>
                                                <input type="time" name="end_time"   class="form-control" value='' required >


                                            </div>

                                        </div>



                                        

                                        <!--end col-->
                                        <div class="">
                                            <button type="submit" class="btn btn-primary" style='margin-top: 30px;'>Submit</button>
                                        </div>

                                    </div>
                                    <!--end row-->
                                </div>
                            </form>

                        </div>
                    </div>
                    
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
</div>



<?php
include 'footer.php';
?>
<script>
    $(document).ready(function () {
        $("#branch_id").change(function () {
            var branch_id = $(this).val();
            $(".batches").hide();
            $(".branch-" + branch_id).show();


        });


    });
    $(document).ready(function () {
        $("#branch_id").change(function () {
            var branch_id = $(this).val();
            $(".courses").hide();
            $(".course-" + branch_id).show();


        });


    });

  
</script>
