<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li><a href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="fa glyphicon-fast-backward"></i> <span>Logout</span></a>
    </li>
    <li><a href="<?php echo $this->Url->build('/users/admin-home'); ?>"><i class="fa glyphicon-fast-home"></i> <span>Home</span></a>
    </li>


    <li class="treeview">
        <a href="#"><i class="fa fa-circle-o"></i> Settings
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/AclManager'); ?>"><i class="fa fa-circle-o"></i> Access Control</a></li>
            <li><a href="<?php echo $this->Url->build('/settings'); ?>"><i class="fa fa-bug"></i>Core Settings</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-share"></i> <span>Fancy Stuff</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>

        <ul class="treeview-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/pages/forms/general'); ?>"><i class="fa fa-circle-o"></i>
                            General Elements</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/forms/advanced'); ?>"><i class="fa fa-circle-o"></i>
                            Advanced Elements</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/forms/editors'); ?>"><i class="fa fa-circle-o"></i>
                            Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/pages/tables/simple'); ?>"><i class="fa fa-circle-o"></i> Simple
                            tables</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/tables/data'); ?>"><i class="fa fa-circle-o"></i> Data
                            tables</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/pages/calendar'); ?>">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-red">3</small>
        <small class="label pull-right bg-blue">17</small>
      </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/pages/examples/invoice'); ?>"><i class="fa fa-circle-o"></i>
                            Invoice</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/profile'); ?>"><i class="fa fa-circle-o"></i>
                            Profile</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/login'); ?>"><i class="fa fa-circle-o"></i> Login</a>
                    </li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/register'); ?>"><i class="fa fa-circle-o"></i>
                            Register</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/lockscreen'); ?>"><i class="fa fa-circle-o"></i>
                            Lockscreen</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/404'); ?>"><i class="fa fa-circle-o"></i> 404
                            Error</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/500'); ?>"><i class="fa fa-circle-o"></i> 500
                            Error</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/blank'); ?>"><i class="fa fa-circle-o"></i> Blank
                            Page</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/examples/pace'); ?>"><i class="fa fa-circle-o"></i> Pace
                            Page</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Url->build('/pages/ui/general'); ?>"><i class="fa fa-circle-o"></i>
                            General</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/ui/icons'); ?>"><i class="fa fa-circle-o"></i>
                            Icons</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/ui/buttons'); ?>"><i class="fa fa-circle-o"></i>
                            Buttons</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/ui/sliders'); ?>"><i class="fa fa-circle-o"></i>
                            Sliders</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/ui/timeline'); ?>"><i class="fa fa-circle-o"></i>
                            Timeline</a></li>
                    <li><a href="<?php echo $this->Url->build('/pages/ui/modals'); ?>"><i class="fa fa-circle-o"></i>
                            Modals</a></li>
                </ul>
            </li>

        </ul>
    </li>


</ul>