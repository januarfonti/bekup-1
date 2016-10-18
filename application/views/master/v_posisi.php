<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List Posisi</h3>
            </div>
            <div class="panel-body">
                <table class="table" id="tabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($list)) { $no=1; foreach($list as $row) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td>
                                    <a class="btn btn-xs btn-success" href="<?php echo base_url('master/detail_posisi/'.$row->id_posisi); ?>">Detail</a>
                                    <a class="btn btn-xs btn-danger" href="<?php echo base_url('master/hapus_posisi/'.$row->id_posisi); ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php }} ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Input Posisi</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('master/simpan_posisi'); ?>
                    <div class="form-group">
                      <label>Nama Posisi</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukan nama posisi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
