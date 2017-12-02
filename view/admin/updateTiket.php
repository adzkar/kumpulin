<div class="container">
  <div class="row">
    <div class="col-sm-10">
      <h3 class="text-center">Edit Tiket</h3>
      <hr>
      <?php  
        if (isset($pesan_sukses)) {
      ?>
      <div class="alert alert-success">
        <strong>Success!</strong> Memperbarui Tiket...
      </div>
      <?php
        }
      ?>
      <?php  
        // baca id
        $id = @$_GET["id"];
        $data = array('id_tiket' => $id);
        $r = $blog->read($tiket, $data);
        $r = $r->fetch(PDO::FETCH_LAZY);
      ?>
      <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id_tiket" value="<?=$_GET['id']?>">
        <div class="form-group">
          <label for="namatiket" class="col-sm-2 control-label">Nama Tiket</label>
          <div class="col-sm-10">
            <input type="text" name="namatiket"  class="form-control" value="<?="$r[nama_tiket]"?>" id="namatiket" placeholder="Nama Tiket">
          </div>
        </div>
        <div class="form-group">
          <label for="harga" class="col-sm-2 control-label">Harga ( Rp. )</label>
          <div class="col-sm-10">
            <input type="text" name="harga" value="<?="$r[harga]"?>" class="form-control" id="harga" placeholder="Harga">
          </div>
        </div>
        <div class="form-group">
          <label for="event" class="col-sm-2 control-label">Event</label>
          <div class="col-sm-10">
            <select name="id_event" id="event" class="form-control">
              <?php  
                $z = $blog->read($event);
                while ($b = $z->fetch(PDO::FETCH_LAZY)) {
                  if ($b["id_event"] == $r["id_event"]) {
                    echo "<option selected value='$b[id_event]'>";
                    echo "$b[judul_event]";
                    echo "</option>";
                  }
                  if ($b["id_event"] != $r["id_event"]) {
                    echo "<option value='$b[id_event]'>";
                    echo "$b[judul_event]";
                    echo "</option>";
                  }
                }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="tombol">Perbarui</button>
          </div>
        </div>
      </form>
    </div><!-- col-sm-12 -->
  </div><!-- row -->
</div><!-- container -->