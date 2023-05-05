<?php 
class Square extends Figure
{
    public $side;
    public function __construct($side)
    {
        parent::__construct($side);
        $this->side = $side;
    }
    public function finding_square()
    {
        return $this->side * $this->side;
    }
    public function finding_perimetr()
    {
        return 4 * $this->side;
    }
}
?>