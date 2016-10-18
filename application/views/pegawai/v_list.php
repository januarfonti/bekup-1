<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List pegawai <a style="color:#fff;" class="btn btn-primary btn-xs" href="<?php echo base_url('pegawai/tambah'); ?>">Tambah</a></h3>
            </div>
            <div class="panel-body">
                <table class="table" id="tabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Kota</th>
                            <th>Jenis Kelamin</th>
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($list)) { $no=1; foreach($list as $row) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->no_telp; ?></td>
                                <td><?php echo $row->kota; ?></td>
                                <td><?php echo $row->jk; ?></td>
                                <td><?php echo $row->posisi; ?></td>
                                <td><?php echo ($row->status=='1' ? 'Aktif' : 'Nonaktif'); ?></td>
                                <td>
                                    <a class="btn btn-xs btn-success" href="<?php echo base_url('pegawai/detail/'.$row->id_pegawai); ?>">Detail</a>
                                    <a class="btn btn-xs btn-danger" href="<?php echo base_url('pegawai/hapus/'.$row->id_pegawai); ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php }} ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Kota</th>
                            <th>Jenis Kelamin</th>
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
