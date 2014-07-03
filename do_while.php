<?php

$test = 0;
do 
{
	echo "$test\n";
	$test++;
	$test++; 
} 
while ($test <= 100);

	echo PHP_EOL;


$test = 100;
do 
{
	echo "$test\n";
	$test -= 5;
	
} 
while ($test >= -10);

	echo PHP_EOL;

$test = 2;
do 
{
	echo "$test\n";
	$test *= $test;
	
} while ($test <= 1000000);