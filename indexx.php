<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="icon" type="image/png" href="/images/school.png">
    <title>Covid-19 Information</title>
    <meta name="description" content="Stay Safe !!!">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <br><br>
<center>
        <svg class="bi bi-code-slash" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> 
        <path fill-rule="evenodd" d="M4.854 4.146a.5.5 0 010 .708L1.707 8l3.147 3.146a.5.5 0 01-.708.708l-3.5-3.5a.5.5 0 010-.708l3.5-3.5a.5.5 0 01.708 0zm6.292 0a.5.5 0 000 .708L14.293 8l-3.147 3.146a.5.5 0 00.708.708l3.5-3.5a.5.5 0 000-.708l-3.5-3.5a.5.5 0 00-.708 0zm-.999-3.124a.5.5 0 01.33.625l-4 13a.5.5 0 01-.955-.294l4-13a.5.5 0 01.625-.33z" clip-rule="evenodd"/><h1>School Programing</h1>
      </svg>
<br><br>

  <h3>Indonesia :</h3>
  <br>

    <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded">
        <br><br>
      <img src="http://jadiberita.com/wp-content/uploads/2017/09/Emoticon-ngantuk-Washingtonpost-600x600.jpg" height="150" width="150" class="rounded-circle">
      <h1>Positif</h1>
      <h4>1285 Orang</h4>
        <br><br>
      </div>
    </div>


    <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded">
        <br><br>
      <img src="https://cdn.pixabay.com/photo/2017/03/05/21/55/emoticon-2120024_960_720.png" height="150" width="150" class="rounded-circle">
      <h1>Sembuh</h1>
      <h4>64 Orang</h4>
        <br><br>
      </div>
    </div>



    <div class="container">
      <div class="shadow p-3 mb-5 bg-white rounded">
        <br><br>
      <img src="https://obs.line-scdn.net/0hzoC6KNB5JUB-TwjGb3FaF0QZJi9NIzZDGnl0Xi4he3QAK2IWEC5idVIaciNRemIeEHxsIltJPnFbfzcTQC1i/w644" height="150" width="150" class="rounded-circle">
      <h1>Meninggal</h1>
      <h4>114 Orang</h4>
        <br><br>
      </div>
    </div>

<br><br>

  <h1>Dunia :</h1>

<br><br>

</center>

    <?php
$api = file_get_contents('https://api.kawalcorona.com/');
$prov = json_decode($api,true);

?>
  <section>
    <div class="container">
      <table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">No.</th>
      <th scope="col">Negara</th>
      <th scope="col">Komfirmasi</th>
      <th scope="col">Meninggal</th>
      <th scope="col">Sembuh</th>
      <th scope="col">Aktif</th>
    </tr>
  </thead>
  <tbody>
    <?php $j=1; ?>
    <?php foreach ($prov as $key) : ?>
    <tr>
      <th scope="row"><?= $j; ?></th>
      <td><?= $key['attributes']['Country_Region']; ?></td>
      <td><?= $key['attributes']['Confirmed']; ?></td>
      <td><?= $key['attributes']['Deaths']; ?></td>
      <td><?= $key['attributes']['Recovered']; ?></td>
      <td><?= $key['attributes']['Active']; ?></td>
    </tr>
    <?php $j++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
  </section>
  <br>
  <center>
    <p>Copyright @2020 - School Programing</p>
  </center>
  <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
