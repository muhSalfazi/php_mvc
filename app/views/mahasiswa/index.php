<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-1 mb-4" data-toggle="modal" data-target="#formodal">
           Tambah Data Mahasiswa
            </button>
            
            <h3 >Daftar Mahasiswa</h3>
             <ul class="list-group ">
             <?php foreach ($data['mhs'] as $mhs) :?>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?=$mhs['nama'];?>

                <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']?>" class="badge badge-primary ">detail</a>
            </li>
                <?php
            endforeach; ?>
            </ul>
            
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formodal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
       <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control" id="nama" placeholder="masukan nama mahasiswa" name="nama">
        </div>
        <div class="form-group">
            <label for="nama">nim</label>
            <input type="number" class="form-control" id="nim" placeholder="masukan kelas mahasiswa" name="nim">
        </div>
        <div class="form-group">
            <label for="nama">kelas</label>
            <input type="text" class="form-control" id="kelas" placeholder="masukan kelas mahasiswa" name="kelas">
        </div>
        <div class="form-group">
        <label for="jurusan">jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
        <option value="teknik informatika">teknik informatika</option>
        <option value="teknik industri">teknik industri</option>
        <option value="teknik mesin">teknik mesin</option>
        <option value="sistem informasi">sistem informasi</option>
        
        </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>