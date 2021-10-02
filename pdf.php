<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

    <?php

    include 'conect.php';

    $s="select * from customers where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Relatórios</h1>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Relatório dos Serviços</h3>
                            </div>
                            
                            <?php  
                                
                                $sql="select * from orders ";
                                $resultado = mysqli_query($con, $sql);
                                
                            ?>
                            
                            <form  id="form1" name="form1" method="post" enctype="multipart/form-data" action="pdfp.php">
                                

                                <div class="card-footer">
                                    
                                    <input type="submit" class="btn btn-primary" name="Pesquisar" id="Pesquisar" value="Pesquisar"/>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
