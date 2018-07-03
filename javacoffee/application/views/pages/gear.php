<div class="main">
	<header>
		<h1>JavaJam Coffee House</h1>
	</header>

	<img class="image" src="<?php echo base_url(); ?>assets/images/couch.jpg">

	<article>	
		<section>
			<p><h2>JavaJam Gear</h2></p>

			<div id=content1><p>
				JavaJam gear not only looks good, but it's good to your wallet,too.<br>
			Get a 10% discount when you wear a JavaJam shirt or bring in your JavaJam mug!</p>
		</div>
		<table id="geartable" >
			<?php foreach($posts as $post) : ?>
				<tr>
					<td align="left" rowspan="2" style="padding-left: 0.5%">
						<?php
						echo "<img src='".$post['Product_Image_URL'] . "' height='110px' width='110px'>";
						?>
					</td>
					<td valign="top">
						<?php echo $post['Description']; ?>
					</td></tr>
					<tr><td align="left" valign="top">

						<?php echo form_open('cart'); ?>

						<?php echo	"<input type='hidden' name='desc1' value='".$post['Name']."'>"?>
						<?php echo	"<input type='hidden' name='cost1' value='".$post['Price']."'>"?>
						<?php echo	"<input type='hidden' name='id' value='".$post['ProductId']."'>"?>
						<input type="submit" name="addtocart" value="Add to Cart">
					</form>
				</td></tr>
			<?php endforeach; ?>
		</table>
	</section>
</article>
</div>
</div>
