<?php

/**
 * TestController is the default controller to handle user requests.
 */
class TestController extends CController
{
	/**
	 * Index action is the default action in a controller.
	 */
	public function actionIndex()
	{
        $model=new Inputs();
        $this->performAjaxValidation($model);
        $this->render('inputs',array('model'=>$model));
	}

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='test-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}