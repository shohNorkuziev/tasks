<?php 
class Circle extends Figure
{
    static $pi=3.14;
    public function __construct($val)
    {
        parent ::__construct($val);
    }
    public function finding_square()
    {
        return self::$pi * ($this->val * $this->val);
    }
    public function finding_perimetr()
    {
        return 2 * self::$pi * $this->val;
    }
}
?>