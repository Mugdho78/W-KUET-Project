<?php
session_start();
include("config/dbconfig.php");
if (!isset($_SESSION["user_id"])) {
    header("Location: login");
}
$page = "dashboard";
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <!--include all the css and header links-->
    <?php include("includes/head.php"); ?>
    <title>IICT-KUET Dashboard</title>
</head>
<!-- END HEAD -->

<body
        class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <?php include("includes/header_logo.php"); ?>
            <!-- logo end -->

            <!--mobile menu and menu left hide-->
            <?php include("includes/mobile_menu.php"); ?>
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li><a class="fullscreen-btn"><i data-feather="maximize"></i></a></li>

                    <!-- start notification dropdown -->
                    <?php include("includes/header_notification.php"); ?>
                    <!-- end notification dropdown -->

                    <!-- start message dropdown -->
                    <?php include("includes/header_message.php"); ?>
                    <!-- end message dropdown -->

                    <!-- start manage user dropdown -->
                    <?php include("includes/header_profile.php"); ?>
                    <!-- end manage user dropdown -->

                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->


    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <?php include("includes/sidebar.php"); ?>
        <!-- end sidebar menu -->

        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Dashboard</div>
                        </div>
                    </div>
                </div>
                <!-- start widget -->
                <div class="row ">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card comp-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                            <h4 class="info-box-title">Total Students</h4>
                                        </div>
                                        <h3 class="mt-1 mb-3 info-box-title col-green">4,586</h3>
                                        <div class="progress">
                                            <div class="progress-bar l-bg-purple" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card comp-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                            <h4 class="info-box-title">Total Teachers</h4>
                                        </div>
                                        <h3 class="mt-1 mb-3 info-box-title col-green">15</h3>
                                        <div class="progress">
                                            <div class="progress-bar l-bg-red" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card comp-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                            <h4 class="info-box-title">Total Course</h4>
                                        </div>
                                        <h3 class="mt-1 mb-3 info-box-title col-green">48</h3>
                                        <div class="progress">
                                            <div class="progress-bar l-bg-green" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card comp-card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="col mt-0">
                                            <h4 class="info-box-title">Visitors</h4>
                                        </div>
                                        <h3 class="mt-1 mb-3 info-box-title col-green">2,479</h3>
                                        <div class="progress">
                                            <div class="progress-bar l-bg-orange" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end widget -->

            </div>
        </div>
        <!-- end page content -->
    </div>
    <!-- end page container -->


    <!-- start footer -->
    <?php include("includes/footer.php"); ?>
    <!-- end footer -->

</div>
<!-- start js include path -->
<?php include("includes/js.php"); ?>
<!-- end js include path -->
<?php
if (isset($_SESSION["alert_message"]) && isset($_SESSION["alert_icon"]) && isset($_SESSION["alert_title"])){
    ?>
    <script>
        $.toast({
            heading: '<?php echo $_SESSION["alert_title"];?>',
            text: '<?php echo $_SESSION["alert_message"];?>',
            position: 'top-right',
            loaderBg:'#ffffff',
            icon: '<?php echo $_SESSION["alert_icon"];?>',
            hideAfter: 3500,
            stack: 6
        });
    </script>
    <?php
    unset($_SESSION["alert_message"]);
    unset($_SESSION["alert_title"]);
    unset($_SESSION["alert_icon"]);
}
?>
</body>


</html>