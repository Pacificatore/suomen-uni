<html>
<head>
<title>Suomen uni 3</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body {
	background-color: #80A7D2;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: #323259;
	font-size: 14px;
	line-height: 18px;
	background-image: url(Aurore.jpg);
}

h1,h2,h3,h4,h5,h6 {
font-weight: bold;
clear: both;
color:#224274;
}

#content h1, h2, h3, h4, h5, h6 {
color: #224274;
margin: 0 0 20px 0;
line-height: 1.5em;
}

body,td,th {
	color: #000000;
}
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (Suomen uni 3.psd) -->
<table width="801" height="1001" border="0" align="center" cellpadding="0" cellspacing="0" id="Tableau_01">
	<tr>
		<td colspan="12">
			<img src="images/Suomen-uni-3_01.png" width="800" height="31" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2">
			<img src="images/Suomen-uni-3_02.png" width="248" height="165" alt=""></td>
		<td colspan="4">
			<img src="images/Suomen-uni-3_03.png" width="360" height="52" alt=""></td>
		<td colspan="4" rowspan="2">
			<img src="images/Suomen-uni-3_04.png" width="192" height="165" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Suomen-uni-3_05.png" width="360" height="113" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="113" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="3">
			<img src="images/Suomen-uni-3_06.png" width="139" height="617" alt=""></td>
		<td colspan="2">
			<img src="images/Suomen-uni-3_07.png" width="125" height="23" alt=""></td>
		<td>
			<img src="images/Suomen-uni-3_08.png" width="127" height="23" alt=""></td>
		<td>
			<img src="images/Suomen-uni-3_09.png" width="132" height="23" alt=""></td>
		<td colspan="2">
			<img src="images/Suomen-uni-3_10.png" width="134" height="23" alt=""></td>
		<td colspan="2"><a href="inscription.php"><img src="images/Suomen-uni-3_11.png" width="137" height="23" alt=""></a></td>
		<td rowspan="8">
			<img src="images/Suomen-uni-3_12.png" width="6" height="804" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="images/Suomen-uni-3_13.png" width="655" height="34" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="34" alt=""></td>
	</tr>
	<tr>
    
    
    
    
    
	  <td colspan="7" rowspan="4" align="left" valign="top" background="images/Suomen-uni-3_14.png"> <div style="width:627; height:687; overflow: auto;">
	  	
	<?php
include 'connect.php';

echo '<form id="form_name" enctype="multipart/form-data" method="post" action="conf_form.php">
		<label for="name">Pseudo </label> <input type="text" id="name" name="name" value="" />
		<label for="mail"> E-mail</label> <input type="text" id="mail" name="mail" value="" />
		<label for="pass"> Mot de passe</label> <input type="password" id="pass" name="pass" value="" /> <br/>	
		<p><input type="submit" value="Envoyer!" /> </p><br/>
			
		
		

	
		</form>';
		
		$sql='SELECT * FROM users ORDER BY id';
		$result=mysql_query($sql);
		
		if(!$result){
			die('Erreur dans la requ?te: ' .mysql_error());			
			
		}
		
		
			
			
			

?>
		 
        </div>
	  </td>
            
            
            
            
            
            
            
            
            
            
	  <td rowspan="6">
			<img src="images/Suomen-uni-3_15.png" width="28" height="747" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="560" alt=""></td>
	</tr>
	<tr>
		<td rowspan="5">
			<img src="images/Suomen-uni-3_16.png" width="25" height="187" alt=""></td>
		<td>
			<img src="images/Suomen-uni-3_17.png" width="52" height="52" alt=""></td>
		<td rowspan="5">
			<img src="images/Suomen-uni-3_18.png" width="62" height="187" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/Suomen-uni-3_19.png" width="52" height="35" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/Suomen-uni-3_20.png" width="52" height="52" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="40" alt=""></td>
	</tr>
	<tr>
		<td colspan="7" rowspan="2">
			<img src="images/Suomen-uni-3_21.png" width="627" height="60" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="12" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/Suomen-uni-3_22.png" width="52" height="48" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="62" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="109" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="16" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="127" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="132" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="85" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="49" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="109" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="28" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="6" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>