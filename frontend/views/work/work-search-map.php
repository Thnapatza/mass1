<?php
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use common\models\Massagetype;


$this->title = "ค้นหาสถานที่นวด";
?>
<?php // print_r($searchModel);?>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArBQOuYHVIZ0ZIJIXJ4n0GW4FtjAUwInk&language=th&libraries=places"></script> -->
<style>

.panel-body1 {
background: 	#04859D	;
color:#FFFFFF;
box-shadow: 5px 5px 10px 10px rgba(50,50,50,.4);
} 
panel-body3{
        background: 	#1D7373	;
        color:#FFFFFF;
box-shadow: 5px 5px 10px 10px rgba(50,50,50,.4);
       /* color:#FFFFFF; */
}
.panel-body2 {
background: 	#DCDCDC	;
box-shadow: 5px 5px 10px 10px rgba(50,50,50,.4);

} 
.panel-body3{
background: #01939A;
color: #FFFFFF;

box-shadow: 5px 5px 10px 10px rgba(50,50,50,.4);
}
</style>
<?php   Pjax::begin([
		'enablePushState'=>false // ปิดเพื่อให้ tatget="_blank" ทำงาน
]);  ?> 
<?php 
// var_dump($dataProvider);die();
$coord = new LatLng(['lat'=>13.777234,'lng'=>100.561981]);
$map = new Map([
    'center'=>$coord,
    'zoom'=>6,
    'width'=>'100%',
    'height'=>'600',
]);

foreach($dataProvider->models as $data):
  
    $coords = new LatLng(['lat'=>$data->lat,'lng'=>$data->lng]);
    //var_dump($data->address->lat);die();
    $marker = new Marker(['position'=>$coords]);

    $marker->attachInfoWindow(
        new InfoWindow([
            'content'=>'
                    <center>
                  <h4><span class="glyphicon glyphicon-home"></span> '.$data->name_office.'</h4><hr>
                 <p>'.Html::img('@web/images/work/'.$data->img.'',['width'=>'300px','height'=>'300px']).'</p><hr>
                    </center>
                 <p><span class="glyphicon glyphicon-map-marker"></span> ที่อยู่ '.$data->location.'</p>
                  <p><span class="glyphicon glyphicon-calendar"></span> ประกาศเมื่อ '.Yii::$app->formatter->asDatetime($data->work_created_at).'</p>
                	<p><span class="glyphicon glyphicon-time"></span> เวลาทำการ '.$data->timework.'</p>
            <a href="/massage/work/'.$data->id.'" class="btn btn-info">เพิ่มเติม</a> 
            <a href="/massage/work/google-directions?lat='.$data->lat.'&long='.$data->lng.'&name_office='.$data->name_office.'    " class="btn btn-warning"><span class="	glyphicon glyphicon-flag"></span> นำทาง</a>
        '
        ])
        );
    
    $map->addOverlay($marker);
    ?>
 <div id="<?=$data->id?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
                                              <div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-10">
                                      		<h4 class="text-center"><span class="glyphicon glyphicon-home"></span> <?=$data->name_office?></h4>
                                      		<h4 class="text-center">เวลาทำการ <?=$data->timework ?></h4>
                                    		<h5 class="text-center">
                                    		<span class="glyphicon glyphicon-calendar"> ประกาศเมื่อ : วันที่ <?=Yii::$app->formatter->asDatetime($data->work_created_at,'d MMM yyyy ')?></span>
                                    		</h5>
                                                    		<b><span class="glyphicon glyphicon-list-alt"></span> รายละเอียด</b>
                                                    	
                                                    		<p><?= Yii::$app->formatter->asNtext($data->description)?></p>
                                                    		
                                                    		</p>
                                                    		<hr>

                                                    		 </p>
                                                    		 <p><span class="glyphicon glyphicon-earphone"></span> <b>โทร : </b> <?=$data->tel?></p>
                                                    		 <p><span class="glyphicon glyphicon-map-marker"></span> <b>ที่ตั้ง : </b><?=$data->location?></p>
                                                    

                                   </div></div>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>

  </div>
</div>
<?php endforeach;
?>
<div class="panel panel-default">
			
  <div class="panel-body panel-body3 ">
  		<h3 class="text-center"><b> Google Map</b></h3>
<!--   		<span class="glyphicon glyphicon-search"></span> -->
  </div>		<!-- end panel body -->
</div>	<!-- end panel -->
<div class="panel panel-default">
			
  <div class="panel-body panel-body1 ">
	<h3>ค้นหาตามความต้องการ</h3>
  <?php $form = \yii\widgets\ActiveForm::begin(['options' => ['data-pjax' => true ]]); ?>
  		<div class="row">
  	
  					<div class="col-md-4">
          					  <?=$form->field($searchModel, 'name_office')->textInput(['placeholder'=>'ชื่อสถานที่ สปา อาบอบนวด....'])?>
  					</div>
  						<div class="col-md-3">
          					 <?= $form->field($searchModel, 'location')->textInput(
                                       ['maxlength' => true,'placeholder'=>'ชื่อจังหวัด อำเภอ ตำบล...']
          					     );
                                   
                            ?>
  					</div>
  							<div class="col-md-2">
  						<?php echo  $form->field($searchModel, 'massagetype')->dropDownList(
                			             ArrayHelper::map(Massagetype::find()->all(), 'massage', 'massage'),
                        			       [
                        			           'prompt' => 'ประเภทการนวด',
                        			       ]
                        			       );
                              ?>
                              <div class="col-md-9">
  				<?= $form->field($searchModel, 'rod')->checkBox(['label' => 'มีลานจอดรถ', 'uncheck' => 0, 'checked' => 1]); ?>

  					</div>
  							</div>
  							   <div class="col-md-2"><br>
  							<a href="#demo" data-toggle="collapse" class="btn btn-default btn-block">ค้นหาเพิ่มเติม <span class="glyphicon glyphicon-triangle-bottom"></span></a>
  					
  					</div>  	
  					 <div class="col-md-2"><br>
  							 <?= Html::submitButton( 'ค้นหา <span class="glyphicon glyphicon-search"></span>' , ['class' => 'btn btn-warning btn-block']) ?>
  					</div>
  		</div> <!-- end row -->

  					
</div> <!-- end collapsible -->
  		<?php \yii\widgets\ActiveForm::end(); ?>
  	
  </div>		<!-- end panel body -->

    <?php if ( $count == 0){?>   <!-- alert เมื่อ ไม่มีประกาศ-->
    <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong><span class="	glyphicon glyphicon-remove"></span> ไม่พบการประกาศงาน</strong>
    </div>
   <?php  }?>
<div class="panel panel-info">
    <div class="panel-heading">
    <div class="row">
    	<div class="col-md-10 col-xs-6"><h3 class="panel-title"><i class="glyphicon glyphicon-signal"></i> ค้นหางานจาก Google Map</h3></div>
    	<div class="col-md-2 col-xs-6"><a href="/massage/work/work-search-map" class="btn btn-danger pull-right">Refresh  Map <span class="	glyphicon glyphicon-repeat"></span></a></div>
    </div>
    </div>

    <div class="panel-body">
        <?php
        echo $map->display();
        ?>
    </div>
</div>
<?php Pjax::end();?>


