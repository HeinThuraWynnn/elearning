<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'elearning';

?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:First slide" style="width:1140px;" alt="First slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider.jpg' ?>" data-holder-rendered="true">


            <div class="carousel-caption">
                <h3>TTU Short Online Course</h3>
                <p>Still learn on web . . .</p>
            </div>
        </div>
        <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Second slide" style="width:1140px;"  alt="Second slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider2.jpg' ?>" data-holder-rendered="true">


            <div class="carousel-caption">
                <h3>Our Technology To Develop Our Nation. </h3>
                <p>Proudly created by TTU Information Technology Students.</p>
            </div>
        </div>
        <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Second slide" style="width:1140px;"  alt="Second slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider3.jpg' ?>" data-holder-rendered="true">


            <div class="carousel-caption">
                <h3>Our Technology To Develop Our Nation. </h3>
                <p>Proudly created by TTU Information Technology Students.</p>
            </div>
        </div>
        <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Second slide" style="width:1140px;"  alt="Second slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider4.jpg' ?>" data-holder-rendered="true">


            <div class="carousel-caption">
                <h3>Our Technology To Develop Our Nation. </h3>
                <p>Proudly created by TTU Information Technology Students.</p>
            </div>
        </div>
        <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" style="width:1140px;"  alt="Third slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider1.jpg' ?>" data-holder-rendered="true">

            <div class="carousel-caption">
                <h3>Register Now</h3>
                <p>TTU Online Course</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="site-index">
    <div class="jumbotron">
        <h1>Still learn on web . . .</h1>

        <p class="lead">Our Technology To Develop Our Nation. Proudly created by TTU Information Technology Students.</p>

        <p><a class="btn btn-lg btn-primary" href="http://www.ttu.edu.mm">Get started eLearning</a></p>
    </div>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>E-Learning</h2>

                <p>
                    E-Learning has made widespread training more cost-effective than ever before! E-Learning enables you to teach subject matter to users on a schedule that is convenient for them. E-Learning applications also enable you to quiz users on what they have learned and to customize next steps based on those results. ARC Infotech will work with you to determine how E-Learning will benefit your company or organization. Then, we'll choose the most appropriate development language and create an E-Learning application that exceeds your needs!</p>

                <p><a class="btn btn-default" href="#">E-Learning &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>How to Register</h2>

                <p>An intranet base communication
                    system in place, by cuts the cost incurred in accruing internet
                    bandwidth for routine communication and information
                    exchange related activities. This evidently is of enormous
                    economic importance as institution would be able to
                    optimally benefits from Information Technology at
                    drastically reduced cost in comparison to the use of the
                    internet connection based alternatives. With this new system,
                    Institution can now effectively handle more students.
                    Streaming lectures live on the intranet would help address
                    the inadequacy of lecture venue facilities and provide also a
                    host of other functionalities to ease communication and
                    information exchange.</p>

                <p><a class="btn btn-default" href="#">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Gallery</h2>
                <div class="row">
                    <div class="col-xs-6">
                        <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" class="img-responsive img-circle" alt="Third slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider.jpg' ?>" data-holder-rendered="true">
                    </div>
                    <div class="col-xs-6">
                        <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" class="img-responsive img-circle" alt="Third slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider4.jpg' ?>" data-holder-rendered="true">
                    </div>
                </div>
                <br/><br/><br/>
                <div class="row">
                    <div class="col-xs-6">
                        <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" class="img-responsive img-circle" alt="Third slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider3.jpg' ?>" data-holder-rendered="true">
                    </div>
                    <div class="col-xs-6">
                        <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" class="img-responsive img-circle" alt="Third slide" src="<?= Yii::$app->request->baseUrl . '/upload/slider2.jpg' ?>" data-holder-rendered="true">
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
