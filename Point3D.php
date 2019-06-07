<?php


class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        $array = ["x" => $this->x, "y" => $this->y, "z" => $this->z];
        return $array;
    }
    public function toString()
    {
        foreach ($this->getXYZ() as $index => $value) {
            echo $index, ": ", $value, " ";
        }
    }
}