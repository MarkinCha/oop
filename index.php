<?php
	class Math{
		public $v;
		public $vi;
		public $a;
		public $s;
		public $t;

		function mars($v,$t,$a){
			$s=$v*$t+0.5*$a*$t*$t;
			echo $s."<br>";
		}

		function __destruct(){
			echo "yooooooooooooo";
		}

	}

	$physics = new Math;
	$physics ->mars(10,10,0);
	$physics ->mars(0,5,10);
	$physics ->mars(10,2,-5);