<?php 
include "conn.php";
 $query="select * from news WHERE id='$_GET[id]'";
 $tampil=mysqli_query($koneksi, $query) or die(mysqli_error());
 $data  = mysqli_fetch_array($tampil);
?>
<div class="row">
    <div class="col-xs-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Form Ubah Data news</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="update.php">
          <div class="box-body">
            <div class="form-group">
              <label>Tittle</label>
              <input type="hidden" name="id" value="<?= $data['id_produk']; ?>">
              <input type="text" name="tittle" class="form-control" id="" placeholder="Nama Produk" value="<?= $data['tittle']; ?>">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="text" class="form-control" name="image" placeholder="Image" value="<?= $data['image']; ?>"></input>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" placeholder="Image"><?= $data['deskripsi']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Tangal Dibuat</label>
              <input type="date" class="form-control" name="create_time" placeholder="Tanggal Dibuat" value="<?= $data['create_time']; ?>"></input>
            </div>
            <div class="form-group">
              <label>Nama User</label>
              <select name="id" id="id"  class="form-control">
                <option selected disabled>Pilih</option>
                <?php
                mysql_connect("localhost","root","");
                mysql_select_db("berita_digital");
                $query = "select * from user";
                $hasil = mysql_query($query);
                while($news=mysql_fetch_array($hasil)){
                  if ($data['id'] == $news['id']) {
                    echo "<option value=$news[id] selected>$news[name]</option>";
                  } else {
                    echo "<option value=$news[id]>$news[name]</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div><!-- /.box-body -->
 
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class='btn btn-danger'>Kembali</a>
          </div>
        </form>
      </div>
    </div>  
 </div>
