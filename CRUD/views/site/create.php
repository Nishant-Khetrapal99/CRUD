<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h1 style="color: #337ab7;">Create Entry</h1>
    <div class="body-content">
    <?php 
        $form= ActiveForm::begin()?>
         <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form-> field($post, 'Name');?>
                </div>
            </div>
         </div>

         <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form-> field($post, 'Remarks')->textarea(['rows'=> '6']);?>
                </div>
            </div>
         </div> 
         <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                <?php $choose = ['1st Standard'=>'1st Standard','3rd Standard'=>'3rd Standard','5th Standard'=>'5th Standard','7th Standard'=>'7th Standard','11th Commerce'=>'11th Commerce'];?>
                    <?= $form-> field($post, 'Class')->dropDownList($choose,['prompt'=>'Select']);?>
                </div>
            </div>
         </div> 
         <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <div class="col-lg-3">
                        <?=Html::submitButton('Create Post' ,['class'=> 'btn btn-danger']);?>
                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeURL;?> class="btn btn-danger">Go Back</a>
                    </div>
                </div>
            </div>    
         </div>  
         <?php ActiveForm::end() ?>          
    </div>
          
</div>

 