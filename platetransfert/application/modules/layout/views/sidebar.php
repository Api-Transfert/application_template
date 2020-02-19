<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">
    <?php $priviliges = group_priviliges();?>

    <!-- SIDEBAR - START -->

    <div class="page-sidebar fixedscroll">
        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">
            <ul class='wraplist'>
                <li class='menusection'>Main</li>

                <?php foreach ($priviliges as $head_pre): ?>
                    <?php if (empty($head_pre->sub)):; ?>
                        <li>
                            <a href="<?=(!empty($head_pre->url))?base_url($head_pre->url) : '##'?>">
                                <i class="<?=$head_pre->icon;?>"></i>
                                <span class="title"><?=$head_pre->perm_name;?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(!empty($head_pre->sub)):;?>
                        <li class="">
                            <a href="javascript:;">
                                <i class="<?=$head_pre->icon;;?>"></i>
                                <span class="title"><?=$head_pre->perm_name;?></span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <?php foreach($head_pre->sub as $sub):?>
                                    <li>
                                        <a class="" href="<?=(!empty($sub->url))?base_url($sub->url) : '##'?>"><?=$sub->perm_name;?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </li>


                    <?php endif;?>

                <?php endforeach; ?>




            </ul>

        </div>
        <!-- MAIN MENU - END -->

    </div>
    <!--  SIDEBAR - END -->
