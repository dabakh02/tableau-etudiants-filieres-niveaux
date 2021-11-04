<?php
/*creer un tableau qui liste les niveaus et les filieres des etudiants et un liens etudiant qui ramene a un tableau d'etudiants

ajoutez un filtre niveau et filiere(option/select)


			/*foreach ($classe as $val) { ?> 
 		<tr> 
 			<?php for ($i = 0; $i < $val; $i++) { ?>
 				<?php if (is_array($val)) {
 					foreach ($val as $vals){?>
 						<td style="border: 1px solid black;"><?= $vals?></td>
 					<?php } ?>		
 				<?php }else{ ?>
 						<td style="border: 1px solid black;"><?= $val?></td>
 				<?php } ?>
 			<?php } ?> 
 		</tr> 
 	<?php } */


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=devide-with, initial-scale=1.0">

	<title>Liste des niveaux/filières</title>


	<style type="text/css">
		table,td,tr,th{
			border: 3px black;
		}
		body{
			font-family: Verdana;
			font-size: 1.5em;
		}
		thead{
			color: white; background-color: dodgerblue;
		}
		.tabhead{
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 10px;
			padding-right: 10px;
		}
		td{
			background-color: lightgrey;
			color: black;	
		}
		a{
			font-family: verdana;
			text-decoration: none;
			color: orangered;
		}
		a:hover{
			box-shadow: orangered 2px 2px 2px 2px;

		}
	</style>

</head>
<body>
	<?php 
	$classe =    
	[ 
		'niveau'=>[ 'L1','L2','L3','M1','M2'],
		'filière'=>['IAGE', 'GRLS', 'MAE', 'MOSIEF','CPD','ETSE'], 
		'etudiants'=>[
				0=>['nom'=>'BA','prenom'=>'Mouhammed','age'=>19,'genre'=>'M'],
				1=>['nom'=>'DIOP','prenom'=>'Mouhammad','age'=>19,'genre'=>'M'],
				2=>['nom'=>'KHOULE','prenom'=>'Modou','age'=>19,'genre'=>'M'],
				3=>['nom'=>'AMOUZOU','prenom'=>'Ibrahima','age'=>19,'genre'=>'M'],
				4=>['nom'=>'NIANG','prenom'=>'Fatima','age'=>19,'genre'=>'M'],
				5=>['nom'=>'NDIAYE','prnom'=>'Aminata','age'=>19,'genre'=>'M'],
				6=>['nom'=>'SECK','prenom'=>'Seyda','age'=>19,'genre'=>'M'],
				7=>['nom'=>'DIAGNE','prenom'=>'Rihanna','age'=>19,'genre'=>'M'],
				8=>['nom'=>'DICKO','prenom'=>'Maisha','age'=>19,'genre'=>'M'],
				9=>['nom'=>'KINGS','prenom'=>'Aissatou','age'=>19,'genre'=>'M'],
				10=>['nom'=>'MILLER','prenom'=>'Nafissatou','age'=>19,'genre'=>'M'],
				11=>['nom'=>'SMOKE','prenom'=>'Pierre','age'=>19,'genre'=>'M'],
				12=>['nom'=>'LEBLANC','prenom'=>'Antoine','age'=>19,'genre'=>'M'],
				13=>['nom'=>'LAME','prnom'=>'Jean','age'=>19,'genre'=>'M'],
				14=>['nom'=>'MESSI','prenom'=>'Gheffrey','age'=>19,'genre'=>'M'],
				15=>['nom'=>'AVEIRO','prenom'=>'Prince','age'=>19,'genre'=>'M'],
				16=>['nom'=>'DA SYLVA','prenom'=>'Ronald','age'=>19,'genre'=>'M'],
				17=>['nom'=>'MBACKE','prenom'=>'Fred','age'=>19,'genre'=>'M'],
				18=>['nom'=>'DIAKHATE','prenom'=>'Mamadou','age'=>19,'genre'=>'M'],
				19=>['nom'=>'SAKHO','prenom'=>'Sadio','age'=>19,'genre'=>'M'],
				20=>['nom'=>'EKOME','prenom'=>'Cheikh ahmadou','age'=>19,'genre'=>'M'],
				21=>['nom'=>'MAHMOUD','prenom'=>'Mamy','age'=>19,'genre'=>'M']
				
				]
	];

 ?>
<form method="GET" action="etudiants.php">
<table>
	<thead> 
		<tr >
			<th>Niveau</th>
			<th>Filière</th>
			<th>Option</th>
		</tr>
 	</thead> 

 	<tbody>
 		<tr >
			<td>
				<?php foreach ($classe as $val) {
 				echo $classe[0];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> 
			</td>
			<td>
				<?php foreach ($classe as $val) {
 				echo $classe[1];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?>
			</td>
			<td>
				<?php foreach ($classe as $val) {
 				if ($classe[2]) {?>
 					<a href="etudiants.php">Etudiant</a><?}
 			}?>
				
			</td>
		</tr>
 	</tbody>
 	
	<tfoot>
		<tr>
			<td><label for="niveau">Niveau</label></td>
			<td>
				<select id="niveau" name="niveau">
					<option> </option>
					<option name="l1">L1</option>
					<option name="l2">L2</option>
					<option name="l3">L3</option>
					<option name="l4">M1</option>
					<option name="l5">M2</option>

				</select>
			</td>
			<td><label for="filiere">Filiere</label></td>
			<td>
				<select id="filiere" name="filiere">
					<option> </option>
					<option name="mae">MAE</option>
					<option name="glrs">GLRS</option>
					<option name="etse">ETSE</option>
					<option name="iage">IAGE</option>
					<option name="cpd">CPD</option>
					<option name="mosief">MOSIEF</option>

				</select>
			</td>
		</tr>
	</tfoot>
 	
</table>
</form>
</body>
</html> 