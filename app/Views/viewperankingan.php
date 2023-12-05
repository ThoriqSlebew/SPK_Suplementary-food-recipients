<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hasil Perankingan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Proses Perankingan</li>
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

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Usaha</th>
                  <th>
                    <center>C1 - Umur Bayi [B] <br /> [N1 x 0.35]</center>
                  </th>
                  <th>
                    <center>C2 - Nilai Nutrisi [B] <br /> [N2 x 0.25]</center>
                  </th>
                  <th>
                    <center>C3 - Penghasilan Ortu [C] <br /> [N3 x 0.25]</center>
                  </th>
                  <th>
                    <center>C4 - Tarif Listrik [B] <br /> [N3 x 0.15]</center>
                  </th>
                  <th>Hasil Nilai</th>
                </tr>
              </thead>
              <tbody>


                <?php
                $no = 0;
                foreach ($dataMb['all'] as $row) :
                  foreach ($dataMb['B1'] as $x) :
                    foreach ($dataMb['B2'] as $y) :
                      foreach ($dataMb['B3'] as $z) :
                        foreach ($dataMb['B4'] as $a) :
                          $no++;
                          foreach ($dataMb['maxmin'] as $rowx) :

                ?>
                            <tr>
                              <th> <?= $no; ?></th>
                              <td><?= $row->nama_alternatif; ?></td>

                              <td><?= round($row->c1 / $rowx->maxminK1, 2) ?> X <?= $x->nilai_kriteria ?> = <?= round(($row->c1 / $rowx->maxminK1) * $x->nilai_kriteria, 3) ?></td>
                              <td><?= round($row->c2 / $rowx->maxminK2, 2) ?> X <?= $y->nilai_kriteria ?> = <?= round(($row->c2 / $rowx->maxminK2) * $y->nilai_kriteria, 3) ?></td>
                              <td><?= round($rowx->maxminK3 / $row->c3, 2) ?> X <?= $z->nilai_kriteria ?> = <?= round(($rowx->maxminK3 / $row->c3) * $z->nilai_kriteria, 3) ?></td>
                              <td><?= round($row->c4 / $rowx->maxminK4, 2) ?> X <?= $a->nilai_kriteria ?> = <?= round(($row->c4 / $rowx->maxminK4) * $a->nilai_kriteria, 3) ?></td>

                              <?php $jumlah = round(($row->c1 / $rowx->maxminK1) * $x->nilai_kriteria, 3) + round(($row->c2 / $rowx->maxminK2) * $y->nilai_kriteria, 3) + round(($rowx->maxminK3 / $row->c3) * $z->nilai_kriteria, 3) + round(($row->c4 / $rowx->maxminK4) * $a->nilai_kriteria, 3); ?>
                              <td><?= $jumlah ?></td>
                            </tr>
                <?php
                          endforeach;
                        endforeach;
                      endforeach;
                    endforeach;
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