<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <title>Bikealert</title>

    <?= $this->Html->css('bootstrap.min.css'); ?>
    <?= $this->Html->css('core.css'); ?>
    <?= $this->Html->css('components.css'); ?>
    <?= $this->Html->css('icons.css'); ?>
    <?= $this->Html->css('pages.css'); ?>
    <?= $this->Html->css('menu.css'); ?>
    <?= $this->Html->css('responsive.css'); ?>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?= $this->Html->script('modernizr.min.js'); ?>
</head>
<body>


<div class="animationload">
    <div class="loader"></div>
</div>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</div>

<!-- jQuery  -->
<?= $this->Html->script('jquery.min.js'); ?>
<?= $this->Html->script('bootstrap.min.js'); ?>
<?= $this->Html->script('detect.js'); ?>
<?= $this->Html->script('fastclick.js'); ?>
<?= $this->Html->script('jquery.slimscroll.js'); ?>
<?= $this->Html->script('jquery.blockUI.js'); ?>
<?= $this->Html->script('wavesjs.js'); ?>
<?= $this->Html->script('wow.min.js'); ?>
<?= $this->Html->script('jquery.nicescroll.js'); ?>
<?= $this->Html->script('jquery.scrollTo.min.js'); ?>
<?= $this->Html->script('jquery.core.js'); ?>
<?= $this->Html->script('jquery.app.js'); ?>


</body>
</html>


