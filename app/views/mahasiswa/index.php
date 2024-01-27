<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) :
            ?>
            <ul>
                <li>nama mahasiswa :
                    <?= $mhs['nama']; ?></li>
                <li>
                    NIM : <?= $mhs['nim']; ?></li>
                <li>
                    Kelas : <?= $mhs['kelas']; ?></li>
                <li>
                    Jurusan : <?= $mhs['jurusan']; ?></li>
            </ul>

            <?php
            endforeach; ?>

        </div>
    </div>

</div>