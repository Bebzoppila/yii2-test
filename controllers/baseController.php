<?php


namespace app\controllers;
use yii\web\Controller;
use app\models\ModalForm;
use Yii;
class baseController extends Controller
{
    public $modelForm = null;

    public function __construct($id, $module, $config = [])
    {
        $this->modelForm = new ModalForm();
        parent::__construct($id, $module, $config);
    }

    public function modalFormSending (){
        if($this->modelForm->load(Yii::$app->request->post()) && $this->modelForm->validate()){
            echo 'Валидация пройдена';
        }
    }
}