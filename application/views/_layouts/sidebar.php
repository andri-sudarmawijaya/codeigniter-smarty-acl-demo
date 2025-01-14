
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->smarty_acl->get_admin()['name']; ?></div>
                    <div class="email"><?php echo $this->smarty_acl->get_admin()['group_name']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/assets/pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a href="/assets/pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/assets/pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="/assets/pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="/assets/pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/assets/pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="/assets/pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="/assets/pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="/assets/pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="/assets/pages/widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="/assets/pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="/assets/pages/ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="/assets/pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="/assets/pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="/assets/pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="/assets/pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="/assets/pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="/assets/pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="/assets/pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="/assets/pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="/assets/pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="/assets/pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="/assets/pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="/assets/pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="/assets/pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="/assets/pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li class="active">
                                <a href="/assets/pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="/assets/pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="/assets/pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/assets/pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="/assets/pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="/assets/pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">USER</li>
                    <?php if ($this->smarty_acl->logged_in(FALSE)): ?>
                        <li>
                            <a href="/account">
                                <i class="material-icons col-green">donut_large</i>
                                <span>Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="/register">
                                <i class="material-icons col-grey">donut_large</i>
                                <span>Register</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="/login">
                                <i class="material-icons col-blue">donut_large</i>
                                <span>Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="/logout">
                                <i class="material-icons col-red">donut_large</i>
                                <span>Logout</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->smarty_acl->logged_in()): ?>
                        <li class="header">ADMIN</li>
                        <?php if ($this->smarty_acl->module_authorized('users')): ?>
                            <li>
                                <a href="/admin/users">
                                    <i class="material-icons col-red">donut_large</i>
                                    <span>Users</span>
                                </a>
                            </li>
                        <?php endif; ?>
                
                        <?php if ($this->smarty_acl->module_authorized('roles')): ?>
                            <li>
                                <a href="/admin/roles">
                                    <i class="material-icons col-amber">donut_large</i>
                                    <span>Roles</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->smarty_acl->module_authorized('modules')): ?>
                            <li>
                                <a href="/admin/modules">
                                    <i class="material-icons col-light-blue">donut_large</i>
                                    <span>Modules</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->smarty_acl->module_authorized('admins')): ?>
                            <li>
                                <a href="/admin/admins">
                                    <i class="material-icons col-light-green">donut_large</i>
                                    <span>Admins</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="/logout">
                                <i class="material-icons col-light-red">donut_large</i>
                                <span>Logout</span>
                            </a>
                        </li>
                    <?php endif; ?>





                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

