<?php
$value=$_POST['value'];
switch($value)
{
	case 1:
		echo "The entered value as one";
		break;
	case 2:
		echo "The entered value as two";
		break;
	case 3:
		echo "The entered value as three";
		break;
	case 4:
		echo "The entered value as four";
		break;
	default:
		echo "Value as incorrect";

}
?>