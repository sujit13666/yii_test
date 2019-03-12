<h5>Please Select a radio button and submit</h5>

<?php


$form = $this->beginWidget('CActiveForm',
    array(
        'id' => 'test-form',
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'clientOptions' => array('validateOnSubmit'=>true)
    ));

echo $form->radioButtonList($model, 'radioButton', array('a' => 'A', 'b' => 'B'));
echo $form->error($model,'radioButton');

echo $form->textField($model,'textField'/*,array('id'=>'hiddenTextField')*/);

echo $form->error($model,'textField');
echo "<br/>";
echo CHtml::submitButton('Submit');


$this->endWidget();

Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl . '/assets/js/script.js',
    CClientScript::POS_END
);


?>
