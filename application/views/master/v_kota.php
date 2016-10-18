<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List Kota</h3>
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
                                    <a class="btn btn-xs btn-success" href="<?php echo base_url('master/detail_kota/'.$row->id); ?>">Detail</a>
                                    <a class="btn btn-xs btn-danger" href="<?php echo base_url('master/hapus_kota/'.$row->id); ?>">Hapus</a>
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
                <h3 class="panel-title">Input Kota</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('master/simpan_kota'); ?>
                    <div class="form-group">
                      <label>Nama Kota</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukan nama kota">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
