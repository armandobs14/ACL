<html>
<head>

<style>
.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	height: auto;
	border:1px solid #000000;
	
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	max-height:100px;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffaa56; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:12px;
	font-family:Times New Roman;
	font-weight:bold;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
	background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);
	background-color:#ff7f00;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Times New Roman;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);
	background-color:#ff7f00;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
.title{
	font-size: 20px;
	font-weight: bold;
}
.listFunctions{
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	text-align: center;
	background: #FF3C00;
	color:#fff;
	margin-bottom: 20px;
	padding: 20px;
}
.footer{
	background: #FF3C00;
	padding:20px 0;
	text-align: right;	 
	bottom: 0px;
}
.footer input{
	background: #fff;
	color: #000;
	font-size: 16px;
	margin-right: 20px;
}

</style>
</head>

<body style="margin-top:0px; ">
<div class="listFunctions">
	Set permission to user
</div>
<?php
	if (empty($user_selected)){
?>
	<form method="POST" action="user_permission" >
		<div style="text-align:center">
			User: <input type="input" value="" name="user" />	
		</div>
		<br />
		<div class="footer">
			<input type='submit' value="Next Step"  />
		</div>
	</form>
<?php
	}else{
?>
<form method="POST" action="../finish_permission" >
<?php
	echo $user;

	echo '<div class="CSSTableGenerator" >
				<table >
					<tr>
						<td style="width:20%">
							Folder
						</td>
						<td style="width:20%">
							Class
						</td>
						<td>
							Function
						</td>
						<td style="width:10%;">
							Permission
						</td>
					</tr>';
	foreach($listPermission as $key ){
			echo '<tr>';
				printf('<td>%s</td>', $key['folder']);
				printf('<td>%s</td>', $key['class']);
				printf('<td>%s</td>', $key['function']);
				printf('<td>%s</td>', $key['permission']);
			echo '</tr>';
		}
		
		echo '</table></div><br /><br />';

?>
<div class="footer">
	<input type='submit' value="Next Step"  />
</div>
	<?php } ?>
</form>

</body>
</html>