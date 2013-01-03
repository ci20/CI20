<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#element").draggable({ 
				containment: '#glassbox', 
				scroll: false
		 }).mousemove(function(){
						var coord = $(this).position();
						$("p:last").text( "left: " + coord.left + ", top: " + coord.top );
		 }).mouseup(function(){ 
				var coords=[];
				var coord = $(this).position();
				var item={ coordTop:  coord.left, coordLeft: coord.top  };
			   	coords.push(item);
				var order = { coords: coords };
				$.post('updatecoords.php', 'data='+$.toJSON(order), function(response){
						if(response == "success")
							$("#respond").html('<div class="success">X and Y Coordinates Saved!</div>').hide().fadeIn(1000);
							setTimeout(function(){ $('#respond').fadeOut(1000); }, 2000);
						});	
				});
						
		});
</script>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div id="glassbox">  
	<div id="element">Move the Box</div>  
</div>  
<div id="respond"></div>  
