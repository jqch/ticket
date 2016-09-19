<?php

/* layout.html.twig */
class __TwigTemplate_72bd9b14893bfa304d955ad499cdce141b793ab47ecce7af2766d3267ab99659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28413ad5f4e47cdfccbe11f723d58b88140268e86523bd5d608e054d0fa91c62 = $this->env->getExtension("native_profiler");
        $__internal_28413ad5f4e47cdfccbe11f723d58b88140268e86523bd5d608e054d0fa91c62->enter($__internal_28413ad5f4e47cdfccbe11f723d58b88140268e86523bd5d608e054d0fa91c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 9 ]><html class=\"ie9\"><![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Diaconia</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Vendor CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/fullcalendar/dist/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootgrid/jquery.bootgrid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/google-material-color/dist/palette.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- CSS -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.min.1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.min.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style>
                .card{
                    padding: 15px;
                }
        </style>
        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
    </head>
    <body data-ma-header=\"teal\">
        <header id=\"header\" class=\"media\">
            <div class=\"pull-left h-logo\">
                <a href=\"\" class=\"hidden-xs\">
                    Diaconia
                    <small>Financiera</small>
                </a>

                <div class=\"menu-collapse\" data-ma-action=\"sidebar-open\" data-ma-target=\"main-menu\">
                    <div class=\"mc-wrap\">
                        <div class=\"mcw-line top palette-White bg\"></div>
                        <div class=\"mcw-line center palette-White bg\"></div>
                        <div class=\"mcw-line bottom palette-White bg\"></div>
                    </div>
                </div>
            </div>

            <ul class=\"pull-right h-menu\">
                <li class=\"hm-search-trigger\">
                    <a href=\"index.html\" data-ma-action=\"search-open\">
                        <i class=\"hm-icon zmdi zmdi-search\"></i>
                    </a>
                </li>

                <li class=\"dropdown hidden-xs hidden-sm h-apps\">
                    <a data-toggle=\"dropdown\" href=\"index.html\">
                        <i class=\"hm-icon zmdi zmdi-apps\"></i>
                    </a>
                    <ul class=\"dropdown-menu pull-right\">
                        <li>
                            <a href=\"index.html\">
                                <i class=\"palette-Red-400 bg zmdi zmdi-calendar\"></i>
                                <small>Calendar</small>
                            </a>
                        </li>

                        <li>
                            <a href=\"index.html\">
                                <i class=\"palette-Green-400 bg zmdi zmdi-file-text\"></i>
                                <small>Files</small>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html\">
                                <i class=\"palette-Light-Blue bg zmdi zmdi-email\"></i>
                                <small>Mail</small>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html\">
                                <i class=\"palette-Orange-400 bg zmdi zmdi-trending-up\"></i>
                                <small>Analytics</small>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html\">
                                <i class=\"palette-Purple-300 bg zmdi zmdi-view-headline\"></i>
                                <small>News</small>
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html\">
                                <i class=\"palette-Blue-Grey bg zmdi zmdi-image\"></i>
                                <small>Gallery</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown hidden-xs\">
                    <a data-toggle=\"dropdown\" href=\"index.html\"><i class=\"hm-icon zmdi zmdi-more-vert\"></i></a>
                    <ul class=\"dropdown-menu dm-icon pull-right\">
                        <li class=\"hidden-xs\">
                            <a data-action=\"fullscreen\" href=\"index.html\"><i class=\"zmdi zmdi-fullscreen\"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-action=\"clear-localstorage\" href=\"index.html\"><i class=\"zmdi zmdi-delete\"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"zmdi zmdi-face\"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"zmdi zmdi-settings\"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class=\"hm-alerts\" data-user-alert=\"sua-messages\" data-ma-action=\"sidebar-open\" data-ma-target=\"user-alerts\">
                    <a href=\"index.html\"><i class=\"hm-icon zmdi zmdi-notifications\"></i></a>
                </li>
                <li class=\"dropdown hm-profile\">
                    <a data-toggle=\"dropdown\" href=\"index.html\">
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>

                    <ul class=\"dropdown-menu pull-right dm-icon\">
                        <li>
                            <a href=\"profile-about.html\"><i class=\"zmdi zmdi-account\"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"zmdi zmdi-input-antenna\"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"zmdi zmdi-settings\"></i> Settings</a>
                        </li>
                        <li>
                            <a href=\"index.html\"><i class=\"zmdi zmdi-time-restore\"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class=\"media-body h-search\">
                <form class=\"p-relative\">
                    <input type=\"text\" class=\"hs-input\" placeholder=\"Buscar...\">
                    <i class=\"zmdi zmdi-search hs-reset\" data-ma-action=\"search-clear\"></i>
                </form>
            </div>

        </header>

        <section id=\"main\">
            <aside id=\"s-user-alerts\" class=\"sidebar\" >
                <ul class=\"tab-nav tn-justified tn-icon m-t-10\" data-tab-color=\"teal\">
                    <li><a class=\"sua-messages\" href=\"index.html#sua-messages\" data-toggle=\"tab\"><i class=\"zmdi zmdi-email\"></i></a></li>
                    <li><a class=\"sua-notifications\" href=\"index.html#sua-notifications\" data-toggle=\"tab\"><i class=\"zmdi zmdi-notifications\"></i></a></li>
                    <li><a class=\"sua-tasks\" href=\"index.html#sua-tasks\" data-toggle=\"tab\"><i class=\"zmdi zmdi-view-list-alt\"></i></a></li>
                </ul>

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade\" id=\"sua-messages\">
                        <ul class=\"sua-menu list-inline list-unstyled palette-Light-Blue bg\">
                            <li><a href=\"index.html\"><i class=\"zmdi zmdi-check-all\"></i> Mark all</a></li>
                            <li><a href=\"index.html\"><i class=\"zmdi zmdi-long-arrow-tab\"></i> View all</a></li>
                            <li><a href=\"index.html\" data-ma-action=\"sidebar-close\"><i class=\"zmdi zmdi-close\"></i> Close</a></li>
                        </ul>

                        <div class=\"list-group lg-alt c-overflow\">
                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">David Villa Jacobs</div>
                                    <small class=\"lgi-text\">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Candice Barnes</div>
                                    <small class=\"lgi-text\">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Jeannette Lawson</div>
                                    <small class=\"lgi-text\">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Darla Mckinney</div>
                                    <small class=\"lgi-text\">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Rudolph Perez</div>
                                    <small class=\"lgi-text\">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>

                        <a href=\"index.html\" class=\"btn btn-float btn-danger m-btn\">
                            <i class=\"zmdi zmdi-plus\"></i>
                        </a>
                    </div>
                    <div class=\"tab-pane fade\" id=\"sua-notifications\">
                        <ul class=\"sua-menu list-inline list-unstyled palette-Orange bg\">
                            <li><a href=\"index.html\"><i class=\"zmdi zmdi-volume-off\"></i> Mute</a></li>
                            <li><a href=\"index.html\"><i class=\"zmdi zmdi-long-arrow-tab\"></i> View all</a></li>
                            <li><a href=\"index.html\" data-ma-action=\"sidebar-close\"><i class=\"zmdi zmdi-close\"></i> Close</a></li>
                        </ul>

                        <div class=\"list-group lg-alt c-overflow\">
                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>

                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">David Villa Jacobs</div>
                                    <small class=\"lgi-text\">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Candice Barnes</div>
                                    <small class=\"lgi-text\">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Jeannette Lawson</div>
                                    <small class=\"lgi-text\">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Darla Mckinney</div>
                                    <small class=\"lgi-text\">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href=\"index.html\" class=\"list-group-item media\">
                                <div class=\"pull-left\">
                                    <img class=\"avatar-img\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/profile-pics/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"media-body\">
                                    <div class=\"lgi-heading\">Rudolph Perez</div>
                                    <small class=\"lgi-text\">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"sua-tasks\">
                        <ul class=\"sua-menu list-inline list-unstyled palette-Green-400 bg\">
                            <li><a href=\"index.html\"><i class=\"zmdi zmdi-time\"></i> Archived</a></li>
                            <li><a href=\"index.html\"><i class=\"zmdi zmdi-check-all\"></i> Mark all</a></li>
                            <li><a href=\"index.html\" data-ma-action=\"sidebar-close\"><i class=\"zmdi zmdi-close\"></i> Close</a></li>
                        </ul>

                        <div class=\"list-group lg-alt c-overflow\">
                            <div class=\"list-group-item\">
                                <div class=\"lgi-heading m-b-5\">HTML5 Validation Report</div>

                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\">
                                        <span class=\"sr-only\">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"lgi-heading m-b-5\">Google Chrome Extension</div>

                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                        <span class=\"sr-only\">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"lgi-heading m-b-5\">Social Intranet Projects</div>

                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                        <span class=\"sr-only\">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"lgi-heading m-b-5\">Bootstrap Admin Template</div>

                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                        <span class=\"sr-only\">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"list-group-item\">
                                <div class=\"lgi-heading m-b-5\">Youtube Client App</div>

                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                        <span class=\"sr-only\">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href=\"index.html\" class=\"btn btn-float btn-danger m-btn\">
                            <i class=\"zmdi zmdi-plus\"></i>
                        </a>
                    </div>
                </div>
            </aside>

            <aside id=\"s-main-menu\" class=\"sidebar\">
                <div class=\"smm-header\">
                    <i class=\"zmdi zmdi-long-arrow-left\" data-ma-action=\"sidebar-close\"></i>
                </div>

                <ul class=\"smm-alerts\">
                    <li class=\"active\" data-user-alert=\"sua-messages\" data-ma-action=\"sidebar-open\" data-ma-target=\"user-alerts\">
                        <i class=\"zmdi zmdi-email\"></i>
                    </li>
                    <li data-user-alert=\"sua-notifications\" data-ma-action=\"sidebar-open\" data-ma-target=\"user-alerts\">
                        <i class=\"zmdi zmdi-notifications\"></i>
                    </li>
                    <li data-user-alert=\"sua-tasks\" data-ma-action=\"sidebar-open\" data-ma-target=\"user-alerts\">
                        <i class=\"zmdi zmdi-view-list-alt\"></i>
                    </li>
                </ul>

                <ul class=\"main-menu\">
                    <li class=\"active\">
                        <a href=\"";
        // line 362
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"zmdi zmdi-home\"></i> Home</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 365
        echo $this->env->getExtension('routing')->getPath("agencia");
        echo "\"><i class=\"zmdi zmdi-home\"></i> Agencias</a>
                    </li>
