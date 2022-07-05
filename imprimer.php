<?php
$min=1;
$max=100;
$i=0;

function est_multiple_de_trois(int $i ){
  if($i % 3 == 0 )
    return true;
  else
    return false;
};
function est_multiple_de_cinq(int $i){
  if($i % 5 == 0 )
    return true;
  else
    return false;
};
for ($i = 1; $i <= 100; $i++) {

  if(est_multiple_de_trois($i) && est_multiple_de_cinq($i)) {
    echo "SDK Game\n\n";
  } elseif (est_multiple_de_trois($i)) {
    echo "SDK\n\n";
  } elseif (est_multiple_de_cinq($i)){
    echo "Game\n\n";
  }
  else {
    echo "$i\n\n";
  }

}
?>




