<?php

	$bin_string = file_get_contents("1.bmp");
	$hexcode = bin2hex($bin_string);
		print '<h1>0k.</h1>';	
?>

	<center>
		

	ASSINATURA: <?php echo substr($hexcode, 0, 4); ?>
	</br>
	TAMANHO ARQUIVO: <?php echo substr($hexcode, 4, 8); ?>
	</br>
	RESERVADO: <?php echo substr($hexcode, 12, 8);
	
	
	?>
	</br>
	</br>

	<textarea name='hexcode' cols='180' rows='60'>
				<?=strtoupper(trim($hexcode))?>
			</textarea>
			<br />

		
		
		
			
		
	</center>
