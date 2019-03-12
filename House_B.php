<?php
/**
 * Created by PhpStorm.
 * User: Gino
 * Date: 12-3-2019
 * Time: 12:42
 */
Class Chamber {
    public $roomname;
    public $roomheight;
    public $roomdepth;
    public $roomwidth;
    public $roomm3;
    public $pricepm3;
    public $pricechamper;

    public function __construct($roomname, $roomheight, $roomdepth, $roomwidth,  $pricepm3)
    {
        $this->roomname     = $roomname;
        $this->roomheight   = $roomheight;
        $this->roomdepth    = $roomdepth;
        $this->roomwidth    = $roomwidth;
        $this->roomm3       = $roomheight * $roomdepth * $roomwidth;
        $this->pricepm3     = $this->roomm3*$pricepm3;
    }

}
// Create chambers for House 1.
$toilet = new Chamber('Toilet', '2.3', '2.5', '2', '290');
$livingroom = new Chamber('Livingroom', '2.3', '9.9', '5.6', '290');
$kitchen = new Chamber('Kitchen', '2.3', '3', '6', '290');
$bathroom = new Chamber('Bathroom', '2.3', '2.5', '5', '290');
$bedroom1 = new Chamber('Bedroom 1', '2.3', '6', '8', '290');
$bedroom2 = new Chamber('Bedroom 2', '2.3', '7', '7', '290');
$bedroom3 = new Chamber('Bedroom 3', '2.3', '6', '4', '290');
// Create array for house 1.
$house1 = array($toilet, $livingroom, $kitchen, $bathroom, $bedroom1, $bedroom2, $bedroom3);

// Create chambers for House 2.
$toilet = new Chamber('Toilet', '2.3', '2.5', '2', '290');
$livingroom = new Chamber('Livingroom', '2.3', '9.9', '5.6', '290');
$kitchen = new Chamber('Kitchen', '2.3', '3', '6', '290');
$bathroom = new Chamber('Bathroom', '2.3', '2.5', '5', '290');
$bedroom1 = new Chamber('Bedroom 1', '2.3', '6', '8', '290');
$bedroom2 = new Chamber('Bedroom 2', '2.3', '7', '7', '290');
$bedroom3 = new Chamber('Bedroom 3', '2.3', '6', '4', '290');
// Create array for house 2.
$house2 = array($toilet, $livingroom, $kitchen, $bathroom, $bedroom1, $bedroom2, $bedroom3);

// Create chambers for House 3.
$toilet = new Chamber('Toilet', '2.3', '2.5', '2', '290');
$livingroom = new Chamber('Livingroom', '2.3', '9.9', '5.6', '290');
$kitchen = new Chamber('Kitchen', '2.3', '3', '6', '290');
$bathroom = new Chamber('Bathroom', '2.3', '2.5', '5', '290');
$bedroom1 = new Chamber('Bedroom 1', '2.3', '6', '8', '290');
$bedroom2 = new Chamber('Bedroom 2', '2.3', '7', '7', '290');
// Create array for house 3.
$house3 = array($toilet, $livingroom, $kitchen, $bathroom, $bedroom1, $bedroom2);

$houses = array($house1, $house2, $house3);
foreach ($houses as $showhouse) {
// Create display.
    $total = '0';
    foreach ($house1 as $house) {

        echo 'Room name : ' . $house->roomname . '<br />';
        echo 'Room Height (m) : ' . $house->roomheight . '<br />';
        echo 'Room Depth (m) : ' . $house->roomdepth . '<br />';
        echo 'Room Width (m) : ' . $house->roomwidth . '<br />';
        echo 'Room Price : €' . $house->pricepm3 . '<br />';
        $total = $total + $house->pricepm3;
        echo "<br>";
    }
    echo "Total house price : € $total";
    echo "<hr>";
}