<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © ALL RIGHTS RESERVED | Info Planet.
            </div>
            
        </div>
    </div>
</footer>

<!-- end main content-->

<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->



<!-- JAVASCRIPT -->
<script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/libs/simplebar/simplebar.min.js"></script>
<script src="./assets/libs/node-waves/waves.min.js"></script>
<script src="./assets/libs/feather-icons/feather.min.js"></script>
<script src="./assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="./assets/js/plugins.js"></script>

<script src="./assets/js/custom.js" type="text/javascript"></script>

<!--Swiper slider js-->
<script src="./assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Dashboard init -->
<script src="./assets/js/pages/dashboard-ecommerce.init.js"></script>
<script src="./assets/js/pages/form-validation.init.js"></script>


<script src="assets/js/pages/crm-contact.init.js"></script>

<!-- App js -->
<script src="./assets/js/app.js"></script>
<script src="./assets/js/hotkeys.js" type="text/javascript"></script>
<script src="./assets/libs/sweetalert2/sweetalert2.min.js"></script>

<script src="./assets/libs/cleave.js/cleave.min.js"></script>
<!-- form masks init -->
<script src="./assets/js/pages/form-masks.init.js"></script>
<script src="assets/js/pages/invoicecreate.init.js"></script>
<!-- Sweet alert init js-->
<script src="./assets/js/pages/sweetalerts.init.js"></script>
<script src="./assets/js/jquery.validate.min.js" type="text/javascript"></script>
<?php
if (isset($_SESSION['msg'])) {
    ?>
    <script>
    $(document).ready(function () {
        Swal.fire({
            title: "<?php echo ucfirst($_SESSION['msg']['title']); ?>!",
            text: "<?php echo ucfirst($_SESSION['msg']['text']); ?>",
            icon: "<?php echo $_SESSION['msg']['type']; ?>",
            showCancelButton: !1,
            confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
            cancelButtonClass: "btn btn-danger w-xs mt-2",
            buttonsStyling: !1,
            showCloseButton: !0,
            timer: 3000
        });
    });
    </script>
    <?php
    unset($_SESSION['msg']);
}
?>

</body>

</html>