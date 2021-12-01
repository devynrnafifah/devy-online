 <h5 class="float-left my-3">Tabel Data Diri</h5>
        <a class="float-right btn btn-primary" href=""><i class="fa fa-plus-circle"></i> Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Prodi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <?php include './koneksi.php' ?>
          <tbody>
            <?php
             $no=1;
             $ambilQuery = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa ASC");
             while ($row = mysqli_fetch_assoc ($ambilQuery)) {
            ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= ['nama'] ?></td>
              <td><?= ['nim'] ?></td>
              <td><?= ['prodi'] ?></td>
              <td>
                <a class="btn btn-warning mr-1" href=""><i class="fa fa-edit"></i></a>
                <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>