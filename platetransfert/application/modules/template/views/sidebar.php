<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <!-- <ul class="sidebar-menu" id="nav-accordion">
            <li class="sub-menu">
                <a class="active" href="<?= base_url('users/Auth') ?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
                <ul class="sub">


                    <li>
                        <a href="<?= base_url('users/Users') ?>">
                            <i class="fa fa-angle-right" aria-hidden="true"></i> View Users
                        </a>
                    </li>


                    <li>
                        <a href="<?= base_url('users/Users/create_user') ?>">
                            <i class="ti ti-angle-right"></i> Add Users
                        </a>
                    </li>


                </ul>
            </li>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Roles & permissions</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= base_url('users/User_groups') ?>"> &nbsp;&nbsp;View Groups</a></li>


                    <li>
                        <a href="<?= base_url('users/User_groups/create_group') ?>">
                            <i class="ti ti-angle-right"></i> Create Groups
                        </a>
                    </li>


                    <li>
                        <a href="<?= base_url('users/permissions') ?>">
                            <i class="ti ti-angle-right"></i> Permissions
                        </a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="<?= base_url('site_config') ?>">
                    <i class="fa fa-wrench"></i><span>Site Configuration</span>
                </a>
            </li>


            <li>
                <a href="<?= base_url('users/Profile') ?>">
                    <i class="fa fa-list"></i><span>Adminstrator</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cog"></i>
                    <span>Social login config</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= base_url('site_config/fb_config') ?>">Facebook Login</a></li>
                    <li><a href="<?= base_url('site_config/google_config') ?>">Google Login</a></li>
                    <li><a href="<?= base_url('site_config/insta_config') ?>">Instagram Login</a></li>
                    <li><a href="<?= base_url('site_config/linkedin_config') ?>">Linkedin Login</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('site_config/backup') ?>">
                    <i class="fa fa-database"></i><span>Backup & Export Users</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('todo') ?>">
                    <i class="fa fa-tasks" aria-hidden="true"></i><span>Manage Tasks</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('userguide') ?>" target="_blank"" >
                    <i class=" fa fa-book"></i>
                    <span>Documentation</span>
                </a>
            </li>
            <li>
                <h4>Extras</h4>
            </li>
            <li>
                <a href="<?= base_url('extras/dashboard') ?>">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url('frontend/frontend') ?>" target="_blank"" >
                    <i class=" fa fa-desktop"></i>
                    <span>Frontend</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-laptop"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub">
                    <li class="active"><a href="<?=bs()?>extras/layout_boxed">Boxed Page</a></li>
                    <li><a href="<?=bs()?>extras/layout_horizontal">Horizontal Menu</a></li>
                    <li><a href="<?=bs()?>extras/mega_menu">Mega Menu</a></li>
                    <li><a href="<?=bs()?>extras/app_inbox" target="_blank">Email Template</a></li>
                </ul>
            </li>
        </ul> -->
        <ul class="sidebar-menu" id="nav-accordion">
            <?php
            $priviliges = group_priviliges();
            foreach ($priviliges as $head_pre) :

                if (empty($head_pre->sub)) :
                    ?>

                    <li>
                        <a href="<?= base_url() ?><?= $head_pre->url ?>">
                            <?= $head_pre->icon ?>
                            <span>
                                <?= $head_pre->perm_name ?>
                            </span>
                        </a>
                    </li>

                    <?php
                        endif;
                            if (!empty($head_pre->sub)) :

                                ?>
                        <li class="sub-menu">

                            <a href="javascript:;">
                                <?= $head_pre->icon ?> <span> <?= $head_pre->perm_name ?> </span>
                            </a>
                            <ul class="sub">
                                <?php foreach ($head_pre->sub as $sub) : ?>
                                <li>
                                    <a href="<?= base_url() ?><?= $sub->url ?>">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <?= $sub->perm_name ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

            <?php
                    endif;
            endforeach;
            ?>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end