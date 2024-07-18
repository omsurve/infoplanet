<?php
$page = 'branches';
include 'header.php';

$courses = $db->select("courses", "*");

//print_r($branches);
?>

<div  class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Lectures</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex  bg-primary">
                            <h4 class="card-title mb-0 flex-grow-1 text-white">Add-Lecture</h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <form action="lecture-save.php" novalidate class='needs-validation'  method="POST" enctype="multipart/form-data">
                                
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <!--end coFl-->

                                        <!--end col-->



                                        <div class="col-xxl-12 col-md-12">
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
                                        <div id="item-container">
                                            <div style="margin-top:7px;" class="form-group item row gy-4">
                                                <br>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input type="text" name="titles[]" class="form-control" placeholder="Enter title" required>
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input type="text" name="links[]" class="form-control" placeholder="Enter link" required>
                                                </div>
                                                <div class="col-xxl-2 col-md-2">
                                                    <button type="button" class="btn btn-danger remove-item">Remove</button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <!--end row-->
                                </div>
                                <br>
                                <button type="button" id="add-item" class="btn btn-primary">Add Item</button>
                                <br><br>
                                <input type="submit" class="btn btn-success" value="Submit">
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
        // Add item
        $("#add-item").click(function () {
            var newItem = '<div style="margin-top:7px;" class="form-group item row gy-4"><div class="col-xxl-5 col-md-5"><input type="text" name="titles[]" class="form-control" placeholder="Enter title" required></div><div class="col-xxl-5 col-md-5"><input type="text" name="links[]" class="form-control" placeholder="Enter link" required></div><div class="col-xxl-2 col-md-2"><button type="button" class="btn btn-danger remove-item">Remove</button></div></div>';
            $("#item-container").append(newItem);
        });

        // Remove item
        $(document).on("click", ".remove-item", function () {
$(this).closest(".item").remove();
});
});
</script>