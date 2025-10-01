

<html>
<head>
	<title>Караоке - цифровая техника MEGAZOOM.RU</title>
	
	<link rel=STYLESHEET href="style.css" type="text/css">
<meta name="Title" content="Караоке - цифровая техника MEGAZOOM.RU">
		<meta name="Description" content="Караоке, ">
		<meta name="KeyWords" content="Караоке, ">

</head>

<script> //java-скрипт, открывающий новое окно со спсиком товаров в корзине
	function open_window(link,w,h) {
		var win = "width="+w+",height="+h+",menubar=no,location=no,resizable=yes,scrollbars=yes";
		newWin = window.open(link,'newWin',win);
		newWin.focus();
	}
	function confirmDelete() { //подтверждение удаления пользователя
		temp = window.confirm('Вы действительно хотите отменить Вашу регистрацию в нашем магазине?');
		if (temp) { //удалить
			window.location="index.php?killuser=yes";
		};
	}
	function validate() { // новости
		if (document.form1.email.value.length<1) {
			alert("Пожалуйста введите Ваш e-mail");
			return false;
		};
		if (document.form1.email.value == 'Email') {
			alert("Пожалуйста введите Ваш e-mail");
			return false;
		};
		return true;
	}
	function validate_disc() { // форма ввода сообщения
		if (document.formD.nick.value.length<1) {
			alert("Пожалуйста введите имя или псевдоним");
			return false;
		};

		if (document.formD.topic.value.length<1) {
			alert("Пожалуйста введите тему сообщения");
			return false;
		};

		return true;
	}
	function validate_search() {

		if (document.Sform.price1.value!="" && ((document.Sform.price1.value < 0) || isNaN(document.Sform.price1.value))) {
			alert("В качестве цены1 должно быть положительное число");
			return false;
		};
		if (document.Sform.price2.value!="" && ((document.Sform.price2.value < 0) || isNaN(document.Sform.price2.value))) {
			alert("В качестве цены2 должно быть положительное число");
			return false;
		};

		return true;
	}


</script>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0">

<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td width="300" valign="top"><img src="images/megazoom.gif" alt="" width="300" height="60" border="0"></td>
    <td>
	
	<div align="right"><img src="images/hotline.gif" alt="" width="309" height="63" border="0"></div>
	
	
	</td>


</tr>
<tr>
       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<a href="http://www.megazoom.ru">Главная страница</a> | <a class=light href="index.php?register=yes">Регистрация</a>  | <a href="javascript:open_window('cart.php',400,300);">Корзина</a>	
	
	</td>


</tr>
</table>




<table align="center" width="100%" cellspacing="0" cellpadding="1" border="0">
<tr>
    <td width="200" valign="top">
	
	
	
	
	<!-- Красота страшная сила! -->
	
	
	<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FBB724">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>Каталог товаров</td>
		</tr>
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FFFFFF" background="images/bgg3.gif">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>
			<tr><td><a href="index.php?categoryID=1" class=light>Аудиотехника</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=6" class=lightstandard>CD-плееры</a></td></tr>
<tr><td>&nbsp;&nbsp;<b><font class=light><nobr>> Караоке</nobr></font></b>
</td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=12" class=lightstandard>МР3-плееры</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=13" class=lightstandard>Цифровые диктофоны</a></td></tr>
<tr><td><a href="index.php?categoryID=5" class=light>Оригинальные товары</a></td></tr>
<tr><td><a href="index.php?categoryID=4" class=light>Офисная техника</a></td></tr>
<tr><td><a href="index.php?categoryID=2" class=light>Фото / Видео</a></td></tr>

		</td>
		</tr>		
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
</table>

<table cellspacing="0" cellpadding="0">
<tr>
	<td></td>
