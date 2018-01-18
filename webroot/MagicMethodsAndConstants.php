<?php
///**
// * Created by PhpStorm.
// * User: nemus
// * Date: 1/18/18
// * Time: 1:02 PM
// */
//
//class Car {
//
//	private $model = "";
//
//	/**
//	 * Car constructor.
//	 *
//	 * @param $model
//	 */
//	public function __construct($model = null) {
//		if($model) {
//			$this -> model = $model;
//		}
//	}
//
//	public function getCarModel() {
//		/**
//		 * We use __CLASS__ when we want to know the name of the class.
//		 * In this case, __CLASS__ = Car.
//		 */
//		echo 'The <b>' . __CLASS__ .'</b> model is: ' . $this->model . '<br />';
//
//		/**
//		 * __LINE__ to get the line number in which the constant is used.
//		 */
//		echo 'The line number is: <b>' . __LINE__ .'</b>.<br />';
//
//		/**
//		 * __FILE__ to get the full path or the
//		 * filename in which the constant is used.
//		 */
//		echo 'The full path and name of the file is: <b>'. __FILE__ .'</b> <br />';
//
//		/**
//		 * __METHOD__ to get the name of the method
//		 * in which the constant is used.
//		 */
//		echo 'The name of the metod is: <b>' . __METHOD__ . '</b> <br />';
//	}
//}
//
///**
// * We pass the value of the variable
// * once we create the object
// */
//$car1 = new Car('Audi');
//
///**
// * Printing
// */
//
//echo $car1->getCarModel();
