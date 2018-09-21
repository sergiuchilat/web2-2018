<?

class A{
	public $x = 1;	
	protected $y = 2;
	private $z = 3;

	public function getX(){
		return $this->x;
	}

	public function getY(){
		return $this->y;
	}
	public function getZ(){
		return $this->z;
	}
}

class B extends A{
	protected $y = '2b';
	

	public function getZ(){
		return $this->z;
	}
}


$objectA = new A();

var_dump($objectA);

echo '<hr/>x = ' . $objectA->x;
echo '<hr/>y = ' . $objectA->getX();

//echo '<hr/>y = ' . $objectA->y;
echo '<hr/>y = ' . $objectA->getY();

//echo '<hr/>z = ' . $objectA->z;
echo '<hr/>z = ' . $objectA->getZ();

echo '<hr>';
$objectB = new B();

var_dump($objectB);

echo '<hr/>x = ' . $objectB->x;
echo '<hr/>x = ' . $objectB->getX();

//echo '<hr/>y = ' . $objectB->y;
echo '<hr/>y = ' . $objectB->getY();

//echo '<hr/>z = ' . $objectB->z;
echo '<hr/>z = ' . $objectB->getZ();