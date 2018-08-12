<?php
use common\models\Joinhangout;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<style>
.shadow {
 box-shadow: 5px 5px 10px 10px rgba(50,50,50,.4);
}

</style>
<div class="container">
        	<div class="row">
        	<h1>Profile </h1>
        	</div>
        	<div class="row">
        	<div class="col-md-3">
        	<?php //echo var_dump($model->img);die();?>
        	<?php if (!$model->img ||$model->img == ""){?>
                		 <img data-src="holder.js/300px280/thumb" alt="100%x280" style="height: 300px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fe3485b62%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fe3485b62%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                		  <?php }
                  else{
                              echo  Html::img('@web/images/user/'.$model->img,['width'=>'260px','height'=>'220px']);
                		     }?>
        	  		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
 								<?php  if(Yii::$app->user->id == $model->id){?>
                                     <?= $form->field($model, 'img')->widget(FileInput::classname(), [
                                        'options' => ['accept' => 'image/*'],
                                        'pluginOptions' => [
                                             'showPreview' => false,
                                             'showCaption' => true,
                                             'showRemove' => true,
                                         ]
                                        ]);?>
                                        <?php }?>
            <?php ActiveForm::end() ?>

        	<?php // var_dump($model);die();?>
        		         <?php // var_dump($point->picture);die(); ?>
        	<?php //if (!$model || $model=="" || $model==null){
              
        	//}//else{?>
        	
        	<?php // echo Html::img('@web/images/user/user1.jpg',['width'=>'250px','height' => '250px']);?>
        	     
        		   <?php //echo Html::img('@web/images/user/user1.jpg',['width'=>'250px','height' => '250px']);?>
        		<?php // Html::img('https://graph.facebook.com/'.$model->fb_id.'/picture?type=large',['width'=>'100%']);?>
        		<?php // Html::a('Facebook','https://www.facebook.com/'.$model->fb_id.'',['class'=>'btn btn-primary']); ?>
        	<?php //}?>
        	<?php ?>
        	</div>
        	
        		<div class="col-md-6">
        		
        			<div class="panel panel-default shadow">
        			<div class="panel panel-body ">
        			ผู้ใช้ : <?=$model->username ?><br>
        			ชื่อจริง :  <?=$model->fname ?><br>
        			นามสกุล : <?=$model->lname ?><br>
        			อีเมลล์ :  <?=$model->email ?><br>
        			
        			
        		<?php // 	ระดับ :  $data->power == User::POWER_3?Html::img('@web/images/user/Normal.png',['width'=>'20%']) : '' ?>
        			
        				<?php //<img data-src="holder.js/300px280/thumb" alt="100%x280" style="height: 300px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22356%22%20height%3D%22280%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20356%20280%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fe3485b62%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fe3485b62%22%3E%3Crect%20width%3D%22356%22%20height%3D%22280%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22131.2890625%22%20y%3D%22148.1%22%3E356x280%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        	
        		
        					//if (!$point){
        					  //  echo Html::img('@web/images/user/powerg3.png',['width'=>'10%']);
        				
        					//}else{
        					//    if ($point->picture == 0){
        					        //echo "0";
        					//        echo Html::img('/images/user/powerg1.png',['width'=>'10%']);
        					//    }else if($point->picture == 1){ 
        					//        //echo "1";
        					//        echo Html::img('@web/images/user/powerg2.png',['width'=>'10%']);
            					
            				//	}else if($point->picture == 2){
            					    //echo "2";
            				//	    echo Html::img('@web/images/user/powerg3.png',['width'=>'10%']);
            					
                          //      }else if($point->picture == 3){
                          //          echo Html::img('@web/images/user/powerg4.png',['width'=>'10%']);
                          //          //echo "3";
                                
                          //      }else if($point->picture == 4){
                           //         echo Html::img('@web/images/user/powerg5.png',['width'=>'10%']);
                                   //echo "4";
                               
                               // }else {
                                    
                        //        }

        				//	}
        				?>
        			<br>
        			<?php if ($model->id == Yii::$app->user->id){ ?>
        			<div class="pull-right">
        				<a class="btn btn-warning" href="update?id=<?= Yii::$app->user->id ?>">แก้ไข</a>
        			</div>
        			<?php }else {
        			
        			}?>    
        			</div>
        			</div>
        			</div>
        			
        			
        	
        		
        		</div></div>