</tr>
</table>


	
	
	<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FBB724">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>Помощь</td>
		</tr>
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FFFFFF" background="images/bgg3.gif">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>
			
			<A href="http://www.megazoom.ru/index.php?aux_page=aux1">Как сделать заказ?</A><br>
			<A href="http://www.megazoom.ru/index.php?aux_page=aux1">Когда мне его привезут?</A><br>
			<A href="http://www.megazoom.ru/index.php?aux_page=aux1">Как мне за товар заплатить?</A><br>
		
		</td>
		</tr>		
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
</table>
	
	
	
	
	
	
	
	
	</td>
   
   <!-- Начало колонки -->
   
    <td height="100" valign="top">
	
	
	<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <td>
	
	<!-- Регитсрация -->
	
	
	<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FBB724">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>Регистрация</td>
		</tr>
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FFFFFF" background="images/bgg1.gif">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td height="100">
			  
 
<div align="center">

<font class=middle><b>Вход для пользователей</b></font>

<table cellspacing=0>

<form action="index.php" method=post>

<tr>
 <td>
	<table border=0>
	 <input type="hidden" name="enter" value="1">
	 <tr>
		<td align=right><font class=light>Логин:</font></td>
		<td><input type="text" class=ss name="user_login" size=10></td>
	 </tr>
	 <tr>
		<td align=right><font class=light>Пароль:</font></td>
		<td><input name="user_pw" class=ss type="password" size=10></td>
	 </tr>
	</table>
 </td>
 <td>
	<input type="submit" class=redbutton value="OK"><br>
	<a href="index.php?logging=yes" class=lightsmall>забыли пароль?</a>
 </td>
</tr>

		<input type=hidden name=categoryID value="14">
</form>

</table>

		 </div> 
 

		</td>
		</tr>		
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
</table>


	</td>
	<td width="2"></td>
    <td width="50%">
	<!-- Корзина -->
		
	
	<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FF8080">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>Корзина</td>
		</tr>
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FFFFFF" background="images/bgg2.gif">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td height="100" align="center">
<div align="center">

		<table>
			<form name="shopping_cart_form">
			<tr><td>

	<input class=cart type=text name=gc value="(нет товаров)"><br><input type=text class=cart name=ca value=""><br><a class=lightsmall href="index.php?register=yes&order=yes"><nobr>Оформить заказ >></nobr></a>

		</td></tr></form></table>

	</div>
		</td>
		</tr>		
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
</table>

	
	</td>
</tr>
</table>

<img src="images/1x1.gif" alt="" width="1" height="1" border="0">	
	
	
	
	<!-- Поиск товара -->
	
	
	<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FBB724">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>Поиск по магазину</td>
		</tr>
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#FFFFFF">
	
		<table cellspacing="2" cellpadding="2" border="0">
		<tr>
    	<td>


<table cellspacing=0 cellpadding=1 border=0>

<form action="index.php" method=get>

<tr>
<td><font class=light>Поиск:</font></td>
<td><input type="text" class="ss" name="searchstring" size=7 value=""></td>
<td><nobr>&nbsp;<input type="image" border=0 src="images/search.gif">&nbsp;&nbsp;&nbsp;</nobr></td>
</tr>

	

<tr>
<td colspan=3>
<input type="checkbox" name="inside"><font class=light>искать в найденном</font>
</td>
</tr>

</form>
</table>
<a href="index.php?adv_search=true" class=lightsmall>расширенный поиск</a>

	 
		</td>
		</tr>		
		</table>

	
	
	</td>
    <td width="2" bgcolor="#0D125A"></td>
</tr>
<tr>
    <td width="2" height="1" bgcolor="#0D125A"></td>
    <td height="2" bgcolor="#0D125A"></td>
    <td width="2" height="1" bgcolor="#0D125A"></td>
</tr>
</table>

<!-- ВОТ ТАКИЕ ВОТ ГЛАВНЫЕ ДЕЛА -->

<table cellspacing="0" cellpadding="2" border="0">
<tr>
    <td></td>
</tr>
</table>


	
	 <p>
