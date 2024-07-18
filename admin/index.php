<?php
include 'header.php';
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                        <div class="page-title-right">
                            <!-- <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Hey, <?php echo $_SESSION['admin']['name'] ?></h4>
                                        <p class="text-muted mb-0">Here's what's happening with your Organization today.</p>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><a href="report.php">Total Students</a></p>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="">0</span></h4>
                                                <!-- <a href="#" class="text-decoration-underline">Total Customers</a> -->
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-success rounded fs-3">
                                                    <i class="bx ri-team-fill text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><a href="report-active-customer.php">Active Students</a></p>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="">


                                                        <!-- echo $db->query("select count(*) from `customers` c left join `mess` m on c.customer_mess_id=m.customer_id where m.end_date>curdate()")->fetchAll()[0][0];?> -->

                                                        <!-- <a href="#" class="text-decoration-underline">Active Customers</a> -->
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-info rounded fs-3">
                                                                <i class="bx bx-user-circle text-info"></i>
                                                            </span>
                                                        </div>
                                                        </div>
                                                        </div><!-- end card body -->
                                                        </div><!-- end card -->
                                                        </div><!-- end col -->

                                                        <div class="col-xl-3 col-md-6">
                                                            <!-- card -->
                                                            <div class="card card-animate">
                                                                <div class="card-body">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0"><a href="report-inactive-customer.php">Inactive Students</a></p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                                                        <div>
                                                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="">0</span></h4>
                                                                        </div>
                                                                        <div class="avatar-sm flex-shrink-0">
                                                                            <span class="avatar-title bg-soft-warning rounded fs-3">
                                                                                <i class="bx bx-shopping-bag text-warning"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card body -->
                                                            </div><!-- end card -->
                                                        </div><!-- end col -->


                                                        </div> <!-- end .h-100-->
                                                        <!-- end col -->
                                                        </div>

                                                        </div>
                                                        <!-- container-fluid -->
                                                        </div>

                                                        <!-- End Page-content -->


                                                        <?php
                                                        include 'footer.php';
                                                        ?>