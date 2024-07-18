<?php

use Netflie\WhatsAppCloudApi\Message\OptionsList\Row;

include 'header.php';
$db = new Database();
$id = $_REQUEST['id'];
echo $id;
//$project=$db->query("select * from projects where id=$id");
$reviews = $db->get('reviews', '*', ['review_id' => $id]);
//print_r($project);
//echo $project['id'];
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
                        <h4 class="mb-sm-0">View Review</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <script>
                function getNews() {
                    // $('#news').val($('.snow-editor').html());
                    var about = document.getElementById('data');
                    //about.value = JSON.stringify(quill.getContents());
                    about.innerHTML = quill.root.innerHTML;
                    
                    //return false;
                }
            </script>
            <form action="" onsubmit="getNews()" method="" id="projectadd-form" enctype="multipart/form-data">
<input type="hidden" name="review_id" value="<?php echo $reviews['review_id']; ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Reviewer Name <span class="text-danger fs-15 "> *</span></label>
                                                <input readonly class="form-control" id="placeholderInput" name="review_name" required value='<?php echo $reviews['review_name']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-6">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Reviewer Email <span class="text-danger fs-15 "> *</span></label>
                                                <input  readonly class="form-control" id="placeholderInput" name="review_email" required value='<?php echo $reviews['review_email']; ?>'>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                                    <div class="input-group">
                                                        <label for="placeholderInput" class="form-label"> Message <span class="text-danger fs-15 "> *</span></label>&nbsp;&nbsp;
                                                        <textarea readonly class="form-control" id="placeholderInput" rows="6" name="review_details" ><?php echo $reviews['review_details']; ?></textarea>
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
    
    
</script>