<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire LFI</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
  </head>
  <body>

  
  
  <form action="formulaire.php" method="post">
  <div class="container">
<h1 align="center">FORMULAIRE SORTIE SCOLAIRE</h1>  
<div class="container">
  <div class="form-horizontal" role="form">
	<div>Je soussigné(e) M</div>
		<textarea class="form-control" rows="1" name="nom_parent"></textarea>
	<div>Autorise mon enfant:</div>
		<textarea class="form-control" rows="1" name="Nom eleve"></textarea>
	<div class="form-inline">de la classe de 
<select class="form-control">
  <option>6A</option>
  <option>6B</option>
  <option>6C</option>
  <option>6D</option>
  <option>6E</option>
  <option>6F</option>
  <option>5A</option>
  <option>5B</option>
  <option>5C</option>
  <option>5D</option>
  <option>5E</option>
  <option>5F</option>
  <option>4A</option>
  <option>4B</option>
  <option>4C</option>
  <option>4D</option>
  <option>4E</option>
  <option>4F</option>
  <option>3A</option>
  <option>3B</option>
  <option>3C</option>
  <option>3D</option>
  <option>3E</option>
  <option>3F</option>
  <option>2A</option>
  <option>2B</option>
  <option>2C</option>
  <option>2D</option>
  <option>2E</option>
  <option>2F</option>
  <option>1S1</option>
  <option>1S2</option>
  <option>1S3</option>
  <option>1ES1</option>
  <option>1ES2</option>
  <option>1L</option>
  <option>TS1</option>
  <option>TS2</option>
  <option>TS3</option>
  <option>TES1</option>
  <option>TES2</option>
  <option>TL</option>
  </select>
 </select>
	</div>
	<div> J'autorise mon enfant à rentrer par ses propres moyens: </div>
	<div class="btn-group btn-group-justified" role="group" aria-label="..." >
										OUI</br>
         <div class="col-lg-6">
                          <input type="checkbox" aria-label="..." name="Autorisation rentrer propres moyens OUI">
         </div><!-- /.col-lg-6 --></br>
										NON</br>
         <div class="col-lg-6">
                           <input type="checkbox" aria-label="..." name="Autorisation rentrer propres moyens NON">
         </div><!-- /.col-lg-6 -->

	</div>
</div>
	<div>Nom de l'organisateur</div>
		<textarea class="form-control" rows="1" name="Nom organisateur"></textarea>
	<div>Prenom de l'organisateur</div>
		<textarea class="form-control" rows="1" name="Prenom organisateur"></textarea>
	<div>Type de sortie</div>
	<textarea class="form-control" rows="1" name="Lieu"></textarea>
	<div>Lieu</div>
		<textarea class="form-control" rows="1" name="Lieu"></textarea>
  <div>Date et heure:</div>
  <select class="form-control" name="Jour">
  <option>Jour</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
</select>
	<select class="form-control" name="Mois">
	<option>Mois</option>
  <option>Janvier</option>
  <option>Fevrier</option>
  <option>Mars</option>
  <option>Avril</option>
  <option>Mai</option>
  <option>Juin</option>
  <option>Juillet</option>
  <option>Aout</option>
  <option>Septembre</option>
  <option>Octobre</option>
  <option>Novembre</option>
  <option>Decembre</option>
  </select>
   <select class="form-control" name="Année">
	<option>Année</option>
	<option>2015</option>
	<option>2016</option>
	<option>2017</option>
	<option>2018</option>
	<option>2019</option>
	<option>2020</option>
	<option>2021</option>
	<option>2022</option>
	<option>2023</option>
	<option>2024</option>
	<option>2025</option>
 </select>
	 <div></br></div>
	<div class="form-inline"> de <textarea class="form-control" rows="1" name="Heure debut"></textarea>
	 à <textarea class="form-control" rows="1" name="Heure fin"></textarea>
	 </div>
  <div>Moyen de transport utilisé</div>
		<textarea class="form-control" rows="1" name="Transport"></textarea>
	<div>Autorisation parentale à rendre avant le:</div>
		<div class="dropdown">
  <select class="form-control" name="Jour a rendre">
  <option>Jour</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15</option>
  <option>16</option>
  <option>17</option>
  <option>18</option>
  <option>19</option>
  <option>20</option>
  <option>21</option>
  <option>22</option>
  <option>23</option>
  <option>24</option>
  <option>25</option>
  <option>26</option>
  <option>27</option>
  <option>28</option>
  <option>29</option>
  <option>30</option>
  <option>31</option>
</select>
	<select class="form-control" name="Mois a rendre">
	<option>Mois</option>
  <option>Janvier</option>
  <option>Fevrier</option>
  <option>Mars</option>
  <option>Avril</option>
  <option>Mai</option>
  <option>Juin</option>
  <option>Juillet</option>
  <option>Aout</option>
  <option>Septembre</option>
  <option>Octobre</option>
  <option>Novembre</option>
  <option>Decembre</option>
  </select>
   <select class="form-control" name="Année a rendre">
	<option>Année</option>
	<option>2015</option>
	<option>2016</option>
	<option>2017</option>
	<option>2018</option>
	<option>2019</option>
	<option>2020</option>
	<option>2021</option>
	<option>2022</option>
	<option>2023</option>
	<option>2024</option>
	<option>2025</option>
 </select>
 <input type="submit">
	</form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </body>
</html>