<table><tr><td><font class="cat"><b>
<a href="index.php" class="cat">Главная</a> : <a class="cat" href="index.php?categoryID=1">Аудиотехника</a> : Караоке:<br></b></font></td></tr></table><p></p>
</p><p></p>
<center>
<p><table border=0 cellpadding=5 width=100%><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=66"><img src="products_pictures/adapter2.s.gif" border=0 width="60" height="38" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=66">Адаптер сетевой для радиомикрофона</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=66',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 12</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p> <li>Адаптер сетевой стабилизированный 9V (500ma) (для радиомикрофона)
<li>Производитель : (США)</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=64"><img src="products_pictures/leadsinger_bravos.gif" border=0 width="40" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=64">Радиомикрофон Leadsinger bravo</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=64',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 65</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>"ЛИД СИНГЕР bravo" - новая модель в семействе караоке микрофонов, которая была создана специально для детей. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=60"><img src="products_pictures/karaoke_video_s.gif" border=0 width="52" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=60">Радиомикрофон LEADSINGER VIDEO + Картридж 300 песен</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=60',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 303</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Лидсингер видео также как и предыдущая модель может быть подключен к FM-приемнику на частоту 87,9 MHz
Только теперь вы ещё видите текст! Не у всех есть музыкальные центры, но у всех есть телевизоры!!!</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=61"><img src="products_pictures/ledsingerssssssss.gif" border=0 width="60" height="54" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=61">Радиомикрофон-караоке "LEADSINGER" (Лидсингер)</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=61',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 103</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уникальное изобретение, запатентованное в США – компактный радиомикрофон «Лидсингер» с эффектом караоке! Его с уверенностью можно назвать чудо-микрофоном, так как он не требует специального подключения, дорогостоящей аппаратуры и массы проводов. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=65"><img src="products_pictures/karaoke_kartridj.s.gif" border=0 width="51" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=65">Картриджи для радиомикрофона LEADSINGER ВИДЕО - (РЕПЕРТУАР)</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=65',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 73</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p><strong>Название картриджа </strong>
<li>В1: Сборник "Песни для души"
<li>В2: Сборник "Песни для души"
<li>В3: Сборник "Песни для души"
<li>В4: Сборник "Песни для души"
<li>В5: Сборник "Песни для души"
<li>В6: Сборник "Песни для души"
</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=12"><img src="products_pictures/lg_dks6000ssss.gif" border=0 width="48" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=12">Приставка караоке LG DKS 6000 с поддержкой MPEG4, DVD, Video CD и MP3</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=12',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 195</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p> Универсальное устройство, способное проигрывать MPEG4, DVD, VideoCD, AudioCD, MP3, CD-R, CD-RW, DivX, VCD, SVCD, JPEG. Встроенные декодеры: DTS, Dolby Digital 5.1, Pro Logic II. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=13"><img src="products_pictures/lg_dks6100s.gif" border=0 width="57" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=13">Приставка караоке LG DKS 6100 с поддержкой MPEG4, DVD, Video CD и MP3</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=13',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 195</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p> Универсальное устройство, способное проигрывать MPEG4, DVD, VideoCD, AudioCD, MP3, CD-R, CD-RW, DivX, VCD, SVCD, JPEG. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=62"><img src="products_pictures/leadsinger1s.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=62">Подарочный набор "LEADSINGER" (Лидсингер)</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=62',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 139</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уникальное изобретение, запатентованное в США – компактный радиомикрофон «Лидсингер» с эффектом караоке!</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=63"><img src="products_pictures/lg_dks_5000s.gif" border=0 width="60" height="21" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=63">LG DKS-5000 Караоке + DVD на 3 диска</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=63',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 179</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Приставка LG DKS-5000 с DVD проигрывателем и КАРАОКЕ! CD-чейнджер на 3 диска! Большой выбор настроек и функций, 3D Surround Sound System, поддержка DTS - совместимость с форматами DVD, Audio CD, CD-R/RW, VCD, MP3. И многое другое...</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr></table></center>


	
	
	
	
	</td>
</tr>
</table>



</body>
</html>
