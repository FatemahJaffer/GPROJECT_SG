<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title> <?php echo $pagename; ?> </title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<!--------------------------------------------------------->

<body class="">
  <div class="wrapper">
  <div class="sidebar">
  <div class="sidebar-wrapper">
  <div class="logo"><a href="javascript:void(0)" class="simple-text logo-mini">SG</a>
  <a href="javascript:void(0)" class="simple-text logo-normal">Smart Gate</a>
  </div>
  <ul class="nav">
<!--------------------------------------------------------->
   <li><a href="./dashboard.php"><i class="tim-icons icon-chart-pie-36"></i><p>Dashboard</p></a></li>
<!--------------------------------------------------------->
   <li> <a href="./notifications.php"><i class="tim-icons icon-bell-55"></i><p>Notifications</p></a></li>
<!--------------------------------------------------------->
   <li><a href="./Profile.php"><i class="tim-icons icon-single-02"></i><p>User Profile</p></a></li>
<!--------------------------------------------------------->
    <li><a href="./manageUser.php"><i class="tim-icons icon-puzzle-10"></i><p>Mange users</p></a></li>
<!--------------------------------------------------------->
    <li><a href="./Print.php"><i class="tim-icons icon-align-center"></i><p>Print Reports</p></a></li>
<!--------------------------------------------------------->
     <li><a href="./changeMode.php"><i class="tim-icons icon-world"></i><p>Change Gate Mode</p></a></li>
<!--------------------------------------------------------->
     <li class="active-pro"><a href="./Log_in.php"><i class="tim-icons icon-spaceship"></i> <p>Log out</p></a></li>
<!--------------------------------------------------------->
 </ul></div></div>
      
      
<!--------------------------------------------------------->
<!--------------------------------------------------------->

    <div class="main-panel">
 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
  <div class="container-fluid">
  <div class="navbar-wrapper">
  <div class="navbar-toggle d-inline">
  <button type="button" class="navbar-toggler">
  <span class="navbar-toggler-bar bar1"></span>
  <span class="navbar-toggler-bar bar2"></span>
  <span class="navbar-toggler-bar bar3"></span></button></div>
  <a class="navbar-brand" href="javascript:void(0)"><?php echo $pagename;?></a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span>
  <span class="navbar-toggler-bar navbar-kebab"></span></button>
  <div class="collapse navbar-collapse" id="navigation">
  <ul class="navbar-nav ml-auto">
  <li class="search-bar input-group">
  <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
  <span class="d-lg-none d-md-block">Search</span></button></li>
  <li class="dropdown nav-item">
  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
  <div class="notification d-none d-lg-block d-xl-block"></div>
  <i class="tim-icons icon-sound-wave"></i>
  <p class="d-lg-none">Notifications</p></a>
  <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Print the daily report</a></li>
  </ul></li>
  <li class="dropdown nav-item">
  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
  <div class="photo">
  <img src="../assets/img/anime3.png" alt="Profile Photo"></div>
  <b class="caret d-none d-lg-block d-xl-block"></b>
  <p class="d-lg-none">Log out</p></a>
    <ul class="dropdown-menu dropdown-navbar">
    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
    <li class="dropdown-divider"></li>
    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li></ul></li>
    <li class="separator d-lg-none"></li></ul></div></div></nav>
<!--------------------------------------------------------->
 <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
<div class="modal-content">
 <div class="modal-header">
<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="tim-icons icon-simple-remove"></i>
</button></div></div></div></div>