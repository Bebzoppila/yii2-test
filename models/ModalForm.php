<?php


namespace app\models;
use yii\base\Model;

class ModalForm extends Model
{
    public $phone;
    public $email;
    public $telegram;

    public function rules()
    {
        return [
            [['phone', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}