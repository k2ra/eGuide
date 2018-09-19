<?php include(HTML_DIR . 'components/header.php'); ?>
    <link rel="stylesheet" href="./views/buildComponent/assets/examples/css/pages/user.css">   
  </head>
  <body class="animsition page-user">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include(HTML_DIR . 'components/navbar.php'); ?>
    
    <?php include(HTML_DIR . 'components/sideMenu.php'); ?>
    <!-- Page -->
    <div class="page">
      <div class="page-content  container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <!-- Page Widget -->
            <div class="card card-shadow text-center">
              <div class="card-block">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  <img src="./views/global/portraits/5.jpg" alt="...">
                </a>
                <h4 class="profile-user"><?php  print_r($_SESSION['user']);?></h4>
                <p class="profile-job">Estudiante</p>
                <p><strong>Aula:</strong> 7° B</p>
                <p><strong>Consejero/a:</strong> Juan Perez</p>
                <!--<div class="profile-social">
                  <a class="icon bd-twitter" href="javascript:void(0)"></a>
                  <a class="icon bd-facebook" href="javascript:void(0)"></a>
                  <a class="icon bd-dribbble" href="javascript:void(0)"></a>
                  <a class="icon bd-github" href="javascript:void(0)"></a>
                </div>
                <button type="button" class="btn btn-primary">Follow</button>-->
              </div>
              <div class="card-footer">
                <div class="row no-space">
                  <div class="col-4">
                    <strong class="profile-stat-count">260</strong>
                    <span>Follower</span>
                  </div>
                  <div class="col-4">
                    <strong class="profile-stat-count">180</strong>
                    <span>Following</span>
                  </div>
                  <div class="col-4">
                    <strong class="profile-stat-count">2000</strong>
                    <span>Tweets</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Page Widget -->
          </div>
          <div class="col-lg-9">
        <!-- Panel -->
        <div class="panel">
          <div class="panel-body nav-tabs-horizontal nav-tabs-animate" data-plugin="tabs">

            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                  <li class="nav-item" role="presentation"><a class=" nav-link" data-toggle="tab" href="#activities"
                      aria-controls="activities" role="tab">Asignaciones <span class="badge badge-pill badge-danger">5</span></a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile"
                      role="tab">Boletin</a></li>
                  <li class="nav-item" role="presentation"><a class="active nav-link"  href="?view=profesores" aria-controls="messages"
                      role="tab">Profesores</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="?view=profesores" aria-controls="messages"
                      role="tab">Horario</a></li>   
                  <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages"
                      role="tab">Actividades</a></li> 
                  <!--<li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                    <div class="dropdown-menu" role="menu">
                      <a class="active dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities"
                        role="tab">Activities <span class="badge badge-pill badge-danger">5</span></a>
                      <a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile"
                        role="tab">Profile</a>
                      <a class="dropdown-item" data-toggle="tab" href="#messages" aria-controls="messages"
                        role="tab">Messages</a>
                    </div>
                  </li>-->
            </ul>
        
              <div class="tab-content">
                <div class="tab-pane animation-fade active" id="all_contacts" role="tabpanel">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-online">
                            <img src="./views/global/portraits/1.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Herman Beck
                            <small>Last Access: 1 hour ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 4425 Golf Course Rd
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-away">
                            <img src="./views/global/portraits/2.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Mary Adams
                            <small>Last Access: 2 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 1391 Depaul Dr
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-busy">
                            <img src="./views/global/portraits/3.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Caleb Richards
                            <small>Last Access: 3 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 5067 E Center St
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-success btn-sm">
                            <i class="icon md-check" aria-hidden="true"></i>Following
                          </button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-off">
                            <img src="./views/global/portraits/4.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            June Lane
                            <small>Last Access: 4 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 4788 E Little York Rd
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-success btn-sm">
                            <i class="icon md-check" aria-hidden="true"></i>Following
                          </button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-online">
                            <img src="./views/global/portraits/5.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Edward Fletcher
                            <small>Last Access: 5 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 2317 Cowper St
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-away">
                            <img src="./views/global/portraits/6.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Crystal Bates
                            <small>Last Access: 6 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 2689 Seventh St
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-success btn-sm">
                            <i class="icon md-check" aria-hidden="true"></i>Following
                          </button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-busy">
                            <img src="./views/global/portraits/7.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Nathan Watts
                            <small>Last Access: 7 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 7858 Golf Course Rd
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-success btn-sm">
                            <i class="icon md-check" aria-hidden="true"></i>Following
                          </button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-off">
                            <img src="./views/global/portraits/8.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Heather Harper
                            <small>Last Access: 8 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 7586 Crescent Canyon St
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-online">
                            <img src="./views/global/portraits/9.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Willard Wood
                            <small>Last Access: 9 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 3081 Sunset Blvd
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-away">
                            <img src="./views/global/portraits/10.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Ronnie Ellis
                            <small>Last Access: 10 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 8910 Fincher Rd
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-success btn-sm">
                            <i class="icon md-check" aria-hidden="true"></i>Following
                          </button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-busy">
                            <img src="./views/global/portraits/11.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Gwendolyn Wheeler
                            <small>Last Access: 11 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 6030 Lovers Ln
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media">
                        <div class="pr-0 pr-sm-20 align-self-center">
                          <div class="avatar avatar-off">
                            <img src="./views/global/portraits/12.jpg" alt="...">
                            <i class="avatar avatar-busy"></i>
                          </div>
                        </div>
                        <div class="media-body align-self-center">
                          <h5 class="mt-0 mb-5">
                            Daniel Russell
                            <small>Last Access: 12 hours ago</small>
                          </h5>
                          <p>
                            <i class="icon icon-color md-pin" aria-hidden="true"></i>                            Street 6240 E Cypress St
                          </p>
                          <div>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-email" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color md-smartphone" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-twitter" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-facebook" aria-hidden="true"></i>
                        </a>
                            <a class="text-action" href="javascript:void(0)">
                          <i class="icon icon-color bd-dribbble" aria-hidden="true"></i>
                        </a>
                          </div>
                        </div>
                        <div class="pl-0 pl-sm-20 mt-15 mt-sm-0 align-self-center">
                          <button type="button" class="btn btn-primary btn-sm">Follow</button>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <nav>
                    <ul data-plugin="paginator" data-total="50" data-skin="pagination-no-border"></ul>
                  </nav>
                </div>

                 
              </div>
            
          </div>
        </div>
        <!-- End Panel -->
        </div>
        </div>
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="./views/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="./views/global/vendor/jquery/jquery.js"></script>
    <script src="./views/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="./views/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="./views/global/vendor/animsition/animsition.js"></script>
    <script src="./views/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="./views/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="./views/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="./views/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="./views/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="./views/global/vendor/switchery/switchery.js"></script>
    <script src="./views/global/vendor/intro-js/intro.js"></script>
    <script src="./views/global/vendor/screenfull/screenfull.js"></script>
    <script src="./views/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="./views/global/vendor/aspaginator/jquery-asPaginator.min.js"></script>
    
    <!-- Scripts -->
    <script src="./views/global/js/Component.js"></script>
    <script src="./views/global/js/Plugin.js"></script>
    <script src="./views/global/js/Base.js"></script>
    <script src="./views/global/js/Config.js"></script>
    
    <script src="./views/buildComponent/assets/js/Section/Menubar.js"></script>
    <script src="./views/buildComponent/assets/js/Section/Sidebar.js"></script>
    <script src="./views/buildComponent/assets/js/Section/PageAside.js"></script>
    <script src="./views/buildComponent/assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="./views/global/js/config/colors.js"></script>
    <script src="./views/buildComponent/assets/js/config/tour.js"></script>
    <script>Config.set('assets', './views/buildComponent/assets');</script>
    
    <!-- Page -->
    <script src="./views/buildComponent/assets/js/Site.js"></script>
    <script src="./views/global/js/Plugin/asscrollable.js"></script>
    <script src="./views/global/js/Plugin/slidepanel.js"></script>
    <script src="./views/global/js/Plugin/switchery.js"></script>
        <script src="./views/global/js/Plugin/aspaginator.js"></script>
        <script src="./views/global/js/Plugin/responsive-tabs.js"></script>
        <script src="./views/global/js/Plugin/tabs.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
