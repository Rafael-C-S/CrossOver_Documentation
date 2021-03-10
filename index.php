<?php include 'template_parts/header.php'; ?>

<?php include 'template_parts/page_title.php'; ?>

<?php
    $dir = '';
    $file = '';
    $title = '';
    if(isset($_GET['dir'])):
        //include('template_parts/pages/initial.php');
        $dir = $_GET['dir'];
        $file = $_GET['file'];
        $title = $_GET['title'];
        //include($_GET['dir'] . "/pages/" . $_GET['file'] . ".php"); 
    endif;
?>

<!-- Content Wrapper. Contains page content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><?php echo ($dir != '') ? $_GET['title'] : 'WELCOME'; ?></h5>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        </div>
                    </div><!-- /.card-header -->
              
                    <div class="card-body">
                        <?php
                            $check_file = false;
                            $path = 'template_parts/pages/';
                            $dir_ = dir($path);
                            while($file_ = $dir_ ->read()){
                                if($file_ == $_GET['file'].'.php') $check_file = true;
                            }
                            if((!$check_file) || ((isset($_GET['dir'])) && ($_GET['file'] == ''))){
                                include($_GET['dir'] . "/pages/" . "error.php");
                            }else{
                                include($_GET['dir'] . "/pages/" . $_GET['file'] . ".php");                                
                            }

                            if(!(isset($_GET['dir'])) && !(isset($_GET['file'])) && !(isset($_GET['title']))) include('template_parts/pages/initial.php');
                            // if(isset($_GET['dir'])){
                            //     if(($_GET['file'] == '')){
                            //         include($_GET['dir'] . "/pages/" . "error.php");
                            //     }
                            //     unset($check_file);
                            //     include($_GET['dir'] . "/pages/" . $_GET['file'] . ".php");
                            // }else{
                            //     include('template_parts/pages/initial.php');
                            // }
                        ?>
                    </div><!-- ./card-body -->
                    
              
                    <div class="card-footer">
                        
                        
                    </div><!-- /.card-footer -->
            
                </div><!-- /.card -->
          
            </div><!-- /.col -->
        
        </div><!-- /.row -->

    </div><!--/. container-fluid -->

</section><!-- /.content -->

</div><!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php include 'template_parts/footer.php'; ?>