<?php
// use break and continue separetedly
echo "<br> <br> A verificar porta X <br> <br>";
$porta = 1;
while ($porta >= 1 && $porta <= 19) {
    $porta++;
    if($porta %5 == 0){
        continue;
    }
    print $porta . "<br>";

echo "<br> <br> Varredura interrompida por segurança na porta 18 <br> <br>";
$porta = 1;
while (true) {
    if ($porta == 18) {
        break;
}
print $porta . "<br>";
$porta++;
}
}




// use break and continue together
/*
$porta = 1;

while ($porta <= 20) {

    // REGRA 2: interromper tudo na porta 18
    if ($porta == 18) {
        echo "Varredura interrompida por segurança na porta 18<br>";
        break;
    }

    // REGRA 1: ignorar múltiplos de 5
    if ($porta % 5 == 0) {
        $porta++;
        continue;
    }

    // Verificação normal
    echo "A verificar porta " . $porta . "<br>";

    $porta++;
}
*/

?>