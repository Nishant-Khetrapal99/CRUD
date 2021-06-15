<?php
use yii\helpers\html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php if(yii::$app->session->hasFlash('message')):?>
  <div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <?php echo yii::$app->session->getFlash('message');?>
</div>
  
</div>
  <?php endif;?>
    <div class="jumbotron">
        <h1 style="color: #337ab7;">CRUD DEMO APPLICATION</h1>   
    </div>
    <div class="row">
        <span style="margin-bottom: 20px;">
            <?=Html::a('Create',['/site/create'],['class'=> 'btn btn-danger'])?>
        </span>
    </div>
    <div class="body-content">
   
         <div class="row">
         <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Remarks</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($data) > 0):?>
        <?php foreach($data as $data1): ?>
    <tr class="table-active">
      <th scope="row">
      <?php echo $data1->Id; ?></th>
      <td><?php echo $data1->Name;?></td>
      <td><?php echo $data1->Remarks;?></td>
      <td><?php echo $data1->Class;?></td>
      <td>
         <span><?=Html::a('Read',['read','Id'=>$data1->Id],['class'=>'label label-danger']) ?></span>
         <span><?=Html::a('Update',['update','Id'=>$data1->Id],['class'=>'label label-success']) ?></span>
         <span><?=Html::a('Delete',['delete','Id'=>$data1->Id],['class'=>'label label-warning']) ?></span>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td>No Data Found!</td>
      </tr>  
    <?php endif; ?>
    
  </tbody>
</table>
</div>

