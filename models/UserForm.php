<?php

namespace app\models;

use yii\base\modal;

class UserForm extends Model
{
  public $name;
  public $email;

  public function rules()
  {
    return[
            [['name','email'],'required'],
            ['email','email'],
          ];
  }
}