s                </ul>
            </aside>

            <section id=\"content\">
                <div class=\"container\">
                        ";
        // line 372
        $this->displayBlock('body', $context, $blocks);
        // line 373
        echo "                </div>
            </section>

            <footer id=\"footer\">
                Copyright &copy; 2016 Diaconia

                <ul class=\"f-menu\">
                    <li><a href=\"index.html\">Home</a></li>
                    <li><a href=\"index.html\">Dashboard</a></li>
                    <li><a href=\"index.html\">Reports</a></li>
                    <li><a href=\"index.html\">Support</a></li>
                    <li><a href=\"index.html\">Contact</a></li>
                </ul>
            </footer>

        </section>

        <!-- Page Loader -->
        <div class=\"page-loader palette-Teal bg\">
            <div class=\"preloader pl-xl pls-white\">
                <svg class=\"pl-circular\" viewBox=\"25 25 50 50\">
                    <circle class=\"plc-path\" cx=\"50\" cy=\"50\" r=\"20\"/>
                </svg>
            </div>
        </div>
        <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/Waves/dist/waves.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-growl/bootstrap-growl.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/salvattore/dist/salvattore.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/sparklines/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot-charts/curved-line-chart.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot-charts/line-chart.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/charts.js"), "html", null, true);
        echo "\"></script>


        <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/myfunctions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/actions.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootgrid/jquery.bootgrid.updated.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 424
        $this->displayBlock('javascripts', $context, $blocks);
        // line 425
        echo "    </body>
  </html>
