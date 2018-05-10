<div class="row">
  <?php 
      foreach ($data_mobil as $row) {
   ?> 
   <div class="col-lg-3 col-md-3">
      <div class="card card-list">
         <a href="#">
            <div class="card-img">
               <img src="<?php echo base_url().'assets/gambar_mobil/'.$row->gambar_mobil ?>" alt="">
            </div>
            <div class="card-body">
                  <h2 class="text-primary mb-2 mt-0">
                  <?php echo $row->nama_mobil; ?> <small>(Th. <?php echo $row->tahun_mobil; ?>)</small>
                  </h2>
                  <h6 class="card-subtitle mt-1 mb-0 text-muted">Tarif : Rp. <?php echo rupiah((int)$row->tarif_mobil); ?></h6>
                  <h6 class="card-subtitle mt-1 mb-0 text-muted">Supir : Rp. <?php echo rupiah((int)$row->tarif_supir); ?></h6>
                  <h5 class="card-title mt-2 mb-0">Total : Rp. <?php $total = $row->tarif_mobil + $row->tarif_supir; echo rupiah((int)$total) ?></h5>
            </div>
            <div class="card-footer">
                  <a' class='btn btn btn-outline-primary font-weight-bold btn-lg btn-sewa enter' onClick='sewa_mobil(<?php echo $row->id_mobil ?>)' >Sewa</a>
            </div>
         </a>
      </div>
   </div>
   <?php
      }
   ?>
</div>
<script>
   function sewa_mobil(id){
            $.ajax({
               url: '<?php echo site_url();?>home/sewa_mobil/'+id,
               dataType: 'json',
               success: function(msg) {
                  console.log(msg)
                  var gambar_mobil = '<?php echo base_url();?>assets/gambar_mobil/'+msg.gambar_mobil;
                  $('#gambar_mobil_sewa').attr('src',gambar_mobil);
                  $("#id_mobil").val(msg.id_mobil);
                  $('.tahun_mobil').html(msg.tahun_mobil);
                  $('.merk_mobil').html(msg.nama_mobil);
                  $('.tarif_mobil').html(msg.tarif_mobil);
                  $('.tarif_supir').html(msg.tarif_supir);
                  $('.total_sewa').html(parseInt(msg.tarif_mobil) + parseInt(msg.tarif_supir));
               }
            });
         }
</script>

            	