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
	<div id="element"><?php echo $this->widget('UserCreateWidget', array(), true); ?></div>
	
	<?php 
	/*
		//Create a query to fetch our values from the database  
		$get_coords = mysqli_query($link, "SELECT * FROM coords");  
		//We then set variables from the * array that is fetched from the database  
		while($row = mysqli_fetch_array($get_coords)) {  
			$x = $row['x_pos'];  
			$y = $row['y_pos'];  
			//then echo our div element with CSS properties to set the left(x) and top(y) values of the element  
			echo '<div id="element" style="left:'.$x.'px; top:'.$y.'px;"><img src="nettuts.jpg" alt="Nettuts+" />Move the Box<p></p></div>';  
		} 
	 */
	?>
</div>  
<div id="respond"></div>  
