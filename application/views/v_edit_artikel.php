 <div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Tambah Artikel 
                </h1>
            </div>
        </div> 
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Artikel
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="<?php echo base_url().'proses/update_artikel'?>" name="tambah_artikel" enctype="multipart/form-data" method="POST">
                                    <?php foreach($data as $data){ ?>
                                    <div class="form-group">
                                        <label for="judul">Judul Artikel</label>
                                        <input type="hidden" name="id" class="form-control" placeholder="Judul Artikel" value="<?php echo $data->id_artikel;?>">
                                        <input type="text" name="judul" class="form-control" placeholder="Judul Artikel" value="<?php echo $data->judul_artikel;?>" required>
                                    </div>
                                    <div class="form-group ">
                                        <label for="kategori">Kategori :</label>
                                        <select name="kategori" class="form-control">
                                            <?php 
                                            if($data->kategori==1){
                                                echo '<option value="1" selected>Love</option>
                                                <option value="2">Children</option>
                                                <option value="3">Parents</option>';
                                            }elseif($data->kategori==2){
                                                echo '<option value="1" >Love</option>
                                                <option value="2" selected>Children</option>
                                                <option value="3">Parents</option>';
                                            }else{
                                               echo '<option value="1" >Love</option>
                                               <option value="2" >Children</option>
                                               <option value="3" selected>Parents</option>';
                                           }
                                           ?>

                                       </select>
                                   </div>
                                   <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" value="<?php echo $data->gambar;?>">
                                    <input type="hidden" name="ganti_gambar" value="<?php echo $data->gambar;?>">
                                    
                                </div>
                                <div class="form-group"  >
                                    <label>Isi Artikel</label>
                                    <textarea id="ckeditor" name="isi" value="" ><?php echo $data->isi ?></textarea>
                                </div>
                                <?php }?>

                                <button type="submit" class="btn btn-success">Tambah Artikel</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <footer><p>All right reserved. Template by: <a href="http://flashcom.id">FlashcomID</a></p></footer>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="<?php echo base_url().'/assets/ckeditor/ckeditor.js'?>"></script>
<script >
    var ckeditor=CKEDITOR.replace('isi',{
        height:"300px"
    });
    CKEDITOR.disableAutoInline=true;
    CKEDITOR.inline('editable');
</script>
<script src="<?php echo base_url().'/assets/assets/js/jquery-1.10.2.js'?>"></script>
<!-- Bootstrap Js -->
<script src="<?php echo base_url().'/assets/assets/js/bootstrap.min.js'?>"></script>
<!-- Metis Menu Js -->
<script src="<?php echo base_url().'/assets/assets/js/jquery.metisMenu.js'?>"></script>
<!-- Morris Chart Js -->
<script src="<?php echo base_url().'/assets/assets/js/morris/raphael-2.1.0.min.js'?>"></script>
<script src="<?php echo base_url().'/assets/assets/js/morris/morris.js'?>"></script>
<!-- Custom Js -->
<script src="<?php echo base_url().'/assets/assets/js/custom-scripts.js'?>"></script>


</body>

</html>