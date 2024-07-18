<?php
$page = 'branches';
include 'header.php';

$course = $db->select('courses', "*", ['course_id' => $_REQUEST['course_id']])[0];


//print_r($branches);
?>
<link href="tags-assets/typehead.css"  rel="stylesheet" />
<link href="tags-assets/bt-tags.css" rel="stylesheet">
<style>
    .twitter-typeahead {
        display:initial !important;
    }
    .bootstrap-tagsinput {
        line-height:40px;
        display:block !important;
    }
    .bootstrap-tagsinput .tag {
        background:#09F;
        padding:5px;
        border-radius:4px;
    }
    .tt-hint {
        top:2px !important;
    }
    .tt-input{
        vertical-align:baseline !important;
    }
    .typeahead {
        border: 1px solid #CCCCCC;
        border-radius: 4px;
        padding: 8px 12px;
        width: 300px;
        font-size:1.5em;
    }
    .tt-menu {
        width:300px;
    }
    span.twitter-typeahead .tt-suggestion {
        padding: 10px 20px;
        border-bottom:#CCC 1px solid;
        cursor:pointer;
    }
    span.twitter-typeahead .tt-suggestion:last-child {
        border-bottom:0px;
    }
    .demo-label {
        font-size:1.5em;
        color: #686868;
        font-weight: 500;
    }
    .bgcolor {
        max-width: 440px;
        height: 200px;
        background-color: #c3e8cb;
        padding: 40px 70px;
        border-radius:4px;
        margin:20px 0px;
    }

</style>
<script src="tags-assets/jq.js"></script>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Courses</h4>



                    </div>
                </div>
            </div>
            <!-- end page title -->



            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex  bg-primary">
                            <h4 class="card-title mb-0 flex-grow-1 text-white">Create Cource</h4>

                        </div><!-- end card header -->
                        <div class="card-body">

                            <form action="course-update-save.php"  class='needs-validation' method="POST" enctype="multipart/form-data">

                                <div class="live-preview">
                                    <div class="row gy-4">
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                <input required autofocus type="hidden" name="course_id" placeholder="" id="course_id" class="form-control" value="<?php echo $course['course_id']; ?>">

                                                <label for="name" class="form-label">Course Name<span class="text-danger fs-15 "> *</span></label>
                                                <input required autofocus type="text" name="course_name" placeholder="" id="name" class="form-control" value="<?php echo $course['course_name']; ?>">
                                                <div class="invalid-feedback">Please enter a valid course name.</div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-8 col-md-6">
                                            <div>
                                                <label for="details" class="form-label">Course Details</label>
                                                <input type="text" required name="details" id="details" class="form-control" value="<?php echo $course['details']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                                <label for="duration" class="form-label">Course Duration</label>
                                                <input type="text" required name="duration" id="duration" class="form-control" value="<?php echo $course['duration']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                                <label for="fees" class="form-label">Fees</label>
                                                <input type="number" required name="fees" id="fees" class="form-control" value="<?php echo $course['fees']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div>
                                                <img src="../<?php echo $course['image']; ?>" alt="" height="100px" width="100px"><br>

                                                <input accept="image/*"  type="file" name="image" value="<?php echo $course['image']; ?>" class="form-control">

                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-12">
                                            <label for="curriculam" class="form-label">Course Curriculum</label>
                                            <div class="bs-example">
                                                <input type="text" name="curriculam" id="curriculam" data-role="tagsinput" class="form-control" value="<?php echo $course['curriculam']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-12">
                                            <label for="objective" class="form-label">Course Objective</label>
                                            <div class="bs-example">
                                                <input type="text" name="objective" id="objective" data-role="tagsinput" class="form-control" value="<?php echo $course['objective']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-md-12">
                                            <label for="exampleFormControlTextarea5" class="form-label">Prerequisites</label>
                                            <div class="bs-example">

                                                <input type="text" name="prerequisites"  id="tags-input" data-role="tagsinput" value="<?php echo $course['prerequisites']; ?>"  class="form-control"   >

                                            </div>
                                        </div>



                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <button type="submit" class="btn btn-primary" style='margin-top: 30px'>Submit</button>
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

<script src="tags-assets/typehead.js"></script>
<script src="tags-assets/bt-tags.js" type="text/javascript"></script>


<?php
include 'footer.php';
?>


