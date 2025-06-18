<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->

<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:07:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>Noa - Laravel Bootstrap 5 Admin & Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}admin/assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('/')}}admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="{{ asset('/') }}admin/assets/plugins/select2/select2.min.css" rel="stylesheet" />
    <!-- STYLE CSS -->
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/')}}admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('/')}}admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="ltr app sidebar-mini">


@include('admin.include.right-sidebar')

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('/')}}admin/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">


@include('admin.include.header')

@include('admin.include.left-sidebar')

@yield('body')
</div>

@include('admin.include.footer')

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('/')}}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- BOOTSTRAP MAX-LENGTH JS -->
<script src="{{asset('/')}}admin/assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{asset('/')}}admin/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/')}}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{asset('/')}}admin/assets/js/sticky.js"></script>
<script src="{{asset('/')}}admin/assets/js/formelementadvnced.js"></script>

<!-- APEXCHART JS -->
<script src="{{asset('/')}}admin/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('/')}}admin/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{asset('/')}}admin/assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{asset('/')}}admin/assets/js/index1.js"></script>
<script src="{{asset('/')}}admin/assets/js/index.js"></script>

<!-- Reply JS-->
<script src="{{asset('/')}}admin/assets/js/reply.js"></script>


<!-- COLOR THEME JS -->
<script src="{{asset('/')}}admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{asset('/')}}admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{asset('/')}}admin/assets/switcher/js/switcher.js"></script>
<!-- INTERNAL Summernote Editor js -->
<script src="{{asset('/')}}admin/assets/plugins/summernote-editor/summernote1.js"></script>
<script src="{{asset('/')}}admin/assets/js/summernote.js"></script>

<!-- FILE UPLOAD JS -->
<script src="{{asset('/')}}admin/assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/fileuploads/js/file-upload.js"></script>

<!--Internal Fancy uploader js-->
<script src="{{asset('/')}}admin/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/fancyuploder/fancy-uploader.js"></script>


<!-- BOOTSTRAP MAX-LENGTH JS -->
<script src="{{asset('/')}}admin/assets/plugins/bootstrap-maxlength/dist/bootstrap-maxlength.min.js"></script>

<!-- bootstrap-datepicker js (Date picker Style-01) -->
<script src="{{asset('/')}}admin/assets/plugins/bootstrap-datepicker/js/datepicker.js"></script>

<!-- Amaze UI Date Picker js-->
<script src="{{asset('/')}}admin/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

<!-- Simple Date Time Picker js-->
<script src="{{asset('/')}}admin/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>

<!-- Bootstrap-Date Range Picker js-->
<script src="{{asset('/')}}admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<!-- jQuery UI Date Picker js -->
<script src="{{asset('/')}}admin/assets/plugins/date-picker/jquery-ui.js"></script>

</body>


<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:08:40 GMT -->
</html>
