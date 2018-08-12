<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Massagetype;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .text{
        color: white;
    }
</style>
<div class="work-form">
<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-info">
			<div class="panel-heading"><h3>ข้อมูลร้านสปาของคุณ</h3></div>
			<div class="panel-body">

                
				<div class="col-md-6">
					<div class="panel panel-default">
 						 <div class="panel-body">
  							<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlMCXTr74f7ah640MrjFbb3V4KUHhqRis&language=th&libraries=places"></script>
</head>
<body>


 <input id="searchInput" class="input-controls" type="text" placeholder="Enter a location">
 <div class="map" id="map" style="width: 100%; height: 300px;"></div>
 <div class="form_area">
<!--      <input type="text" name="location" id="location">  -->
<!--      <input type="text" name="lat" id="lat"> -->
<!--      <input type="text" name="lng" id="lng"> -->
 </div>
<script>
/* script */
function initialize() {
   var latlng = new google.maps.LatLng(19.027715,99.900564);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 15
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: true,
      anchorPoint: new google.maps.Point(0, -29)
   });
    
    var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    var geocoder = new google.maps.Geocoder();
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    var infowindow = new google.maps.InfoWindow();   
    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
  
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
       
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);          
    
        bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
        infowindow.setContent(place.formatted_address);
        infowindow.open(map, marker);
       
    });
    // this function will work on marker move event into map 
    	google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {        
              bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
          }
        }
        });
    });
}
function bindDataToForm(address,lat,lng){
   document.getElementById('work-location').value = address;
   document.getElementById('work-lat').value = lat;
   document.getElementById('work-lng').value = lng;
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>



<style type="text/css">
    .input-controls {
      margin-top: 10px;
      border: 1px solid transparent;
      border-radius: 2px 0 0 2px;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      height: 32px;
      outline: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }
    #searchInput {
      background-color: #fff;
      font-family: Roboto;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0 11px 0 13px;
      text-overflow: ellipsis;
      width: 50%;
    }
    #searchInput:focus {
      border-color: #4d90fe;
    }
</style>
  						 </div>
					</div>	
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
 	<?= $form->field($model, 'location')->hiddenInput()->label(false); ?>
    <?= $form->field($model, 'lat')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'lng')->hiddenInput()->label(false);?>
    <?= $form->field($model, 'name_office')->textInput(['maxlength' => true]) ?>
    	<?php // $form->field($model, 'rod')->checkBox(['label' => 'มีลานจอดรถ', 'uncheck' => null, 'checked' => true]); ?>	
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?=  $form->field($model, 'massagetype')->dropDownList(
        ArrayHelper::map(Massagetype::find()->all(),'massage', 'massage')
           	       // ['prompt' => 'หน่วยงาน / สังกัด',]
            	    )?>


    <?php // $form->field($model, 'number')->textInput() ?>

    <?php // $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'benefits')->textarea(['rows' => 6]) ?>

    <?php //$form->field($model, 'count_benefits')->textInput() ?>
</div>

   <div class="col-md-6">

   <h3>  <?php echo 'เปิดให้บริการ '?></h3>
  	<?= $form->field($model, 'monday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
  	<?= $form->field($model, 'tuesday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
  	<?= $form->field($model, 'wendesday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
  	<?= $form->field($model, 'thursday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
  	<?= $form->field($model, 'friday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
  	<?= $form->field($model, 'saturday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
  	<?= $form->field($model, 'sunday')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>
    <?= $form->field($model, 'rod')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>	
    <?= $form->field($model, 'wifi')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>	
    <?= $form->field($model, 'snack')->checkbox(['uncheck'=> 0, 'check'=> 1]) ?>	
  	<?= $form->field($model, 'timework')->textInput(['placeholder'=>'เช่น 08.00...']) ?>
  	<?= $form->field($model, 'endtimework')->textInput(['placeholder'=>'เช่น 18.00...']) ?>
	<?= $form->field($model, 'money1')->textInput() ?>
    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'img')->fileInput() ?>

    <?php // $form->field($model, 'imgs[]')->fileInput(['multiple' => true]) ?>
    <?php //$form->field($model, 'money2')->textInput() ?>

    <?php //$form->field($model, 'time_begin')->textInput() ?>

    <?php //$form->field($model, 'time_end')->textInput() ?>

    <?php //$form->field($model, 'work_user_id')->textInput() ?>

    <?php  //$form->field($model, 'work_created_at')->textInput() ?>

    <?php //$form->field($model, 'work_status')->textInput() ?>

    <?php //$form->field($model, 'work_address_id')->textInput() ?>
</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'create' : 'update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
