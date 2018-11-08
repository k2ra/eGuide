<?php include(HTML_DIR . 'components/header.php'); ?>
<link rel="stylesheet" href="./views/global/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="./views/buildComponent/assets/examples/css/forms/advanced.css">
<link rel="stylesheet" href="./views/app/plugin/fullCalendar/fullcalendar.min.css">
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
                        <div class="example">
                            <div class="form-group form-material col-md-6">
                                <label class="form-control-label" for="inputBasicFirstName">Grupo : </label>
                                <select data-plugin="selectpicker" id="listaEstudiante">
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
                </div>
            </div>
            <div class="panel">
                <div class="panel-body container-fluid">
                                          
                    <div id="calendario"></div>

                   <!--AddEvent Dialog -->
                    <div class="modal fade" id="addNewEvent" aria-hidden="true" aria-labelledby="addNewEvent"
                        role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-simple">
                        <form class="modal-content form-horizontal" action="#" method="post" role="form">
                            <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                            <h4 class="modal-title">New Event</h4>
                            </div>
                            <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="ename">Name:</label>
                                <div class="col-md-10">
                                <input type="text" class="form-control" id="ename" name="ename">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="starts">Starts:</label>
                                <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="starts" data-container="#addNewEvent"
                                    data-plugin="datepicker">
                                    <span class="input-group-addon">
                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="ends">Ends:</label>
                                <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="ends" data-container="#addNewEvent"
                                    data-plugin="datepicker">
                                    <span class="input-group-addon">
                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="repeats">Repeats:</label>
                                <div class="col-md-10">
                                <input type="text" class="form-control" id="repeats" name="repeats" data-plugin="TouchSpin"
                                    data-min="0" data-max="10" value="0" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-control-label col-md-2">Color:</label>
                                <div class="col-md-10">
                                <ul class="color-selector">
                                    <li class="bg-blue-600">
                                    <input type="radio" checked name="eventColorChosen" id="eventColorChosen2">
                                    <label for="eventColorChosen2"></label>
                                    </li>
                                    <li class="bg-green-600">
                                    <input type="radio" name="eventColorChosen" id="eventColorChosen3">
                                    <label for="eventColorChosen3"></label>
                                    </li>
                                    <li class="bg-cyan-600">
                                    <input type="radio" name="eventColorChosen" id="eventColorChosen4">
                                    <label for="eventColorChosen4"></label>
                                    </li>
                                    <li class="bg-orange-600">
                                    <input type="radio" name="eventColorChosen" id="eventColorChosen5">
                                    <label for="eventColorChosen5"></label>
                                    </li>
                                    <li class="bg-red-600">
                                    <input type="radio" name="eventColorChosen" id="eventColorChosen6">
                                    <label for="eventColorChosen6"></label>
                                    </li>
                                    <li class="bg-blue-grey-600">
                                    <input type="radio" name="eventColorChosen" id="eventColorChosen7">
                                    <label for="eventColorChosen7"></label>
                                    </li>
                                    <li class="bg-purple-600">
                                    <input type="radio" name="eventColorChosen" id="eventColorChosen8">
                                    <label for="eventColorChosen8"></label>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 form-control-label" for="people">People:</label>
                                <div class="col-md-10">
                                <select id="eventPeople" multiple="multiple" class="plugin-selective"></select>
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <div class="form-actions">
                                <button class="btn btn-primary" data-dismiss="modal" type="button">Add this event</button>
                                <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- End AddEvent Dialog -->

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
        <script src="./views/global/vendor/jquery-ui/jquery-ui.min.js"></script>
        <!--<script src="./views/global/vendor/moment/moment.min.js"></script>
         <script src="./views/global/vendor/fullcalendar/fullcalendar.js"></script>-->
        <script src="./views/global/vendor/jquery-selective/jquery-selective.min.js"></script>
        <script src="./views/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="./views/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
        <script src="./views/global/vendor/bootbox/bootbox.js"></script>
    
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
        <script src="./views/global/js/Plugin/bootstrap-touchspin.js"></script>
        <script src="./views/global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="./views/global/js/Plugin/material.js"></script>
        <script src="./views/global/js/Plugin/action-btn.js"></script>
        <script src="./views/global/js/Plugin/editlist.js"></script>
        <script src="./views/global/js/Plugin/bootbox.js"></script>
        <script src="./views/buildComponent/assets/js/Site.js"></script>
        <!-- <script src="./views/buildComponent/assets/js/App/Calendar.js"></script>-->
        <script src="./views/app/plugin/fullCalendar/moment.js"></script>
        <script src="./views/buildComponent/assets/examples/js/forms/advanced.js"></script>
        <script src="./views/app/js/profesorAsignaciones.js"></script>
        <script src="./views/app/plugin/fullCalendar/fullcalendar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/es-us.js"></script>

        <script src="./views/app/js/menu.js"></script>
       
        
  </body>
</html>