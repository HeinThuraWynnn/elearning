<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php
$showimg = Yii::getAlias('@web');

$urlArr = explode("/web",$showimg);

$urlArr[0] =  str_replace("admin","backend",$urlArr[0]);

$showimgPath = $urlArr[0]."/web/img/user2-160x160.jpg";

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

<!--            --><?//= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            <img class="img-circle" src="<?php echo $showimgPath?>" alt="User Image">
            </div>
            <div class="pull-left info">
<!--                <p>--><?php //echo Yii::$app->user->identity->username ?><!--</p>-->
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
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'User',
                            'icon' => 'fa fa-user-plus',
                            'url' => ['/user'],
                            'active' => $this->context->route == 'user/index',
                        ],
                        [   'label' => 'Teacher Course Assign',
                            'icon' => 'fa fa-file-code-o',
                            'url' => ['/teacher/create'],
                            'active' => $this->context->route == 'teacher/index',
                        ],
                        [
                            'label' => 'Course',
                            'icon' => 'fa fa-file-text-o',
                            'url' => ['/course'],
                            'active' => $this->context->route == 'course/index',
                        ],
                        [
                            'label' => 'Results',
                            'icon' => 'fa fa-file-powerpoint-o',
                            'url' => ['/result'],
                            'active' => $this->context->route == 'result/index',
                        ],
                        [
                            'label' => 'Events',
                            'icon' => 'fa fa-calendar-plus-o',
                            'url' => ['/event'],
                            'active' => $this->context->route == 'event/index',
                        ],

//                        [
//                            'label' => 'Master',
//                            'icon' => 'fa fa-database',
//                            'url' => '#',
//                            'items' => [
//                                [
//                                    'label' => 'Master1',
//                                    'icon' => 'fa fa-database',
//                                    'url' => '?r=master1/',
//				    'active' => $this->context->route == 'master1/index'
//                                ],
//                                [
//                                    'label' => 'Master2',
//                                    'icon' => 'fa fa-database',
//                                    'url' => '?r=master2/',
//				    'active' => $this->context->route == 'master2/index'
//                                ]
//                            ]
//                        ],
//                        [
//                            'label' => 'Users',
//                            'icon' => 'fa fa-users',
//                            'url' => ['/user'],
//                            'active' => $this->context->route == 'user/index',
//                        ],
//                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
//                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
