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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



	    <link rel="stylesheet" type="text/css" href="css/dashboard.css" media="screen" />
	    <link rel="stylesheet" type="text/css" href="css/dashboard.css" media="screen" />

    <title>Dashboard MVM</title>
  </head>


<body class="home">

  <?php session_start(); ?> 
  <?php if ($_SESSION['name'] == 'admin'){
    header("Location: admin.php");

  }?>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="img/logo4.png"  height="150" width="10" class="hidden-xs hidden-sm">
                  
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="admin.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="statistics.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calender</span></a></li>
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
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
     </ul>

  </div>

  <div class="collapse navbar-collapse" id="navbarNav">  
 
    <span class="navbar-text">
       Bem-Vindo -> <?php echo $_SESSION['name'];?>
    </span>
 
</div>

</nav>


<form method = "post" action="insert_order.php">
    
      <button type = "submit" class="btn btn-light btn-xs"  data-toggle="modal" data-target="#delete-modal">

      <svg class="bi bi-file-earmark-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 1H4a2 2 0 00-2 2v10a2 2 0 002 2h5v-1H4a1 1 0 01-1-1V3a1 1 0 011-1h5v2.5A1.5 1.5 0 0010.5 6H13v2h1V6L9 1z"/>
        <path fill-rule="evenodd" d="M13.5 10a.5.5 0 01.5.5v2a.5.5 0 01-.5.5h-2a.5.5 0 010-1H13v-1.5a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M13 12.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H14v1.5a.5.5 0 01-1 0v-2z" clip-rule="evenodd"/>
      </svg>

      Inserir Dados


      </button> 
</form>



<?php
$conexao = mysqli_connect("localhost","root","","PurchasesDB") or print (mysqli_error());
// test if admin or normal customer to redirect a suitable page.


if (!empty($_POST["dataForRemoving"])){

  $removingRow = $_POST["dataForRemoving"];
  $query_for_removing = "DELETE FROM orders WHERE id=$removingRow";
  mysqli_query($conexao,$query_for_removing);

}

 
$id = $_SESSION['id'];



$query = "SELECT id,description,amount, customer_id FROM orders WHERE customer_id =$id";

$resultado = mysqli_query($conexao,$query);

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descrição:</th>
      <th scope="col">Preço:</th>
      <th scope="col"></i><th>
      <th scope="col"></i><th>
    

    </tr>
  </thead>
  <tbody>

<?php

while($linha = mysqli_fetch_array($resultado)){
    echo "<tr> <td>".$linha['id']."</td>
    <td>".$linha['description']."</td>
    <td>R$".$linha['amount'].",00</td>";
    ?>

    <td>
    <form method = "post" action="update_order.php">
    <input type = "hidden" id="inputHidden" name="dataForUpdating" value=<?php echo $linha['id']; ?> >  
      <button type = "submit" class="btn btn-info btn-xs" ><i class="bi bi-pen-fill"></button> 
    </td>
    </form>  


    <td>
    <form method = "post" action="dashboard.php">
    <input type = "hidden" id="inputHidden" name="dataForRemoving" value=<?php echo $linha['id']; ?> >  
      <button type = "submit" class="btn btn-danger btn-xs"  ><i class="bi bi-trash"></button> 
    </td></tr>
    </form>



  
    <?php
}

?>


    
  </tbody>
</table>



<?php
mysqli_close($conexao);
?>


<script type="text/javascript" src="js/dashboard.js"></script>

</body>
</html>
