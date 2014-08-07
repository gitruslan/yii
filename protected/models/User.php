<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 8/7/14
 * Time: 11:47 PM
 */

class User extends CActiveRecord{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }
} 