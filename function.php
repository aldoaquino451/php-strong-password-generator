<?
$min = 8;
$max = 32;
$message = "Devi scegliere una password con un min di $min e un max di $max caratteri";
$error = '';
$css_alert = 'info';
$password = '';

$caratteri_minuscoli = 'qwertyuiopasdfghjklzxcvbnm';
$caratteri_maiuscoli = 'QWERTYUIOPASDFGHJKLZXCVBNM';
$caratteri_numerici = '1234567890';
$caratteri_speciali = '|!"£$%&/()=?^@#[]{}';

// $caratteri_minuscoli = 'q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m';
// $caratteri_maiuscoli = 'Q,W,E,R,T,Y,U,I,O,P,A,S,D,F,G,H,J,K,L,Z,X,C,V,B,N,M';
// $caratteri_numerici = '1,2,3,4,5,6,7,8,9,0';
// $caratteri_speciali = '\,|,!,",£,$,%,&,/,(,),=,?,^,*,é,§,ç,°,_,:,;,.,-,ò,à,ù,è';

// $caratteri_all = $caratteri_minuscoli . ',' . $caratteri_maiuscoli . ',' . $caratteri_numerici . ',' . $caratteri_speciali;

if (isset($_POST['length']) && !empty($_POST['length'])) {
  $length = $_POST['length'];
  var_dump($length);

  if ($length < 8 || $length > 32) {
    $error = 'Errore! ';
  } else {
    $caratteri_all = str_shuffle($caratteri_minuscoli . $caratteri_maiuscoli . $caratteri_numerici . $caratteri_speciali);
    $password = substr($caratteri_all, 0, $length);
  }
}



?>