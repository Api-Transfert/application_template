 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= bs('public/js/bootstrap.min.js') ?>"></script>
    <script class="include" type="text/javascript" src="<?= bs('public/js/jquery.dcjqaccordion.2.7.js') ?>"></script>
    <script src="<?= bs('public/js/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?= bs('public/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
    <script src="<?= bs('public/js/jquery.sparkline.js') ?>" type="text/javascript"></script>
    <script src="<?= bs('public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') ?>"></script>
    <script src="<?= bs('public/js/owl.carousel.js') ?>" ></script>
    <script src="<?= bs('public/js/jquery.customSelect.min.js') ?>" ></script>
    <script type="text/javascript" language="javascript" src="<?php bs() ?>public/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php bs() ?>public/assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?= bs('public/js/respond.min.js') ?>" ></script>

    <!--right slidebar-->
    <script src="<?= bs('public/js/slidebars.min.js') ?>"></script>

    <!--common script for all pages-->
    <script src="<?= bs('public/js/common-scripts.js') ?>"></script>

    <!--dynamic table initialization -->
    <script src="<?php bs() ?>public/js/dynamic_table_init.js"></script>

    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

  <script src="<?= base_url('public/js/bootstrap-notify.js') ?>"></script>

    <!--Form Wizard-->
  <script src="<?php bs() ?>public/js/jquery.steps.min.js" type="text/javascript"></script>
  <script src="<?php bs() ?>public/js/jquery.validate.min.js" type="text/javascript"></script>

   <!--script for this page-->
    <script src="<?php bs() ?>public/js/jquery.stepy.js"></script>
    
    <script src="<?php bs() ?>public/assets/jquery-knob/js/jquery.knob.js"></script>

    <script src="<?php bs() ?>public/assets/nestable/jquery.nestable.js"></script>
    <!--script for this page only-->
     <script>

      //knob
      $(".knob").knob();

    </script>

 <script type="text/javascript">
    $(document).ready(function () {
        var form = $("#wizard-validation-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) 
            {
              var data = $('.insert_data').serialize();

              $.ajax({
                url : "<?php bs('users/User_groups/create_group')?>",
                method :'POST',
                data : data,
                dataType : 'text',
                success : function(data)
                {
                  
                  // similar behavior as clicking on a link
                  window.location.href = "<?php bs('users/User_groups/create_group')?>";

                    //reset the form after submit.
                    $(".insert_data")[0].reset();
                }

              });
            }
        });


    });
</script>

 <!--  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script> -->

  </body>

<script>
  $("#change_pass").validate({
      rules: {
        password: "required",
        new_confirm: {
          equalTo: "#new"
        }
      },
  });
</script>

<!-- create new users page validation -->
<script>
  $("#user_form_validation").validate({
      rules: {
         password : {
                    minlength : 8
                },
        confirm_password: {
          minlength : 8,
          equalTo: "#password"
        }
      },
  });
</script>


<!-- create new group validation -->
<script>
  $("#create_gp").validate();
</script>

<!-- create new group validation -->
<script>
  $("#social_config").validate();
</script>


<!-- Notification Script -->
  <script>

    <?php
      $success = $this->session->flashdata('success');
      $error   = $this->session->flashdata('error');
      if (!empty($success))
       {
    ?>
     $.notify({
          
          icon: 'glyphicon glyphicon-info-sign',
          title: '<b> Notification</b><br>',
          message: '<?php echo $success ?>',
      },
      {
          
          
          type: "success success-noty col-md-3",
          allow_dismiss: true,
          placement: {
              from: "top",
              align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1431,
          delay: 5000,
          timer: 1000,
          animate: {
              enter: 'animated bounceInDown',
              exit: 'animated bounceOutUp'
          }
      });
  <?php
 
      } 
      if (!empty($error))
       {
  ?>
     $.notify({
              
              icon: 'glyphicon glyphicon-info-sign',
              title: '<b>Notification</b><br>',
              message: '<?php echo $error ?>',
          },{
              
              
              type: "danger noty-color col-md-3",
              allow_dismiss: true,
              placement: {
                  from: "top",
                  align: "right"
              },
              offset: 20,
              spacing: 10,
              z_index: 1431,
              delay: 5000,
              timer: 1000,
              animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          });
     <?php            
       }
      ?>

  </script>  

  <script>
    <?php
     if (!empty($message))
       {
    ?>
     $.notify({
          
          icon: 'glyphicon glyphicon-info-sign',
          title: '<b><i class="ti ti-check"></i> Notification</b><br>',
          message: '<?php echo $message ?>',
      },
      {
          
          type: "success success-noty col-md-3 col-md-offset-2",
          allow_dismiss: true,
          placement: {
              from: "top",
              align: "right"
          },
          offset: 20,
          spacing: 10,
          z_index: 1431,
          delay: 5000,
          timer: 1000,
          animate: {
              enter: 'animated bounceInDown',
              exit: 'animated bounceOutUp'
          }
      });
    <?php
      }
    ?> 
</script>   