<?php
$page = 'branches';
include 'header.php';
$course_id = $_REQUEST['course_id'];
$lectures = $db->select("lectures", "*", ['course_id' => $course_id]);
$courses = $db->select("courses", "*");
?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Rest of your HTML code -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex  bg-primary">
                            <h4 class="card-title mb-0 flex-grow-1 text-white">Update Lecture</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="lecture-update-save.php" novalidate class='needs-validation' method="POST" enctype="multipart/form-data">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-xxl-5 col-md-5">
                                            <input type="hidden" name="course_id" class="form-control" placeholder="" required value="<?php echo $course_id; ?>">
                                        </div>
                                        <div class="col-xxl-12 col-md-12">
                                            <label for="exampleFormControlTextarea5" class="form-label">Course</label>
                                            <div class="col-xxl-5 col-md-5">
                                                <?php
                                                $courses_name = $db->select("courses", "course_name", ['course_id' => $course_id])[0];
                                                ?>
                                                <input type="text" name="course" class="form-control" readonly placeholder="Enter link" required value="<?php echo $courses_name; ?>">
                                            </div>
                                        </div>   
                                        <!-- Existing records -->
                                        <?php
                                        $c = 1;
                                        foreach ($lectures as $lecture) {
                                            ?>
                                            <div style="margin-top:7px;" class="form-group item row gy-4">
                                                <br>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input type="text" name="titles[]" class="form-control" placeholder="Enter title" required value="<?php echo $lecture['lecture_title']; ?>">
                                                </div>
                                                <div class="col-xxl-5 col-md-5">
                                                    <input type="text" name="links[]" class="form-control" placeholder="Enter link" required value="<?php echo $lecture['lecture_link']; ?>">
                                                </div>

                                                   <div class="col-xxl-2 col-md-2">
                                                          <button  type="button" class="btn btn-danger remove-item">Remove</button>
                                                    </div>
                                                
                                            </div>
                                            <?php
                                        }
                                        ?>

                                        <!-- New items will be added here -->
                                        <div class="col-lg-12">
                                            <div class="form-group item row gy-4" id="item-container"></div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                                <button type="button" id="add-item" class="btn btn-primary">Add Item</button>
                                <br><br>
                                <input type="submit" class="btn btn-success" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

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
