
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<!--content --><div class="container">
  











<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Tambah Anggota</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">

    <?php if(!empty(validation_errors())){
        echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                <p>Inputan tidak terisi dengan benar. Cek kembali</p>';
                echo validation_errors();
             echo '</div>';

    }?>
    <!--show error message here -->
    <div class="form-group"></div>
  <form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>index.php/Anggota/tambah_data" role="form">
             
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama" placeholder="Nama" required="required" >
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" required="required" type="radio" name="jk" id="inlineRadio1" value="L"> Laki - Laki
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" required="required" type="radio" name="jk" id="inlineRadio2" value="P"> Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                 <label class="col-sm-2 control-label">Kelas</label>
                 <div class="col-sm-5">
                   <select name="kelas" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
               <option value="">&nbsp;</option>
                    <?php foreach($data_kelas->result_array() as $op2)
                            {
                            ?>
                              <?php  if($op2['id_kelas']== $anggota['id_kelas'])
                              {
                              ?>
                                <option value="<?php echo $op2['id_kelas'];?>" selected><?php echo $op2['kelas'];?></option>
                              <?php 
                            }
                                if ($op2['id_kelas']!= $anggota['id_kelas'])
                                  {?>
                                <option value="<?php echo $op2['id_kelas'];?>"><?php echo $op2['kelas'];?></option>
                              <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                    </select>
              </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">Agama</label>
                 <div class="col-sm-5">
                <select  name="agama" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
              <option value="">&nbsp;</option>
            <?php foreach($data_agama->result_array() as $op)
            {
            ?>

            <option value="<?php echo $op['id_agama'];?>"><?php echo $op['agama'];?></option>
            <?php
            }
            ?>
            </select>
              </div>
              </div>
                
                 <div class="form-group">
                  <label class="col-sm-2 control-label">HP</label>
                  <div class="col-sm-4">
                    <input type="text" maxlength="15" required="required" class="form-control" name="hp" placeholder="No hp" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-5">
                   <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat" required="required"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">E Mail</label>
                  <div class="col-sm-5">
                   <textarea class="form-control" name="ket" rows="4" placeholder="Email"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="image">Upload File</label>
                  <input type="file" id="image" name="image" class="form-control-file">
                </div>
              </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
                  <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
        </div>
                   <div class="btn-group">
                   <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
  </div>
  <div class="box-footer">
  <td>
    <div align ="Right"> <a  href="<?php echo base_url(); ?>index.php/admin/data_anggota"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  
</div><!-- /.box -->


</div>
