<?

require_once __DIR__ . './function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.css'
    integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A=='
    crossorigin='anonymous' />

  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- titolo -->
  <title>PHP Strong Password Generator</title>

</head>

<body>

  <section id="password" class="">
    <div class="a-container">

      <h1 class="text-center fw-bold ">Strong Password Generator</h1>
      <h2 class="fs-1">Genera una password sicura</h2>
      <p class="alert alert-success ">
        <? echo $error . $message ?>
      </p>

      <div class="bg-light rounded text-dark  p-3 pe-5">
        <form action="index.php" method="POST">

          <div class="form-group d-flex justify-content-between gap-3 mb-3 ">
            <label>Lunghezza password:</label>
            <input class="form-control w-25  " type="number" placeholder="0" name="length">
          </div>

          <div class="form-groupmb-3 d-flex gap-3  ">
            <button type="submit" class="btn btn-primary ">Invia</button>
            <button type="reset" class="btn btn-secondary ">Reset</button>
          </div>

        </form>

        <p class="my-3 ">La password generata:
          <? echo $password ?>
        </p>

      </div>

    </div>
  </section>

</body>

</html>