<?php
include 'header.php';

$gallery = $db->select('gallery', "*");
?>

<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="assets/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Gallery </h1>
            
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Events Section Start -->
    <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <?php
                foreach ($gallery as $g) {
                    ?>

                    <div class="col-lg-4 mb-30 col-md-6 text-center">
                        <div class="gallery-item">
                            <div class="gallery-img"> 
                                <a href="admin/<?php echo $g['gallery_photo']; ?>" class="image-popup"> <img style="height: 300px; width:300px" src="admin/<?php echo $g['gallery_photo']; ?>" alt=""></a>
                            </div>
                            <div class="title">
                                <?php echo ucwords($g['gallery_title']); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>  

            </div>
        </div> 
    </div>
</div>
<!-- Events Section End -->
<?php
include 'footer.php';
?>