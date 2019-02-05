<?php
$tabcontact=  array(
					'Prenom'=>'saliou',
					   'Nom'=>'seck',
					   'Tel'=>'772412769',
					   'email'=>'saliouseck2009@gmail.com',
					   'carte etudiant'=>'20170856M',
					   'Profession'=>'ETUDIANT');
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="down.css">
	</head>
	<body>
		
		<table class="container">
			
		<tr>
			
			<td colspan="2"><a href="newG.png"><img src="tn_newG.png" title="Cliquez pour agrandir" /></a></td>
			</div>		
		</tr>
			
		<tbody>
			<?php foreach ($tabcontact as $key => $value): ?>
				<tr>
					<td><?php echo ($key!='Tel'?$key:'Téléphone');?></td>
					<td><?php echo $value;?></td>	
				</tr>
			<?php endforeach ?>
		</tbody>




	</table>

	</body>
	</html>	

	