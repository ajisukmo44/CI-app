<div class="container">
    <h3 class="mt-3">daftar orang</h3>
    <div class="row">
        <div class="col-md5">
        <form action="<?= base_url('people'); ?>" method="post">
<div class="input-group mb-3">
  <input type="text" name="keyword" class="form-control" placeholder="cari data mahasiswa.." autocomplete="off" autofocus>
  <div class="input-group-append">
    <input class="btn btn-success" type="submit" name="submit">
  </div>
</div>

</form>

        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
        <h5>Result : <?= $total_rows; ?> </h5>
        <table class="table">
        <thead>
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
        </tr>

    
<?php if( empty($people)) : ?>
    <tr>
    <td colspan="5">
    <div class="alert alert-danger" role="alert">
  Data Not Found!
</div>
    </td>
    </tr>




<?php endif; ?>

<?php foreach($people as $orang ) : ?>

        <tr>
        <th><?= ++$start; ?></th>
        <td><?= $orang['name']; ?></td>
        <td><?= $orang['address']; ?> </td>
        <td><?= $orang['email']; ?> </td>
        <td>
        <a href="" class="badge badge-success">detail</a>
        <a href="" class="badge badge-warning">edit</a>
        <a href="" class="badge badge-danger">delete</a>
        </td>
        </tr>
<?php endforeach; ?>
        </thead>
        </table>
        
        <?=  $this->pagination->create_links(); ?>
        
        </div>
    </div>
</div>