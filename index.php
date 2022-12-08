<?php

	ob_start();

?><!DOCTYPE html>
<html>
<head>

	<?php $TITLE = 'Ellahouse'; ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	<title>Backslashcoding.com :: <?php echo $TITLE; ?></title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic">
	<style>
		* { padding: 0; margin: 0; }
		*, *:before, *:after { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
		a { text-decoration: none; -webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; outline: none !important; }
		html,body { min-height: 100%; }
		body { padding: 0; margin: 0; font-family: 'PT Sans', Arial, sans-serif; font-size: 18px; color: #fff; font-weight: 100;
			   background: #000; }
		h1 { line-height: 30px; font-size: 25px; margin: 0; font-weight: 400; background: #000; }
		h1 span { font-size: 20px; }
		ul { padding: 50px; float: left; margin: 0; }
		span,li { color: #fff; } 
		a { color: #fff; /*#9986DD;*/ text-decoration: none; font-weight: 100; }
		a:hover { color: #9986dd; }
		li { padding: 3px; list-style-type: square; }
		.done { font-size: 16px; color: #999; font-weight: normal; }
		.work { font-size: 20px; color: #f00; }
		.work:before { content: "unfinished: "; }
		.new { font-size: 20px; color: #d1ffd3; }
		.new:before { content: "new: "; }
		.old { color: #666; text-decoration: strike; }
		.old:before { content: "old: "; }
		h2 { color: #d1ffd3; font-size: 20px; }
		.not { list-style-type: none; }
		.inner { max-width: 1000px; padding: 0 20px; margin: 0 auto; }
		h1 .inner { padding: 40px 70px; }
	</style>

</head>
<body>

	<h1><div class="inner x"><?php echo $TITLE; ?></div></h1>
	
	<div class="inner x">
	<ul>
		<?php
			$work = array();
			$new  = array();
			$old = array();
			$done = array();
		
			$d = dir(".");
			while (false !== ($a = $d->read())) {
   				if($a != 'index.php' && substr($a,-3) == 'php' && substr($a,0,1) != '_') {
   					?><li class="x"><a <?php if(in_array($a,$old)) { ?>class="old"<?php } ?> 
   					<?php if(in_array($a,$new)) { ?>class="new"<?php } ?> 
   					<?php if(in_array($a,$done)) { ?>class="done"<?php } ?> 
   					<?php if(in_array($a,$work)) { ?>class="work"<?php } ?> 
   					href="<?php echo $a; ?>" target="_blank"><?php echo $a; ?></a></li><?php echo "\n";
   				}
			}
			$d->close();
		
		?>
		<!-- <li class="not x">&darr;</li>
		<li class="x"><a href="newfun.zip" target="_blank">Zip</a></li> -->
	</ul>
	</div>

</body>
</html><?php

	$x = ob_get_contents();
	$x = str_replace('.php','.html',$x);

	file_put_contents('index.html',$x);