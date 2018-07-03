<div class="main">
	<header>
		<h1>JavaJam Coffee House</h1>
	</header>
	<div align="center" style="padding-top:10%"><b>Shopping Cart</b> </div><br>

	<?php echo form_open('cart'); ?>

	<table id="shoppingcart" cellpadding="10" width="60%" align="center">
		<tr>
			<th>Description</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>

		<?php foreach ($this->cart->contents() as $items): ?>
			<tr>
				<td> <?php echo $items['name']; ?></td>
				<td><?php echo  $items['qty']; ?></td>
				<td><?php echo $items['price']; ?></td>
			</tr>

		<?php endforeach; ?>
		<tr>
			<td></td>
			<td class="right"><strong>Total</strong></td>
			<td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
		</tr>

	</table>	
</form>							
<center><table id="buttons">
	<tr>
		<td>
			<?php echo form_open('orders'); ?>
			<button name="placeorder" id="placeorder" type="submit" class="btn btn-default">Place Order</button>
		</form>
	</td>

	<td>
		<?php echo form_open('gear'); ?>
		<button name="continue" id="continue" type="submit" class="btn btn-default">Continue Shopping</button>	
	</form>
</td>
</tr>
</table>
</section>
</article>
</div>
</div>
