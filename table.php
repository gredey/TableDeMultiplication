!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    		<title>Table de multipilication</title>
			<link type="css" href="bootstrap.css"/>
   			<script src="jquery.js"> </script>
		</head>
		<body>
			<h1>TABLE DE MULTIPLICATION</h1>
			<div class="row" style="border: 2px">
				<div class="col-xs-12" style="border: 2px">
					<label>Entrer la table de : </label> 
					<input type="text" class="form-control" id="chiffre" />
					<input type="button" class="" id="but" value="Afficher" />
				</div>
			</div>
		</body>
		<script> 
				$(document).ready(function(){

    				$('#but').on('click',function(){
        				var $chiffre = $('#but').val();
        				var $result;
        				for(var $i=0; $i<=10; $i++){
        					$result=$chiffre*$i;
        					alert($chiffre+"x"+$i+"="+$result);
        				}
    				});
     
				});
			</script>
	</html>