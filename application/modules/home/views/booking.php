<style>
	.peraturan_booking ul {
		margin: auto;
    	padding: 10px 40px;
    	list-style: inherit;
	}
	.peraturan_booking p {
		margin-bottom: 0px;
	}
</style>
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title mb-3">Data Mobil</h5>
				<form>
				  <div class="form-group row">
				    <label for="kota" class="col-sm-3 col-form-label">Kota</label>
				    <div class="col-sm-9">
				      <select class="form-control select2 no-radius">
                        <option value="">--Pilih Kota--</option>
                        <?php 
                        	foreach ($data_kota->result() as $row) {
                      	?>
                      	<option value="<?php echo $row->id_kota ?>"><?php echo $row->nama_kota; ?></option>
                      	<?php
                        	}
                        ?>
                     </select>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="tanggal_rental" class="col-sm-3 col-form-label">Tanggal Rental</label>
				    <div class="col-sm-9">
				      <input type="date" class="form-control" id="tanggal_rental">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="durasi" class="col-sm-3 col-form-label">Durasi</label>
				    <div class="col-sm-9">
				      <select class="form-control select2 no-radius">
                        <option value="">--Pilih Durasi--</option>
                        <?php 
                        	foreach ($data_durasi->result() as $row) {
                        	?>
								<option value="<?php echo $row->id_durasi ?>"><?php echo $row->lama_durasi ?></option>
                        	<?php
                        		}
                        	?>
                     	</select>
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="tanggal_rental" class="col-sm-3 col-form-label">Mobil</label>
				    <div class="col-sm-9">
				      <div class="card mb-0">
				      	<div class="card-body">
				      		<div class="row">
				      			<div class="col-md-6">
				      			<input type="hidden" name="id_mobil" id="id_mobil">
				      			<img src="" id="gambar_mobil_sewa">
				      		</div>
				      		<div class="col-md-6">
				      			<p class="text-primary">
				      			<span class="merk_mobil"></span>
                   				<small>(Th. <span class="tahun_mobil"></span>)</small>
                  				</p>
                  				<p class="card-subtitle">Tarif : Rp. <span class="tarif_mobil"></span></p>
			                  <p class="card-subtitle">Supir : Rp. <span class="tarif_supir"></span></p>
			                  <p class="card-title">Total : Rp. <span class="total_sewa"></span></p>
				      		</div>
				      		</div>
				      		
				      	</div>
				      </div>
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title mb-3">Data Penyewa</h5>
				<form>
				  <div class="form-group row">
				    <label for="nama_penyewa" class="col-sm-3 col-form-label">Nama Penyewa</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="nama_penyewa">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="nomor_hp" class="col-sm-3 col-form-label">Nomor HP</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="nomor_hp">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="alamat_jemput" class="col-sm-3 col-form-label">Alamat Jemput</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="alamat_jemput">
				    </div>
				  </div>
				  <div class="form-group row">
				  	<div class="col-sm-12">
				  		<div class="float-right">
				  			<button class="btn btn btn-outline-primary btn-lg" type="button">Booking Sewa Mobil</button>	
				  		</div>
				  	</div>
				  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-body peraturan_booking">
				<p>* Silahkan lakukan pembayaran melalui transfer ke salah satu rekening berikut:</p>
				<ul>
					<li>BCA atas nama Rental Mobil Corp: 123-000-8888</li>
					<li>Mandiri atas nama Rental Mobil Corp: 234-000-8888</li>
					<li>BNI atas nama Rental Mobil Corp: 345-000-8888</li>
					<li>BRI atas nama Rental Mobil Corp: 456-000-8888</li>
				</ul>
				<p>Jika sudah lakukan konfirmasi WA ke nomor 081234567890</p>
			</div>
		</div>
	</div>
</div>