<?php
include 'header.php';
$db = new Database();
$slide_id = $_REQUEST['slide_id'];
$slides = $db->select('slides', '*', ['slide_id' => $slide_id])[0];
//$slides = $db->select('slides', '*', ['slide_id' => $slide_id])[0];


?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Slides</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="card">

                <div class="card-body  text-black">
                    <div class="live-preview">
                        <form action='slide-update-save.php' method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="slide_id" value="<?php echo $slide_id; ?>">

                            <div class="row gy-4">
                               
<!--                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Enter Title" name="title" value="<?php echo $slides['title'];?>" required>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Sub Title</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Enter Title" name="sub_title" value="<?php echo $slides['subtitle'];?>" required>
                                    </div>
                                </div>-->
<!--                                <div class="col-xxl-6 col-md-4">
                                    <div>
                                        <label for="placeholderInput" class="form-label">SubTitle</label>
                                        <input type="text" class="form-control" id="placeholderInput" placeholder="Enter SubTitle" name="subtitle" value="<?php echo $slides['subtitle'];?>" required>
                                    </div>
                                </div>-->
                                <div class="col-xxl-3 col-md-4">
                                    <div>
                                    <img src="../<?php echo $slides['image']; ?>" alt="" height="200px" width="200px"><br>
                                        <label for="placeholderInput" class="form-label">Slide</label>
                                        <input type="file" class="form-control" id="placeholderInput" placeholder="Slides" name="slide" value="<?php echo $slides['image']; ?>">
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