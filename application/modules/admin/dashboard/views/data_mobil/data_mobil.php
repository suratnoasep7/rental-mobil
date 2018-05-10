<style>
	.table td, .table th {
		vertical-align: middle;
	}
	#example2_filter {
		float: right;
	}
	.img-mobil {
		width: 100px;
	}
</style>
<div class="card">
	<div class="card-body">
		<h2><button type="button" class="add btn btn-primary"><i class="icon-plus"></i> Tambah Data </button></h2>
		<div class="clearfix"></div>
		<div>
			<table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Merk Mobil</th>
                    <th>Tahun Mobil</th>
                    <th>Tarif Mobil</th>
                    <th>Tarif Sopir</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                	<?php 
                	$no=1;
                        foreach($datatables->result() as $row){
                        	$img = base_url().'assets/gambar_mobil/';
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".ucfirst($row->nama_mobil)."</td>";
                            echo "<td>".$row->tahun_mobil."</td>";
                            echo "<td>".rupiah((int)$row->tarif_mobil)."</td>";
                            echo "<td>".rupiah((int)$row->tarif_supir)."</td>";
                            echo "<td><img src='".$img."".$row->gambar_mobil."' class='img-mobil' /></td>";
                            echo "<td>
                            <button type='button' class='btn btn-outline-warning btn-xs' onClick='edit(".$row->id_mobil.")' ><i class='icon-pencil'></i></button>
                            <button type='button' class='btn btn-outline-danger btn-xs' onClick=del('".$row->id_mobil."') ><i class='icon-trash'></i></button>
                                </td>";
                            echo "</tr>";
                            $no++;
                        } 
                    ?>
                </tbody>
            </table>
		</div>	
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Tambah Data Mobil</h4>
            </div>
            <form class="form-horizontal form-label-left" id="submitTambah">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Merk Mobil</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="form-control" id="merk_mobil" name="merk_mobil" placeholder="Merk Mobil" required="" />
	                    		</div>
	                		</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Tahun Mobil</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="form-control tahun_mobil_tambah" id="tahun_mobil" name="tahun_mobil" placeholder="Tahun Mobil" required="" />
	                    		</div>
	                		</div>
						</div>
					</div>
	                <div class="clearfix"></div>
	                <div class="row">
	                	<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Tarif Mobil / Hari</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="tarif_mobil_tambah form-control" id="tarif_mobil" name="tarif_mobil" placeholder="Tarif Mobil" required="" min="0" step="0.01" />
	                    		</div>
	                		</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Tarif Supir / Hari</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="tarif_supir_tambah form-control" id="tarif_supir" name="tarif_supir" placeholder="Tarif Supir" required="" min="0" step="0.01" />
	                    		</div>
	                		</div>
						</div>
	                </div>
	                <div class="form-group">
	                    <label class="control-label col-sm-12 col-sm-12 col-xs-12">Gambar Mobil</label>
	                    <div class="col-md-12 col-sm-12 col-xs-12">
	                        <input type="file" class="form-control" name="file" accept="image/jpg,image/jpeg">
	                    </div>
	                </div>
           		</div>
            	<div class="modal-footer">
            		<button type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-close"></i> <span>Tutup</span></button>
               		<button type="submit" class="btn btn-primary" id="save"><i class="icon-check"></i> <span>Simpan</span></button>
            	</div>
            </form>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Edit Data Mobil</h4>
            </div>
            <form class="form-horizontal form-label-left" id="submitEdit">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Merk Mobil</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="form-control" id="merk_mobil_edit" name="merk_mobil" placeholder="Merk Mobil" required="" />
	                        		<input type="hidden" name="id_mobil" id="id_mobil">
	                    		</div>
	                		</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Tahun Mobil</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="form-control" id="tahun_mobil_edit" name="tahun_mobil" placeholder="Tahun Mobil" />
	                    		</div>
	                		</div>
						</div>
					</div>                
	                <div class="clearfix"></div>
	                <div class="row">
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Tarif Mobil / Hari</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="tarif_mobil_edit form-control" id="tarif_mobil_edit" name="tarif_mobil" placeholder="Tarif Mobil" required="" min="0" step="0.01" />
	                    		</div>
	                		</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Tarif Supir / Hari</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="tarif_supir_edit form-control" id="tarif_supir_edit" name="tarif_supir" placeholder="Tarif Supir" min="0" step="0.01" />
	                    		</div>
	                		</div>
						</div>
					</div>
	                <div class="form-group">
	                     <label class="control-label col-sm-12 col-sm-12 col-xs-12">Gambar Mobil</label>
	                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
	                        <input type="file" class="form-control" name="file" accept="image/jpg,image/jpeg">
	                    </div>
	                    <div class="form-group col-md-12">
	                    	<img src="" id="gambar_mobil_edit">
	                    </div>
	                </div>
            	</div>
            	<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-close"></i> <span>Tutup</span></button>
                	<button type="submit" class="btn btn-primary" id="saveEdit"><i class="icon-check"></i> <span>Simpan</span></button>
            	</div>
            </form>
		</div>
	</div>
