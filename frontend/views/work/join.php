<?php 
use yii\helpers\Html;
use common\models\User;
use common\models\Joinhangout;
?>
<style type="text/css">
.chat-box {border: 1px solid gray; height: 20em; overflow-y: scroll;}
</style>

 <div class="row">
		<div class="col-md-6">
			<div class="panel panel-info">
  			<div class="panel-heading">แชท</div>
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
					      data:{txt:txt,user_id:<?=Yii::$app->user->id?>,hangout_id:<?=$r->id?>,fb:<?=Yii::$app->user->identity->fb_id?>},     
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
				    	data:{hangout_id:<?=$r->id?>},
				    	success: function(result){
				        	$("#chat").html(result);
				    	}
					});
				}
				
  				//return false;
				 </script>
				 <?php endforeach;?>