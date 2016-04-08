<!DOCTYPE HTML>

<html>
<head>
    <title>Settings</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    @include('config.CommonUtilities')
    @include(DIR_TEMPLATE.'/basicsetup')
    <script type="text/javascript" src="js/fieldColor.js"></script>

</head>
<body>
@include(DIR_TEMPLATE.'/header')
<section id="main" class="wrapper">
    <div class="container">
        <h2>Update Password</h2>

        <form method="post" action="{{url('settings')}}">

            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

            <div class="row uniform 50%">
                <div class="4u$ 12u$(xsmall)">
                    <input type="password" name="old_password" id="old_password" value="" placeholder="Old Password"/>
                </div>
                <div class="4u$ 12u$(xsmall)">
                    <input type="password" name="new_password" id="new_password" value="" placeholder="New Password"/>
                </div>

                <div class="4u$ 12u$(xsmall)">
                    <input type="password" name="confirm_password" id="confirm_password" value="" placeholder="Confirm Password"/>
                </div>

                <div class='4u$ 12u$(xsmall)'>
                    <ul class="actions">
                        <li><input type="submit" value="Update" class="special"/></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>
</body>
</html>