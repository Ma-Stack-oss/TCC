<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="css/dashboard.css" media="screen" />
    <link rel="shortcut icon" type="imagex/png" href="./img/icon5.svg">

    <title>Editar Serviço</title>


  </head>
  <body>

  
  <?php session_start(); ?> 

   <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="img/logo7.png" height="180" width="auto" class="hidden-xs hidden-sm">
                  
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="admin.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="statistics.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href=pdf.php><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Enviar PDF</span></a></li>
                        <li><a href="viewall.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="#"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"></i><span class="hidden-xs hidden-sm"></span></a></li>
                        <li><a href="#"></i><span class="hidden-xs hidden-sm"></span></a></li>
                    </ul>
                </div>
            </div>




  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Serviços</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
       
    </ul>

  </div>

  <div class="collapse navbar-collapse" id="navbarNav">  
 
    <span class="navbar-text">
       Bem Vindo <?php echo $_SESSION['name'];?>
    </span>
 
</div>

</nav>



<?php


if(!empty($_POST["codeUpdating"])){
    $description = $_POST['description'];
    $amount = $_POST['amount'];
    $order_id = $_POST['codeUpdating'];
  
    $conexao = mysqli_connect("localhost","root","","PurchasesDB") or print (mysqli_error());
    
    $query = "UPDATE orders SET description='$description', amount='$amount'  WHERE id=$order_id";
     if (mysqli_query($conexao, $query)) {
    ?> 
    <div class="alert alert-info" role="alert">
      <?php echo "<strong>Order has been updated.</strong>"; ?>
    </div>
     
    <?php
    } else {
    ?>
      <div class="alert alert-danger" role="alert">
        <?php echo "<strong> Erro: <strong>" . $query . "<br>" . mysqli_error($conexao);?>
      </div>
    <?php
    }
  
}
  

if (!empty($_POST["dataForUpdating"])){
    $order_id = $_POST['dataForUpdating'];
    $conexao = mysqli_connect("localhost","root","","PurchasesDB") or print (mysqli_error());

    $query = "SELECT id,description,amount FROM orders WHERE id=$order_id";
    $resultado = mysqli_query($conexao,$query);  

    $linha = mysqli_fetch_array($resultado);
?>
    <form action="update_order.php" method="post">
        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="nameInputLabel">Serviço</label>
            <input type="text" class="form-control" id="nameInputLabel" name="description" value="<?php echo $linha['description'];?>">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4 mb-3">
            <label for="emailInputLabel">Preço</label>
            <input type="text" class="form-control" id="emailInputLabel" name = "amount" value="<?php echo $linha['amount'];?>">
          </div>
        </div>   

        <input type = "hidden" id="inputHidden" name="codeUpdating" value="<?php echo $linha['id']; ?> ">
      
        <button type="submit" class="btn btn-primary" name="submit">Editar</button>
</form>



<?php
}
?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/dashboard.js"></script>
  </body>
</html>