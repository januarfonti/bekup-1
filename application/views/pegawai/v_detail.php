<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Detail pegawai</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('pegawai/ubah'); ?>
                    <input type="hidden" name="id" value="<?php echo $list->id_pegawai; ?>">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $list->nama; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nomor Telepon</label>
                      <input type="text" class="form-control" name="no_telp" value="<?php echo $list->no_telp; ?>">
                    </div>
                    <div class="form-group">
                      <label>Kota</label>
                          <select class="form-control" name="kota">
                              <?php if (isset($kota)) { foreach($kota as $row) {
                                  $selc=($row->id==$list->kota)?'selected':'';
                                  echo "<option value='$row->id' $selc>$row->nama</option>";
                                } } ?>
                          </select>
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                          <select class="form-control" name="kelamin">
                              <?php if (isset($kelamin)) { foreach($kelamin as $row) {
                                  $selc=($row->id==$list->kelamin)?'selected':'';
                                  echo "<option value='$row->id' $selc>$row->nama</option>";
                                } } ?>
                          </select>
                    </div>
                    <div class="form-group">
                      <label>Posisi</label>
                          <select class="form-control" name="posisi">
                              <?php if (isset($posisi)) { foreach($posisi as $row) {
                                  $selc=($row->id_posisi==$list->id_posisi)?'selected':'';
                                  echo "<option value='$row->id_posisi' $selc>$row->nama</option>";
                                } } ?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label><br>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="1" <?php echo ($list->status=='1')?'checked':''; ?>> Aktif
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="status" value="0" <?php echo ($list->status=='0')?'checked':''; ?>> Nonaktif
                        </label>
                    </div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
