<?php
include 'header.php';
$db = new Database();
$id = $_REQUEST['achievement_id'];
$achievement = $db->select('achievement', '*', ['achievement_id' => $id])[0];
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Achievement Update</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="card">

                <div class="card-body  text-black">
                    <div class="live-preview">
                        <form action='achievement-update-save.php' method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="achievement_id" value="<?php echo $id; ?>">

                            <div class="row gy-4">

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Achievement Name</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Enter Name" name="achievement_name" value="<?php echo $achievement['achievement_name']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Achievement Subject</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Enter Subject" name="achievement_subject" value="<?php echo $achievement['achievement_subject']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Achievement Marks</label>
                                        <input type="number" maxlength="3" class="form-control" id="placeholderInput" placeholder="Enter Marks" name="achievement_marks" value="<?php echo $achievement['achievement_marks']; ?>" required>
                                    </div>
                                </div>



                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Achievement Details</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Enter Details" name="achievement_details" value="<?php echo $achievement['achievement_details']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                        
                                        <label for="placeholderInput" class="form-label">Achievement Photo</label>
                                        <input type="file" class="form-control" id="placeholderInput" placeholder="achievement photo" name="achievement_photo" value="<?php echo $achievement['achievement_photo']; ?>">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                        <img src="../<?php echo $achievement['achievement_photo']; ?>" alt="" height="70px" width="70px">
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-md-12">
                                    <div>
                                        <button type="submit" class="btn btn-primary mt-4 ">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!--end row-->
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


<?php
include 'footer.php';
?>
