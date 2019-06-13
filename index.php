<?php 
include('includes/header.php');
include('includes/navbar.php');
 ?>


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
                      <div class="text-s font-weight-bold text-warning text-uppercase mb-2"><a href="http://jenkins.thycart.net" target="_blank">Jenkins Server </a></div>
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
         <span> Architecture </span> </div></a>
          <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded ">
            <div class="h5 mb-0 font-weight-bold text-gray-800"
            
            <a class="collapse-item"  >Azure Layout <img src="azure.jpg" alt="Smiley face" width="250" height="150"></a>
        <a class="collapse-item"  >Emadri <img src="emadri.jpg" alt="Smiley face" width="250" height="150"></a>
         <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item"  >Azure Prod<img src="azure prod.jpg" alt="Smiley face" width="250" height="150"></a>
        <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item"  >AWS M2 <img src="m2.jpg" alt="Smiley face" width="250" height="150"></a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item"  >Domain List<img src="domain.jpg" alt="Smiley face" width="250" height="150"></a>
        </div>
      </div>
                    
                  </div>
    
                </div>
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
