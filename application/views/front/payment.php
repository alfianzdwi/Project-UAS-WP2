<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php $cart_content = $this->cart->contents();
						
						?>

						<?php foreach ($cart_content as $items){ ?>

						<tr>
							<td class="cart_product">
								<a href=""><img  width="100" src="<?php echo $items['options']['gambar_pro']?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $items['name']?></a></h4>
							</td>
							<td class="cart_price">
								<p>Rp. <?php echo $items['price']?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="<?php echo base_url()?>update-cart-qty-payment" method="post">
		
										<input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
										<a> </a>
										<input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
										<input  type="submit"  value="Ubah"/>
									<form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php echo $items['subtotal']?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url()?>delete-to-cart-payment/<?php echo $items['rowid']?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<?php 
								$cart_total = $this->cart->total();
							?>
							<li>Sub Total <span>Rp. <?php echo $cart_total;?></span></li>
							<li>Ongkos Kirim <span>Rp. <?php echo 10000?></span></li>
							<?php $g_total = $cart_total+10000;?>
							<li>Total <span>Rp. <?php echo $g_total;?></span></li>
						</ul>
							<form action="<?php echo base_url()?>update-cart-qty-payment" method="post" >	
							
							</form>	
					</div>
				</div>
				<div class="col-sm-6">
					<form action="<?php echo base_url()?>place-order" method="post" >
						<div class="payment-options">
							<div class="order-message">
								<?php echo $this->session->flashdata("flash_msg")?>
								<textarea name="payment_message"  placeholder="Masukan Catatan " rows="10"></textarea>
							</div>	
							<span>
								<label><input type="radio"  name="metode_pembayaran" value="cash_on_delivery"> Cash on delivery(COD)</label>
							</span>
							<span>
								<input type="submit" name="btn" class="btn btn-primary" value="Pesan">
							</span>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section><!--/#do_action-->
	