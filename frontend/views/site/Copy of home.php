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
</style>
	   <center>
           <div class="panel panel-body"style="background-image: url('/massage/frontend/web/images/background/map1.jpg'); width: 560px;height: 240px">
		   	<h2 style= "color:black;" class="font" >ค้นหาร้านสปา ร้านนวดแผนไทย ร้านนวดแผนโบราณ ในประเทศไทย</h2>
		   	<br>
		   	<a style="color:black;" class="btn btn-warning" href="http://localhost/massage/work/work-search-map"><span class="	glyphicon glyphicon-search"></span> สถานที่นวด</a>  
		    </div>
		     </center>
<div class="container">
	<div class="row">     	.
		
				<div class="panel-body">
				<h3 class="text-center" style="color:white;">ข่าวความรู้เกี่ยวกับสุขภาพ</h3>
	
					<div class="row">
						
        					<div class="col-md-4">
        						
        							<div class="panel-body panel-org">
        								<div class="col-md-12" >
        								<a href="https://www.samunpri.com/news/%E2%80%9C%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E2%80%9D-%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B9%82%E0%B8%A0%E0%B8%8A%E0%B8%99%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B9%E0%B8%87-%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B8%B2%E0%B8%A1%E0%B8%B1%E0%B8%A2%E0%B8%8A%E0%B8%B5%E0%B9%89%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%87%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E0%B9%81%E0%B8%9B%E0%B8%A5%E0%B8%81/"><?= Html::img('@web/images/massage/1.jpg',['width'=>'100%']) ?></a>
        									<a href="https://www.samunpri.com/news/%E2%80%9C%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E2%80%9D-%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%84%E0%B9%88%E0%B8%B2%E0%B9%82%E0%B8%A0%E0%B8%8A%E0%B8%99%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B9%E0%B8%87-%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B8%B2%E0%B8%A1%E0%B8%B1%E0%B8%A2%E0%B8%8A%E0%B8%B5%E0%B9%89%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%87%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%AB%E0%B9%87%E0%B8%94%E0%B9%81%E0%B8%9B%E0%B8%A5%E0%B8%81/">	<h4 style="color:white;" >“เห็ด” คุณค่าโภชนาการสูง กรมอนามัยชี้เลี่ยงกินเห็ดแปลก</h4></a>
        								</div>
        							</div>
					</div>
						<div class="row">
						
        					<div class="col-md-4">
        						
        							<div class="panel-body panel-org">
        								<div class="col-md-12" >
        								<a href="https://www.samunpri.com/news/%E0%B8%A3%E0%B8%A7%E0%B8%A1-4-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B9%80%E0%B8%94%E0%B9%87%E0%B8%94-%E0%B8%9E%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%A1%E0%B8%B8%E0%B8%99%E0%B9%84%E0%B8%9E%E0%B8%A3-%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A7%E0%B8%94%E0%B9%80%E0%B8%82%E0%B9%88%E0%B8%B2/"><?= Html::img('@web/images/massage/2.jpeg',['width'=>'98%']) ?></a>
        										<a href="https://www.samunpri.com/news/%E0%B8%A3%E0%B8%A7%E0%B8%A1-4-%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B9%80%E0%B8%94%E0%B9%87%E0%B8%94-%E0%B8%9E%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%A1%E0%B8%B8%E0%B8%99%E0%B9%84%E0%B8%9E%E0%B8%A3-%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B8%AD%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%A7%E0%B8%94%E0%B9%80%E0%B8%82%E0%B9%88%E0%B8%B2/"><h4 style="color:white;">รวม 4 สูตรเด็ด “พอกสมุนไพร” รักษาอาการปวดเข่า</h4></a>
        								</div>
        							</div>
					</div>
						<div class="row">
						
        					<div class="col-md-4">
        						
        							<div class="panel-body panel-org">
        								<div class="col-md-12" >
        								<a href="https://www.samunpri.com/news/%E0%B8%9A%E0%B8%B1%E0%B8%A7%E0%B8%9A%E0%B8%81-%E0%B8%9A%E0%B8%B3%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B8%AA%E0%B8%A1%E0%B8%AD%E0%B8%87-%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%A5%E0%B9%84%E0%B8%8B%E0%B9%80%E0%B8%A1%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%9F%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%9F%E0%B8%B9%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%88%E0%B8%B3/"><?= Html::img('@web/images/massage/3.jpg',['width'=>'107%']) ?></a>
        										<a href="https://www.samunpri.com/news/%E0%B8%9A%E0%B8%B1%E0%B8%A7%E0%B8%9A%E0%B8%81-%E0%B8%9A%E0%B8%B3%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B8%AA%E0%B8%A1%E0%B8%AD%E0%B8%87-%E0%B8%9B%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B1%E0%B8%A5%E0%B9%84%E0%B8%8B%E0%B9%80%E0%B8%A1%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%9F%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%9F%E0%B8%B9%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%88%E0%B8%B3/"><h4 style="color:white;">“บัวบก” บำรุงสมอง ป้องกันอัลไซเมอร์ ฟื้นฟูความจำ</h4></a>
        								</div>
        							</div>
					</div>
				</div>
				</div>
			</div>
	
		</div>

    <div id="myModal" class="modal fade" role="dialog"  >
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="jumbotron">
        	 <img alt="" src="/massage/images/massage/11.png" style="width:60%">
                <h1>Welcome</h1>
                  <p class="lead">Massage web applications.</p>
                <p class="lead">เว็บไซต์สำหรับท่านที่ชื่นชอบการนวดและการผ่อนคลาย</p><hr>
            </div>
     

</div>
		
	

