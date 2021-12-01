<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php include './koneksi.php'; ?>

<form action="index.php?p=fungsi" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input type="text" name="nama" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama . . ." required> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" class="form-control w-50" id="exampleInputEmail1" aria-describedy="emailHelp" placeholder="Masukkan NIM . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Program Studi</label>
    <select name="prodi" class="form-control w-50" value="" required>
      <option value="-" selected="selected">--- Pilih Prodi ---</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>