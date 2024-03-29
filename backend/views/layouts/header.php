<?php
use yii\helpers\Html;
use common\models\User;

$title = 'e-Learning';
$mini_title = 'e L';
?>

<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><?php echo $mini_title; ?></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><?php echo $title ?></b> Administrator</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php
                    $showimg = Yii::getAlias('@web');

                    $urlArr = explode("/web",$showimg);

                    $urlArr[0] =  str_replace("admin","backend",$urlArr[0]);

                    $showimgPath = $urlArr[0]."/web/img/user2-160x160.jpg";

                    ?>
                    <img class="user-image" src="<?php echo $showimgPath?>" alt="User Image">
                    <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                      <img class="img-circle" src="<?php echo $showimgPath?>" alt="User Image">
                    <p>

                        Admin- <?php $position='site admin';
                        echo $position;?>
<!--                      <small>Member since Nov. 2012</small>-->
                    </p>
                  </li>

                  <li class="user-footer">
                    <div class="pull-right">
                        <?= Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Sign Out',
                            ['class' => 'logout btn btn-default btn-flat']
                        )
                        . Html::endForm();
                        ?>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
