<?php include(HTML_DIR . 'components/header.php'); ?>

    
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include(HTML_DIR . 'components/navbar.php'); ?>
    
    <?php include(HTML_DIR . 'components/sideMenu.php'); ?>

    <!-- Page -->
    <div class="page">
      <div class="page-content">
        <div class="panel">
            <div class="panel-body container-fluid">
                <div class="row row-lg">
                    <div class="col-md-6 col-xl-4">
                        <div class="example-wrap">
                            <div class="form-group form-material col-md-6">
                                <label class="form-control-label" for="inputBasicFirstName">Grupo : </label>
                                
                                    <select class="form-control" id="listaEstudiante">
                                        <option value='0'>-Seleccionar Grupo-</option>
                                       <?php
                                            foreach($resp as $values){
                                                echo "<option value ='".$values['id']."'>".$values['grupo']."</option>";
                                            }
                                           
                                        ?>
                                    </select>

                                
                                
                            </div>
                        </div>
                    </div>
                    <div id="actualizado" class="col align-self-center row justify-content-end col-md-4 offset-md-2 col-xl-4">
                        <label for="actualizado"></label>
                    </div>
                </div>
            </div>
            <div class="panel" >
                <div class="panel-body container-fluid" >
                                          
                    <table class="table table-striped" id="tblestudiantes" name="tblestudiantes" data-tablesaw-mode="swipe" data-tablesaw-mode-switch
                    data-tablesaw-minimap>
                        <thead>
                        <tr>
                            <th data-tablesaw-priority="3">Alumno</th>
                            <th data-tablesaw-priority="3">Asistencia</th>
                  
                        </tr>
                        </thead>
                        <tbody id="lista">
            
                        </tbody>
                    </table>

                    <div id="contenedor" class= "row"></div>
                </div>
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
    <script src="./views/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
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
    <script src="./views/global/js/Plugin/jquery-placeholder.js"></script>
    <script src="./views/global/js/Plugin/input-group-file.js"></script>

    <script src="./views/app/js/menu.js"></script>
    <script src="./views/app/js/asistencias.js"></script>
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