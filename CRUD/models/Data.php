<?php
   namespace app\models;
   use yii\db\ActiveRecord;
   class Data extends ActiveRecord{
    private $Name,$Remarks,$Class;

    public function rules(){
        return[
            [['Name','Remarks','Class'],'required']
        ];
    }
}
?>