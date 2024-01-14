<?php
function dd($data)
{
	'<pre>';
	var_dump($data);
	'</pre>';
	die();
}
?>
<?php
$message = 'Dump and die example';
dd($message);
