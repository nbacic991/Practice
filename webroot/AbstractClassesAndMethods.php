<?php
/**
 * Created by PhpStorm.
 * User: nemus
 * Date: 1/18/18
 * Time: 1:32 PM
 */

/**
 * Creating abstratc
 * Class Car
 */
abstract class Car {

	/**
	 * Defining @var $tankVolume
	 */
	protected $tankVolume;

	/**
	 * Public function
	 * @param $volume
	 */
	public function setTankVolume($volume){
		$this->tankVolume = $volume;
	}

	/**
	 * Public abstract function
	 * @return mixed
	 */
	public abstract function calcNumMilesOnFullTank();

}

/**
 * Creating
 * Class Honda
 */
class Honda extends Car {

	public  function calcNumMilesOnFullTank() {
		// TODO: Implement calcNumMilesOnFullTank() method.
		$miles = $this -> tankVolume*30;
		return $miles;
	}
}

/**
 * Creating
 * Class Toyota
 */
class Toyota extends Car {
	public  function calcNumMilesOnFullTank() {
		// TODO: Implement calcNumMilesOnFullTank() method.
		return $miles = $this->tankVolume*33;
	}

	public function getColor() {
		return 'beige';
	}
}

/**
 * Printing
 */
$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank() . '<br />';
echo $toyota1 -> getColor();