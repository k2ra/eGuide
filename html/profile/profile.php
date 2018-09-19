<?php include(HTML_DIR . 'components/header.php'); ?>
<link rel="stylesheet" href="./views/buildComponent/assets/examples/css/pages/profile.css">
</head>
  <body class="animsition page-profile">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include(HTML_DIR . 'components/navbar.php'); ?>
    
    <?php include(HTML_DIR . 'components/sideMenu.php'); ?>
    <!-- Page -->
    <div class="page">
      <div class="page-content container-fluid">
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
              <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">

                <?php include(HTML_DIR . 'components/panelTab.php'); ?>
                <div class="tab-content">
                  <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/2.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Ida Fleming
                              <small>posted an updated</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/3.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Julius
                              <small>uploaded 4 photos</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief clearfix">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/4.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Owen Hunt
                              <small>posted a new note</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit. Integer nec odio. Praesent libero. Sed cursus
                              ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                              elementum imperdiet. Duis sagittis ipsum. Praesent
                              mauris. Fusce nec tellus sed augue semper porta.
                              Mauris massa.</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/5.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Terrance Arnold
                              <small>posted a new blog</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">
                              <div class="media">
                                <a class="pr-20">
                                  <img class="w-160" src="./views/global/photos/placeholder.png" alt="...">
                                </a>
                                <div class="media-body pl-20">
                                  <h4 class="mt-0 mb-5">Getting Started</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Integer nec odio. Praesent libero. Sed
                                    cursus ante dapibus diam. Sed nisi. Nulla quis
                                    sem at nibh elementum imperdiet. Duis sagittis
                                    ipsum. Praesent mauris.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/2.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Ida Fleming
                              <small>posted an new activity comment</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla. Nulla
                              vel metus.</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/3.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Julius
                              <small>posted an updated</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit. Integer nec odio. Praesent libero. Sed cursus
                              ante dapibus diam.</div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)"
                      role="button">Show more</a>
                  </div>

                  <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/5.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Terrance Arnold
                              <small>posted a new blog</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">
                              <div class="media">
                                <a class="pr-20">
                                  <img class="w-160" src="./views/global/photos/placeholder.png" alt="...">
                                </a>
                                <div class="media-body pl-20">
                                  <h4 class="mt-0 mb-5">Getting Started</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Integer nec odio. Praesent libero. Sed
                                    cursus ante dapibus diam. Sed nisi. Nulla quis
                                    sem at nibh elementum imperdiet. Duis sagittis
                                    ipsum. Praesent mauris.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/2.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Ida Fleming
                              <small>posted an updated</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/4.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Owen Hunt
                              <small>posted a new note</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit. Integer nec odio. Praesent libero. Sed cursus
                              ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                              elementum imperdiet. Duis sagittis ipsum. Praesent
                              mauris. Fusce nec tellus sed augue semper porta.
                              Mauris massa.</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/2.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Ida Fleming
                              <small>posted an new activity comment</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Cras sit amet nibh libero, in gravida nulla. Nulla
                              vel metus.</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/3.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Julius
                              <small>uploaded 4 photos</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief clearfix">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                              <img class="profile-uploaded" src="./views/global/photos/placeholder.png" alt="...">
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <?php include(HTML_DIR . 'profesores/profesoresAlt.php'); ?>
                  <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/2.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Ida Fleming
                              <small>posted an updated</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/5.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Terrance Arnold
                              <small>posted a new blog</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">
                              <div class="media">
                                <a class="pr-20">
                                  <img class="w-160" src="./views/global/photos/placeholder.png" alt="...">
                                </a>
                                <div class="media-body pl-20">
                                  <h4 class="mt-0 mb-5">Getting Started</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Integer nec odio. Praesent libero. Sed
                                    cursus ante dapibus diam. Sed nisi. Nulla quis
                                    sem at nibh elementum imperdiet. Duis sagittis
                                    ipsum. Praesent mauris.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/4.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Owen Hunt
                              <small>posted a new note</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit. Integer nec odio. Praesent libero. Sed cursus
                              ante dapibus diam. Sed nisi. Nulla quis sem at nibh
                              elementum imperdiet. Duis sagittis ipsum. Praesent
                              mauris. Fusce nec tellus sed augue semper porta.
                              Mauris massa.</div>
                          </div>
                        </div>
                      </li>

                      <li class="list-group-item">
                        <div class="media">
                          <div class="pr-20">
                            <a class="avatar" href="javascript:void(0)">
                              <img class="img-fluid" src="./views/global/portraits/3.jpg"
                                alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0 mb-5">Julius
                              <small>posted an updated</small>
                            </h5>
                            <small>active 14 minutes ago</small>
                            <div class="profile-brief">Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit. Integer nec odio. Praesent libero. Sed cursus
                              ante dapibus diam.</div>
                          </div>
                        </div>
                      </li>
                    </ul>
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

    <!-- Custom --> 
    <script src="./views/app/js/profile.js"></script>
  </body>
</html>
