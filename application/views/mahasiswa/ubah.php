<div class="container">
<div class="row mt-3">

<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Ubah Data mahasiswa
  </div>
            <div class="card-body">
            <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $mahasiswa['id']; ?>">
            
            <div class="form-group">
                <label for="nim">nim</label>
                <input type="text" value="<?= $mahasiswa['nim'];?>" class="form-control" id="nim" name="nim">
                <small  class="form-text text-danger"><?= form_error('nim')?></small>
            </div>
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" value="<?= $mahasiswa['nama'];?>" class="form-control" name="nama" id="nama" >
                <small  class="form-text text-danger"><?= form_error('nama')?></small>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan : </label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <?php foreach ( $jurusan as $jur) : ?>
                    <?php if ( $jur == $mahasiswa['jurusan']) : ?>
                    <option value="<?= $jur; ?>" selected><?= $jur ?> </option>
                    <?php else : ?>
                    
                    <option value="<?= $jur; ?>"><?= $jur ?> </option>
                    <?php  endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">SIMPAN</button>
            </form>    
  </div>
</div>






</div>


</div>
</div>