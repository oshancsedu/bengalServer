<html>
<head>
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    @include('config/commonutilities')
    @include(DIR_TEMPLATE.'/basicsetup')
</head>

<body>
@include(DIR_TEMPLATE.'/header')
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>User: {{Auth::user()->user_id}}</h2>
            <p>Product Order Information</p>
        </header>

        <form method="post" action="home">
            <div class="row uniform 50%">
                @include(DIR_TEMPLATE.'/EmployeeListDrop')
                @include(DIR_TEMPLATE.'/AreaCodeListDrop')
                @include(DIR_TEMPLATE.'/ProductListDrop')
                <br>
            </div>
            <div class="row uniform 50%">
                @include(DIR_TEMPLATE.'/timeSelectionFrom')
            </div>
            <div class="row uniform 50%" id="dateRangePanel">
                @include(DIR_TEMPLATE.'/timeSelectionTo')
            </div>
            <div class="row uniform 50%" id="dateType">
                <div class="6u 12u$(small)">
                    <input type="checkbox" id="copy" name="copy">
                    <label for="copy">Supply Date</label>
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u$">
                    <ul class="actions">
                        <li><input type="submit" value="Select" id="submit"/></li>
                    </ul>
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="<?php echo csrf_token();?>">
        </form>

        @include(DIR_TEMPLATE . '/orderinfo')

    </div>
</section>
</body>
<script type="text/javascript" src="js/daterange.js"></script>
</html>