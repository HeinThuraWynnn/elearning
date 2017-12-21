<?php
/**
 * Created by PhpStorm.
 * User: hein
 * Date: 9/11/17
 * Time: 11:58 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\CsvForm;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
    <?= $form->field($model,'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save',['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>