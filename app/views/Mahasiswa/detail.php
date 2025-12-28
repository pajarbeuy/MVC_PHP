<div class='container mt-5'>
    <div class='row'>
        <div class='col-md-8 offset-md-2'>
            <div class='card'>
                <div class='card-header bg-primary text-white'>
                    <h5 class='card-title mb-0'><?= $data['judul']; ?></h5>
                </div>
                <div class='card-body'>
                    <div class='row mb-3'>
                        <div class='col-sm-3'>
                            <h6 class='mb-0'>Nama</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                            <?= $data['detail']['nama'] ?? 'N/A'; ?>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-sm-3'>
                            <h6 class='mb-0'>NRP</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                            <?= $data['detail']['nrp'] ?? 'N/A'; ?>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-sm-3'>
                            <h6 class='mb-0'>Email</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                            <?= $data['detail']['email'] ?? 'N/A'; ?>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-sm-3'>
                            <h6 class='mb-0'>Jurusan</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                            <?= $data['detail']['jurusan'] ?? 'N/A'; ?>
                        </div>
                    </div>
                </div>
                <div class='card-footer'>
                    <a href='<?= BASEURL; ?>/mahasiswa' class='btn btn-secondary'>Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
