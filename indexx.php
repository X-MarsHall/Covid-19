<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="/images/school.png">
	<title>Info Covid-19 (Indonesia) - School Programing</title>
	<meta name="description" content="Stay Safe!!!">
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

	<br>
	<center>
		<h3>Info Covid-19 Indonesia // School Programing</h3>
	</center>
	<br>
<?php
$api = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
$prov = json_decode($api,true);

?>
	<section>
		<div class="container">
			<table class="table">
  <thead class="thead-dark">
    <tr>
	  <th scope="col">No.</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Positif</th>
      <th scope="col">Sembuh</th>
      <th scope="col">Meninggal</th>
    </tr>
  </thead>
  <tbody>
  	<?php $j=1; ?>
  	<?php foreach ($prov as $key) : ?>
    <tr>
      <th scope="row"><?= $j; ?></th>
      <td><?= $key['attributes']['Provinsi']; ?></td>
      <td><?= $key['attributes']['Kasus_Posi']; ?></td>
      <td><?= $key['attributes']['Kasus_Semb']; ?></td>
      <td><?= $key['attributes']['Kasus_Meni']; ?></td>
    </tr>
    <?php $j++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</section>

</body>
</html>