<div class="page-container row-fluid container-fluid">
    <section id="main-content" class=" ">
        <div class="wrapper main-wrapper row" style=''>
            <div class='col-xs-12'>
                <div class="page-title">
                    <div class="pull-left">
                        <h1 class="title">Grille</h1>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <section class="box">
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
                            <th data-field="Nom" data-sortable="true" data-switchable="true">Nom</th>
                            <th data-field="Date" data-sortable="true" data-switchable="true">Date</th>
                            <th data-field="Devise" data-sortable="true" data-switchable="true">Devise</th>
                            <th data-field="Action" data-sortable="true" data-switchable="true">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($tarifs as $tarif):?>
                            <tr>
                                <td><?=$tarif->tarifName;?></td>
                                <td><?=$tarif->tarifDate;?></td>
                                <td><?=$tarif->currencyName;?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="## edit_tarif" data-id="<?=$tarif->tarifId;?>"><i class="fa fa-edit"></i> Modifier</a></li>
                                            <li><a href="## delete_tarif" data-id="<?=$tarif->tarifId;?>"><i class="fa fa-trash"></i> Supprimer</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>

                    </table>
                </section>
            </div>

        </div>
    </section>
</div>
