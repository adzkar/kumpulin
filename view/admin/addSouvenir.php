<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h3 class="text-center">Add Souvenir</h3>
      <hr>
      <?php  
        if (isset($pesan_sukses)) {
      ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Menambahkan Data...
      </div>
      <?php
        }
      ?>
      <form class="form-horizontal" role="form" method="post" action="<?="{$url}admin/dashboard/?halaman=tambahsouvenir"?>" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" value="<?=$_GET['id']?>" name='id_event'>
          <label for="nama_souvenir" class="col-sm-2 control-label">Nama Souvenir</label>
          <div class="col-sm-10">
            <input type="text" name="nama_souvenir"  class="form-control" id="nama_souvenir" placeholder="Nama Souvenir">
          </div>
        </div>
        <div class="form-group">
          <label for="harga" class="col-sm-2 control-label">Harga (Rp. )</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
          </div>
        </div>
        <div class="form-group">
          <label for="gambar" class="col-sm-2 control-label">Upload Gambar</label>
          <div class="col-sm-10">
            <input type="file" name="gambar" class="form-control-file" multiple="" accept=".jpg, .jpeg, .png">
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
          <div class="col-sm-10">
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="tombol">Tambahkan</button>
          </div>
        </div>
      </form>
    </div><!-- col-sm-12 -->
  </div><!-- row -->
</div><!-- container -->