</div>
<script type="text/javascript">
	

	$(document).ready(function() {
		
		$('#example2').dataTable();
		$('.add').click(function(){
			$('#addModal').modal('show');
			$('#submitTambah')[0].reset();
		});
		$('.tahun_mobil_tambah').datepicker({
        	minViewMode: 2,
         	format: 'yyyy'
       	});
		$('#submitTambah').submit(function(e){
            e.preventDefault();
            	Pace.start(); 
                 $.ajax({
                    url:'<?php echo base_url();?>dashboard/data_mobil/tambah_mobil',
                    type:"post",
                    data:new FormData(this), //this is formData
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                    	var msg = JSON.parse(data);
                    	if (msg.response == 'merk') {
                    		$.alert({
                            	title: 'Error',
                            	icon: 'fa fa-warning',
                            	type: 'red',
                            	content: 'Merk sudah Ada',
                            	animation: 'bottom',
        						closeAnimation: 'bottom',
        						animateFromElement: false
                        	});
                    	} else if(msg.response == 'error') {
                    		$.alert({
                            	title: 'Error',
                            	icon: 'fa fa-warning',
                            	type: 'red',
                            	content: 'Mohon Isi dengan Baik dan Benar',
                            	animation: 'bottom',
        						closeAnimation: 'bottom',
        						animateFromElement: false
                        	});
                    	} else {
                    		location.reload();
                    		$('#addModal').modal('hide');
                    		Pace.stop();
                    	}	 
                   	}
                 });         	
        });
        $('#submitEdit').submit(function(e){
            e.preventDefault();
            	Pace.start(); 
                 $.ajax({
                    url:'<?php echo base_url();?>dashboard/data_mobil/edit_mobil',
                    type:"post",
                    data:new FormData(this), //this is formData
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success: function(data){
                    	location.reload();
                    	$('#editModal').modal('hide');
                    	Pace.stop();	 
                   	}
                 });         	
        });
	});
function edit(id){
	$.getJSON('<?php echo site_url();?>dashboard/data_mobil/edit_data_mobil/'+id,
		function( response ) {
            var gambar_mobil = '<?php echo base_url();?>assets/gambar_mobil/'+response['gambar_mobil'];
			$("#editModal").modal('show');
			$("#id_mobil").val(response['id_mobil']);
			$("#merk_mobil_edit").val(response['nama_mobil']);
			$("#tahun_mobil_edit").val(response['tahun_mobil']);
            $('#tarif_mobil_edit').val(response['tarif_mobil']);
            $('#tarif_supir_edit').val(response['tarif_supir']);
            $('#gambar_mobil_edit').val(response['gambar_mobil']);
            $('#gambar_mobil_edit').attr('src',gambar_mobil);
		}
	);
}
function del(id){
	$.confirm({
		title: 'Hapus Data',
		icon: 'fa fa-trash',
		content: 'Apakah anda yakin ingin menhapus data ?',
		closeIcon: false,
        animation: 'bottom',
        closeAnimation: 'bottom',
        animateFromElement: false,
        type: 'red',
        theme: 'modern',
        buttons: {
        	yes: {
				text: 'Ya',
				action: function() {
					Pace.start();
					$.ajax({
						url :"<?php echo site_url();?>dashboard/data_mobil/hapus_mobil/"+id,
						type:"post",
						beforeSend: function() {
							Pace.start();
						},
						success:function(){
							Pace.stop();
							location.reload();
						}
					});
				}
			},
			no: {
				text: 'Tidak',
				action: function() {
					location.reload();
				} 
			},
		}
	});
}
</script>