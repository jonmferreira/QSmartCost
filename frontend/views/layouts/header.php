<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?php
    if(Yii::$app->user->isGuest){
        $usuario = "Visitante";
        $user_name = "";
    }else{
        $usuario = Yii::$app->user->identity->username;
        $user_name = Yii::$app->user->identity->name;
    }
    ?>

    <?= Html::a('<span class="logo-mini">QS</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../web/img/logo.png" class="user-image" alt="User Image"/>
                        <span class=\'hidden-xs\'><?=$usuario?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../web/img/logo.png" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <span class=\'hidden-xs\'><?=$usuario?></span>
                                <small><?=$user_name?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                               <!-- botao 1 -->
                            </div>
                            <div class="pull-right">

                                <?php
                                    if(Yii::$app->user->isGuest){
                                ?>
                                        <?= Html::a(
                                            'Login',
                                            ['/site/logout'],
                                            ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                        ) ?>
                                <?php
                                    }else{
                                ?>
                                        <?= Html::a(
                                            'Logout',
                                            ['/site/logout'],
                                            ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                        ) ?>
                                <?php
                                    }
                                ?>

                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>
