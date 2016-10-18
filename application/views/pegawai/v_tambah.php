<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tambah pegawai</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('pegawai/simpan'); ?>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
                    </div>
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="text" class="form-control" name="no_telp" placeholder="Masukan nomor telepon">
                    </div>
                    <div class="form-group">
                      <label>Kota</label>
                          <select class="form-control" name="kota">
                              <?php if (isset($kota)) { foreach($kota as $row) { ?>
                                  <option value="<?php echo $row->id ?>"><?php echo $row->nama; ?></option>
                              <?php } } ?>
                          </select>
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                          <select class="form-control" name="kelamin">
                              <?php if (isset($kelamin)) { foreach($kelamin as $row) { ?>
                                  <option value="<?php echo $row->id ?>"><?php echo $row->nama; ?></option>
                              <?php } } ?>
                          </select>
                    </div>
                    <div class="form-group">
                      <label>Posisi</label>
                          <select class="form-control" name="posisi">
                              <?php if (isset($posisi)) { foreach($posisi as $row) { ?>
                                  <option value="<?php echo $row->id_posisi ?>"><?php echo $row->nama; ?></option>
                              <?php } } ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="1" checked> Aktif
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="0"> Nonaktif
                        </label>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
