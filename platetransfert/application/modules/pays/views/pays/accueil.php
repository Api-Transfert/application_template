

<!-- START CONTENT -->
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Pays</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>

            </div>
        </div>

        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->


        <div class="col-lg-12">
            <section class="box" style="padding: 10px 20px">
                <table
                        data-toggle="table"
                        data-pagination="true"
                        data-search="true"
                        data-search-align="left"
                        data-show-columns="true"
                        data-show-toggle="true"
                        data-show-refresh="true"
                        data-show-fullscreen="true"
                        data-show-pagination-switch="true"
                        data-pagination-pre-text="Previous"
                        data-pagination-next-text="Next"
                        data-pagination-h-align="left"
                        data-pagination-detail-h-align="right"
                        data-show-export="true"
                        data-page-list="[10,20,30,40,50, All]"
                        data-toolbar="#toolbar"
                        data-click-to-select="true"
                        id="table">
						<thead>
                    <tr>
                        <th data-field="nom" data-sortable="true" data-switchable="true">Nom</th>
                        <th data-field="type" data-sortable="true" data-switchable="true">Code ISO2</th>
                        <th data-field="solde" data-sortable="true" data-switchable="true">Code ISO3</th>
                        <th data-field="pays" data-sortable="true">Monnaie</th>
                        <th data-field="status" data-sortable="true">Destination</th>
                        <th data-field="actions" data-sortable="true">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php if (count($pays) > 0) : ?>
                    <?php foreach($pays as $country):?>
                        <tr>
                            <td><?=$country->paysName?></td>
                            <td><?=$country->paysCode?></td>
                            <td><?=$country->paysCode3?></td>
							<td>
                                <button class="btn btn-success"><i class="fa fa-money"></i> <?=$country->currencyName?></button>
                            </td>
                            <td>
                                <?php if($country->paysDestination == '1'):;?>
                                    <button class="btn-link text-success"><i class="fa fa-check"></i></button>
                                <?php else : ;?>
                                    <button class="btn-link text-danger"><i class="fa fa-times"></i></button>
                                <?php endif;?>
                            </td>
                            <td>
                                <button class="btn-link text-success" data-toggle="tooltip" data-placement="top" title="Voir"><i class="fa fa-eye"></i></button>
                                <button class="btn-link text-warning" data-toggle="tooltip" data-placement="top" title="Modifier"><i class="fa fa-edit"></i></button>
                                <button class="btn-link text-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Supprimer"></i></button>
                            </td>
                        </tr>
						<?php endforeach; ?>

						<?php else : ?>

							<tr>
								<td>
									No Pays Added Yet
								</td>
							</tr>

						<?php endif; ?>
                    </tbody>
                </table>
            </section>
        </div>
        <div class="clearfix"></div>

        <!-- MAIN CONTENT AREA ENDS -->
    </div>
</section>
<!-- END CONTENT -->
<div class="page-chatapi hideit">

    <div class="search-bar">
        <input type="text" placeholder="Search" class="form-control">
    </div>

    <div class="chat-wrapper">
        <h4 class="group-head">Favourites</h4>
        <ul class="contact-list">

            <li class="user-row " id='chat_user_1' data-user-id='1'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Joge Lucky</a></h4>
                    <span class="status available" data-status="available"> Available</span>
                </div>
                <div class="user-status available">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_2' data-user-id='2'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Folisise Chosiel</a></h4>
                    <span class="status away" data-status="away"> Away</span>
                </div>
                <div class="user-status away">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_3' data-user-id='3'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-3.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Aron Gonzalez</a></h4>
                    <span class="status busy" data-status="busy"> Busy</span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
            </li>

        </ul>

        <h4 class="group-head">More Contacts</h4>
        <ul class="contact-list">

            <li class="user-row " id='chat_user_4' data-user-id='4'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-4.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Chris Fox</a></h4>
                    <span class="status offline" data-status="offline"> Offline</span>
                </div>
                <div class="user-status offline">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_5' data-user-id='5'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-5.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Mogen Polish</a></h4>
                    <span class="status offline" data-status="offline"> Offline</span>
                </div>
                <div class="user-status offline">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_6' data-user-id='6'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Smith Carter</a></h4>
                    <span class="status available" data-status="available"> Available</span>
                </div>
                <div class="user-status available">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_7' data-user-id='7'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Amilia Gozenal</a></h4>
                    <span class="status busy" data-status="busy"> Busy</span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_8' data-user-id='8'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-3.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Tahir Jemyship</a></h4>
                    <span class="status away" data-status="away"> Away</span>
                </div>
                <div class="user-status away">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_9' data-user-id='9'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-4.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Johanson Wright</a></h4>
                    <span class="status busy" data-status="busy"> Busy</span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_10' data-user-id='10'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-5.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Loni Tindall</a></h4>
                    <span class="status away" data-status="away"> Away</span>
                </div>
                <div class="user-status away">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_11' data-user-id='11'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Natcho Herlaey</a></h4>
                    <span class="status idle" data-status="idle"> Idle</span>
                </div>
                <div class="user-status idle">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_12' data-user-id='12'>
                <div class="user-img">
                    <a href="#"><img src="<?php bs()?>assets/data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Shakira Swedan</a></h4>
                    <span class="status idle" data-status="idle"> Idle</span>
                </div>
                <div class="user-status idle">
                    <i class="fa fa-circle"></i>
                </div>
            </li>

        </ul>
    </div>

</div>

<div class="chatapi-windows ">

</div>
</div>
<!-- END CONTAINER -->
