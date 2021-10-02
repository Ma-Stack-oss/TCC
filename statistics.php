<!DOCTYPE html>
<html lang="pt-br">
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

    <title>Estatisticas</title>

    <!-- CRONOGRAMA -->
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
       dataTable.addRows([

          [ new Date(2021, 0, 1), 38808 ],
          [ new Date(2021, 0, 2), 38108 ],
          [ new Date(2021, 0, 3), 38108 ],
          [ new Date(2021, 0, 4), 38108 ],
          [ new Date(2021, 0, 5), 38108 ],
          [ new Date(2021, 0, 6), 38108 ],
          [ new Date(2021, 0, 7), 38108 ],
          [ new Date(2021, 0, 8), 38108 ],
          [ new Date(2021, 0, 9), 38108 ],
          [ new Date(2021, 0, 10), 38108 ],
          [ new Date(2021, 0, 11), 38108 ],
          [ new Date(2021, 0, 12), 38108 ],
          [ new Date(2021, 0, 13), 38108 ],
          [ new Date(2021, 0, 14), 38108 ],
          [ new Date(2021, 0, 15), 38108 ],
          [ new Date(2021, 0, 16), 38108 ],
          [ new Date(2021, 0, 17), 38108 ],
          [ new Date(2021, 0, 18), 38108 ],
          [ new Date(2021, 0, 19), 38108 ],
          [ new Date(2021, 0, 20), 38108 ],
       	  [ new Date(2021, 0, 21), 38108 ],
          [ new Date(2021, 0, 22), 38108 ],
          [ new Date(2021, 0, 23), 38108 ],
          [ new Date(2021, 0, 24), 38108 ],
          [ new Date(2021, 0, 25), 38108 ],
          [ new Date(2021, 0, 26), 38108 ],
          [ new Date(2021, 0, 27), 38108 ],
          [ new Date(2021, 0, 28), 38108 ],
          [ new Date(2021, 0, 29), 38108 ],
          [ new Date(2021, 0, 30), 38108 ],
          [ new Date(2021, 0, 31), 38108 ],

          [ new Date(2021, 1, 1), 38108 ],
          [ new Date(2021, 1, 2), 38108 ],
          [ new Date(2021, 1, 3), 38108 ],
          [ new Date(2021, 1, 4), 38108 ],
          [ new Date(2021, 1, 5), 38108 ],
          [ new Date(2021, 1, 6), 38108 ],
          [ new Date(2021, 1, 7), 38108 ],
          [ new Date(2021, 1, 8), 38108 ],
          [ new Date(2021, 1, 9), 38108 ],
          [ new Date(2021, 1, 10), 38108 ],
          [ new Date(2021, 1, 11), 38108 ],
          [ new Date(2021, 1, 12), 38108 ],
          [ new Date(2021, 1, 13), 38108 ],
          [ new Date(2021, 1, 14), 38108 ],
          [ new Date(2021, 1, 15), 38108 ],
          [ new Date(2021, 1, 16), 38108 ],
          [ new Date(2021, 1, 17), 38108 ],
          [ new Date(2021, 1, 18), 38108 ],
          [ new Date(2021, 1, 19), 38108 ],
          [ new Date(2021, 1, 20), 38108 ],
       	  [ new Date(2021, 1, 21), 38108 ],
          [ new Date(2021, 1, 22), 38108 ],
          [ new Date(2021, 1, 23), 38108 ],
          [ new Date(2021, 1, 24), 38108 ],
          [ new Date(2021, 1, 25), 38108 ],
          [ new Date(2021, 1, 26), 38108 ],
          [ new Date(2021, 1, 27), 38108 ],
          [ new Date(2021, 1, 28), 38108 ],

          [ new Date(2021, 2, 1), 38108 ],
          [ new Date(2021, 2, 2), 38108 ],
          [ new Date(2021, 2, 3), 38108 ],
          [ new Date(2021, 2, 4), 38108 ],
          [ new Date(2021, 2, 5), 38108 ],
          [ new Date(2021, 2, 6), 38108 ],
          [ new Date(2021, 2, 7), 38108 ],
          [ new Date(2021, 2, 8), 38108 ],
          [ new Date(2021, 2, 9), 38108 ],
          [ new Date(2021, 2, 10), 38108 ],
          [ new Date(2021, 2, 11), 38108 ],
          [ new Date(2021, 2, 12), 38108 ],
          [ new Date(2021, 2, 13), 38108 ],
          [ new Date(2021, 2, 14), 38108 ],
          [ new Date(2021, 2, 15), 38108 ],
          [ new Date(2021, 2, 16), 38108 ],
          [ new Date(2021, 2, 17), 38108 ],
          [ new Date(2021, 2, 18), 38108 ],
          [ new Date(2021, 2, 19), 38108 ],
          [ new Date(2021, 2, 20), 38108 ],
       	  [ new Date(2021, 2, 21), 38108 ],
          [ new Date(2021, 2, 22), 38108 ],
          [ new Date(2021, 2, 23), 38108 ],
          [ new Date(2021, 2, 24), 38108 ],
          [ new Date(2021, 2, 25), 38108 ],
          [ new Date(2021, 2, 26), 38108 ],
          [ new Date(2021, 2, 27), 38108 ],
          [ new Date(2021, 2, 28), 38108 ],
          [ new Date(2021, 2, 29), 38108 ],
          [ new Date(2021, 2, 30), 38108 ],
          [ new Date(2021, 2, 31), 38108 ],

          [ new Date(2021, 3, 1), 38108 ],
          [ new Date(2021, 3, 2), 38108 ],
          [ new Date(2021, 3, 3), 38108 ],
          [ new Date(2021, 3, 4), 38108 ],
          [ new Date(2021, 3, 5), 38108 ],
          [ new Date(2021, 3, 6), 38108 ],
          [ new Date(2021, 3, 7), 38108 ],
          [ new Date(2021, 3, 8), 38108 ],
          [ new Date(2021, 3, 9), 38108 ],
          [ new Date(2021, 3, 10), 38108 ],
          [ new Date(2021, 3, 11), 38108 ],
          [ new Date(2021, 3, 12), 38108 ],
          [ new Date(2021, 3, 13), 38108 ],
          [ new Date(2021, 3, 14), 38108 ],
          [ new Date(2021, 3, 15), 38108 ],
          [ new Date(2021, 3, 16), 38108 ],
          [ new Date(2021, 3, 17), 38108 ],
          [ new Date(2021, 3, 18), 38108 ],
          [ new Date(2021, 3, 19), 38108 ],
          [ new Date(2021, 3, 20), 38108 ],
          [ new Date(2021, 3, 21), 38108 ],
          [ new Date(2021, 3, 22), 38108 ],
          [ new Date(2021, 3, 23), 38108 ],
          [ new Date(2021, 3, 24), 38108 ],
          [ new Date(2021, 3, 25), 38108 ],
          [ new Date(2021, 3, 26), 38108 ],
          [ new Date(2021, 3, 27), 38108 ],
          [ new Date(2021, 3, 28), 38108 ],
          [ new Date(2021, 3, 29), 38108 ],
          [ new Date(2021, 3, 30), 38108 ],

          [ new Date(2021, 4, 1), 38108 ],
          [ new Date(2021, 4, 2), 38108 ],
          [ new Date(2021, 4, 3), 38108 ],
          [ new Date(2021, 4, 4), 38108 ],
          [ new Date(2021, 4, 5), 38108 ],
          [ new Date(2021, 4, 6), 38108 ],
          [ new Date(2021, 4, 7), 38108 ],
          [ new Date(2021, 4, 8), 38108 ],
          [ new Date(2021, 4, 9), 38108 ],
          [ new Date(2021, 4, 10), 38108 ],
          [ new Date(2021, 4, 11), 38108 ],
          [ new Date(2021, 4, 12), 38108 ],
          [ new Date(2021, 4, 13), 38108 ],
          [ new Date(2021, 4, 14), 38108 ],
          [ new Date(2021, 4, 15), 38108 ],
          [ new Date(2021, 4, 16), 38108 ],
          [ new Date(2021, 4, 17), 38108 ],
          [ new Date(2021, 4, 18), 38108 ],
          [ new Date(2021, 4, 19), 38108 ],
          [ new Date(2021, 4, 20), 38108 ],
          [ new Date(2021, 4, 21), 38108 ],
          [ new Date(2021, 4, 22), 38108 ],
          [ new Date(2021, 4, 23), 38108 ],
          [ new Date(2021, 4, 24), 38108 ],
          [ new Date(2021, 4, 25), 38108 ],
          [ new Date(2021, 4, 26), 38108 ],
          [ new Date(2021, 4, 27), 38108 ],
          [ new Date(2021, 4, 28), 38108 ],
          [ new Date(2021, 4, 29), 38108 ],
          [ new Date(2021, 4, 30), 38108 ],
          [ new Date(2021, 4, 31), 38108 ],

          [ new Date(2021, 5, 1), 38108 ],
          [ new Date(2021, 5, 2), 38108 ],
          [ new Date(2021, 5, 3), 38108 ],
          [ new Date(2021, 5, 4), 38108 ],
          [ new Date(2021, 5, 5), 38108 ],
          [ new Date(2021, 5, 6), 38108 ],
          [ new Date(2021, 5, 7), 38108 ],
          [ new Date(2021, 5, 8), 38108 ],
          [ new Date(2021, 5, 9), 38108 ],
          [ new Date(2021, 5, 10), 38108 ],
          [ new Date(2021, 5, 11), 38108 ],
          [ new Date(2021, 5, 12), 38108 ],
          [ new Date(2021, 5, 13), 38108 ],
          [ new Date(2021, 5, 14), 38108 ],
          [ new Date(2021, 5, 15), 38108 ],
          [ new Date(2021, 5, 16), 38108 ],
          [ new Date(2021, 5, 17), 38108 ],
          [ new Date(2021, 5, 18), 38108 ],
          [ new Date(2021, 5, 19), 38108 ],
          [ new Date(2021, 5, 20), 38108 ],
          [ new Date(2021, 5, 21), 38108 ],
          [ new Date(2021, 5, 22), 38108 ],
          [ new Date(2021, 5, 23), 38108 ],
          [ new Date(2021, 5, 24), 38108 ],
          [ new Date(2021, 5, 25), 38108 ],
          [ new Date(2021, 5, 26), 38108 ],
          [ new Date(2021, 5, 27), 38108 ],
          [ new Date(2021, 5, 28), 38108 ],
          [ new Date(2021, 5, 29), 38108 ],
          [ new Date(2021, 5, 30), 38108 ],

          [ new Date(2021, 6, 1), 38108 ],
          [ new Date(2021, 6, 2), 38108 ],
          [ new Date(2021, 6, 3), 38108 ],
          [ new Date(2021, 6, 4), 38108 ],
          [ new Date(2021, 6, 5), 38108 ],
          [ new Date(2021, 6, 6), 38108 ],
          [ new Date(2021, 6, 7), 38108 ],
          [ new Date(2021, 6, 8), 38108 ],
          [ new Date(2021, 6, 9), 38108 ],
          [ new Date(2021, 6, 10), 38108 ],
          [ new Date(2021, 6, 11), 38108 ],
          [ new Date(2021, 6, 12), 38108 ],
          [ new Date(2021, 6, 13), 38108 ],
          [ new Date(2021, 6, 14), 38108 ],
          [ new Date(2021, 6, 15), 38108 ],
          [ new Date(2021, 6, 16), 38108 ],
          [ new Date(2021, 6, 17), 38108 ],
          [ new Date(2021, 6, 18), 38108 ],
          [ new Date(2021, 6, 19), 38108 ],
          [ new Date(2021, 6, 20), 38108 ],
          [ new Date(2021, 6, 21), 38108 ],
          [ new Date(2021, 6, 22), 38108 ],
          [ new Date(2021, 6, 23), 38108 ],
          [ new Date(2021, 6, 24), 38108 ],
          [ new Date(2021, 6, 25), 38108 ],
          [ new Date(2021, 6, 26), 38108 ],
          [ new Date(2021, 6, 27), 38108 ],
          [ new Date(2021, 6, 28), 38108 ],
          [ new Date(2021, 6, 29), 38108 ],
          [ new Date(2021, 6, 30), 38108 ],
          [ new Date(2021, 6, 31), 38108 ],

          [ new Date(2021, 7, 1), 38108 ],
          [ new Date(2021, 7, 2), 38108 ],
          [ new Date(2021, 7, 3), 38108 ],
          [ new Date(2021, 7, 4), 38108 ],
          [ new Date(2021, 7, 5), 38108 ],
          [ new Date(2021, 7, 6), 38108 ],
          [ new Date(2021, 7, 7), 38108 ],
          [ new Date(2021, 7, 8), 38108 ],
          [ new Date(2021, 7, 9), 38108 ],
          [ new Date(2021, 7, 10), 38108 ],
          [ new Date(2021, 7, 11), 38108 ],
          [ new Date(2021, 7, 12), 38108 ],
          [ new Date(2021, 7, 13), 38108 ],
          [ new Date(2021, 7, 14), 38108 ],
          [ new Date(2021, 7, 15), 38108 ],
          [ new Date(2021, 7, 16), 38108 ],
          [ new Date(2021, 7, 17), 38108 ],
          [ new Date(2021, 7, 18), 38108 ],
          [ new Date(2021, 7, 19), 38108 ],
          [ new Date(2021, 7, 20), 38108 ],
          [ new Date(2021, 7, 21), 38108 ],
          [ new Date(2021, 7, 22), 38108 ],
          [ new Date(2021, 7, 23), 38108 ],
          [ new Date(2021, 7, 24), 38108 ],
          [ new Date(2021, 7, 25), 38108 ],
          [ new Date(2021, 7, 26), 38108 ],
          [ new Date(2021, 7, 27), 38108 ],
          [ new Date(2021, 7, 28), 38108 ],
          [ new Date(2021, 7, 29), 38108 ],
          [ new Date(2021, 7, 30), 38108 ],
          [ new Date(2021, 7, 31), 38108 ],


          [ new Date(2021, 8, 1), 38108 ],
          [ new Date(2021, 8, 2), 38108 ],
          [ new Date(2021, 8, 3), 38108 ],
          [ new Date(2021, 8, 4), 38108 ],
          [ new Date(2021, 8, 5), 38108 ],
          [ new Date(2021, 8, 6), 38108 ],
          [ new Date(2021, 8, 7), 38108 ],
          [ new Date(2021, 8, 8), 38108 ],
          [ new Date(2021, 8, 9), 38108 ],
          [ new Date(2021, 8, 10), 38108 ],
          [ new Date(2021, 8, 11), 38108 ],
          [ new Date(2021, 8, 12), 38108 ],
          [ new Date(2021, 8, 13), 38108 ],
          [ new Date(2021, 8, 14), 38108 ],
          [ new Date(2021, 8, 15), 38108 ],
          [ new Date(2021, 8, 16), 38108 ],
          [ new Date(2021, 8, 17), 38108 ],
          [ new Date(2021, 8, 18), 38108 ],
          [ new Date(2021, 8, 19), 38108 ],
          [ new Date(2021, 8, 20), 38108 ],
          [ new Date(2021, 8, 21), 38108 ],
          [ new Date(2021, 8, 22), 38108 ],
          [ new Date(2021, 8, 23), 38108 ],
          [ new Date(2021, 8, 24), 38108 ],
          [ new Date(2021, 8, 25), 38108 ],
          [ new Date(2021, 8, 26), 38108 ],
          [ new Date(2021, 8, 27), 38108 ],
          [ new Date(2021, 8, 28), 38108 ],
          [ new Date(2021, 8, 29), 38108 ],
          [ new Date(2021, 8, 30), 38108 ],
          [ new Date(2021, 8, 31), 38108 ],

          [ new Date(2021, 9, 1), 38108 ],
          [ new Date(2021, 9, 2), 38108 ],


        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

       var options = {
         title: "Cronograma MVM",
         height: 350,

       };

       chart.draw(dataTable, options);
   }
    </script>

  <!-- FUNCIONARIOS -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['timeline']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var container = document.getElementById('timeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'President' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });
        dataTable.addRows([
          [ 'Matheus Pereira', new Date(2020, 7, 1), new Date(2021, 9, 2) ],
          [ 'Marcelo',      new Date(2021, 2, 1),  new Date(2021, 9, 2) ],
          [ 'Victor Gabriel',  new Date(2021, 2, 1),  new Date(2021, 9, 2) ]]);

        chart.draw(dataTable);
      }
    </script>
  </head>
  <body>



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
                        <li><a href="pdf.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Enviar PDF</span></a></li>
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
       Bem-Vindo -> <?php $conexao = mysqli_connect("localhost","root","","PurchasesDB") or print (mysqli_error()); echo $_SESSION['name'];?>
    </span>
 
</div>

</nav>

    <!-- CALENDARIO -->
    <div id="calendar_basic" style="width: 900px; height: 250px;"></div>

    <!-- FUNCIONARIOS -->
    <h1>Funcionarios</h1>
    <div id="timeline" style="height: 180px;"></div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>