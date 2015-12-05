<?php
session_start();
$userID = $_SESSION['userID'];
?>
<html>
<head>
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico"/>
    <?php include('config/meta.php'); ?>
    <!--[if lte IE 8]-->
    <?php include('config/js.php'); ?>
    <noscript>
        <?php include('config/css.php'); ?>
    </noscript>
    <?php
    include_once 'config/commonutilities.php';?>
</head>

<body>
<?php include DIR_TEMPLATE . '\header.php'?>

<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>User: <?php echo $userID; ?></h2>

            <p>Product Order Information</p>
        </header>

        <form method="post" action="home">
            <div class="row uniform 50%">

                <?php include DIR_TEMPLATE . '\EmployeeListDrop.php' ?>
                <?php include DIR_TEMPLATE . '\DistributorListDrop.php' ?>
                <?php include DIR_TEMPLATE . '\ProductListDrop.php' ?>
                <br>
            </div>
            <div class="row uniform 50%">
                <?php include DIR_TEMPLATE . '\timeSelectionFrom.php' ?>
            </div>
            <div class="row uniform 50%" id="dateRangePanel">
                <?php include DIR_TEMPLATE . '\timeSelectionTo.php' ?>
            </div>
            <div class="row uniform 50%">
                <div class="12u$">
                    <ul class="actions">
                        <li><input type="submit" value="Select" id="submit"/></li>
                    </ul>
                </div>
            </div>
        </form>

        <?php include DIR_TEMPLATE . '\orderinfo.php' ?>

    </div>
</section>
</body>
<script type="text/javascript" src="js/daterange.js"></script>
</html>