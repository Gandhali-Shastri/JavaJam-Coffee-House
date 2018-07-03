<div class="main">
	<header>
		<h1>JavaJam Coffee House</h1>
	</header>

	<div class="image3"></div>

	<article>	

		<p><h2>Music at JavaJam</h2></p>

		<div id=content1><p>
		The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some music you won't want to miss!</p>
	</div>
	<section>
		<?php 
		$months = array(
			'01' => 'January','02' => 'February','03' => 'March','04' => 'April','05' => 'May','06' => 'June',
			'07' => 'July','08' => 'August','09' => 'September','10' => 'October','11' => 'November','12' => 'December'		); ?>
		<?php 
		$max = sizeof($posts);
		$previous = '';

		for ($i='0'; $i < $max; $i++) {

			if($i==='0'){
				echo "<h3 class='h3_music'>". $months[substr ( $posts[$i]['MonthYear'] , 0 , 2 )]. "</h3>";
			}
			if($i>0) {
				if($posts[$i]['MonthYear'] != $posts[$i-1]['MonthYear']){
					echo "<h3 class='h3_music'>". $months[substr ( $posts[$i]['MonthYear'] , 0 , 2 )]. "</h3>";	
				}
			}

			echo "<div class='div_img'>
			<p><img src='" . $posts[$i]['Musician_Image_URL'] . "' class='img_top'>" . $posts[$i]['Description'] . "</p>
			</div>";	
		} ?>
	</section>
</article>
</div>
</div>
