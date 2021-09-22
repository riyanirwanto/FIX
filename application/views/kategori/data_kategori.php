<!--content -->
<div class="container">
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Kategori</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <div class="btn-group"><a href="<?php echo base_url(); ?>index.php/kategori/create"  class="btn btn-success" role="button" 
    data-toggle="tooltip" title="Tambah Kategori"><i class="fa fa-plus"></i>  Tambah Kategori</a></div>
   <div class="form-group"></div>
   <table id="example2" class="table table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th width="10%">No</th>
                <!--th class="center"> <i class="glyphicon glyphicon-plus"></i></th-->
                <th width="75%">Kategori</th>
                <th Width="15%">Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <!--th class="center"> <i class="glyphicon glyphicon-plus"></i></th-->
                <th>Kategori</th>
                <th>Pilihan</th>
            </tr>
        </tfoot>
        <tbody>
         <?php
  $no = 1;
    foreach($data_kategori->result_array() as $op)
    {
    ?>
            <tr>
                <td><?php echo $no++ ;?></td>
                <!--td class="details-control"><i class="btn btn-box-tool" data-toggle="tooltip" title="Tampilkan Detail"><i class="glyphicon glyphicon-plus"></i></i>
                </td-->
                <td><?php echo $op['kategori'];?></td>
                <td>
                <?php echo 
                    '<div class="btn-group">
                     <a href="'.base_url().'index.php/Kategori/edit/?id_kategori='.$op['id_kategori'].'" class="btn btn-warning" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                     &nbsp&nbsp
                    <span data-toggle="modal" data-target="#confirm-delete" data-href="'.base_url().'index.php/Kategori/delete/?id_kategori='.$op['id_kategori'].'">
                    <a class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                    </span>
                </td>
            </tr>';?>
<?php
    }
  ?>            
         </tbody>
    </table>
  </div>
  
</div><!-- /.box -->
</div>