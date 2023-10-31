<?
$min = 8;
$max = 32;
$message = "Devi scegliere una password con un min di $min e un max di $max caratteri";
$error = '';
$css_alert = 'info';

$caratteri_minuscoli = 'q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m';
$caratteri_maiuscoli = 'Q,W,E,R,T,Y,U,I,O,P,A,S,D,F,G,H,J,K,L,Z,X,C,V,B,N,M';
$caratteri_numerici = '1,2,3,4,5,6,7,8,9,0';
$caratteri_speciali = '\,|,!,",£,$,%,&,/,(,),=,?,^,*,é,§,ç,°,_,:,;,.,-,ò,à,ù,è';

if (isset($_POST['length']) && !empty($_POST['length'])) {
  $length = $_POST['length'];
  var_dump($length);

  if ($length < 8 || $length > 32) {
    $error = 'Errore! ';
  }
}


// if (isset($_POST['password_length']) && !empty($_POST['password_length'])) {

//   $passlen = $_POST['password_length'];

//   // controllo se il valore inserito è corretto
//   if ($_POST['password_length'] < $min || $_POST['password_length'] > $max) {
//     $message = "Errore! La lunghezza della password deve essere compresa tra $min e $max caratteri";
//     $css_alert = 'danger';
//   } else {
//     $characters = 'qwertyuiopasdfghjklzxcvbnm';
//     for ($i = 0; $i < $passlen; $i++) {

//     }
//   }

// }




// $message = "Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri";

// $limit = $_POST["ciao"];

// $caratteri_minuscoli = 'q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m';
// $caratteri_maiuscoli = 'Q,W,E,R,T,Y,U,I,O,P,A,S,D,F,G,H,J,K,L,Z,X,C,V,B,N,M';
// $caratteri_numerici = '1,2,3,4,5,6,7,8,9,0';
// $caratteri_speciali = '\,|,!,",£,$,%,&,/,(,),=,?,^,*,é,§,ç,°,_,:,;,.,-,ò,à,ù,è,+,[,]{,},@,#,<,>';

// $caratteri_all = $caratteri_minuscoli . ',' . $caratteri_maiuscoli . ',' . $caratteri_numerici . ',' . $caratteri_speciali;
// $caratteri[] = explode(',', $caratteri_all);
// $password = [];

// var_dump($caratteri);

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

        <p class="my-3 ">La password generata: </p>

      </div>

    </div>
  </section>

</body>

</html>