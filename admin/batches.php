<?php
include 'header.php';

$db = new Database();

$batches = $db->select('batches', "*",);

//print_r($user);
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">batches</h4>

                        <div class="page-title-right">
                            <!-- Split Button Dropdown -->
                            <div class="btn-group">
                                <a href="batch-add.php" class="btn btn-primary">Add batch</a>

                            </div><!-- /btn-group -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped align-middle table-nowrap" id="customerTable">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Sr.No</th>

                                            <th class="sort" data-sort="email">Course Name</th>
                                            <th class="sort" data-sort="type">Starting Date</th>

                                            <th class="sort" data-sort="email">Starting Time</th>
                                            <th class="sort" data-sort="email">Ending Time</th>

                                            <th class="sort" data-sort="type">Created Date</th>
                                            <th class="sort" data-sort="action">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <?php
                                            $c = 1;
                                            foreach ($batches as $batch) {
                                                echo '<th>' . $c++ . '</th>';
                                                $course = $db->select('courses', "course_name", ['course_id' => $batch['course_id']])[0];
                                                ?>


                                                <td class="customer_name"><?php echo $course; ?></td>
                                                <td class="customer_name"><?php echo $batch['date']; ?></td>
                                                <td class="customer_name"><?php echo $batch['start_time']; ?></td>
                                                <td class="customer_name"><?php echo $batch['end_time']; ?></td>

                                                <td class="customer_name"><?php echo date('d-M-Y', strtotime($batch['inserted_on'])); ?></td>


                                                <td>
                                                    <div class="d-flex gap-2">

                                                        <div class="edit">

                                                            <button class="btn btn-sm btn-secondary edit-item-btn" onClick="location.href = 'batch-update.php?batch_id=<?php echo $batch['batch_id']; ?>';"><i class="ri-pencil-fill"></i></button>

                                                        </div>
                                                        <div class="edit">
                                                            <a class="btn btn-sm btn-danger edit-item-btn" onClick="return confirm('Are You Sure Want To Delete')" href='batch-delete.php?id=<?php echo $batch['batch_id']; ?>' ;><i class="ri-delete-bin-fill"></i></a>
                                                        </div>



                                                    </div>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
    </div>
</div>



<?php
include 'footer.php';
?>