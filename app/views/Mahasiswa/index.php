<div class='mt-3'>
  <div class="row">
    <div class="col-lg-6">
    <?php Flasher::flash(); ?>
    </div>
  </div>
    <div class='col-lg-6'>
        <h1>Daftar Mahasiswa</h1>
        <br>
        <button class="btn btn-success mb-3" type="button" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Mahasiswa</button>

            <ul>
            <?php foreach( $data['mahasiswa'] as $mhs ) : ?>
                <li class ="bg-gray-200 p-2 mb-2"><?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']?>" 
                class="text-red-600 text-right float-right ms-2"
                onclick="return confirm('sure?');">hapus</a>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']?>" 
                class="text-blue-600 text-right float-right ms-2">detail</a>
            </li>
            <?php endforeach; ?>
            </ul>
    </div>

</div>

<!-- Modal Tambah Mahasiswa -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Mahasiswa Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/Mahasiswa/tambah" method="post" id="formTambah">
          <div class="mb-3">
            <label for="nama" >Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" placeholder="Masukkan NRP" name="nrp">
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
          </div>
          <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <select class="form-select" name="jurusan" id="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Akuntansi">Akuntansi</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary">Tambah data</button>
      </div>
    </div>
  </div>
</div>