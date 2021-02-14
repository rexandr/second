<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\bootstrap\Modal;
?>

<?php
Modal::begin(
    [
        'header' => 'Hello people',
        'toggleButton' =>
        [
            'label' => 'Hit me',
            'tag' => 'button',
            'class' => 'btn btn-success'
        ],
        'footer' => 'Botton'
    ]
)

?>
<?php Modal::end()?>

<?php $form = ActiveForm::begin()?>
<?php echo $form->field($model, 'name')->textInput()?>
<?php echo $form->field($model, 'email')->textInput()?>
<?php echo $form->field($model, 'phone')->widget(MaskedInput::className(),['mask' => '(999) 999-99-99'])?>
<?php echo $form->field($model, 'text')->textInput()?>
<?php echo Html::submitButton('Send')?>
<?php $form = ActiveForm::end()?>


