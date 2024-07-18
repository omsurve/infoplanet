<?php
//session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include 'inc/database.php';
//include '../infoplanet/admin/functions.php';

$db = new Database();

if ($_REQUEST['enquiry_name'] != '' && $_REQUEST['enquiry_email'] != '' && $_REQUEST['subject'] != '' && $_REQUEST['enquiry_details'] != '' && $_REQUEST['enquiry_phone_no'] != '') {


    $name = $_REQUEST['enquiry_name'];
    $phone_no = $_REQUEST['enquiry_phone_no'];
    $subject = $_REQUEST['subject'];
    $email = $_REQUEST['enquiry_email'];
    $address = $_REQUEST['enquiry_address'];
    $details = $_REQUEST['enquiry_details'];
    ob_start();
    ?>
    <table class="body-wrap" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;">
        <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
            <td style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
            <td class="container" width="600" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                <div class="content" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;">
                        <tr style="font-family: 'Roboto', sans-serif; font-size: 14px; margin: 0;">
                            <td class="content-wrap" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; color: #495057; font-size: 14px; vertical-align: top; margin: 0;padding: 30px; box-shadow: 0 3px 15px rgba(30,32,37,.06); ;border-radius: 7px; background-color: #fff;" valign="top">
                                <meta itemprop="name" content="Confirm Email" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" />
                                <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                            <div style="margin-bottom: 15px;">
                                                <img src="https://proman.softanic.in/infoplanet/info.png" alt="" height="200">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 20px; line-height: 1.5; font-weight: 500; vertical-align: top; margin: 0; padding: 0 0 10px;" valign="top">
                                            Dear,<?php echo $name; ?>
                                        </td>
                                    </tr>
                                    <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Roboto', sans-serif; color: #878a99; box-sizing: border-box; line-height: 1.5; font-size: 15px; vertical-align: top; margin: 0; padding: 0 0 10px;" valign="top">
                                            Thank you for choosing Info Planet.
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0; border-top: 1px solid #e9ebec;">
                                        <td class="content-block" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0; padding-top: 15px" valign="top">
                                            <div style="display: flex; align-items: center;">
                                                <div style="margin-left: 8px;">
                                                    <span style="font-weight: 600;">~ Info Planet Jalgaon.</span>
                                                    <p style="font-size: 13px; margin-bottom: 0px; margin-top: 3px; color: #878a99;"></p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </div>


            </td>
        </tr>
    </table>
    <?php
    $body = ob_get_contents();
    $enquiry = $db->insert("enquiry", ['enquiry_name' => $name, 'enquiry_phone_no' => $phone_no, 'subject' => $subject, 'enquiry_email' => $email, 'enquiry_address' => $address, 'enquiry_details' => $details]);

    if ($enquiry) {

        include 'mail.php';
        echo "<script>window.location='thankyou.php';</script>";
    } else {
        echo "<script>alert('Error .... Form Not Submiited !');</script>";
        echo "<script>window.location='enquiry.php';</script>";

        //echo alert('Successful', 'User Added!', true);
    }
} else {
    echo "<script> alert('Fill The Information'); window.location='enquiry.php'; </script>";
}
?>

</html>
