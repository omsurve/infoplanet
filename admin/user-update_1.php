<?php
include 'header.php';
$id = $_REQUEST['emp_id'];
$user = $db->select("employee", "*", ['emp_id' => $id])[0];
//print_r($user);
?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>
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
                        <h4 class="mb-sm-0">Update User</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="user-update-save.php" method="POST" id="user-update-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        <input type="hidden" class="form-control" id="placeholderInput" name="emp_id" value="<?php echo $user['emp_id']; ?>">

                                        <!--end col-->
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">First Name<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput" placeholder="Enter Your Name" name="fname" value="<?php echo $user['fname']; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Middle Name<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput" placeholder="Enter Your Name" name="mname" value="<?php echo $user['mname']; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Last Name<span class="text-danger fs-15 "> *</span></label>
                                                <input type="text" required class="form-control" id="placeholderInput" placeholder="Enter Your Name" name="lname" value="<?php echo $user['lname'] ; ?>">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Mobile No<span class="text-danger fs-15 "> *</span></label>
                                                <input type="number" required class="form-control" id="mobile_number" value="<?php echo $user['mobile_no']; ?>" name="mobile_number">
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Birth Date<span class="text-danger fs-15 "> *</span></label>
                                                <input type="date" required class="form-control" id="placeholderInput" value="<?php echo $user['birth_date']; ?>" name="birth_date">
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Gender<span class="text-danger fs-15 "> *</span></label>

                                                <select name="gender" required class="form-control" id="placeholderInput">

                                                <option value="Male" <?php if ($user['gender'] == "Male") echo 'selected="selected"'; ?>>Male</option>
                                                    <option value="Female" <?php if ($user['gender'] == "Female") echo 'selected="selected"'; ?>>Female</option>
                                                </select>
                                                <!-- <input type="text"   value="<?php echo $user['gender']; ?>"  > -->
                                            </div>
                                        </div>



                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="iconInput" class="form-label">Type<span class="text-danger fs-15 "> *</span></label>
                                                <div class="form-icon">
                                                    <select required class="form-control form-control-icon" id="type" name="type">
                                                        <option value="" selected="">SELECT TYPE</option>
                                                        <option value="admin" <?php echo ($user['type']) == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                                        <option value="user" <?php echo ($user['type']) == 'teacher' ? 'selected' : ''; ?>>teacher</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="iconInput" class="form-label">Can Login<span class="text-danger fs-15 "> *</span></label>
                                                <div class="form-icon">
                                                    <select required class="form-control form-control-icon" id="can_login" name="can_login">
                                                        <option value="" selected="">SELECT OPTION</option>
                                                        <option value="1" <?php echo ($user['can_login']) == 1 ? 'selected' : ''; ?>>Yes</option>
                                                        <option value="0" <?php echo ($user['can_login']) == 0 ? 'selected' : ''; ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label"> Salary<span class="text-danger fs-15 "> *</span></label>
                                                <input type="number" required class="form-control" id="placeholderInput" name="salary" value="<?php echo $user['salary']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Address</label>
                                                <textarea type="text" class="form-control" id="placeholderInput" placeholder="Enter Your address" name="address"><?php echo $user['address']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Other Details</label>
                                                <textarea class="form-control" id="placeholderInput" placeholder="Enter Your details" name="other"><?php echo $user['details']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-4 mb-2">
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
        </div>
        <!--end row-->

    </div> <!-- container-fluid -->
</div><!-- End Page-content -->
<?php
include 'footer.php';
?>
 <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>
        <script src="../assets/libs/feather-icons/feather.min.js"></script>
        <script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <script src="../assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- password-addon init -->
        <script src="../assets/js/pages/password-addon.init.js"></script>
        <style>
            .error{

                color:Red;
            }
        </style>
       
<script>
    $(document).ready(function() {

        $("#user-update-form").validate({
            rules: {
                name:{
                    required:true

            },        
                    mobile_number: {
                        required: true,
                        maxlength: 10,
                        minlength: 10
                        
                    },
            
            can_login:{
                required:true
            },
            type:{
                required:true
            },
            salary:{
                required:true
            }

            },
            // Specify validation error messages
            messages: {
                mobile_number: {
                    remote: "Phone number already exists."
                },
                type:{
                    remote: "You must define type of employee"
                },
                can_login:{
                    remote: "you must specify rights of an emplyee toi maintain security"

                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {

                form.submit();
            }
        });
    });
</script>