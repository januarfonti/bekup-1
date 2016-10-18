<?php if (isset($list)) { ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Detail Posisi</h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('master/ubah_posisi'); ?>
                    <input type="hidden" name="id" value="<?php echo $list->id_posisi; ?>">
                    <div class="form-group">
                      <label>Nama Posisi</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $list->nama; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
