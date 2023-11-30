<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SPK Bantuan UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Bobot</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Bobot</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
              <p>
              <button type="button" class="btn btn-success" onclick="window.location='<?php echo site_url('home/formtambah'); ?>'">Tambah Bobot</button>
              </p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode Kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>Nama Bobot</th>
                    <th>Nilai Bobot</th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  <?php
                  $no=0;
                  foreach($dataMb as $row):
                    $no++;
                    ?>
                <tr>
                    <th> <?= $no; ?></th>
                    <td><?= $row->kode_kriteria; ?></td>
                    <td><?= $row->nama_kriteria; ?></td>
                    <td><?= $row->nama_bobot; ?></td>
                    <td><?= $row->nilai_bobot; ?></td>
                    
                    <td>
                    <a href="/home/formeditmbl/<?=$row->id_bobot;?>" class="badge badge-warning">Edit</a>  
                    <a href="/home/deletembl/<?=$row->id_bobot;?>" class="badge badge-danger">Hapus</a>
                  <form action="/home/deletembl/<?=$row->id_bobot; ?>" method="post">
                  <?=csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                  </form>

                  </td>
                  
                  </tr>

                  <?php
                  endforeach;
                  ?>
                 
                  </tbody>
                 
                </table>
                </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    
    </section>
    <!-- /.content -->
  </div>