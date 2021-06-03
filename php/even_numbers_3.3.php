<?php
class Work {
    public
        $Numbers = array();

      function ShowEvenNumbers(){
        print "Четные элементы массива ";
        for ($i = 0; $i <= count($this->Numbers); $i++) {
            if ($this->Numbers[$i] % 2 == 0) {
                print ' ' . $this->Numbers[$i] . ' ';
              }
        }
      }
  }
$work = new Work();
$work->Numbers=[10,11,12,13,14,15,16,17,18,19];
$work->ShowEvenNumbers();
?>