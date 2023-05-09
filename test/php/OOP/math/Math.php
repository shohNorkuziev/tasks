<?php
class Math {
    public static function add($a, $b) {
      return $a + $b;
    }
  
    public static function sub($a, $b) {
      return $a - $b;
    }
  
    public static function mul($a, $b) {
      return $a * $b;
    }
  
    public static function div($a, $b) {
      if ($b == 0) {
        return false;
      }
      return $a / $b;
    }
  }?>