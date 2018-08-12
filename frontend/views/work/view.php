<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Work */

$this->params['breadcrumbs'][] = ['label' => 'ร้านสปา', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-view">

    <h1><?= Html::encode($this->title) ?></h1>
	 	<div class="row"> 
		<div class="col-md-6">
			<div class="panel panel-info">
  			<div class="panel-heading">ความคิดเห็น</div>
  			<div class="panel-body chat-box " style="height:300px; overflow:auto"> 
  			<div id="chat"></div>
  
  			</div>	
  			<form action="javascript:sendMsg()" method="post">
    			  <input type="text" name="txt" id="txt" class="form-control" placeholder="send...">
    			  <input type="submit"  value="send" class="btn btn-success btn-block">
	  		</form>


		</div>
	</div>
</div>
		</div>
		<?php foreach ($room as $r):?>
  				<script type="text/javascript">
			setInterval(function(){listMsg()}, 500);
				function sendMsg(){
					 var txt = document.getElementById("txt").value;
					 if (txt == "") {}
					 else{
						$.ajax({
					      type : "POST",
					      url:"insert",
					      data:{txt:txt,user_id:<?=Yii::$app->user->id?>,work_id:<?=$r->id?>,fb:<?=Yii::$app->user->identity->fb_id?>},     
					      success : function (data){
					          //$("#chat").html(data);
					          $("#txt").val("");
					      }
					    });$("#txt").val("");
					}
				}
				function listMsg(){
				    $.ajax({
				    	type : "POST",
				    	url: "list", 
				    	data:{work_id:<?=$r->id?>},
				    	success: function(result){
				        	$("#chat").html(result);
				    	}
					});
				}
				
  				//return false;
				 </script>
				 <?php endforeach;?>
    <p>
    <?php echo $model->rod?>
        <?php
         echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])
         ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
