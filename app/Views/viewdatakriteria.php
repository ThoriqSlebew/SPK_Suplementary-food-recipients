<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Suplementary Food Recipients</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Data Kriteria</li>
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
              <h3 class="card-title">Data Kriteria </h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Kriteria</th>
                    <th>Nilai Kriteria</th>
                    <th>Tipe Kriteria</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($dataMb as $row) :
                    $no++;
                  ?>
                    <tr>
                      <th> <?= $row->id_kriteria; ?></th>
                      <td><?= $row->nama_kriteria; ?></td>
                      <td><?= $row->nilai_kriteria; ?></td>
                      <td><?= $row->tipe_kriteria; ?></td>
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