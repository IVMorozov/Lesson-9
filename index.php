<?php

class Car
{
  public $CarProducer;
  public $CarModel;
  public $CarColor;
  public $CarPrice;
  
  public function SetColor($paint)
  {
    $this->CarColor=$paint;
  }
}

class TV
{
  public $TVProducer;
  public $TVScreenSize;
  public $TVPrice;
  
  public function SetPrice($price)
  {
    $this->TVPrice=$price;
  }
}

class Pen
{
  public $PenProducer;
  public $PenType;
  public $PenPrice;
  
  public function SetPrice($price)
  {
    $this->PenPrice=$price;
  }
}

class Duck
{
  public $DuckMaxSize;
  public $DuckType;
  public $DuckLiveArea;
  
  public function SetArea($continent)
  {
    $this->DuckLiveArea=$continent;
  }
}

class Product
{
  public $ProductName;
  public $ProductCathegory;
  public $ProductPrice;
  
  public function SetPrice($price)
  {
    $this->ProductPrice=$price;
  }
}

$Item[0][0] = new Car();
$Item[0][0]->CarProducer = 'Ford';
$Item[0][0]->CarModel = 'Focus';
$Item[0][0]->CarPrice = 600000;
$Item[0][0]->SetColor('Red');

$Item[0][1] = new Car();
$Item[0][1]->CarProducer = 'Renault';
$Item[0][1]->CarModel = 'Logan';
$Item[0][1]->CarPrice = 500000;
$Item[0][1]->SetColor('Blue');

$Item[1][0] = new TV();
$Item[1][0]->TVProducer = 'LG';
$Item[1][0]->TVScreenSize = "32'";
$Item[1][0]->SetPrice(20000);

$Item[1][1] = new TV();
$Item[1][1]->TVProducer = 'Sony';
$Item[1][1]->TVScreenSize = "32'";
$Item[1][1]->SetPrice(30000);

$Item[2][0] = new Pen();
$Item[2][0]->PenProducer = 'Eric Crause';
$Item[2][0]->PenType = "Gel'";
$Item[2][0]->SetPrice(20);

$Item[2][1] = new Pen();
$Item[2][1]->PenProducer = 'Bic';
$Item[2][1]->PenType = "Ball'";
$Item[2][1]->SetPrice(30);

$Item[3][0] = new Duck();
$Item[3][0]->DuckType = 'Grey Duck';
$Item[3][0]->DuckMaxSize = "30-50cm'";
$Item[3][0]->SetArea('Europe');

$Item[3][1] = new Duck();
$Item[3][1]->DuckType = 'White Duck';
$Item[3][1]->DuckMaxSize = "50-70cm'";
$Item[3][1]->SetArea('Asia');

$Item[4][0] = new Product();
$Item[4][0]->ProductName = 'Шариковая ручка';
$Item[4][0]->ProductCathegory = "Канцтовары'";
$Item[4][0]->SetPrice(50);

$Item[4][1] = new Product();
$Item[4][1]->ProductName = 'Бачок пластиковый';
$Item[4][1]->ProductCathegory = "Хозтовары'";
$Item[4][1]->SetPrice(300);


echo 'Объекты класса "Car"<br><br>';

foreach ($Item[0] as $index => $unit)
{
  echo $Item[0][$index]->CarProducer.' ';
  echo $Item[0][$index]->CarModel.' ';
  echo $Item[0][$index]->CarColor.' - ';
  echo $Item[0][$index]->CarPrice.' руб.<br>';
}
echo '<br><br>';
echo 'Объекты класса "TV"<br><br>';

foreach ($Item[1] as $index => $unit)
{
  echo $Item[1][$index]->TVProducer.' ';
  echo $Item[1][$index]->TVScreenSize.' - ';
  echo $Item[1][$index]->TVPrice.' руб.<br>';
}
echo '<br><br>';
echo 'Объекты класса "Pen"<br><br>';

foreach ($Item[2] as $index => $unit)
{
  echo $Item[2][$index]->PenProducer.' ';
  echo '('.$Item[2][$index]->PenType.') - ';
  echo $Item[2][$index]->PenPrice.' руб.<br>';
}
echo '<br><br>';
echo 'Объекты класса "Duck"<br><br>';

foreach ($Item[3] as $index => $unit)
{
  echo $Item[3][$index]->DuckType.' ';
  echo '('.$Item[3][$index]->DuckMaxSize.') - ';
  echo $Item[3][$index]->DuckLiveArea.'<br>';
}
echo '<br><br>';
echo 'Объекты класса "Product"<br><br>';

foreach ($Item[4] as $index => $unit)
{
  echo $Item[4][$index]->ProductName.' ';
  echo '('.$Item[4][$index]->ProductCathegory.') - ';
  echo $Item[4][$index]->ProductPrice.' руб.<br>';
}

?>