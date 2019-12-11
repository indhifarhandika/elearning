<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


$this->title = 'Tutorial';
?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1><?php echo $this->title; ?></h1>
        </div>
        <div class="col-md">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="<?= Url::to(['site/listtutorial', 'id' => 'Adobe Photoshop']); ?>">Adobe Photoshop</a></li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
</div>