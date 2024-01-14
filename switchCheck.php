<?php

$role = 'HR';
$message = '';

switch($role){
	default:
		$message = 'Restricted Access';
		break;
	case 'tech_lead':
		$message = 'Welcome chief';
		break;
	case 'HR':
		$message = 'Mama welcome';
		break;
	case 'editor':
		$message = 'Welcome! You have some pending articles to edit';
		break;
	case 'author':
		$message = 'Welcome! Do you want to publish the draft article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;	
}

print_r($message . PHP_EOL);
