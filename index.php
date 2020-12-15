<!DOCTYPE html>
<html>
<head>
<title>Excel Export</title>
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/chosen.min.css">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>

	<!--Using Pivot to make the excel-->
	<div class="jumbotron text-center">
		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8 order-md-1">
				<h4 class="mb-3">Filter Excel</h4>
				<form class="needs-validation" method="post" action="">
				
					<div class="row">					
						
						<div class="col-md-12 mb-6">
							<label for="state">City Name</label>
							<br>
							<br>
							<select class="custom-select w-100" id="select_search" name="city_name" style="display:none;">
								<option value="">Choose...</option>
								<option value="ABOHAR"> ABOHAR</option>
								<option value="AGARTALA"> AGARTALA</option>
								<option value="AGRA"> AGRA</option>
								<option value="AHEMDABAD"> AHEMDABAD</option>
								<option value="AJMER"> AJMER</option>
								<option value="ALLAHABAD"> ALLAHABAD</option>
								<option value="ALWAR"> ALWAR</option>
								<option value="AMBALA"> AMBALA</option>
								<option value="NewAmritsar"> NewAmritsar</option>
								<option value="LATUR"> LATUR</option>
								<option value="BALTANA"> BALTANA</option>
								<option value="BANGLORE"> BANGLORE</option>
								<option value="BARDHAMAN"> BARDHAMAN</option>
								<option value="BAREILLY"> BAREILLY</option>
								<option value="BARMER"> BARMER</option>
								<option value="BATALA"> BATALA</option>
								<option value="BEGUSARAI"> BEGUSARAI</option>
								<option value="BETTIA"> BETTIA</option>
								<option value="BHAGALPUR"> BHAGALPUR</option>
								<option value="BHILWARA"> BHILWARA</option>
								<option value="BHIWANI"> BHIWANI</option>
								<option value="BHOJPUR"> BHOJPUR</option>
								<option value="BHOPAL"> BHOPAL</option>
								<option value="BHUBANESHWAR"> BHUBANESHWAR</option>
								<option value="BIKANER"> BIKANER</option>
								<option value="NEWBILASPUR"> NEWBILASPUR</option>
								<option value="BOKARO"> BOKARO</option>
								<option value="NEWBATHINDA2"> NEWBATHINDA2</option>
								<option value="BULANDSHAHAR"> BULANDSHAHAR</option>
								<option value="BULDHANA"> BULDHANA</option>
								<option value="CHANDERPUR"> CHANDERPUR</option>
								<option value="CHANDIGARH"> CHANDIGARH</option>
								<option value="Cuttack"> Cuttack</option>
								<option value="DEHRADOON"> DEHRADOON</option>
								<option value="DERABASSI"> DERABASSI</option>
								<option value="DHANBAD"> DHANBAD</option>
								<option value="DHARAMSHALA"> DHARAMSHALA</option>
								<option value="DWARKA"> DWARKA</option>
								<option value="FAIZABAD"> FAIZABAD</option>
								<option value="FARIDABAD"> FARIDABAD</option>
								<option value="FATEHGAR"> FATEHGAR</option>
								<option value="NEWFIROZPUR"> NEWFIROZPUR</option>
								<option value="SRIGANGANAGAR"> SRIGANGANAGAR</option>
								<option value="GAYA"> GAYA</option>
								<option value="GAJIPUR"> GAJIPUR</option>
								<option value="GHAZIABAD"> GHAZIABAD</option>
								<option value="GOA"> GOA</option>
								<option value="GOPALGANJ"> GOPALGANJ</option>
								<option value="GORAKHPUR"> GORAKHPUR</option>
								<option value="NEWGURDASPUR"> NEWGURDASPUR</option>
								<option value="NEWGURUGRAM"> NEWGURUGRAM</option>
								<option value="GUWAHATI"> GUWAHATI</option>
								<option value="GWALIOR"> GWALIOR</option>
								<option value="HALDWANI"> HALDWANI</option>
								<option value="HAMIRPUR"> HAMIRPUR</option>
								<option value="HANUMAANGARH"> HANUMAANGARH</option>
								<option value="HARIDWAR"> HARIDWAR</option>
								<option value="HAUZKHAS"> HAUZKHAS</option>
								<option value="HAZARIBAG"> HAZARIBAG</option>
								<option value="NEWHISSAR"> NEWHISSAR</option>
								<option value="NEWHOSHIARPUR"> NEWHOSHIARPUR</option>
								<option value="HYDERABAD"> HYDERABAD</option>
								<option value="IMPHAL"> IMPHAL</option>
								<option value="NEWINDORE"> NEWINDORE</option>
								<option value="NEWJAIPUR"> NEWJAIPUR</option>
								<option value="Jaisalmer"> Jaisalmer</option>
								<option value="NEWJALANDHAR"> NEWJALANDHAR</option>
								<option value="JALGAON"> JALGAON</option>
								<option value="JALORE"> JALORE</option>
								<option value="JAMMU"> JAMMU</option>
								<option value="JAMSHEDPUR"> JAMSHEDPUR</option>
								<option value="NEWJHANSI"> NEWJHANSI</option>
								<option value="JIND"> JIND</option>
								<option value="JODHPUR"> JODHPUR</option>
								<option value="JORHAT"> JORHAT</option>
								<option value="KANGRA"> KANGRA</option>
								<option value="KANPUR"> KANPUR</option>
								<option value="NEWKAPURTHALA"> NEWKAPURTHALA</option>
								<option value="KARNAL"> KARNAL</option>
								<option value="NEWKOLKATA"> NEWKOLKATA</option>
								<option value="KOTA"> KOTA</option>
								<option value="KULLU"> KULLU</option>
								<option value="KURUKSHETRA"> KURUKSHETRA</option>
								<option value="LAKHIMPURKHIRI"> LAKHIMPURKHIRI</option>
								<option value="LALITPUR"> LALITPUR</option>
								<option value="LUXMINAGAR"> LUXMINAGAR</option>
								<option value="NEWLUCKNOW.CLINIC">NEWLUCKNOW.CLINIC</option>
								<option value="LUDHIANA"> LUDHIANA</option>
								<option value="MADHUBANI"> MADHUBANI</option>
								<option value="MANSA"> MANSA</option>
								<option value="NEWMATHURA"> NEWMATHURA</option>
								<option value="MEERUT"> MEERUT</option>
								<option value="MOGA"> MOGA</option>
								<option value="NEWMOHALI"> NEWMOHALI</option>
								<option value="MORADABAD"> MORADABAD</option>
								<option value="MUZAFFERPUR"> MUZAFFERPUR</option>
								<option value="MUZAFFARNAGAR"> MUZAFFARNAGAR</option>
								<option value="NEWMUKTSAR"> NEWMUKTSAR</option>
								<option value="MULTANNAGAR"> MULTANNAGAR</option>
								<option value="ANDHERI"> ANDHERI</option>
								<option value="THANE"> THANE</option>
								<option value="NAGOUR"> NAGOUR</option>
								<option value="NAGPUR"> NAGPUR</option>
								<option value="NASHIK"> NASHIK</option>
								<option value="NAWANSHAHAR"> NAWANSHAHAR</option>
								<option value="newAhmeddabad"> newAhmeddabad</option>
								<option value="NEWLUDHIANA"> NEWLUDHIANA</option>
								<option value="NFCDELHI"> NFCDELHI</option>
								<option value="NEWNOIDA"> NEWNOIDA</option>
								<option value="NORTHKOLKATA"> NORTHKOLKATA</option>
								<option value="NORTHLAKHIMPUR"> NORTHLAKHIMPUR</option>
								<option value="Paharganj"> Paharganj</option>
								<option value="PALI"> PALI</option>
								<option value="NEWPANCHKULA"> NEWPANCHKULA</option>
								<option value="PANIPAT"> PANIPAT</option>
								<option value="PATHANKOT"> PATHANKOT</option>
								<option value="PATIALA"> PATIALA</option>
								<option value="newpatna"> newpatna</option>
								<option value="PILIBHIT"> PILIBHIT</option>
								<option value="pritampur"> pritampur</option>
								<option value="PUNE"> PUNE</option>
								<option value="PURNIA"> PURNIA</option>
								<option value="RAIPUR"> RAIPUR</option>
								<option value="RAJENDRANAGAR"> RAJENDRANAGAR</option>
								<option value="RAJKOT"> RAJKOT</option>
								<option value="RAJNANDGAON"> RAJNANDGAON</option>
								<option value="RAMGARH"> RAMGARH</option>
								<option value="RANCHI"> RANCHI</option>
								<option value="RAXAUL"> RAXAUL</option>
								<option value="REWARI"> REWARI</option>
								<option value="RISHIKESH"> RISHIKESH</option>
								<option value="ROHINI"> ROHINI</option>
								<option value="NEWROHTAK"> NEWROHTAK</option>
								<option value="NEWROPAR"> NEWROPAR</option>
								<option value="RUDRAPUR"> RUDRAPUR</option>
								<option value="NEWSAHARANPUR"> NEWSAHARANPUR</option>
								<option value="SANGRUR"> SANGRUR</option>
								<option value="SASARAM"> SASARAM</option>
								<option value="SHASTRINAGAR"> SHASTRINAGAR</option>
								<option value="SHIMLA"> SHIMLA</option>
								<option value="SILIGURI"> SILIGURI</option>
								<option value="SIROHI"> SIROHI</option>
								<option value="SIRSA"> SIRSA</option>
								<option value="SOHANA"> SOHANA</option>
								<option value="NEWSOLAN"> NEWSOLAN</option>
								<option value="SOLAPUR"> SOLAPUR</option>
								<option value="SONIPAT"> SONIPAT</option>
								<option value="SUNDERNAGAR"> SUNDERNAGAR</option>
								<option value="NEWSURAT"> NEWSURAT</option>
								<option value="TARNTARAN"> TARNTARAN</option>
								<option value="UDAIPUR"> UDAIPUR</option>
								<option value="UJJAIN"> UJJAIN</option>
								<option value="UNA"> UNA</option>
								<option value="NEWVADODARA"> NEWVADODARA</option>
								<option value="VAISHALI"> VAISHALI</option>
								<option value="BANARAS"> BANARAS</option>
								<option value="YAMUNANAGAR"> YAMUNANAGAR</option>
							</select>
						
						</div>					 
					</div>
					
					<hr class="mb-4">
					<div class="row">
						<div class="col-md-3 mb-3">
							<button class="btn btn-primary btn-lg btn-block exportSubmit" type="submit">Submit</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/chosen.jquery.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script>
	jQuery(document).ready(function() {
		jQuery('#select_search').chosen( { width: '180px' } );
	});
</script>
</body>
</html>