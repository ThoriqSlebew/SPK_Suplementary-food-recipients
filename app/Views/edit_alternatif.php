<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Suplementary Food Recipiens</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Form Data Suplementary Food Recipiens</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="card card-dark mx-3">
              <div class="card-header">
                <h3 class="card-title">Form Data Suplementary Food Recipiens</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
    $no=0;
    foreach($dataNilai as $row):
        $no++;
        ?>
              <form method="post" action="<?php echo site_url('Home/editdata/' . $row->id_nilai)?>">
              <input type="hidden" class="form-control" name="id" value="<?=$row->id_nilai; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode">Kode Alternatif</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode Alternatif" value="<?=$row->kode_alternatif; ?>>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama Alternatif</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Alternatif" value="<?=$row->nama_alternatif; ?>>
                  </div>
                  <div class="form-group">
                    <label for="kriteria1">Kriteria 1 (Umur Bayi)</label>
                    <input type="text" class="form-control" id="kriteria1" name="kriteria1" placeholder="Masukkan Kriteria 1" value="<?=$row->c1; ?>>
                  </div>
                  <div class="form-group">
                    <label for="kriteria2">Kriteria 2 (Status Nutrisi)</label>
                    <input type="text" class="form-control" id="kriteria2" name="kriteria2" placeholder="Masukkan Kriteria 2" value="<?=$row->c2; ?>>
                  </div>
                  <div class="form-group">
                    <label for="kriteria3">Kriteria 3 (Pendapatan Orang Tua)</label>
                    <input type="text" class="form-control" id="kriteria3" name="kriteria3" placeholder="Masukkan Kriteria 3" value="<?=$row->c3; ?>>
                  </div>
                  <div class="form-group">
                    <label for="kriteria4">Kriteria 4 (Tarif Listrik)</label>
                    <input type="text" class="form-control" id="kriteria4" name="kriteria4" placeholder="Masukkan Kriteria 4" value="<?=$row->c4; ?>>
                  </div>
                  
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-dark">Submit</button>
                </div>
              </form>
              </form>    
    <?php endforeach;?>  
            </div>

   
            </section>
    <!-- /.content -->
  </div>