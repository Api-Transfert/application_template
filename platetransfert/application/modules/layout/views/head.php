<!DOCTYPE html>
<html lang="en">

<head>
    <!--
        * @Package: Cryptonia - Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cash to Cash</title>
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=bs()?>assets/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="<?=bs()?>assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=bs()?>assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=bs()?>assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=bs()?>assets/images/apple-touch-icon-144-precomposed.png">
    <!-- CORE CSS FRAMEWORK - START -->
    <link href="<?=bs()?>assets/css/add_custom.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=bs()?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=bs()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <!-- CORE CSS FRAMEWORK - END -->
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href="<?=bs()?>assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=bs()?>assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->
    <!-- CORE CSS TEMPLATE - START -->
    <link href="<?=bs()?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
    <!-- LIBS CSS TEMPLATE - START -->
    <link href="<?=bs()?>assets/libs/tooltip/tooltip.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/libs/css/fix.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/libs/css/util.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/libs/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/libs/custom_switch/component-custom-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=bs()?>assets/plugins/messenger/css/messenger.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=bs()?>assets/plugins/messenger/css/messenger-theme-future.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=bs()?>assets/plugins/messenger/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?=bs()?>assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="<?=bs()?>assets/js/jquery-1.11.2.min.js"></script>
    <script>
        var base_url = '<?=base_url()?>';
        const router_class = 'admin/<?=$this->router->fetch_class();?>';
        const router_method = '<?=$this->router->fetch_method();?>';
    </script>
    <style>
        .no-border{border:none !important;}
        section.box{padding: 10px 20px}
    </style>
    <!-- LIBS CSS TEMPLATE - END -->
</head>
<body ng-app="this" ng-controller="admin">
