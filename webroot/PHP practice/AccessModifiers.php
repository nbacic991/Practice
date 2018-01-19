<?php
///**
// * Created by PhpStorm.
// * User: nemus
// * Date: 1/18/18
// * Time: 12:35 PM
// */
//
///**
// * Creating
// * Class Car
// */
//class Car {
//
//	/**
//	 * Public methods and properties.
//	 */
////	public $model;
//
//	/**
//	 * Private properties
//	 * The private access modifier denies access to the method
//	 * from outside the class’s scope
//	 */
//	private $model;
//
//	/**
//	 * The public access modifier allows the access to the method
//	 * from outside the class
//	 */
//
//	public function setModel($model) {
//		$this->model = $model;
//	}
//	/**
//	 * Getting the car model
//	 */
//	public function getModel() {
//		return "This car model is: " . $this->model;
//	}
//}
//
///**
// * Creating object from Car class
// */
//$mercedes = new Car();
//
///**
// * Accessing property from outside of the class
// *
// * When the property is private we can't access it.
// * We are getting an error thrown:
// * -> Fatal error: Cannot access private property Car::$model
// */
//$mercedes -> setModel('Mercedes');
//
///**
// * Accessing method getModel from outside of the class
// */
//echo $mercedes->getModel();