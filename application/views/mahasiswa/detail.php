<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        
        
<div class="card">
  <h5 class="card-header">Detail Mahasiswa</h5>
  <div class="card-body">
    <h5 class="card-title"><label style="margin-right:7px">NIM : </label><?php echo $mahasiswa['nim']; ?></h5>
     <p class="car-text"><label style="margin-right:5px">Nama : </label><?php echo $mahasiswa['nama']; ?></p>
   <p class="car-text"> <label style="margin-right:5px">Jurusan : </label><?php echo $mahasiswa['jurusan']; ?></p>
   <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
  </div>
</div>
        
        
        </div>
    </div>
</div>