";
        
        $__internal_28413ad5f4e47cdfccbe11f723d58b88140268e86523bd5d608e054d0fa91c62->leave($__internal_28413ad5f4e47cdfccbe11f723d58b88140268e86523bd5d608e054d0fa91c62_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0fd6cfe50923654b7fe62229dc5b6747286474b564f946ca3081355b13dc72d = $this->env->getExtension("native_profiler");
        $__internal_b0fd6cfe50923654b7fe62229dc5b6747286474b564f946ca3081355b13dc72d->enter($__internal_b0fd6cfe50923654b7fe62229dc5b6747286474b564f946ca3081355b13dc72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0fd6cfe50923654b7fe62229dc5b6747286474b564f946ca3081355b13dc72d->leave($__internal_b0fd6cfe50923654b7fe62229dc5b6747286474b564f946ca3081355b13dc72d_prof);

    }

    // line 372
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb4b43ce8c779c66706c3233ad5b9a4d784a0df8e1b5641e5bad2e5b197dbf6e = $this->env->getExtension("native_profiler");
        $__internal_eb4b43ce8c779c66706c3233ad5b9a4d784a0df8e1b5641e5bad2e5b197dbf6e->enter($__internal_eb4b43ce8c779c66706c3233ad5b9a4d784a0df8e1b5641e5bad2e5b197dbf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb4b43ce8c779c66706c3233ad5b9a4d784a0df8e1b5641e5bad2e5b197dbf6e->leave($__internal_eb4b43ce8c779c66706c3233ad5b9a4d784a0df8e1b5641e5bad2e5b197dbf6e_prof);

    }

    // line 424
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b2bad304acc38cefe26f95820236186afa680cbb41eb39a415db684eeae493a = $this->env->getExtension("native_profiler");
        $__internal_5b2bad304acc38cefe26f95820236186afa680cbb41eb39a415db684eeae493a->enter($__internal_5b2bad304acc38cefe26f95820236186afa680cbb41eb39a415db684eeae493a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5b2bad304acc38cefe26f95820236186afa680cbb41eb39a415db684eeae493a->leave($__internal_5b2bad304acc38cefe26f95820236186afa680cbb41eb39a415db684eeae493a_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 424,  610 => 372,  599 => 26,  590 => 425,  588 => 424,  584 => 423,  580 => 422,  576 => 421,  572 => 420,  568 => 419,  562 => 416,  557 => 414,  553 => 413,  549 => 412,  545 => 411,  541 => 410,  537 => 409,  533 => 408,  528 => 406,  524 => 405,  520 => 404,  516 => 403,  512 => 402,  508 => 401,  504 => 400,  500 => 399,  496 => 398,  469 => 373,  467 => 372,  457 => 365,  451 => 362,  358 => 272,  345 => 262,  332 => 252,  319 => 242,  305 => 231,  279 => 208,  266 => 198,  253 => 188,  240 => 178,  226 => 167,  175 => 119,  81 => 27,  79 => 26,  70 => 20,  66 => 19,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  34 => 8,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 9 ]><html class="ie9"><![endif]-->*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>Diaconia</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <!-- Vendor CSS -->*/
/*         <link href="{{asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bootgrid/jquery.bootgrid.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('vendors/bower_components/google-material-color/dist/palette.css')}}" rel="stylesheet">*/
/* */
/*         <!-- CSS -->*/
/*         <link href="{{asset('css/app.min.1.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('css/app.min.2.css')}}" rel="stylesheet">*/
/*         <style>*/
/*                 .card{*/
/*                     padding: 15px;*/
/*                 }*/
/*         </style>*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*     </head>*/
/*     <body data-ma-header="teal">*/
/*         <header id="header" class="media">*/
/*             <div class="pull-left h-logo">*/
/*                 <a href="" class="hidden-xs">*/
/*                     Diaconia*/
/*                     <small>Financiera</small>*/
/*                 </a>*/
/* */
/*                 <div class="menu-collapse" data-ma-action="sidebar-open" data-ma-target="main-menu">*/
/*                     <div class="mc-wrap">*/
/*                         <div class="mcw-line top palette-White bg"></div>*/
/*                         <div class="mcw-line center palette-White bg"></div>*/
/*                         <div class="mcw-line bottom palette-White bg"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <ul class="pull-right h-menu">*/
/*                 <li class="hm-search-trigger">*/
/*                     <a href="index.html" data-ma-action="search-open">*/
/*                         <i class="hm-icon zmdi zmdi-search"></i>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li class="dropdown hidden-xs hidden-sm h-apps">*/
/*                     <a data-toggle="dropdown" href="index.html">*/
/*                         <i class="hm-icon zmdi zmdi-apps"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu pull-right">*/
/*                         <li>*/
/*                             <a href="index.html">*/
/*                                 <i class="palette-Red-400 bg zmdi zmdi-calendar"></i>*/
/*                                 <small>Calendar</small>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <a href="index.html">*/
/*                                 <i class="palette-Green-400 bg zmdi zmdi-file-text"></i>*/
/*                                 <small>Files</small>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html">*/
/*                                 <i class="palette-Light-Blue bg zmdi zmdi-email"></i>*/
/*                                 <small>Mail</small>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html">*/
/*                                 <i class="palette-Orange-400 bg zmdi zmdi-trending-up"></i>*/
/*                                 <small>Analytics</small>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html">*/
/*                                 <i class="palette-Purple-300 bg zmdi zmdi-view-headline"></i>*/
/*                                 <small>News</small>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html">*/
/*                                 <i class="palette-Blue-Grey bg zmdi zmdi-image"></i>*/
/*                                 <small>Gallery</small>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown hidden-xs">*/
/*                     <a data-toggle="dropdown" href="index.html"><i class="hm-icon zmdi zmdi-more-vert"></i></a>*/
/*                     <ul class="dropdown-menu dm-icon pull-right">*/
/*                         <li class="hidden-xs">*/
/*                             <a data-action="fullscreen" href="index.html"><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a data-action="clear-localstorage" href="index.html"><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="zmdi zmdi-face"></i> Privacy Settings</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="zmdi zmdi-settings"></i> Other Settings</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="hm-alerts" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">*/
/*                     <a href="index.html"><i class="hm-icon zmdi zmdi-notifications"></i></a>*/
/*                 </li>*/
/*                 <li class="dropdown hm-profile">*/
/*                     <a data-toggle="dropdown" href="index.html">*/
/*                         <img src="{{asset('img/profile-pics/1.jpg')}}" alt="">*/
/*                     </a>*/
/* */
/*                     <ul class="dropdown-menu pull-right dm-icon">*/
/*                         <li>*/
/*                             <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="zmdi zmdi-settings"></i> Settings</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="index.html"><i class="zmdi zmdi-time-restore"></i> Logout</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/* */
/*             <div class="media-body h-search">*/
/*                 <form class="p-relative">*/
/*                     <input type="text" class="hs-input" placeholder="Buscar...">*/
/*                     <i class="zmdi zmdi-search hs-reset" data-ma-action="search-clear"></i>*/
/*                 </form>*/
/*             </div>*/
/* */
/*         </header>*/
/* */
/*         <section id="main">*/
/*             <aside id="s-user-alerts" class="sidebar" >*/
/*                 <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">*/
/*                     <li><a class="sua-messages" href="index.html#sua-messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>*/
/*                     <li><a class="sua-notifications" href="index.html#sua-notifications" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>*/
/*                     <li><a class="sua-tasks" href="index.html#sua-tasks" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>*/
/*                 </ul>*/
/* */
/*                 <div class="tab-content">*/
/*                     <div class="tab-pane fade" id="sua-messages">*/
/*                         <ul class="sua-menu list-inline list-unstyled palette-Light-Blue bg">*/
/*                             <li><a href="index.html"><i class="zmdi zmdi-check-all"></i> Mark all</a></li>*/
/*                             <li><a href="index.html"><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>*/
/*                             <li><a href="index.html" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="list-group lg-alt c-overflow">*/
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/1.jpg')}}" alt="">*/
/*                                 </div>*/
/* */
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">David Villa Jacobs</div>*/
/*                                     <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/5.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Candice Barnes</div>*/
/*                                     <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/3.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Jeannette Lawson</div>*/
/*                                     <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/4.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Darla Mckinney</div>*/
/*                                     <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/2.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Rudolph Perez</div>*/
/*                                     <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                         <a href="index.html" class="btn btn-float btn-danger m-btn">*/
/*                             <i class="zmdi zmdi-plus"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="sua-notifications">*/
/*                         <ul class="sua-menu list-inline list-unstyled palette-Orange bg">*/
/*                             <li><a href="index.html"><i class="zmdi zmdi-volume-off"></i> Mute</a></li>*/
/*                             <li><a href="index.html"><i class="zmdi zmdi-long-arrow-tab"></i> View all</a></li>*/
/*                             <li><a href="index.html" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="list-group lg-alt c-overflow">*/
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/1.jpg')}}" alt="">*/
/*                                 </div>*/
/* */
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">David Villa Jacobs</div>*/
/*                                     <small class="lgi-text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/5.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Candice Barnes</div>*/
/*                                     <small class="lgi-text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/3.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Jeannette Lawson</div>*/
/*                                     <small class="lgi-text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/4.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Darla Mckinney</div>*/
/*                                     <small class="lgi-text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>*/
/*                                 </div>*/
/*                             </a>*/
/* */
/*                             <a href="index.html" class="list-group-item media">*/
/*                                 <div class="pull-left">*/
/*                                     <img class="avatar-img" src="{{asset('img/profile-pics/2.jpg')}}" alt="">*/
/*                                 </div>*/
/*                                 <div class="media-body">*/
/*                                     <div class="lgi-heading">Rudolph Perez</div>*/
/*                                     <small class="lgi-text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane fade" id="sua-tasks">*/
/*                         <ul class="sua-menu list-inline list-unstyled palette-Green-400 bg">*/
/*                             <li><a href="index.html"><i class="zmdi zmdi-time"></i> Archived</a></li>*/
/*                             <li><a href="index.html"><i class="zmdi zmdi-check-all"></i> Mark all</a></li>*/
/*                             <li><a href="index.html" data-ma-action="sidebar-close"><i class="zmdi zmdi-close"></i> Close</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="list-group lg-alt c-overflow">*/
/*                             <div class="list-group-item">*/
/*                                 <div class="lgi-heading m-b-5">HTML5 Validation Report</div>*/
/* */
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">*/
/*                                         <span class="sr-only">95% Complete (success)</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="list-group-item">*/
/*                                 <div class="lgi-heading m-b-5">Google Chrome Extension</div>*/
/* */
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                         <span class="sr-only">80% Complete (success)</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="list-group-item">*/
/*                                 <div class="lgi-heading m-b-5">Social Intranet Projects</div>*/
/* */
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/*                                         <span class="sr-only">20% Complete</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="list-group-item">*/
/*                                 <div class="lgi-heading m-b-5">Bootstrap Admin Template</div>*/
/* */
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/*                                         <span class="sr-only">60% Complete (warning)</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="list-group-item">*/
/*                                 <div class="lgi-heading m-b-5">Youtube Client App</div>*/
/* */
/*                                 <div class="progress">*/
/*                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                         <span class="sr-only">80% Complete (danger)</span>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <a href="index.html" class="btn btn-float btn-danger m-btn">*/
/*                             <i class="zmdi zmdi-plus"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </aside>*/
/* */
/*             <aside id="s-main-menu" class="sidebar">*/
/*                 <div class="smm-header">*/
/*                     <i class="zmdi zmdi-long-arrow-left" data-ma-action="sidebar-close"></i>*/
/*                 </div>*/
/* */
/*                 <ul class="smm-alerts">*/
/*                     <li class="active" data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">*/
/*                         <i class="zmdi zmdi-email"></i>*/
/*                     </li>*/
/*                     <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">*/
/*                         <i class="zmdi zmdi-notifications"></i>*/
/*                     </li>*/
/*                     <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">*/
/*                         <i class="zmdi zmdi-view-list-alt"></i>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*                 <ul class="main-menu">*/
/*                     <li class="active">*/
/*                         <a href="{{path('login')}}"><i class="zmdi zmdi-home"></i> Home</a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="{{path('agencia')}}"><i class="zmdi zmdi-home"></i> Agencias</a>*/
/*                     </li>*/
/* s                </ul>*/
/*             </aside>*/
/* */
/*             <section id="content">*/
/*                 <div class="container">*/
/*                         {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </section>*/
/* */
/*             <footer id="footer">*/
/*                 Copyright &copy; 2016 Diaconia*/
/* */
/*                 <ul class="f-menu">*/
/*                     <li><a href="index.html">Home</a></li>*/
/*                     <li><a href="index.html">Dashboard</a></li>*/
/*                     <li><a href="index.html">Reports</a></li>*/
/*                     <li><a href="index.html">Support</a></li>*/
/*                     <li><a href="index.html">Contact</a></li>*/
/*                 </ul>*/
/*             </footer>*/
/* */
/*         </section>*/
/* */
/*         <!-- Page Loader -->*/
/*         <div class="page-loader palette-Teal bg">*/
/*             <div class="preloader pl-xl pls-white">*/
/*                 <svg class="pl-circular" viewBox="25 25 50 50">*/
/*                     <circle class="plc-path" cx="50" cy="50" r="20"/>*/
/*                 </svg>*/
/*             </div>*/
/*         </div>*/
/*         <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('vendors/bower_components/flot/jquery.flot.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>*/
/*         <script src="{{asset('vendors/sparklines/jquery.sparkline.min.js')}}"></script>*/
/*         <script src="{{asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>*/
/*         <script src="{{asset('js/flot-charts/curved-line-chart.js')}}"></script>*/
/*         <script src="{{asset('js/flot-charts/line-chart.js')}}"></script>*/
/* */
/*         <script src="{{asset('js/charts.js')}}"></script>*/
/* */
/* */
/*         <script src="{{asset('js/myfunctions.js')}}"></script>*/
/*         <script src="{{asset('js/functions.js')}}"></script>*/
/*         <script src="{{asset('js/actions.js')}}"></script>*/
/*         <script src="{{asset('js/demo.js')}}"></script>*/
/*         <script src="{{asset('vendors/bootgrid/jquery.bootgrid.updated.min.js')}}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/*   </html>*/
/* */
