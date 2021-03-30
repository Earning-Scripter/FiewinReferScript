
<DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<title>SCRIPTER_ROHIT</title>
<style>
body{
	background: red;
	font-family: 'Sansita Swashed', cursive;
	border: 4px solid yellow;
	border-radius: 30px;
}
img{
	width: 90px;
	animation: img 30s infinite alternate-reverse;
	border-top: 5px solid yellow;
	border-bottom: 5px solid blue;
	border-left: 5px solid orange;
	border-right: 5px solid green;
	border-radius: 70px;
}
@keyframes img{
	from{
			border-top: 6px solid yellow;
	border-bottom: 6px solid blue;
	border-left: 6px solid orange;
	border-right: 6px solid green;
		transform: rotateZ(4000deg);
	}
	
	25%{	border-top: 6px solid green;
	border-bottom: 6px solid purple;
	border-left: 6px solid tomato;
	border-right: 6px solid blue;
		
	}
	50%{	border-top: 6px solid white;
	border-bottom: 6px solid limegreen;
	border-left: 6px solid darkred;
	border-right: 6px solid powderblie;
	
	}
		to{
			border-top: 6px solid pink;
	border-bottom: 6px solid skyblue;
	border-left: 6px solid yellow;
	border-right: 6px solid red;
		transform: rotateZ(-4000deg);
	}
} 
.img1{
	background-image: url("");
	background: linear-gradient(to right, #EF0C33,#EC0ACC,#650AFF,#02D9E9,#09DB3A,#52FA02);
	animation: div 7s infinite alternate-reverse;

}

@keyframes div{
	from{
		background: linear-gradient(to right, #EF0C33,#EC0ACC,#650AFF,#02D9E9,#09DB3A,#52FA02);
	}
	25%{
		background: linear-gradient(to right, #2909FD,#FB07FA
		,#81FE12,#F37D0A,#B708F0,#09DB3A);
		
	}
	50%{
		background: linear-gradient(to right, #fff,#000
		,#B708F0,##EF0D64,#F37D0A,#81FE12);
	}
	to{background: linear-gradient(to right, #B708F0,#595959
		,#000,##EF0D64,#F8B11A,#81FE12);
		
	}
}
.img2{
	width: 220px;
}

h2{
	background: yellow;
	color: red;
	font-size: 23px;
	font-family: cursive;
	border-radius: 15px;
	border: 3px solid blue;
}
html{
	background: black;
}
input[type="text"]{
	padding: 13px;
	width: 270px;
	text-align: center;
	border: 4px solid red;
	border-radius: 20px;
	box-shadow: inset -3px -6px 9px #595959;
	inset 2px 4px 7px #000;
	font-family: 'Sansita Swashed', cursive;
	font-size: 16px;
	outline: 0px;
}
lable{
	font-size: 20px; 
	font-weight: 100px;
	color: red;
	border-radius: 10px;
	
}
input[type="submit"]{
	padding: 7px;
	border-radius: 20px;
	border: 3px solid yellow;
	width: 170px;
	outline: 0px;
	box-shadow: inset -3px -6px 9px #595959;
	inset 2px 4px 7px #000;
}
input:hover[type="submit"]{
	padding: 7px;
	border-radius: 20px;
	border: 3px solid red;
	width: 170px;
	outline: 0px;
	background: green;
	color: yellow;
	box-shadow: inset -3px -6px 9px #072DEE;
	inset 2px 4px 7px #000;
}
a{
	background: yellow;
	padding: 25px;
	border-radius: 30px;
}
.a1{
	background: green;
	padding: 25px;
	border-radius: 30px;
	margin-top: 30px;
}
h1{
	background: red;
	color: yellow;
	padding: 5px;
}
</style>

</head>
<body>
<hr>
<center>
<h2> Cashmantra App[ Script ]</h2>
<hr><hr>
</center>

<hr>
<center>
<h2>
SCRIPTER_ROHIT
</h2>
</center>
<hr><hr>
<?php
echo "<meta http-equiv='refresh' content=0;' />";

$token=$_GET['E%29%5Bi%3Bp9%26PMpx&package=com.way2status.allstatus&type=general&language_id='];





//$headers10[]='User-Agent: okhttp/3.10.0';
$headers10[]='Host: cashmantra.app';
$headers10[]='Connection: Keep-Alive';
$headers10[]="Accept-Encoding: gzip";
$headers10[]="User-Agent: okhttp/3.12.1 ";


$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url10);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata8);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER,$headers10);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  curl_close ($ch);
  

echo"<div class='success'><center>
<font color='yellow'size='6'><hr>Message:-$output<hr>";

?>




</body>
</html>