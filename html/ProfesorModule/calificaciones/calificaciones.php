<?php include(HTML_DIR . 'components/header.php'); ?>
<link rel="stylesheet" href="./views/global/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="./views/buildComponent/assets/examples/css/forms/advanced.css">
    
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
                       <!--  <div class="example"> -->
                            <div class="form-group form-material col-md-6">
                                <label class="form-control-label" for="inputBasicFirstName">Grupo : </label>
                                <select class="form-control" id="listaEstudiante">
                                    <option value='0'>-Seleccionar Grupo-</option>
                                   <?php
                                        foreach($resp as $values){
                                            echo "<option mat='".$values['materia']."' value ='".$values['id']."'>".$values['grupo']."</option>";
                                        }
                                       
                                    ?>
                                </select>
                               
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                    <div class="row" id= agregarNotas hidden><button>Agregar Nota</button></div>
            </div>
            
            <div class="panel">
                <div class="panel-body container-fluid">
               
                    <table class="table table-striped" id="tblestudiantes" data-tablesaw-mode="swipe" data-tablesaw-mode-switch
                    data-tablesaw-minimap>
                        <thead>
                        <tr>
                            <th >Aula</th>
                            <th >Alumno</th>
                            <th>Calificaciones</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="lista">
            
                        </tbody>
                    </table>

                </div>


                <!--AddEvent Dialog -->
                <div class="modal fade" id="NuevaNota" aria-hidden="true" aria-labelledby="NuevaNota"
                        role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-simple">
                        <form class="modal-content form-horizontal" action="#" method="post" role="form" id = "formEvents">
                            <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Agregar Nota</h4>
                            </div>
                            <div class="modal-body">
                                
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="starts">Descripcion:</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="descripcion" name="descripcion">
                                            
                                        </div>
                                    </div>
                                </div>
                                        
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="starts">Calificacion:</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="calificacion" name="calificacion" >
                                            
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="materia" name="materia" hidden>
                                <input type="text" class="form-control" id="estudiante" name="estudiante" hidden>
                                
                            </div>
                            <div class="modal-footer">
                                <div class="form-actions">
                                    <button class="btn btn-primary" data-dismiss="modal" type="button" id="guardaNota">Guardar</button>
                                    <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
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
        <script src="./views/global/vendor/select2/select2.full.min.js"></script>
        <script src="./views/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
        <script src="./views/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="./views/global/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script src="./views/global/vendor/icheck/icheck.min.js"></script>
        <script src="./views/global/vendor/switchery/switchery.js"></script>
        <script src="./views/global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="./views/global/vendor/ionrangeslider/ion.rangeSlider.min.js"></script>
        <script src="./views/global/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="./views/global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="./views/global/vendor/ascolor/jquery-asColor.min.js"></script>
        <script src="./views/global/vendor/asgradient/jquery-asGradient.min.js"></script>
        <script src="./views/global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
        <script src="./views/global/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="./views/global/vendor/jquery-knob/jquery.knob.js"></script>
        <script src="./views/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
        <script src="./views/global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
        <!--<script src="./views/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>-->
        <script src="./views/global/vendor/timepicker/jquery.timepicker.min.js"></script>
        <script src="./views/global/vendor/datepair/datepair.min.js"></script>
        <script src="./views/global/vendor/datepair/jquery.datepair.min.js"></script>
        <script src="./views/global/vendor/jquery-strength/password_strength.js"></script>
        <script src="./views/global/vendor/jquery-strength/jquery-strength.min.js"></script>
        <script src="./views/global/vendor/multi-select/jquery.multi-select.js"></script>
        <script src="./views/global/vendor/typeahead-js/bloodhound.min.js"></script>
        <script src="./views/global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
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
        <script src="./views/global/js/Plugin/select2.js"></script>
        <script src="./views/global/js/Plugin/bootstrap-tokenfield.js"></script>
        <script src="./views/global/js/Plugin/bootstrap-tagsinput.js"></script>
        <script src="./views/global/js/Plugin/bootstrap-select.js"></script>
        <script src="./views/global/js/Plugin/icheck.js"></script>
        <script src="./views/global/js/Plugin/switchery.js"></script>
        <script src="./views/global/js/Plugin/asrange.js"></script>
        <script src="./views/global/js/Plugin/ionrangeslider.js"></script>
        <script src="./views/global/js/Plugin/asspinner.js"></script>
        <script src="./views/global/js/Plugin/clockpicker.js"></script>
        <script src="./views/global/js/Plugin/ascolorpicker.js"></script>
        <script src="./views/global/js/Plugin/bootstrap-maxlength.js"></script>
        <script src="./views/global/js/Plugin/jquery-knob.js"></script>
        <script src="./views/global/js/Plugin/bootstrap-touchspin.js"></script>
        <script src="./views/global/js/Plugin/card.js"></script>
        <script src="./views/global/js/Plugin/jquery-labelauty.js"></script>
       
        <script src="./views/global/js/Plugin/jt-timepicker.js"></script>
        <script src="./views/global/js/Plugin/datepair.js"></script>
        <script src="./views/global/js/Plugin/jquery-strength.js"></script>
        <script src="./views/global/js/Plugin/multi-select.js"></script>
        <script src="./views/global/js/Plugin/jquery-placeholder.js"></script>
    
        <script src="./views/buildComponent/assets/examples/js/forms/advanced.js"></script>
        <script src="./views/app/js/menu.js"></script>
        <script src="./views/app/js/calificaciones.js"></script>
        
  </body>
</html>