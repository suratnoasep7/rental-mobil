<style>
	.table td, .table th {
		vertical-align: middle;
	}
	#example2_filter {
		float: right;
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
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                	<?php $no=1;
                        foreach($datatables->result() as $row){
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$row->username."</td>";
                            foreach ($data_level_user->result() as $row_level_user) {
                                if ($row->id_level_user == $row_level_user->id_level_user) {
                                    echo "<td>".$row_level_user->nama_level_user."</td>";
                                }
                            }
                            echo "<td>
                            <button type='button' class='btn btn-outline-warning btn-xs' onClick='edit(".$row->id_user_login.")' ><i class='icon-pencil'></i></button>
                            <button type='button' class='btn btn-outline-danger btn-xs' onClick=del('".$row->id_user_login."') ><i class='icon-trash'></i></button>
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
<script type="text/javascript">
	$(document).ready(function() {
		$('#example2').dataTable();
		$('.add').click(function(){
			$('#addModal').modal('show');
			$('#form')[0].reset();
		});
		$('#form').submit(function(){
			$.ajax({
				url :"<?php echo site_url();?>dashboard/data_user/tambah_user",
				type:"post",
				data:$("#form").serialize(),
				success:function(){
					$('#addModal').modal('hide');
					location.reload();
				}
			})
		});
		$('#form2').click(function(){
			$.ajax({
				url :"<?php echo site_url();?>dashboard/data_user/edit_user",
				type:"post",
				data:$("#form2").serialize(),
				success:function(){
					$('#editModal').modal('hide');
					location.reload();
				}
			})
		});
	});
function edit(id){
	$.getJSON('<?php echo site_url();?>dashboard/data_user/edit_data_user/'+id,
		function( response ) {
            console.log(response)
			$("#editModal").modal('show');
			$("#id_user").val(response['id_user_login']);
			$("#username_edit").val(response['username']);
            $('#id_level_user').val(response['id_level_user']);
		}
	);
}
function del(id){
	if(confirm('Yakin menghapus data ?')){
		$.ajax({
				url :"<?php echo site_url();?>dashboard/data_user/hapus_user/"+id,
				type:"post",
				success:function(){
					location.reload();
				}
			})
	}
}
</script>
<div class="modal fade bs-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
            </div>
            <form class="form-horizontal form-label-left" id="form" name="form">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Username</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="form-control" id="username" name="username" placeholder="Username" required="" />
	                    		</div>
	                		</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-12 col-sm-12 col-xs-12">Password</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="" />
	                    		</div>
	                		</div>
						</div>
					</div>
	                <div class="clearfix"></div>
	                <div class="form-group">
	                    <label class="control-label col-sm-3 col-sm-3 col-xs-12">Hak Akses</label>
	                    <div class="col-md-12 col-sm-12 col-xs-12">
	                        <select name="id_level_user" id="level_user" class="form-control" required="">
	                            <option value="">-- Pilih Hak Akses --</option>
	                            <?php 
	                                foreach($data_level_user->result() as $row) {
	                            ?>
	                                <option value="<?php echo $row->id_level_user ?>"><?php echo $row->nama_level_user; ?></option>
	                            <?php
	                                }
	                            ?>
	                        </select>
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
				<h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
            </div>
            <form class="form-horizontal form-label-left" id="form2" name="form2">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-3 col-sm-3 col-xs-12">Username</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="text" class="form-control" id="username_edit" name="username" placeholder="Username" required="" />
	                        		<input type="hidden" name="id_user" id="id_user">
	                    		</div>
	                		</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
	                    		<label class="control-label col-sm-3 col-sm-3 col-xs-12">Password</label>
	                    		<div class="col-md-12 col-sm-12 col-xs-12">
	                        		<input type="password" class="form-control" id="password_edit" name="password" placeholder="Password" />
	                    		</div>
	                		</div>
						</div>
					</div>                
	                <div class="clearfix"></div>
	                <div class="form-group">
	                    <label class="control-label col-sm-3 col-sm-3 col-xs-12">Hak Akses</label>
	                    <div class="col-md-12 col-sm-12 col-xs-12">
	                        <select name="id_level_user" id="id_level_user" class="form-control" required="">
	                            <option value="">-- Pilih Hak Akses --</option>
	                            <?php 
	                                foreach($data_level_user->result() as $row) {
	                            ?>
	                                <option value="<?php echo $row->id_level_user ?>"><?php echo $row->nama_level_user; ?></option>
	                            <?php
	                                }
	                            ?>
	                        </select>
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