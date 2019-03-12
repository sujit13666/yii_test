<?php

class Inputs extends CFormModel
{
    public $radioButton;

    public $textField;

    public function rules()
    {
        return array(
            array('radioButton', 'required', 'message' => "Please select an option"),

            array('textField', 'ext.YiiConditionalValidator',
                'if' => array(
                    array('radioButton', 'compare', 'compareValue'=>"b"),
                ),
                'then' => array(
                    array('textField', 'required'),
                ),
            ),
        );
    }

}