<?php
class Worker {
  protected $values = array();

  public function __set($key,$value){
      $this->values[ $key ] = $value;
  }
  public function __get($key){
      return $this->values[ $key ];
    }
    
}

$worker = new Worker();
$worker->name = 'Иван';$worker->age = 25;$worker->salary = 1000;
echo $worker->name . ' ' . $worker->age . ' ' . $worker->salary;

$worker2 = new Worker();
$worker2->name = 'Вася';$worker2->age = 26;$worker2->salary = 2000;
echo ' ' . $worker2->name . ' ' . $worker2->age . ' ' . $worker2->salary;


?>