<div class="tab-pane" id="destination">
    <section class="box">
        <header class="panel-heading">
            <a href="##" class="pull-right"> <i class="fa fa-print text-black fs-20 m-t-10 m-r-10"></i> </a>
            <span class="tools pull-right"> </span>
        </header>
        <div class="panel-body">
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
                    <th data-field="Date" data-sortable="true" data-switchable="true">Date </th>
                    <th data-field="Numero Pay" data-sortable="true" data-switchable="true">Numero Pay</th>
                    <th data-field="actions" data-sortable="true" data-switchable="true">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($zones_destination as $zd):?>
                    <tr>
                        <td><?=$zd->paysName;?></td>
                        <td><?=$zd->date;?></td>
                        <td><?=$zd->paysId;?></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>Actions</span> <span class="caret m-l-10"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="##" class="edit_dest_zone" data-id="<?=$zd->id;?>"><i class="fa fa-edit"></i> Modifier</a></li>
                                    <li><a href="##" class="delete_dest_zone" data-id="<?=$zd->id;?>"><i class="fa fa-trash"></i> Supprimer</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
</div>