<?php 
use yii\helpers\Html;
use yii\web\View;
$this->title="Massage of Service";
$this->registerJs("
 $(window).on('load',function(){
        $('#myModal').modal('show');
    });
",View::POS_READY);
?>

<style>
    .layout{
        margin: auto;
        
    }
    .panel-custom{
        background: #333333;
        color: white;
    }
    
</style>
	   <center>
	   	   <div class="panel panel-body"style="background-image: url('/massage/frontend/web/images/background/map1.jpg'); width: 560px;height: 240px">
		   	<h2 style= "color:black;" >ค้นหาร้านสปา ร้านนวดแผนไทย ร้านนวดแผนโบราณ ในประเทศไทย</h2>
		   	<span class="glyphicon glyphicon-arrow-down"></span>
		   	<br>
		   	<a style="color:black;" class="btn btn-warning" href="http://localhost/massage/work/work-search-map"><span class="	glyphicon glyphicon-search"> สถานที่นวด	</span></a>  
		    </div>
		     </center>
		     
		     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <?php 
  $count =0;
  ?>
				<div class="panel-heading panel-custom" ><h4>ร้านสปา ร้านนวด</h4></div>
				  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <div class="panel">
     
     <?php 
     $i1 =0;
     $i2 =0;
     ?>
					<div class="row">
						<?php $n=1; foreach  ($showwork as $show) : ?>
						 <?php  if($i1 < 4){?>
						<div class="col-md-3">
        							<div class="panel-body panel-org">
        							<a  href="http://localhost/massage/work/<?= $show->id ?>"><?= Html::img('@web/images/work/'.$show->img.'',['width'=>'230px','height'=>'180px']) ?></a>
         							<a  href="http://localhost/massage/work/<?= $show->id ?>"><h3 style="color:black;"><?=$show->name_office?></h3> </a>
        						<span><?=star($show->star)?></span>
        							</div>
        						</div>
        					<?php }else{break;} $i1++;?> 
        					<?php $n+=1; endforeach;?>
        					
					</div>	
			</div>
			        		 
    </div>
    <?php 
    function star($star){
       if($star == 0){
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
       }else if($star == 1){
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
       }
       else if($star == 2){
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
       }
       else if($star == 3){
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
       }
       else if($star == 4){
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i class="glyphicon glyphicon-star"></i>';
       }
       else if($star == 5){
           
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
           echo '<i style="color:yellow;" class="glyphicon glyphicon-star"></i>';
       }
           
           
    }
    ?>
    <div class="item">
  <div class="panel">
	
					<div class="row">
						<?php $count = 0;?>
						<?php $n=5; foreach ($showwork as $show) : ?>
						 <?php if($i2 > 3){ ?>
						<div class="col-md-3">
						 			<div class="panel-body panel-org">
        							<a href="http://localhost/massage/work/<?= $show->id ?>"><?= Html::img('@web/images/work/'.$show->img.'',['width'=>'230px','height'=>'180px']) ?></a>
        							<a href="http://localhost/massage/work/<?= $show->id ?>"><h3 style="color:black;"><?=$show->name_office?></h3> </a>
        							<span><?=star($show->star)?></span>
        							</div>
        						</div>
        						 
        					<?php } $i2++; $n+=1;   endforeach;?>
        					
					</div>	
			</div>
			        		          		 

    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			
			<?php //endshow?>
			<div class="panel">
				<div class="panel-heading panel-custom" ><h4>ข่าวความรู้เกี่ยวกับสุขภาพ</h4></div>
					<div class="row">
					
						<div class="col-md-3">
        							<div class="panel-body panel-org">
        							<a href="https://www.samunpri.com/news/%E2%80%9C%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E2%80%9D-%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B9%82%E0%B8%A0%E0%B8%8A%E0%B8%99%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B9%E0%B8%87-%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B8%B2%E0%B8%A1%E0%B8%B1%E0%B8%A2%E0%B8%8A%E0%B8%B5%E0%B9%89%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%87%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E0%B9%81%E0%B8%9B%E0%B8%A5%E0%B8%81/"><?= Html::img('@web/images/massage/1.jpg',['width'=>'230px','height'=>'180px']) ?></a>
        									<a href="https://www.samunpri.com/news/%E2%80%9C%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E2%80%9D-%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B9%82%E0%B8%A0%E0%B8%8A%E0%B8%99%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B9%E0%B8%87-%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B8%B2%E0%B8%A1%E0%B8%B1%E0%B8%A2%E0%B8%8A%E0%B8%B5%E0%B9%89%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%87%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E0%B9%81%E0%B8%9B%E0%B8%A5%E0%B8%81/">	<h4 style="color:black;" >“เห็ด” คุณค่าโภชนาการสูง กรมอนามัยชี้เลี่ยงกินเห็ดแปลก</h4></a>
        								
        							</div>
        						</div>
        						<div class="col-md-3">
        							<div class="panel-body panel-org">
        								<a href="https://www.samunpri.com/news/%E0%B8%A3%E0%B8%A7%E0%B8%A1-4-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B9%80%E0%B8%94%E0%B9%87%E0%B8%94-%E0%B8%9E%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%A1%E0%B8%B8%E0%B8%99%E0%B9%84%E0%B8%9E%E0%B8%A3-%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A7%E0%B8%94%E0%B9%80%E0%B8%82%E0%B9%88%E0%B8%B2/"><?= Html::img('@web/images/massage/2.jpeg',['width'=>'230px','height'=>'180px']) ?></a>
        										<a href="https://www.samunpri.com/news/%E0%B8%A3%E0%B8%A7%E0%B8%A1-4-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B9%80%E0%B8%94%E0%B9%87%E0%B8%94-%E0%B8%9E%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%A1%E0%B8%B8%E0%B8%99%E0%B9%84%E0%B8%9E%E0%B8%A3-%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A7%E0%B8%94%E0%B9%80%E0%B8%82%E0%B9%88%E0%B8%B2/"><h4 style="color:black;">รวม 4 สูตรเด็ด “พอกสมุนไพร” รักษาอาการปวดเข่า</h4></a>
        							
        							</div>
        						</div>
        						<div class="col-md-3">
        							<div class="panel-body panel-org">
        								<a href="https://www.samunpri.com/news/%E0%B8%9A%E0%B8%B1%E0%B8%A7%E0%B8%9A%E0%B8%81-%E0%B8%9A%E0%B8%B3%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B8%AA%E0%B8%A1%E0%B8%AD%E0%B8%87-%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%A5%E0%B9%84%E0%B8%8B%E0%B9%80%E0%B8%A1%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%9F%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%9F%E0%B8%B9%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%88%E0%B8%B3/"><?= Html::img('@web/images/massage/3.jpg',['width'=>'230px','height'=>'180px']) ?></a>
        								<a href="https://www.samunpri.com/news/%E0%B8%9A%E0%B8%B1%E0%B8%A7%E0%B8%9A%E0%B8%81-%E0%B8%9A%E0%B8%B3%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B8%AA%E0%B8%A1%E0%B8%AD%E0%B8%87-%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%A5%E0%B9%84%E0%B8%8B%E0%B9%80%E0%B8%A1%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%9F%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%9F%E0%B8%B9%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%88%E0%B8%B3/"><h4 style="color:black;">“บัวบก” บำรุงสมอง ป้องกันอัลไซเมอร์ ฟื้นฟูความจำ</h4></a>
        								
        							</div>
        						</div>
        						<div class="col-md-3">
        							<div class="panel-body panel-org">
        							<a href="https://www.samunpri.com/news/%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2-%E0%B8%84%E0%B8%A7%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%94%E0%B8%B5%E0%B9%80%E0%B8%94%E0%B9%88%E0%B8%99%E0%B8%9B%E0%B8%B5-60-%E0%B8%8A%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%8D%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2-%E0%B9%84%E0%B8%82%E0%B9%89%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%81%E0%B9%84%E0%B8%A1%E0%B9%89/"><?= Html::img('@web/images/massage/4.jpeg',['width'=>'230px','height'=>'180px']) ?></a>
        									<a href="https://www.samunpri.com/news/%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B8%AA%E0%B8%B2-%E0%B8%84%E0%B8%A7%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%94%E0%B8%B5%E0%B9%80%E0%B8%94%E0%B9%88%E0%B8%99%E0%B8%9B%E0%B8%B5-60-%E0%B8%8A%E0%B8%B3%E0%B8%99%E0%B8%B2%E0%B8%8D%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2-%E0%B9%84%E0%B8%82%E0%B9%89%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%81%E0%B9%84%E0%B8%A1%E0%B9%89/">	<h4 style="color:black;" >“หมอทองสา” คว้าหมอไทยดีเด่นปี 60 ชำนาญรักษา “ไข้หมากไม้”</h4></a>
        								
        							</div>
        						</div>
        					
					</div>
			</div>
<div id="myModal" class="modal fade" role="dialog"  >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ">
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body ">
                <div class="jumbotron">
                <img alt="" src="/massage/images/massage/11.png" style="width:60%">
                <h1>Welcome</h1>
        
                <p class="lead">Massage web applications</p>
                <p class="lead">เว็บไซต์สำหรับท่านที่ชื่นชอบการนวดและการผ่อนคลาย</p><hr>

      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
     
    </div>

  </div>
</div>
</div>

