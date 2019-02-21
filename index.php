<?php
/**
 * Created by PhpStorm.
 * User: mverh
 * Date: 13-2-2019
 * Time: 09:58
 */

class Room{
    public $Name;
    public $Width;
    public $Height;
    public $Depth;
    public $M3;
}
class Price extends Room{
    public $TotalPrice;

}

$totaal = '0';

$Bedroom1 = new Room();
$Bedroom1->Name = 'Slaapkamer 1' ;
$Bedroom1->Width = 3;
$Bedroom1->Height = 2.5;
$Bedroom1->Depth = 7;
$Bedroom1->M3 = $Bedroom1->Width*$Bedroom1->Height*$Bedroom1->Depth;

$Bedroom2 = new Room();
$Bedroom2->Name = 'Slaapkamer 2';
$Bedroom2->Width = 7;
$Bedroom2->Height = 2.5;
$Bedroom2->Depth = 7;
$Bedroom2->M3 = $Bedroom2->Width*$Bedroom2->Height*$Bedroom2->Depth;

$Bedroom3 = new Room();
$Bedroom3->Name = 'Slaapkamer 3';
$Bedroom3->Width = 7;
$Bedroom3->Height = 2.5;
$Bedroom3->Depth = 7;
$Bedroom3->M3 = $Bedroom3->Width*$Bedroom3->Height*$Bedroom3->Depth;
//$Bathroom1 = new Bathroom( '2', '2.5', '5');


$House1 = array ($Bedroom1, $Bedroom2, $Bedroom3);

foreach ($House1 as $H1) {
    echo 'Kamer: ' . $H1->Name. '<br />';
    echo 'Breedte: ' . $H1->Width. '<br />';
    echo 'Hoogte: ' . $H1->Height. '<br />';
    echo 'Diepte: ' . $H1->Depth. '<br />';
    echo 'In m3: ' . $H1->M3. '<br />';
    $totaal = $totaal + $H1->M3;
    echo " Totaal $totaal M3 nu<br>";

}
$totaalprijs = $totaal * 1;
echo "Totaal prijs $totaalprijs";