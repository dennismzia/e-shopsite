<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - E shopper</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- the php file below contains the code for the admin dashboards top navbar. -->
        <?php include("sitetopnavbar.php");?>
        <div id="layoutSidenav">
            <?php include("sidenav.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    
<div class="card">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Admission</th>
      <th scope="col">Name</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>JOHN LESHAN</td>
      <td>SB06/JR/MN/14072/2022</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>COLLINS KOSGEI</td>
      <td>SB06/JR/MN/14066/2022</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>NYAMBURA DANIEL MWANGI</td>
      <td>SB06/JR/MN/16342/2022</td>
    </tr>
        <tr>
      <th scope="row">4</th>
      <td>SYLVIA ACHOLA</td>
      <td>SB06/JR/MN/16456/2022</td>
    </tr>
        <tr>
      <th scope="row">5</th>
      <td>DENNIS MWANZIA</td>
      <td>SB06/SR/MN/7952/2018</td>
    </tr>
        <tr>
      <th scope="row">6</th>
      <td>ALLOYS KENNEDY ODUOR</td>
      <td>SB06/JR/MN/14085/2022</td>
    </tr>
  </tbody>
</table>
                </main>
                <?php include("footer.php"); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>