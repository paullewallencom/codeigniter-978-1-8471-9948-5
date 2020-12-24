<h1>This is our cart</h1>


<?php
 echo form_open('shop/update');
 ?>


<table border="2">


<tr>

	<th>Product</th>

	<th>Quantity</th>
  
	<th style="text-align:right">Price</th>
	
<th style="text-align:right">Total</th>

</tr>

<?php $i = 1; ?>


<?php
 foreach($this->cart->contents() as $items):
 ?>

	
<?php
 echo form_hidden($i.'rowid', $items['rowid']); ?>
	
	<tr>

	  <td>
<?php
 echo form_input(array('name' => $i.'qty', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>	
	  </td>
	  <td><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td>$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td><strong>Total</strong></td>
  <td>$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('submit', 'Update cart'); ?></p>
<p><?php echo anchor('shop/index', 'Continue shopping'); ?></p>