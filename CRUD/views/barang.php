<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $base_url . 'index.php?page=home'; ?>">Home</a></li>
                        <li class="breadcrumb-item active">Data Barang</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 1) {
                            echo "<div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-check'></i> Sukses!</h5>
                                Data berhasil disimpan.
                                </div>";
                        } elseif ($_GET['alert'] == 2) {
                            echo "<div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-times-circle'></i> Gagal!</h5>
                                Data tidak berhasil disimpan.
                                </div>";
                        } elseif ($_GET['alert'] == 3) {
                            echo "<div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-check'></i> Sukses!</h5>
                                Data berhasil diupdate.
                                </div>";
                        } elseif ($_GET['alert'] == 4) {
                            echo "<div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-times-circle'></i> Gagal!</h5>
                                Data tidak berhasil diupdate.
                                </div>";
                        } elseif ($_GET['alert'] == 5) {
                            echo "<div class='alert alert-success alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-check'></i> Sukses!</h5>
                                Data berhasil dihapus.
                                </div>";
                        } elseif ($_GET['alert'] == 6) {
                            echo "<div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <h5><i class='icon fas fa-times-circle'></i> Gagal!</h5>
                                Data tidak berhasil dihapus.
                                </div>";
                        }
                    }
                    ?>

                    <div class="card">
                        <div class="card-header">
                            <a h class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="#" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Satuan</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $data = mysqli_query($conn, "SELECT * FROM barang ORDER BY id_barang ASC");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['kode_barang']; ?></td>
                                            <td><?php echo $d['nama_barang']; ?></td>
                                            <td><?php echo $d['jumlah_barang']; ?></td>
                                            <td><?php echo $d['satuan_barang']; ?></td>
                                            <td>Rp. <?php echo number_format($d['harga_beli'], 0, ',', '.'); ?></td>
                                            <td>
                                                <?php
                                                if ($d['status_barang'] == 1) {
                                                    echo 'Tersedia';
                                                } elseif ($d['status_barang'] == 0) {
                                                    echo 'Tidak Tersedia';
                                                } else {
                                                    echo 'Status tidak valid';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#updateBarang<?php echo $d['id_barang'] ?>"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteBarang<?php echo $d['id_barang']; ?>"><i class="fas fa-trash"></i></a>
                                            </td>
                                            <div class="modal fade" id="updateBarang<?php echo $d['id_barang'] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update Barang</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="<?php echo $base_url . 'system/barang.php?act=updateBarang'; ?>">
                                                                <div class="form-group">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kode Barang</div>
                                                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $d['id_barang']; ?>" hidden>
                                                                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Barang" value="<?php echo $d['kode_barang']; ?>" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama</div>
                                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Barang" value="<?php echo $d['nama_barang']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah</div>
                                                                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah Barang" value="<?php echo $d['jumlah_barang']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Satuan</div>
                                                                    <select class="form-control select2" name="role" id="role">
                                                                        <option value="<?php echo $d['satuan_barang']; ?>"><?php echo $d['satuan_barang']; ?></option>
                                                                        <option value="Kg">Kg</option>
                                                                        <option value="Pcs">Pcs</option>
                                                                        <option value="Liter">Liter</option>
                                                                        <option value="Meter">Meter</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Harga Beli</div>
                                                                    <input type="number" class="form-control" id="hbeli" name="hbeli" placeholder="Masukan Harga Beli" value="<?php echo $d['harga_beli']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Satuan</div>
                                                                    <select class="form-control select2" name="role" id="role">
                                                                        <option value="<?php echo $d['status_barang']; ?>">
                                                                            <?php
                                                                            if ($d['status_barang'] == 1) {
                                                                                echo 'Tersedia';
                                                                            } elseif ($d['status_barang'] == 0) {
                                                                                echo 'Tidak Tersedia';
                                                                            } else {
                                                                                echo 'Status tidak valid';
                                                                            }
                                                                            ?>
                                                                        </option>
                                                                        <option value="1">Tersedia</option>
                                                                        <option value="2">Tidak Tersedia</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <input class="btn btn-primary" type="submit" name="submit" value="Save">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade" id="deleteBarang<?php echo $d['id_barang']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Barang</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="<?php echo $base_url . 'system/barang.php?act=deleteBarang'; ?>">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $d['id_barang']; ?>" hidden>
                                                                    <h4>Anda Yakin Untuk Menghapus Barang <code><?php echo $d['nama_barang'] ?></code>!!</h4>
                                                                    <h4>Anda Tidak Dapat Melihat Data Ini Lagi!!!</h4>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <input class="btn btn-primary" type="submit" name="submit" value="Delete">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </tr>
                                    <?php } ?>
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
</div>
<?php
$query = mysqli_query($conn, "SELECT max(kode_barang) as kodeTerbesar FROM barang");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 5, 5);
$urutan++;
$huruf = "BRG";
$kodeBarang = $huruf . sprintf("%05s", $urutan);
?>
<div class="modal fade" id="tambahBarang">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo $base_url . 'system/barang.php?act=tambahBarang'; ?>">
                    <div class="form-group">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kode Barang</div>
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Barang" value="<?php echo $kodeBarang; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Barang</div>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah</div>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah" value="0" required>
                    </div>
                    <div class="form-group">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Satuan</div>
                        <select class="form-control" name="satuan" id="satuan">
                            <option value="Kg">Kg</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Liter">Liter</option>
                            <option value="Meter">Meter</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Harga Beli</div>
                        <input type="number" class="form-control" id="hbeli" name="hbeli" placeholder="Masukan Jumlah" value="0" required>
                    </div>
                    <div class="form-group">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Status</div>
                        <select class="form-control" name="status" id="status">
                            <option value="1">Tersedia</option>
                            <option value="0">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input class="btn btn-primary" type="submit" name="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>