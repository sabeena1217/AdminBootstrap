<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CEB - Energy Meter</title>

    <!-- Bootstrap CSS -->
    {!! Html::style('css/bootstrap.min.css') !!}
    <!-- bootstrap theme -->
    {!! Html::style('css/bootstrap-theme.css') !!}
    <!--external css-->
    <!-- font icon -->
    {!! Html::style('css/elegant-icons-style.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    <!-- full calendar css-->
    {!! Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') !!}
    {!! Html::style('assets/fullcalendar/fullcalendar/fullcalendar.css') !!}
    <!-- easy pie chart-->
    {!! Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') !!}
    <!-- owl carousel -->
    {!! Html::style('css/owl.carousel.css') !!}
    {!! Html::style('css/jquery-jvectormap-1.2.2.css') !!}
    <!-- Custom styles -->
    {!! Html::style('css/fullcalendar.css') !!}
    {!! Html::style('css/widgets.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/style-responsive.css') !!}
    {!! Html::style('css/xcharts.min.css') !!}
    {!! Html::style('css/jquery-ui-1.10.4.min.css') !!}
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
</head>
<body>
    <section id="container" class="">
        @if (Auth::guard('admin')->check())
            @include('admin.header.header')
            @include('admin.sidebar.sidebar')
            @yield('content')
        @else
            @yield('content')
        @endif

    </section>

    <!-- javascripts -->
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/jquery-ui-1.10.4.min.js') !!}
    {!! Html::script('js/jquery-1.8.3.min.js') !!}
    {!! Html::script('js/jquery-ui-1.9.2.custom.min.js') !!}
    <!-- bootstrap -->
    {!! Html::script('js/bootstrap.min.js') !!}
    <!-- nice scroll -->
    {!! Html::script('js/jquery.scrollTo.min.js') !!}
    {!! Html::script('js/jquery.nicescroll.js') !!}
    <!-- charts scripts -->
    {!! Html::script('assets/jquery-knob/js/jquery.knob.js') !!}
    {!! Html::script('js/jquery.sparkline.js') !!}
    {!! Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}
    {!! Html::script('js/owl.carousel.js') !!}
    <!-- jQuery full calendar -->
     <!-- Full Google Calendar - Calendar -->
    {!! Html::script('js/fullcalendar.min.js') !!}
    {!! Html::script('assets/fullcalendar/fullcalendar/fullcalendar.js') !!}
    <!--script for this page only-->
    {!! Html::script('js/calendar-custom.js') !!}
    {!! Html::script('js/jquery.rateit.min.js') !!}
    <!-- custom select -->
    {!! Html::script('js/jquery.customSelect.min.js') !!}
    {!! Html::script('assets/chart-master/Chart.js') !!}

    <!--custome script for all page-->
    {!! Html::script('js/scripts.js') !!}
    <!-- custom script for this page-->
    {!! Html::script('js/sparkline-chart.js') !!}
    {!! Html::script('js/easy-pie-chart.js') !!}
    {!! Html::script('js/jquery-jvectormap-1.2.2.min.js') !!}
    {!! Html::script('js/jquery-jvectormap-world-mill-en.js') !!}
    {!! Html::script('js/xcharts.min.js') !!}
    {!! Html::script('js/jquery.autosize.min.js') !!}
    {!! Html::script('js/jquery.placeholder.min.js') !!}
    {!! Html::script('js/gdp-data.js') !!}
    {!! Html::script('js/morris.min.js') !!}
    {!! Html::script('js/sparklines.js') !!}
    {!! Html::script('js/charts.js') !!}
    {!! Html::script('js/jquery.slimscroll.min.js') !!}

</body>
</html>