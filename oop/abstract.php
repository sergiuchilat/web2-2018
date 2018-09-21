<?
abstract class Animal{
	public function move(){
		return "{$this->name} se misca {$this->moveType}";
	}
}


class AnimalTerestru extends Animal{
	protected $name = " Animal Terestru";
	protected $moveType = 'mergind';
}


class AnimalActavic extends Animal{
	protected $name = " Animal Acvatic";
	protected $moveType = 'innotind';
}


$animalTerestru = new AnimalTerestru();
echo $animalTerestru->move();


$animalActavic = new AnimalActavic();
echo $animalActavic->move();



