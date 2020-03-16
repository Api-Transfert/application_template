<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Zones</h1>
                    </div>
                </div>
            </div>


            <section>
                    <div class="">
                        <ul class="nav nav-tabs nav-justified primary">
                            <li class="active">
                                <a href="#emission" data-toggle="tab">
                                    <i class="fa fa-home"></i> Emission
                                </a>
                            </li>
                            <li>
                                <a href="#destination" data-toggle="tab">
                                    <i class="fa fa-home"></i> Destination
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content primary">
                            <?php include_once('zone_emission.php'); ?>

                            <?php include_once('zone_destination.php'); ?>
                        </div>
                    </div>
                </section>

        </div>
    </section>
</div>