<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Matriks Normalisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan Normalisasi</li>
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
       
            <!-- Hitung NORMALISASI -->
            <div class="card-body">   
           <p>[Note:  B = Benefit
                    C = Cost]</p>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>No.</th>
                  <th>Nama Usaha</th>
                    <th>N1 - Umur Bayi [B]</th>
                    <th>N2 - Nilai Nutrisi [B]</th>
                    <th>N3 - Pendapatan Ortu [C]</th>
                    <th>N4 - Tarif Listrik [B]</th>
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                  <?php
                  $no=0;
                  foreach($dataMb['all'] as $row):
                    $no++;
                    foreach($dataMb['maxmin'] as $rowx ):
                    ?>
                    <tr>
                    <th> <?= $no; ?></th>
                    <td><?= $row->nama_alternatif; ?></td>
                    <td><?= $row->c1?>/<?= $rowx->maxminK1?> = <?=round($row->c1/$rowx->maxminK1,2)?></td>
                    <td><?= $row->c2?>/<?= $rowx->maxminK2?> = <?=round($row->c2/$rowx->maxminK2,2)?></td>
                    <td><?= $rowx->maxminK3?>/<?= $row->c3?>= <?=round($rowx->maxminK3/$row->c3,2)?></td>
                    <td><?= $row->c4?>/<?= $rowx->maxminK4?> = <?=round($row->c4/$rowx->maxminK4,2)?></td>
                    <td></td>
  
                  </tr>

                  <?php
                  endforeach;
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