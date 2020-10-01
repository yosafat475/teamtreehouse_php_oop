<?php

class Fish
{
    public $common_name;
    public $flavor;
    public $record_weight;
    
    public function __construct($name,$flavor,$record)
    {
        $this->common_name = $name;
        $this->flavor = $flavor;
        $this->record_weight = $record;
    }
    
    public function getInfo()
    {
        return "A {$this->common_name} is an {$this->flavor} flavored fish. The world record weight is {$this->record_weight}.";
    }
    
}
// echo (new Fish())->getInfo();
$bass = new fish("largemounth bass","excellent","22 pounds 5 once");
echo $bass->getInfo();

echo "\n";



//  Terbaru tanggal 1 september


function name($name)
{
    echo $name;
}

name("name siswa");

// ("Nama Siswa")

class student
{
    
    // propertis
    
    public $name;
    
    private $address;
    
    private $allStudent=[];
    
    // menthod
    
       
    public function name()
    {
        echo "student name";
    }
    
    public static function names()
    {
        echo "\nstatic menthod\n";
    }
    
    public function setAddress($address)
    {
        $this->address=$address;
    }
    
    // Getters
    
    public function getaddress()
    {
        return $this->address;
    }
}

// instantiated class

$student=new student();

// invoke menthod

$student->name();

// invoke static menthod

student::names();

// invoke getters and gettress

$student->setAddress("jl.gajah Mada no 123 cipondoh,Tangerang");

echo $student->getAddress().PHP_EOL;


