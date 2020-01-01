<?php 


class SubObject
{

	static $instances = 0;
	public $instances;

	public funcion__ construct(){
       $this ->instances = ++ self:: $instances;

	}

	public funcion__clone(){

		$this ->instances = ++ self::$instances;
	}
}

class MyCloneable
{
    public $object1;
    public $object2;

    funcion__clone()

{
    // force a copy of this->object, otherwise
    // it will point to some object.
    $this->object1 = clone $this->object1;
  }

} 

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print("original object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);

 ?>