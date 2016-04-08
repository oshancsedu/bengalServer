<html>
<head>
    <title>Employee Info</title>
    @include('config/commonutilities')
    @include(DIR_TEMPLATE.'/basicsetup')
</head>

<body>
@include(DIR_TEMPLATE.'/header')
<section id="main" class="wrapper">
    <div class="container">
        <header class="major special">
            <h2>User: {{Auth::user()->user_id}}</h2>
            <p>Employee Information</p>
        </header>
        @include(DIR_TEMPLATE . '/employeeInfoTable')
        <?php $userType=Auth::user()->user_type; ?>
        @if($userType=="admin")
            @include(DIR_TEMPLATE . '/addArea')
            @include(DIR_TEMPLATE . '/addMS')
            @include(DIR_TEMPLATE . '/UpdatePassword')
        @endif
    </div>
</section>
</body>
</html>