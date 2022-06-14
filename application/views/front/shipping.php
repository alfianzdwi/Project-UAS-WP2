<style type="text/css">
	.shipping_info p{color:red;font-weight: bold;font-size: 12px}
</style>
<section id="cart_items">
		<div class="container">
			<div class="step-one">
				<h2 class="heading">Lanjutkan Pesanan</h2>
			</div>
		
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<h5 class="shipping_info">
                   			 <?php echo validation_errors();?>
			              </h5>
							<p>Alamat Pengiriman</p>
							<div class="form-two">
								<form action="<?php echo base_url()?>insert-shipping" method="post" name="shiping_info">
									<input type="text" placeholder="Nama" name="cus_name">
									
									<input type="hidden" name="id_pengiriman" value="">
									<input type="text" placeholder="Email*" name="cus_email">
									<input type="text" placeholder="No Telepon" name="cus_notelp">
									<input type="text" placeholder="Alamat" name="cus_alamat">
									<input type="text" placeholder="Kecamatan" name="cus_kec">
									<select name="cus_kota">
										<option>-- Kota --</option>
										<option>Depok</option>
										<option>Bogor</option>
										<option>Jakarta</option>
									</select>
									<input type="text" placeholder="Kode Pos" name="cus_kodepos">
									<input type="submit" value="Simpan" class="btn btn-primary">
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-sm-2">
						
					</div>					
				</div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
	<script type="text/javascript">
		
		

	</script>