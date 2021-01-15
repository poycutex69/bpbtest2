<?php 

class Nums {
    public $numbers;

    function __construct() {
        $this->getRandomIntegers();
    }

    function getRandomIntegers(){
        for($x=0;$x<10;$x++){
            $this->numbers[] = rand(1,99);
        }
    }

    public function sum(){
        $random_items = array_rand($this->numbers, 2);
        
        $num1 = $this->numbers[$random_items[0]];
        $num2 = $this->numbers[$random_items[1]];

        return $num1 + $num2;
        // for checking
        //return [$num1, $num2,$num1 + $num2];
    }

    public function average(){
        $tot = 0;
        for($x=0;$x<10;$x++){
            $tot = $tot + $this->numbers[$x];
        }

        return $tot / 10;
    }

    public function sort($direction){
        $direction == 'ASC' ? sort($this->numbers) : rsort($this->numbers);
        return $this->numbers;
    }

}

class Numx extends Nums{
    public function sum(){
        $num1 = $this->numbers[0];
        $num2 = $this->numbers[9];

        return $num1 + $num2;
        // for checking
        //return [$num1, $num2,$num1 + $num2];
    }
}


$x = new Nums();
$numx = new Numx();

$vals = [
    'nums'  => $x->numbers,
    'sum1'  => $x->sum(),
    'avg'   => $x->average(),
    'sort1' => $x->sort('ASC'),
    'sort2' => $x->sort('DESC'),
    'nums2' => $numx->numbers,
    'sum2'  => $numx->sum()
];

var_dump($vals);


?>