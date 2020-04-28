<?php
namespace yiicwebapp\models;
 use yii\base\Model;
class formsdemo extends Model
{
public $firstname;
public $lastname;

public function rules()
{
    return [['firstname','lastname'],'required'];

}

}
