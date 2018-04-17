<?php
echo '<a href="declaration.php">&larr; Retour</a><br><br>';

$a = 0;
$b = 10;

echo 'Incrémenter une valeur numérique se fait avec l\'opérateur ++';
echo '<br>';
echo 'Attention à l\'ordre d\'affectation.';
echo '<br><br>';
echo '$a++ affiche : '.$a++.' et $a vaut : '.$a;
echo '<br>';
echo '++$a affiche : '.++$a.' et $a vaut : '.$a;
echo '<br><br>';
echo '++ avant la variable, incrémente avant la manipulation de la variable.';
echo '++ après la variable, manipule la variable avant de l\'incrémenter';
echo '<br><br>';
echo 'Décrementer une valeur numérique se fait avec l\'opérateur --';
echo '<br>';
echo 'Les mêmes recommandations s\'appliquent que pour ++';
echo '<br><br>';
echo '$a-- affiche : '.$a--.' et $a vaut : '.$a;
echo '<br>';
echo '--$a affiche : '.--$a.' et $a vaut : '.$a;
echo '<br><br>';
echo 'La concatenation se fait avec l\'opérateur .';
echo '<br><br>';

$string1 = 'Hello';
$string2 = 'world !';

echo 'string 1 : '.$string1;
echo '<br>';
echo 'string 2 : '.$string2;
echo '<br>';
echo 'string 1 . string 2 : '.$string1.' '.$string2;
echo '<br><br>';
echo 'L\'égalité est un opérateur de comparaison mais peut avoir un comportement à connaitre';
echo '<br>';
echo 'L\'égalité se vérifie avec l\'opérateur == ou === et retourne un boolean';
echo '<br>';
echo '== permet de comparer si deux valeurs sont identiques sans se préocuper du type';
echo '<br><br>';
$a = 10;
$b = 10;
echo '10 == 10 : ';
echo $a == $b ? 'true' : 'false';
echo '<br>';
$b = "10";
echo '10 == "10" : ';
echo $a == $b ? 'true' : 'false';
echo '<br><br>';
echo '=== permet de vérifier que les valeurs comparées soient de même type, en plus de vérifier l\'égalité de la valeur';
echo '<br><br>';
$b = 10;
echo '10 == 10 : ';
echo $a === $b ? 'true' : 'false';
echo '<br>';
$b = "10";
echo '10 == "10" : ';
echo $a === $b ? 'true' : 'false';
echo '<br><br>';
echo 'Les opérateurs de comparaison permettent de retourner un boolean en réponse du test effectué.';
echo '<br><br>';
echo '$a > $b : $a est strictement supérieur à $b';
echo '<br>';
echo '0 > 10 : ';
echo 0 > 10 ? 'true' : 'false';
echo '<br>';
echo '10 > 0 : ';
echo 10 > 0 ? 'true' : 'false';
echo '<br>';
echo '10 > 10 : ';
echo 10 > 10 ? 'true' : 'false';
echo '<br><br>';
echo '$a >= $b : $a est supérieur ou égal à $b';
echo '<br>';
echo '0 >= 10 : ';
echo 0 >= 10 ? 'true' : 'false';
echo '<br>';
echo '10 >= 0 : ';
echo 10 >= 0 ? 'true' : 'false';
echo '<br>';
echo '10 >= 10 : ';
echo 10 >= 10 ? 'true' : 'false';
echo '<br><br>';
echo '$a < $b : $a est strictement inférieur à $b';
echo '<br>';
echo '0 < 10 : ';
echo 0 < 10 ? 'true' : 'false';
echo '<br>';
echo '10 < 0 : ';
echo 10 < 0 ? 'true' : 'false';
echo '<br>';
echo '10 < 10 : ';
echo 10 < 10 ? 'true' : 'false';
echo '<br><br>';
echo '$a <= $b : $a est inférieur ou égal à $b';
echo '<br>';
echo '0 <= 10 : ';
echo 0 <= 10 ? 'true' : 'false';
echo '<br>';
echo '10 <= 0 : ';
echo 10 <= 0 ? 'true' : 'false';
echo '<br>';
echo '10 <= 10 : ';
echo 10 <= 10 ? 'true' : 'false';
echo '<br><br>';
echo 'Nouveau en PHP 7';
echo '<br>';
echo '$a <=> $b permet de retourner si $a < $b (-1) ou $a = $b (0) ou $a > $b (1)';
echo '<br><br>';
echo '1 <=> 10 : ';
echo 1 <=> 10;
echo '<br>';
echo '10 <=> 10 : ';
echo 10 <=> 10;
echo '<br>';
echo '10 <=> 1 : ';
echo 10 <=> 1;
echo '<br>';
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';

