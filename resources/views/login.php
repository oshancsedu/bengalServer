<?php
# Start Session:
session_start();
# Database Connection:

if($_POST) {
    /*include('functions/db_functions.php');
    $db = new DB_Functions('');
    $result=$db->loginCheck($_POST['id'],$_POST['password']);*/
    if($_POST['userID'] == "110" && isset($_POST['password']) && isset($_POST['userType'])) {
        echo $_POST['userID'];
        $_SESSION['userID']=$_POST['userID'];
        $_SESSION['userType']=$_POST['userType'];
        header('Location: home');
    }
    else
    {
        $_SESSION['userID'] = "";
    }
}
?>

<!DOCTYPE HTML>

<html>
<head>
    <title>Log In</title>
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico" />
    <?php include('config/meta.php'); ?>
    <?php include('config/js.php'); ?>
    <script type="text/javascript" src="js/fieldColor.js"></script>
    <noscript>
        <?php include('config/css.php'); ?>
    </noscript>
</head>
<body class="landing">
<!-- Banner -->
<section id="banner">
    <div class="container">
        <h2>EMPLOYEE LOGIN</h2>

        <form method="post" action="login">

            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

            <div class="row uniform 50%">
                <div class="4u$ 12u$(xsmall)">
                    <input type="text" name="userID" id="userID" value="" placeholder="User ID"/>
                </div>
                <div class="4u$ 12u$(xsmall)">
                    <input type="password" name="password" id="password" value="" placeholder="password"/>
                </div>

                <div class="4u$ 12u$">
                    <div>
                        <select name="userType" id="userType">
                            <option value=""><p>- User Type -</p></option>
                            <option value="admin">Admin</option>
                            <option value="rso">rso</option>
                        </select>
                    </div>
                </div>

                <div class='4u$ 12u$(xsmall)'>
                    <ul class="actions">
                        <li><input type="submit" value="Log In" class="special"/></li>
                    </ul>
                </div>
                <?php
                if(isset($_SESSION['userID']) == 1 )
                    echo "<div class='4u$ 12u$(xsmall)'>
                                    <h7>User Id and Password is not matched</h7>
                                </div>";
                ?>

            </div>
        </form>
    </div>
</section>
</body>
</html>