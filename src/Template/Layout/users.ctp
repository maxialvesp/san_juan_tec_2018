<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html ng-app="check_sale">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css');?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css');?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css');?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css');?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css');?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css');?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');?>

    <?= $this->Html->css('cs-skin-elastic.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('lib/chosen/chosen.min.css') ?>
    <?= $this->Html->css('lib/chosen/dataTables.bootstrap.min.css') ?>
    <?= $this->Html->css('lib/chosen/buttons.bootstrap.min.css') ?>
    <?= $this->Html->css('lib/chosen/buttons.dataTables.min.css') ?>
    <?= $this->Html->css('lib/chosen/jqvmap.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
        <!-- Content -->
        <div class="content">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
        </footer>
        <!-- /.site-footer -->


    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js');?>
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js');?>
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js');?>
    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js');?>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js');?>
    <?= $this->Html->script('app.js');?>
    <?= $this->Html->script('main.js');?>
</body>
</html>
