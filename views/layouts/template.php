<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="sidebar-mini skin-purple">

        <?php $this->beginBody() ?>

        <div class="wrap">
            <header class="main-header">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>MO</b>EN</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Ministry</b> of Energy</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">0</span>
                                </a>

                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">0</span>
                                </a>

                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">login</span>
                                </a>

                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a aria-expanded="true" href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs" style="text-transform: uppercase">
                                        <?php
                                        if (Yii::$app->user->isGuest) {
                                            echo 'Guest';
                                        } else {
                                            echo Yii::$app->user->identity->username;
                                        }
                                        ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        
                                        <p>
                                             TEST DROPDOWN
                                        </p>
                                    </li>
                                 <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?= Url::to(['site/login']) ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                    <div class="pull-left">
                                            <a href="<?= Url::to(['site/signup']) ?>" class="btn btn-default btn-flat">signup</a>
                                        </div>
                                 
                                        <div class="pull-right">
                                            <a href="<?= Url::to(['site/logout']) ?>" class="btn btn-default btn-flat" method="post">Log out</a>
                                        </div>
                                    </li>
                                </ul>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar" style="height: auto;">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p style="text-transform: uppercase"> <?php
                                if (Yii::$app->user->isGuest) {
                                    echo 'Guest';
                                } else {
                                    echo Yii::$app->user->identity->username;
                                }
                                ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">รายการ</li>
                        <li class="active treeview">
                            <a href="<?= Url::to(['employee/index']) ?>">
                                <i class="fa fa-group"></i> <span>บุคลากร</span> <i class="fa fa-angle-left pull-right"></i>
                                
                                <small class="label pull-right bg-yellow">
                                    <?= 0;//app\models\Employees::find()->where(['status'=>'1'])->count();?>
                                </small>
                            </a>
                            
                            <a href="<?= Url::to(['departments/index']) ?>"><i class="fa fa-building-o"></i>
                                <span>สังกัด</span>
                                <small class="label pull-right bg-green">
                                  <?= app\models\Departments::find()->where(['status'=>'1'])->count();?>              
                                </small>

                            </a>
                            <a href="<?= Url::to(['offices/index']) ?>"><i class="fa fa-building-o"></i>
                                <span>สำนัก/ศูนย์</span>
                                <small class="label pull-right bg-green">
                                    <?= app\models\Offices::find()->where(['status'=>'1'])->count();?>
                                </small>

                            </a>
                               
                            <a href="<?= Url::to(['groups/index']) ?>"><i class="fa fa-building-o"></i>
                                <span>กลุ่ม/ส่วน/ฝ่าย</span>
                                <small class="label pull-right bg-green">
                                  <?= app\models\Groups::find()->where(['status'=>'1'])->count();?>              
                                </small>

                            </a>
                             
                        </li>



                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <div class="content-wrapper">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <section class="content">
                    <?= $content ?>  
                </section>


            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.3.0
                </div>
                <strong>Copyright © 2015-2016 <a href="#">ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร สำนักงานปลัดกระทรวงพลังงาน</a>.</strong> All rights reserved.
            </footer>

        </div>



        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
