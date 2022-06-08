<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">

	<title>Мы выбирает ЗОЖ</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	
<style type="text/css">

		@font-face {
	font-family: "Montserrat";
	src: url("font/Montserrat-SemiBold.ttf");
}
.font-b{
	font-family: Montserrat;
}
@font-face {
	font-family: "Montserrat-L";
	src: url("font/Montserrat-Medium.ttf");
}
.font-m{
	font-family: Montserrat-L;
}
@font-face {
	font-family: "Montserrat-LL";
	src: url("font/	.ttf");
}
.font-l{
	font-family: Montserrat-LL;
}
.fs1{
	font-size: 14px;
}
.fs2{
	font-size: 16px;
}
.td-n{
	text-decoration: none;
}


.body{
	background: #FFFFFF;
	margin: 0;
}

.c-gr{
	color: rgba(19, 167, 122, 1);
}

.t-c{
	text-align: center;
}

.mx{
	margin-left: auto;
	margin-right: auto;
}
.ml-text{
	margin-left: 18px;
}
/*header*/
.head{
	height: 11vh;
	width: 100vw;
	padding-top: 2vh;
	display: flex;
	box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.08);
}
.logo{
	margin-left: 14vw;
	height: 9vh;
}
.links{
	width: 21vw;
	margin-top: 3.5vh;
	margin-left: 35vw;
	display: flex;
	justify-content: space-between;
	color: rgba(19, 167, 122, 1);
	font-size: 14px;
}
/*надпись*/
.slogan{
	width: 100vw;
	display: flex;
	justify-content: center;
	color: rgba(19, 167, 122, 1);
	font-size: 36px;
}
.slogan2{
	width: 100vw;
	margin-top: -40px;
	display: flex;
	justify-content: center;
	color: rgba(19, 167, 122, 1);
	font-size: 18px;
}
/*выбор перса*/
.osnova{
	height: 46vh;
	width: 73vw;
	display: flex;
}
.chetvert{
	height: 40vh;
	width: 16.5vw;
	border-radius: 6px;
	box-shadow: 0px 4px 22px rgba(0, 0, 0, 0.08);
	padding-left: 8px;
	padding-right: 8px;
}
.pers{
	width: 10vw;
	height: 25vh;
	margin-top: -30px;
	margin-bottom: -10px;
	margin-left: 2.8vw;
}
.vibor{
	background: #FFFFFF;
	height: 6vh;
	width: 16.5vw;
	position: absolute;
	top: 74vh;
	border: solid rgba(19, 167, 122, 1) 1px;
	border-radius: 6px;
}
.chetvert:hover {
	background: rgba(0,0,0,0);
	color: #51a33e;
	box-shadow: inset 0 0 0 3px #51a33e;
}
.border-radius {
	border-radius: 50%;
	 width: 300px;
    height: 300px;
}






</style>


</head>
<body class="body">
	<div class="head">
		<img src="../img/logo.svg" class="logo">
		<div class="links font-b">
			<a href="../index.php" class="td-n c-gr">Главная</a>
			<a href="index2.php" class="td-n c-gr">Справочник</a>
			<a href="" class="td-n c-gr">О нас</a>
		</div>
	</div>
	<div class="slogan">
		<p class="font-l">Некоторые правила гигиены</p>
	</div>
	<div class="osnova mx">
		<div class="chetvert mx border border-radius" >
			<img src="img/masks/img11.svg " class="mx" style="padding-right:100px">
			<p class="font-m c-gr t-c fs2">Носите маски правильно</p>
		</div> 
		<div class="chetvert mx border-radius">
			
			<img src="img/masks/img22.svg " class="mx" style="padding-right:100px;">
			<p class="font-m c-gr t-c fs2">Маска должна закрывать нос, рот и подбородок	</p>
		</div> 
		<div class="chetvert mx border-radius">
			
			<img src="img/masks/img33.svg " class="mx" style="padding-right:100px">
			<p class="font-m c-gr t-c fs2">Трогать маску руками во время ношения маски не рекомендуется</p>
		</div> 
		
	</div>
	<div class="osnova mx">
		<div class="chetvert mx border border-radius">
			<img src="img/masks/util.svg " class="mx" style="padding-right:100px">
			<p class="font-m c-gr t-c fs2">Влажную и загрязненную маску требуется утилизировать незамедлительно</p>
		</div> 
		<div class="chetvert mx border-radius">
			<img src="img/masks/fen.svg " class="mx" style="padding-right:100px">
			<p class="font-m c-gr t-c fs2">На улице надевать ее нецелесообразно, поскольку риска заражения на открытом воздухе практически не существует</p>
		
		</div> 
		<div class="chetvert mx border-radius">
			<img src="img/masks/nogi.svg " class="mx" style="padding-right:100px">
			<p class="font-m c-gr t-c fs2">Регулярно чистите пятки и стопы пемзой или спец средствами</p>
	
		</div> 
		
	</div>
	
</body>
</html>