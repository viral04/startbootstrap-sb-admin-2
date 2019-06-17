<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
 .nav-h1-text{
    background-color: #4e73df;
    color: hsl(0, 0%, 100%);
    text-align: center;
}
.bg-blue {
  background-color: #4e73df  !important;
}
.nav-text{
    width:100%;
}
.collapse img:hover{
    filter: scale(1.5);
}
.modal-dialog{
    max-width:100%!important;
    margin: auto;
}
</style>


<style>
    * {
      box-sizing: border-box;
  }

  body {
      margin: 0;
      font-family: Arial;
  }

  /* The grid: Four equal columns that floats next to each other */
  .column {
      float: left;
      width: 25%;
      padding: 10px;
  }

  /* Style the images inside the grid */
  .column img {
      opacity: 0.8; 
      cursor: pointer; 
  }

  .column img:hover {
      opacity: 1;
  }

  /* Clear floats after the columns */
  .row:after {
      content: "";
      display: table;
      clear: both;
  }

  /* The expanding image container */
  .container {
      position: relative;
      display: none;
  }

  /* Expanding image text */
  #imgtext {
      position: absolute;
      bottom: 15px;
      left: 15px;
      color: white;
      font-size: 20px;
  }

  /* Closable button inside the expanded image */
  .closebtn {
      position: absolute;
      top: 10px;
      right: 15px;
      color: white;
      font-size: 35px;
      cursor: pointer;
  }
</style>



<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-blue  topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <div class="nav-text align-items-center justify-content-between mb-4">
        <h1 class="h10 mb-0 font-weight-bold text-black-5"><div class="nav-h1-text">DevOps Dashboard</div></h1>

    </div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
</div>
</li>

</nav>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Welcome To Our Dashboard</h1>

</div>


<!-- Content Row -->
<div class="row">
    <!-- Uptime_Robot -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-s font-weight-bold text-primary text-uppercase mb-2"> <a href="https://uptimerobot.com/login?rt=https://uptimerobot.com/#mainDashboard" target="_blank"> Uptime Robot</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Website Monitoring</div>
          </div>

      </div>
  </div>
</div>
</div>

<!-- Nagios -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-s font-weight-bold text-success text-uppercase mb-2"> <a href="http://nagios.thycart.net" target="_blank"> Nagios server </a></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Server Monitoring</div>
      </div>

  </div>
</div>
</div>
</div>

<!-- Docker_Dev -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-s font-weight-bold text-info text-uppercase mb-2"> <a href="http://dev-docker.thycart.net" target="_blank"> Docker Dev </a></div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Dev Monitoring</div>
          </div>
          <div class="col">


          </div>
      </div>
  </div>

</div>
</div>
</div>
</div>

<!-- Docker_Prod -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-s font-weight-bold text-warning text-uppercase mb-2"><a href="http://prod-docker.thycart.net" target="_blank">Docker Production </a></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Production Monitoring</div>
      </div>

  </div>
</div>
</div>
</div>
</div>
<div class="row">
    <!-- Jenkins -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-warning text-uppercase mb-2"><a href="http://104.211.95.200:9090" target="_blank">Jenkins Server </a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Build Server</div>
          </div>

      </div>
  </div>
</div>
</div>

<!-- Elastic_Search -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-s font-weight-bold text-success text-uppercase mb-2"> <a href="http://52.172.128.181:5601/" target="_blank">ElasticSearch server </a></div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">Logs Monitoring</div>
      </div>

  </div>
</div>
</div>
</div>


<!-- images -->


</div>

<!-- Architecture -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <!-- <i class="fas fa-fw fa-cog"></i> -->
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                                <span> Architecture </span>
                            </div>
                        </a>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded ">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <a class="collapse-item"  data-toggle="modal" data-target="#img1">
                              
                                        <img src="azure.jpg" alt="Smiley face" width="200" height="200" >
                                    </a>
                                </div>
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" data-toggle="modal" data-target="#img2"  ><img src="emadri.jpg" alt="Smiley face" width="200" height="200">
                                    </a>
                                </div>
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <a class="collapse-item" data-toggle="modal" data-target="#img3"  ><img src="azure prod.jpg" alt="Smiley face" width="200" height="200">
                                        </a>
                                    </div>
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <a class="collapse-item" data-toggle="modal" data-target="#img4
                                      " >
                                            <img src="m3.jpg" alt="Smiley face" width="200" height="200">
                                        </a>
                                    </div>
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <a class="collapse-item" data-toggle="modal" data-target="#img5
                                      "  ><img src="domain.jpg" alt="Smiley face" width="200" height="200">
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="img1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>         
      </div>
      <div class="modal-body">
       <img src="azure.jpg" alt="Smiley face"/>
      </div>       
    </div>
  </div>
</div>

<div id="img2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>         
      </div>
      <div class="modal-body">
       <img src="emadri.jpg" alt="Smiley face"/>
      </div>       
    </div>
  </div>
</div>

<div id="img3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>         
      </div>
      <div class="modal-body">
       <img src="azure prod.jpg" alt="Smiley face"/>
      </div>       
    </div>
  </div>
</div>

<div id="img4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>         
      </div>
      <div class="modal-body">
       <img src="m3.jpg" alt="Smiley face"/>
      </div>       
    </div>
  </div>
</div>

<div id="img5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>         
      </div>
      <div class="modal-body">
       <img src="domain.jpg" alt="Smiley face"/>
      </div>       
    </div>
  </div>
</div>





    <!-- Content Row -->


    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php 
include('includes/script.php');
include('includes/footer.php');
?>

