<?php
//$date = new DateTime();
//$date = new DateTime('1999-11-02 05:27:42');
//echo $date->format('Y-m-d H:i:s');
//echo $date->format('Y');
//echo $date->format('m');
//echo $date->format('d');
//echo $date->format('D');
//echo $date->format('H');
//echo $date->format('i');
//echo $date->format('s');
//echo $date->format(DateTime::ATOM);
//echo $date->format(DateTime::COOKIE);
//echo $date->format(DateTime::W3C);

//$date = new DateTime();
//echo $date->modify('-1 years')->format('Y-m-d H:i:s');

//$date = new DateTime();
//echo $date->modify('1 years')->format('Y-m-d H:i:s');

$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d H:i:s');

$date = new DateTime();
echo $date->modify('1 months')->format('Y-m-d H:i:s');