<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h3 class="text-center">Add Tiket</h3>
      <hr>
      <?php  
        if (isset($pesan_sukses)) {
      ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Menambahkan Tiket...
      </div>
      <?php
        }
      ?>
      <form class="form-horizontal" role="form" method="post" action="<?="{$url}admin/dashboard/?halaman=tiket"?>" enctype="multipart/form-data">
        <input type="hidden" name="id_event" value="<?=$_GET['id']?>">
        <div class="form-group">
          <label for="namatiket" class="col-sm-2 control-label">Nama Tiket</label>
          <div class="col-sm-10">
            <input type="text" name="namatiket"  class="form-control" id="namatiket" placeholder="Nama Tiket">
          </div>
        </div>
        <div class="form-group">
          <label for="harga" class="col-sm-2 control-label">Harga ( Rp. )</label>
          <div class="col-sm-10">
            <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
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