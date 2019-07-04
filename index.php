<?php
include "Point2D.php";
include "Point3D.php";
$point2D = new Point2D(2,4);
$point3D = new Point3D(2,4,7);
$point2D->toString();
echo "<br>";
$point3D->toString();