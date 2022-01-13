<?php
do {
    $nb= readline ("Entrez un nombre");
} while (!is_numeric($nb)|| $nb<0);
$divisur=2;
$div=[1,$nb];
for ($i=$divisur; $i <$nb ; $i++) { 
    if ($nb%$i==0) {
        $div[]=$i;
    }
        
}

if (count($div)>2||$nb==0||$nb==1) {
    echo "Le nombre n'est pas premier, voici le divisur : ". implode(', ',$div); 
   // print_r($div);
}

else  {


  echo "Le nombre est premier";
}





