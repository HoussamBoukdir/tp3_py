<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1
    $a
    $a_s
    $AAA
    $a1
    //2
    $x = "PostgreSQL";  
    $y = "MySQL";  
    $z = &$x; // $z contient "PostgreSQL" (référence à $x)  
    $x = "PHP 5"; // $x et $z deviennent "PHP 5"  
    $y = &$x; // $y devient aussi "PHP 5"  
    //3
    $x = "PHP 5", $y = "PHP 5", $z = "PHP 5"
    //4
    $note_math = 12.5;
    $note_fr = 15.0;
    $note_histoire = 10.0;
    $moyenne = ($note_math + $note_fr + $note_histoire) / 3;
    echo "La moyenne est de : $moyenne/20";
    //5
    $prix_ht = 50;
    $tva = 0.2; // 20%
    $prix_ttc = $prix_ht * (1 + $tva);
    //6
    $test=42;
    var_dump($test);
    //7
    $budget=1553.89;
    $achats=1554.76;
    if($achats<$budget){
        echo "Vous pouvez acheter ces articles.";
    }else{
        echo "Vous ne pouvez pas acheter ces articles.";
    }
    //8
    $nombre = 15; 
    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "$nombre est un multiple de 3 et de 5.";
    } else {
        echo "$nombre n'est pas un multiple de 3 et de 5.";
    }
    //9
    $heure = 14; 
    if ($heure >= 0 && $heure < 12) {
        echo "C'est le matin.";
    } elseif ($heure >= 12 && $heure < 18) {
        echo "C'est l'après-midi.";
    } else {
        echo "C'est la nuit.";
    }
    //10
    $nombre = 9;
    switch ($nombre) {
        case 1:
            echo "one";
            break;
        case 2:
            echo "two";
            break;
        case 3:
            echo "tree";
            break;
        case 4:
            echo "four";
            break;
        case 5:
            echo "five";
            break;
        case 6:
            echo "Six";
            break;
        case 7:
            echo "seven";
            break;
        case 8:
            echo "eight";
            break;
        case 9:
            echo "nie";
            break;
        case 10:
            echo "ten";
            break;
    }
    //11
    for ($i = 1; $i <= 10; $i++) {
        echo "5 x $i = ".(5 * $i);
    }
    //12
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo "<br>";
    }
    //13
    $variable = 0;
    while ($variable <= 20) {
        if ($variable == 10) {
            echo "<strong>$variable</strong><br>";
        } else {
            echo "$variable<br>";
    }
    $variable += 2;
    }
    //14
    //a
    /* l'output sera :
    début tour 1
    bonjour 
    fin tour 1
    début tour 2
    bonjour 
    fin tour 2
    début tour 3
    bonjour 
    après la boucle
    */
    //b
    /* l'output sera :
    Dehors
    Milieu
    Intérieur
    Dehors
    Milieu
    Intérieur
    Dehors
    Milieu
    Intérieur
    Dehors
    Milieu
    Intérieur
    */
    //c
    /* l'output sera :
       ---->$i=1
    boucle for : $j=1
    boucle for : $j=2
    boucle for : $j=3
    boucle for : $j=4
    boucle for : $j=5
    boucle for : $j=6
    à $j = 6 ou $j = 8 on sort de la boucle for
    ---->$i=2
    boucle for : $j=1
    boucle for : $j=2
    boucle for : $j=3
    boucle for : $j=4
    boucle for : $j=5
    à $i=2 et $j=5 on sort du while et tout s'arrête
    */
    //d
    /* l'output sera :
    The number is: 0 <br>
    The number is: 1 <br>
    The number is: 2 <br>
    The number is: 3 <br>
    */
    //e
    /* l'output sera :
    The number is: 0 <br>
    The number is: 1 <br>
    The number is: 2 <br>
    The number is: 3 <br>
    The number is: 5 <br>
    The number is: 6 <br>
    The number is: 7 <br>
    The number is: 8 <br>
    The number is: 9 <br>
    */
?>
</body>
</html>