<html>
<head>
    <title>Product Info</title>
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
            <p>Product Information</p>
        </header>
        @include(DIR_TEMPLATE . '/productInfoTable')
    </div>
</section>
</body>
</html>