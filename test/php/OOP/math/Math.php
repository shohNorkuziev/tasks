<?
class Math
{
    public $a;
    public $b;
    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    public function add()
    {
        if(is_numeric($this->a) && is_numeric($this->b)) {
            return ($this->a)+($this->b);
        } else {
            return false;
        }
    }
    public function sub()
    {
        if(is_numeric($this->a) && is_numeric($this->b)) {
            return ($this->a)-($this->b);
        } else {
            return false;
        }
    }
    public function div()
    {
        if(is_numeric($this->a) && is_numeric($this->b) && $this->b != 0) {
            return ($this->a)/($this->b);
        } else {
            return false;
        }
    }
    public function mul()
    {
        if(is_numeric($this->a) && is_numeric($this->b)) {
            return ($this->a)*($this->b);
        } else {
            return false;
        }
    }
}