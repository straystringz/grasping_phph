<?php

$guessNum = 15;

if($guessNum === 15)
{
	echo "You guessed right" . PHP_EOL;
}

elseif($guessNum < 15){
	echo "guess is less than guessNum" . PHP_EOL;
}
else{
	echo "You're aiming too high" . PHP_EOL;
}
