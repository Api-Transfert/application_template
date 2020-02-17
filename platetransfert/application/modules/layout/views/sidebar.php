<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">

    <!-- SIDEBAR - START -->

    <div class="page-sidebar fixedscroll">

        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">


            <ul class='wraplist'>
                <li class='menusection'>Main</li>
                <li class="open">
                    <a href="<?php bs()?>Transfert/dashboard">
                        <i class="fa fa-th-large"></i>
                        <span class="title">Tableau de bord</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-gear"></i>
                        <span class="title">Gestions agents</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="<?php bs()?>users/Auth/liste">Liste utilisateur</a>
                        </li>
                        <li>
                            <a class="" href="add_user.html">Ajouter un utilisateur</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-gear"></i>
                        <span class="title">Gestions rôle</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="roles.html">Liste rôle</a>
                        </li>
                        <li>
                            <a class="" href="add_role.html">Ajouter un rôle</a>
                        </li>
                        <li>
                            <a class="" href="add_user.html">Permissions</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="<?php bs()?>Pays">
                        <i class="fa fa-gear"></i>
                        <span class="title">Pays</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php bs()?>Structure">
                        <i class="fa fa-gear"></i>
                        <span class="title">Structure</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php bs()?>Zone">
                        <i class="fa fa-gear"></i>
                        <span class="title">Zones</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php bs()?>Transfert/agence">
                        <i class="fa fa-gear"></i>
                        <span class="title">Agences</span>
                    </a>
                </li>
               
                <li class="">
                    <a href="sous_distributeurs.html">
                        <i class="fa fa-gear"></i>
                        <span class="title">Sous distribiteurs</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php bs()?>Master">
                        <i class="fa fa-gear"></i>
                        <span class="title">Master</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php bs()?>Quota">
                        <i class="fa fa-gear"></i>
                        <span class="title">Quota</span>
                    </a>
				</li>
				<li class="">
                    <a href="<?php bs()?>Commission">
                        <i class="fa fa-gear"></i>
                        <span class="title">Commission</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php bs()?>Reseau">
                        <i class="fa fa-gear"></i>
                        <span class="title">Réseau</span>
                    </a>
				</li>
				

				<li class="">
                        <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Tarification</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            
							<li>
                                <a href="<?php bs()?>tarification/tarif"> <span class="title">Grilles</span> </a>
                            </li>
                            <li class="">
                                <a href="javascript:;"><span class="title">Zones</span> <span class="arrow "></span> </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a class="" href="#">Emission</a>
                                    </li>
                                    <li>
                                        <a class="" href="#">Destination</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"> <span class="title">Taxe</span> </a>
                            </li>
                            <li>
                                <a href="<?php bs()?>tarification/joinzonetarif"> <span class="title">Tarifs</span> </a>
                            </li>
                            
                        </ul>
				</li>
				
				<li class="">
                        <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Emissions</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            
							<li>
                                <a href="<?php bs()?>emission/cashacash"> <span class="title">Cash &agrave; cash</span> </a>
							</li>
							
							<li>
                                <a href="<?php bs()?>emission/cashacompte"> <span class="title">Cash &agrave; compte</span> </a>
							</li>
							
							

							<li>
                                <a href="<?php bs()?>emission/cashawallet"> <span class="title">Cash &agrave; Wallet</span> </a>
							</li>

							<li>
                                <a href="#"> <span class="title">Cash &agrave; carte</span> </a>
							</li>
							
                            
                            
                            
                        </ul>
                </li>
            </ul>

        </div>
        <!-- MAIN MENU - END -->

    </div>
    <!--  SIDEBAR - END -->
