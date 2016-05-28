<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script>
		function createGrid(size) {
		  var i,
		  sel = $('.drop-target'),
			  height = sel.height(),
			  width = sel.width(),
			  ratioW = Math.floor(width / size),
			  ratioH = Math.floor(height / size);

		  for (i = 0; i <= ratioW; i++) { // vertical grid lines
			$('<div />').css({
				'top': 0,
				'left': i * size,
				'width': 1,
				'height': height
			})
			  .addClass('gridlines')
			  .appendTo(sel);
		  }

		  for (i = 0; i <= ratioH; i++) { // horizontal grid lines
			$('<div />').css({
				'top': i * size,
				'left': 0,
				'width': width,
				'height': 1
			})
			  .addClass('gridlines')
			  .appendTo(sel);
			}

		  $('.gridlines').show();
		}
		$(function(){
			createGrid(84+32);
			var elm = $('#elm');
				degrees = 76;
				elm.css('transform','rotate('+ degrees +'deg)');
				console.log(elm.position());
				var test = elm.clone(true,true);
				console.log(test.position());
				test.appendTo('.drop-target').css({left:elm.css('left'),top:elm.css('top'),visibility:'hidden'})
				test.css('transform','none');
				console.log(test.position())
				test.remove();
		})
		
		var thegrid = [
						{left:0,top:1},
						{left:0,top:2},
						{left:0,top:3},
						{left:1,top:1},
						{left:1,top:2},
						{left:1,top:3},
						{left:2,top:1},
						{left:2,top:2},
						{left:2,top:3},
						{left:3,top:1},
						{left:3,top:2},
						{left:3,top:3}
					]
		var gridifyTheStudents = function(){
			var pos = {left:0,top:0};
			var gridWidth = $J('.drop-target').css('width');
			var gridHeight = $J('.drop-target').css('height');
			var gridX = parseInt(gridWidth)/116;
			var gridY = parseInt(gridHeight)/116;
			var gridIdx = 0;
			$J('.ui-selected').each(function(){
				//Move each element to position
				if(gridIdx < thegrid.length){
					pos.top = (parseInt(thegrid[gridIdx].top) * 116)
					pos.left = (parseInt(thegrid[gridIdx].left) * 116)
					$J(this).animate({
						opacity: 1,
						left: pos.left,
						top:pos.top
					}, 1000, function() {
						// Animation complete.
					  }
					);
					gridIdx ++;
				}
			});
			$(function(){
				
				
			})
		}
	</script>
	<style>
		.gridlines {
			display: none;
			position:absolute;
			background-color:#ccc;
			}
	</style>
</head>
	<body>
		<DIV class="drop-target" style="height:1038px;width:1039px;">
			<div id='elm' style="left:0;top:116;position:absolute;height:116px;width:116px;border:1px solid;" >
			
			</div>
		</DIV>
	</body>
</html>
