<?php
/**
 * Created by PhpStorm.
 * User: Gino
 * Date: 6-3-2019
 * Time: 08:57
 */

class House{
    public $floors;
    public $rooms;
    public $width;
    public $height;
    public $depth;
    public $price;
    
    public function __construct($floors, $rooms, $width, $height, $depth)
    {
        $this->floors           = $floors;
        $this->rooms            = $rooms;
        $this->width            = $width;
        $this->height           = $height;
        $this->depth            = $depth;
        $this->price            = $width * $depth * $height * 296;
    }

}


$House1 = new House(2, 4,23,4,3);
$House2 = new House(1, 2,20,2,6);
$House3 = new House(2, 8,90,17,7);

echo "House 1:"     . "<br>";
echo "Floors: "     . $House1->floors . "<br>";
echo "Rooms: "      . $House1->rooms . "<br>";
echo "Width: "      . $House1->width . "<br>";
echo "Height: "     . $House1->height . "<br>";
echo "Depth: "      . $House1->depth . "<br>";
echo "Price : "     . $House1->price . "<br>";
echo "<hr>";
echo "House 2:"     . "<br>";
echo "Floors: "     . $House2->floors . "<br>";
echo "Rooms: "      . $House2->rooms . "<br>";
echo "Width: "      . $House2->width . "<br>";
echo "Height: "     . $House2->height . "<br>";
echo "Depth: "      . $House2->depth . "<br>";
echo "Price : "     . $House2->price . "<br>";
echo "<hr>";
echo "House 3:"     . "<br>";
echo "Floors: "     . $House3->floors . "<br>";
echo "Rooms: "      . $House3->rooms . "<br>";
echo "Width: "      . $House3->width . "<br>";
echo "Height: "     . $House3->height . "<br>";
echo "Depth: "      . $House3->depth . "<br>";
echo "Price : "     . $House3->price . "<br>";