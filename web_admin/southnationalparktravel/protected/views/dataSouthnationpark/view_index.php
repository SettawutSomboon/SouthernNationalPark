<?php
$this->pageTitle=Yii::app()->name . ' - การจัดการ';
$this->breadcrumbs=array(
		'อุทยาน'=>array('admin'),
		$model->park_name,
);


?>

<h2>

<?php 
echo $model->park_name;

?>
</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id',
		'park_name',
		'category.category_name',


/* 		array(
		'name'=>'imageData.name',
		'type'=>'html',
		'value'=>($model->imageData->name)?CHtml::image(
				Yii::app()->request->baseUrl.'/images/'
				.$model->imageData->name,'',
				array('width'=>600,'height'=>350)):CHtml::image(
						Yii::app()->request->baseUrl.'/images/noimage.jpg'
						,'',array('width'=>600,'height'=>350)),
		), */ // show image on view
		
		
		
),
)); 

?>
<h5>รูปภาพ</h5>
<?php 
		
		$connection = Yii::app()->db;
		$command = $connection->createCommand('select name from images where data_southnationpark_id='.$model->id);
		$row = $command->queryAll();
		//print_r($row);
		//var_dump($row);
		//$images = $row;  // เปลียน string เป็น array
		$path = Yii::app()->baseUrl . '/images'; // path images
		foreach ($row as $image) {
			echo '<img src="' . $path . '/' . $image['name'] .
			
			'" style="border:1px solid #DDD;padding:10px;margin:10px;width:360px;height:250px;">';
			
		}                    
		                   
?>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'general',
		'topography',
		'climate',
		'plant',
		'animal',
		'activity',	
		'address',
		'phone',
		'province.province_name',
		'latitude',
		'longtitude',
		
		
),
)); 

?>

<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>
  <script src="jquery.js"></script> 

<script>
$(document).ready(function() {

var lat = $('#latitude').val();
var long = $('#longtitude').val();

//alert(lat+" | "+long);
var myCenter = new google.maps.LatLng(lat, long);

function initialize()
{
    var mapProp = {
        center: myCenter,
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
    });

    marker.setMap(map);
    var t =  '<?php echo $model->park_name; ?>';

    var infowindow = new google.maps.InfoWindow({
        content: t
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

});
</script>
</head>

<body>
<input type="hidden" id="latitude" value="<?php echo $model->latitude; ?>"></input>                       
<input type="hidden" id="longtitude" value="<?php echo $model->longtitude; ?>"></input>
<div id="googleMap" style="width:750px;height:380px;"></div>
</body>
</html>