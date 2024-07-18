<?php
include 'header.php';
$admin = $_SESSION['admin'];
//print_r($admin);
//$admin_data=$db->select("admin","*")
?>


<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="position-relative mx-n4 mt-n4">
                <div class="profile-wid-bg profile-setting-img">
                    <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                    <div class="overlay-content">
                        <div class="text-end p-3">
                            <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                                <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                    <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                    <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                        <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                <i class="ri-camera-fill"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <h5 class="fs-16 mb-1"><?php echo $admin['name']; ?></h5>
                                <p class="text-muted mb-0">Lead Designer / Developer</p>
                            </div>
                        </div>
                    </div>
                    <!--end card-->

                </div>
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">

                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <form action="profile-update-save.php">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label"> Name</label>
                                                    <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="<?php echo $admin['name']; ?>">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                    <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="<?php echo $admin['mobile']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Alternate Mobile Number</label>
                                                    <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="<?php ?>">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="emailInput" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="" name="email">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="designationInput" class="form-label">Designation</label>
                                                    <input type="text" class="form-control" id="designationInput" placeholder="Designation" value="" name="designation">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="websiteInput1" class="form-label">Website</label>
                                                    <input type="text" class="form-control" id="websiteInput1" name="website" placeholder="www.example.com" value="" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="cityInput" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="cityInput" placeholder="City" name="city" value="<?php ?>" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="countryInput" class="form-label">Country</label>
                                                    <input type="text" class="form-control" id="countryInput" placeholder="Country" value="" name="country" />
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="zipcodeInput" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?php echo $admin['address']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary m-auto">Updates</button>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->

                                </form>

                            </div>
                            <!--end tab-pane-->

                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div><!-- End Page-content -->

                <?php
                include 'footer.php';
                ?>