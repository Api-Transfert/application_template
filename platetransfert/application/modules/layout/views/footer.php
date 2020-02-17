<!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="<?php bs()?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php bs()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bs()?>assets/plugins/pace/pace.min.js"></script>
    <script src="<?php bs()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php bs()?>assets/plugins/viewport/viewportchecker.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php bs()?>assets/js/jquery-1.11.2.min.js"><\/script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="<?php bs()?>assets/plugins/echarts/echarts-custom-for-dashboard.js"></script>

    <script src="<?php bs()?>assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="<?php bs()?>assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="<?php bs()?>assets/js/chart-flot.js"></script>

    <script src="<?php bs()?>assets/plugins/morris-chart/js/raphael-min.js"></script>
    <script src="<?php bs()?>assets/plugins/morris-chart/js/morris.min.js"></script>
    <script src="<?php bs()?>assets/js/chart-morris.js"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!--MESSENGER-->
<script src="<?php bs()?>assets/plugins/messenger/js/messenger.min.js"></script>
<script src="<?php bs()?>assets/plugins/messenger/js/messenger-theme-future.js"></script>
    <script src="<?php bs()?>assets/js/messenger.js"></script>


    <!-- CORE TEMPLATE JS - START -->
    <script src="<?php bs()?>assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

    <script src="<?php bs()?>assets/js/bootstrap-table.min.js"></script>
    <script src="<?php bs()?>assets/js/tableExport.min.js"></script>
    <script src="<?php bs()?>assets/js/jspdf.min.js"></script>
    <script src="<?php bs()?>assets/js/bootstrap-table-export.js"></script>
    <script src="<?php bs()?>assets/js/jspdf.plugin.autotable.js"></script>
    <script src="<?php bs()?>assets/libs/tooltip/popper.min.js"></script>
    <script src="<?php bs()?>assets/libs/tooltip/custom.min.js"></script>
    <script src="<?php bs()?>assets/libs/custom/dp.min.js"></script>
    <script src="<?php bs()?>assets/libs/js/is_mobile.js"></script>
    <script src="<?php bs()?>assets/libs/sweetalert2/dist/sweetalert2.all.js"></script>
    <script src="<?php bs()?>assets/libs/custom/swal.js"></script>
	<script src="<?php bs()?>assets/plugins/icheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.fixed-table-loading.table.table-bordered.table-hover').hide();

        <?php
        if(!empty($this->session->flashdata('message'))) { ?> show_message('success' , '<?=$this->session->flashdata('message')?>'); <?php }

        if(!empty($this->session->flashdata('success_message'))) { ?> show_message('success' , '<?=$this->session->flashdata('success_message')?>'); <?php }

        if(!empty($this->session->flashdata('error_message'))) { ?> show_message('error' , '<?=$this->session->flashdata('error_message')?>'); <?php }

        if(!empty($this->session->flashdata('info_message'))) { ?>  show_message('info' , '<?=$this->session->flashdata('info_message')?>'); <?php }

        if(!empty($this->session->flashdata('warning_message'))) { ?> show_message('warning' , '<?=$this->session->flashdata('warning_message')?>'); <?php }

        ?>
    });

    $(document).on('click','.custom-switch-btn',function(){
        custom_btn_by_id = $('#'+$(this).attr('for'));
        switch_init_state = custom_btn_by_id.prop('checked'); //('get the state of the switch before the switch changes')
        switch_final_state = !switch_init_state;

        if(has_attr(this,'input-target')){
            $($(this).attr('input-target')).attr('value',(switch_final_state === true)?'1':'0');
        }
        else if(has_attr(this,'value-target')){
            $($(this).attr('value-target')).attr('value',(switch_final_state === true)?'1':'0');
        }
        else if(has_attr(this,'data-target')){
            $($(this).attr('data-target')).attr('value',(switch_final_state === true)?'1':'0');
        }
    });

    function sweetDialog(html, params){
        params = params || {};

        var prm = {};
        prm.title = params.title || '';
        prm.size  = params.size  || 600;
        prm.cancelButtonText = params.cancelButtonText || 'Fermer';

        Swal.fire({
            title: prm.title,
            html : html,
            width: prm.size,
            showConfirmButton:false,
            showCancelButton: true,
            cancelButtonText: prm.cancelButtonText,
            reverseButtons: true,
            padding: '3em',
            backdrop: 'rgba(0,0,123,0.4)'
        })
    }
</script>
</body>

</html>
