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
//        if(isset($_POST['Inputs']))
//        {
//            $model->attributes=$_POST['Inputs'];
////            if($model->save())
////                $this->redirect('index');
//        }
        $this->render('inputs',array('model'=>$model));

	}


    protected function performAjaxValidation($model)
    {


        if(isset($_POST['ajax']) && $_POST['ajax']==='test-form')
        {
//            var_dump($_POST['Inputs']);

            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}