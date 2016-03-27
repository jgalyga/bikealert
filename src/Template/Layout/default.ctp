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

<?= $this->element('header'); ?>



<div class="wrapper">
    <div class="container">
        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        2016 &copy; Ubold.
                    </div>
                    <div class="col-xs-6">
                        <ul class="pull-right list-inline m-b-0">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
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


