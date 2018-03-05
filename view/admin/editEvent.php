<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h3 class="text-center">Edit Event</h3>
      <hr>
      <?php  
        if (isset($pesan_sukses)) {
      ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Memperbarui Data...
      </div>
      <?php
        }
      ?>
      <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" name="id" value="<?="$r[id_event]"?>">
          <label for="judulEvent" class="col-sm-2 control-label">Judul Event</label>
          <div class="col-sm-10">
            <input type="text" name="judulEvent"  class="form-control" value="<?="$r[judul_event]"?>" id="judulEvent" placeholder="Judul Event">
          </div>
        </div>
        <div class="form-group">
          <label for="slogan" class="col-sm-2 control-label">Slogan</label>
          <div class="col-sm-10">
            <input type="text" name="slogan"  class="form-control" value="<?=$r['slogan']?>" id="slogan" placeholder="Slogan">
          </div>
        </div>
        <div class="form-group">
          <label for="penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
          <div class="col-sm-10">
            <input type="text" name="penyelenggara" class="form-control" id="penyelenggara" placeholder="Penyelenggara" value="<?="$r[penyelenggara]"?>">
          </div>
        </div>
        <div class="form-group">
          <label for="dana" class="col-sm-2 control-label">Dana (Rp. )</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="dana" id="dana" placeholder="Dana" value="<?="$r[dana]"?>">
          </div>
        </div>
        <div class="form-group">
          <label for="target" class="col-sm-2 control-label">Target ( Waktu )</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="target" id="target" placeholder="Target" value="<?="$r[target]"?>">
          </div>
        </div>
        <div class="form-group">
          <label for="link" class="col-sm-2 control-label">Link Youtube <br>( Untuk Video )</label>
          <div class="col-sm-10">
            <input type="text" name="link"  class="form-control" value="<?=$r['link']?>" id="link" placeholder="Link Youtube">
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
          <div class="col-sm-10">
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"><?="$r[deskripsi]"?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="gambar" class="col-sm-2 control-label">Upload Gambar</label>
          <div class="col-sm-10">
            <input type="file" name="gambar" class="form-control-file" multiple="" accept=".jpg, .jpeg, .png">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="tombol">Update</button>
          </div>
        </div>
      </form>
    </div><!-- col-sm-12 -->
  </div><!-- row -->
</div><!-- container -->