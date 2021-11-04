<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=devide-with, initial-scale=1.0">

	<title>Liste des etudiants</title>


	<style type="text/css">
		table,td,tr,th{
			border: 3px solid transparent;
		}
		body{
			font-family: Verdana;
			font-size: 1.5em;
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
<table>
		<thead style="color: white; background-color: dodgerblue;">
				<tr>
					<th class="tabhead">Nom</th>
					<th class="tabhead">Prenom</th>
					<th class="tabhead">Login</th>
					<th class="tabhead">Email</th>
					<th class="tabhead">Filière</th>
					<th class="tabhead">Niveau</th>
				</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php foreach ($classe as $val) {
 				echo $classe[2];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> </td>
				<td><?php foreach ($classe as $val) {
 				echo $classe[2];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> </td>
				<td><?php foreach ($classe as $val) {
 				echo $classe[2];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> </td>
				<td><?php foreach ($classe as $val) {
 				echo $classe[2];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> </td>
				<td><?php foreach ($classe as $val) {
 				echo $classe[2];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> </td>
				<td><?php foreach ($classe as $val) {
 				echo $classe[2];
 				if (is_array($val)) {
 					foreach ($val as $value) {
 						echo $value;
 					}
 				}
 			}?> </td>
			</tr>

		</tbody>
	</table>
</body>
</html>