<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        @yield('title') | Panel de Administración
    </title>
    <!-- MDB icon -->
    <link rel="icon" href="" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_o5hd5vvqpoqiwwmi.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- Google Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}" />

    <style>

.sidebar-fixed{height:100vh;width:270px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);z-index:1050;background-color:#fff;padding:0 1.5rem 1.5rem}.sidebar-fixed .list-group .active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius:5px;border-radius:5px}.sidebar-fixed .logo-wrapper{padding:2.5rem}.sidebar-fixed .logo-wrapper img{max-height:50px}@media (min-width:1200px){.navbar,.page-footer,main{padding-left:270px}}@media (max-width:1199.98px){.sidebar-fixed{display:none}}

.sidebar-fixed {
  height: 100vh;
  width: 270px;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  z-index: 1050;
  background-color: #fff;
  padding: 1.5rem;
  padding-top: 0; }
  .sidebar-fixed .list-group .active {
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -webkit-border-radius: 5px;
    border-radius: 5px; }
  .sidebar-fixed .logo-wrapper {
    padding: 2.5rem; }
    .sidebar-fixed .logo-wrapper img {
      max-height: 50px; }

@media (min-width: 1200px) {
  .navbar,
  .page-footer,
  main {
    padding-left: 270px; } }

@media (max-width: 1199.98px) {
  .sidebar-fixed {
    display: none; } }

    </style>
  </head>
  <body>
    <div class="container-for-admin"></div>
         <header>
                @include('layouts.inc.adminnavbar')

                 @include('layouts.inc.adminsidebar')

        </header>

                    <main class="pt-5  mx-lg-5">
                       @yield('content')

                 @include('layouts.inc.adminfooter')
    </div>
        <!--JS JQ POP-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>

    <!-- Custom scripts -->

  </body>
</html>
