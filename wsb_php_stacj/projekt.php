<?php
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imie i nazwisko: $firstName $lastName<br>";
echo "Imie i nazwisko: $firstName $lastName<br>";

echo <<< DATA
<hr>
Imie: $firstName<hr>
Nazwisko: $lastName<hr>
DATA;

$data = <<< DATA
<hr>
Imie: $firstName<hr>
Nazwisko: $lastName<hr>
DATA;

&bin = 0b1011;
echo &bin;

&oct = 011;
echo &oct;

&hex = 0xA11;
echo &hex;
?>