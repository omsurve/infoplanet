<?php
include 'header.php';
$db_header = new Database();
$gallery=$db_header->select("gallery","*");
//print_r($colleges);
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add New Gallery</h4>

                    </div>
                </div>
            </div>

            <!-- end page title -->
            <form action="gallery-save.php" onsubmit="get_data()" method="POST" id="projectadd-form" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">


                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Title <span class="text-danger fs-15 "> *</span></label>
                                                <input class="form-control" id="placeholderInput" name="gallery_title" required>
                                            </div>
                                        </div>
                                    
                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Photo1<span class="text-danger fs-15 "> *</span></label>
                                                <input accept="image/*" type="file" class="form-control" id="placeholderInput" name="gallery_photo" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-4 col-md-3">
                                            <div>
                                                <button type="submit" class="btn btn-primary pe-4 mt-4">Submit</button>
                                            </div>
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
    function get_data() {
        var data = document.getElementById('data');
        data.innerHTML = quill.root.innerHTML;
    }


</script>