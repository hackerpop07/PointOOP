<?php
include "Point2D.php";
include "Point3D.php";
$point2d = new Point2D(3, 4);
$point3d = new Point3D(3, 4, 8);
$point2d->toString();
echo "<br>";
$point3d->toString();
