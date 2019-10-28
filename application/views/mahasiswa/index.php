<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ( $this->session->flashdata('flash') ) : ?>

<?php endif; ?>

<div class="row mt-4">
<div class="col-md-6">

    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-success">Tambah data mahasiswa</a>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<form action="" method="post">
<div class="input-group mb-3">
  <input type="text" name="keyword" class="form-control" placeholder="cari data mahasiswa" >
  <div class="input-group-append">
    <button class="btn btn-success" type="submit" id="keyword">CARI</button>
  </div>
</div>


</form>
</div>


</div>

<div class="row mt-3">

<div class="col-md-6 ">
            <h3>Daftar mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>

            <div class="alert alert-danger" role="alert">
            data mahasiswa tidak ada !
            </div>

            <?php endif; ?>
            <ul class="list-group">
                <?php foreach($mahasiswa as $mhs ) :        ?>
            <li class="list-group-item"><?= $mhs['nama']; ?>
            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-warning float-right">edit</a> 
            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-success float-right">detail</a> 
            
            </li> 
<?php endforeach; ?>    
        </ul>



</div>


</div>
</div>