<?php
#http://localhost:8080/Yii/VGDB/hola/index
class HolaController extends Controller 
{
	public function actionIndex()
	{
		$model=CActiveRecord::model("VGDB")->findAll();
		$twitter="@Deehalf";
		$this->render("index",array("model"=>$model, "twitter"=>$twitter));
	}
}


