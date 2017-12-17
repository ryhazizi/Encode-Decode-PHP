<?php

	require 'src/System.php';

	$Foo        = new Foo\Examples;

	$String     = "Fos";

	echo "encode dari ".$String." adalah ".$Foo->item_encode($String);

	echo "<br/><br/>";

	echo "decode dari ".$Foo->item_encode($String)." adalah ".$Foo->item_decode($String);