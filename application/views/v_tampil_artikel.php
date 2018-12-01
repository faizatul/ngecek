
 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                     <?=$this->session->flashdata('notif')?>
                         <?=$this->session->flashdata('pesan')?>
                <h1 class="page-header">
                Daftar Artikel</small>
            </h1>
        </div>
    </div> 
    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                 Artikel
             </div>
             <div class="panel-body">
                <div class="table-responsive" style="text-align: center;">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead >
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Judul</th>
                                <th style="text-align: center;">Kategori</th>
                                <th style="text-align: center;width: 200px">Gambar</th>
                                <th style="text-align: center;">Tanggal Input</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            $no=1;
                            foreach ($artikel as $artikel) {
                                if($artikel->kategori==1){$kategori="Love";}elseif ($artikel->kategori==2) {
                                    $kategori="Children";
                                }else{$kategori="Parents";}
                                echo '<tr class="odd gradeX">
                                <td>'.$no.'</td>
                                <td>'.$artikel->judul_artikel.'</td>
                                <td>'.$kategori.'</td>
                                <td><img src="'.base_url().'assets/img/blog/'.$artikel->gambar.'" width="100%" height= "100%"/></td>
                                <td>'.date('d-m-Y', strtotime($artikel->tgl_input)).'</td>
                                <td><a href="'.base_url().'proses/edit_artikel/'.$artikel->id_artikel.'" class="btn btn-success">Edit</a>
                                <a href="'.base_url().'proses/hapus_artikel/'.$artikel->id_artikel.'" class="btn btn-danger">Hapus</a></td>
                            </tr>';
                            $no++;
                        }?>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!--End Advanced Tables -->
</div>
</div>



<script src="<?php echo base_url().'/assets/assets/js/jquery-1.10.2.js'?>"></script>
<!-- Bootstrap Js -->
<script src="<?php echo base_url().'/assets/assets/js/bootstrap.min.js'?>"></script>
<!-- Metis Menu Js -->
<script src="<?php echo base_url().'/assets/assets/js/jquery.metisMenu.js'?>"></script>
<!-- Morris Chart Js -->
<script src="<?php echo base_url().'/assets/assets/js/morris/raphael-2.1.0.min.js'?>"></script>
<script src="<?php echo base_url().'/assets/assets/js/morris/morris.js'?>"></script>
<script src="<?php echo base_url().'/assets/assets/js/dataTables/jquery.dataTables.js'?>"></script>
<script src="<?php echo base_url().'/assets/assets/js/dataTables/dataTables.bootstrap.js'?>"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- Custom Js -->
<script src="<?php echo base_url().'/assets/assets/js/custom-scripts.js'?>"></script>


</body>

</html>