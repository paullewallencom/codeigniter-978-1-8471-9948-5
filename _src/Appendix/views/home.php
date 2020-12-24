<h1>This is our shop home page</h1>

<table border="2">

	<tr>
	
		<td>
			<?php 
				echo form_open('shop/add');
				echo form_hidden('id', '1');
				echo form_hidden('price', 12);
				echo form_hidden('name', 'Vegetable 1');
				echo "Vegetable 1";
			?>
		</td>
		<td>
			<?php
				echo "Quantity ".form_input('qty', 1);
			?>
		</td>
		<td>
			12 $ / u
		</td>
		<td>
			<?php
				echo form_submit('buy', 'Buy!!!');
				echo form_close();
			?>
		</td>
	
	</tr>
	<tr>
	
		<td>
			<?php 
				echo form_open('shop/add');
				echo form_hidden('id', '2');
				echo form_hidden('price', 5);
				echo form_hidden('name', 'Vegetable 2');
				echo "Vegetable 2";
			?>
		</td>
		<td>
			<?php
				echo "Quantity ".form_input('qty', 1);
			?>
		</td>
		<td>
			5 $ / u
		</td>		
		<td>
			<?php
				echo form_submit('buy', 'Buy!!!');
				echo form_close();
			?>
		</td>
	
	</tr>	

</table>

<p><?php echo anchor('shop/show_cart', 'See cart'); ?></p>