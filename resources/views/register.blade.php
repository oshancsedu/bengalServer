<!DOCTYPE HTML>

<html>
<head>
    <title>Registration</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    @include('config/commonutilities')
    @include(DIR_TEMPLATE.'/basicsetup')
    <script type="text/javascript" src="js/fieldColor.js"></script>

</head>
<body>
@include(DIR_TEMPLATE.'/header')
<section id="main" class="wrapper">
    <div class="container">
        <h2>EMPLOYEE REGISTRATION</h2>

        <form method="post" action="{{url('register')}}">

            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

            <div class="row uniform 50%">
                <div class="4u$ 12u$(xsmall)">
                    <input type="text" name="user_id" id="user_id" value="" placeholder="User ID"/>
                </div>
                <div class="4u$ 12u$(xsmall)">
                    <input type="password" name="password" id="password" value="" placeholder="password"/>
                </div>

                <div class="4u$ 12u$">
                    <div>
                        <select name="user_type" id="userType">
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
            </div>
        </form>
    </div>
</section>
</body>
</html>