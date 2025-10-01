

<html>
<head>
	<title>CD-плееры - цифровая техника MEGAZOOM.RU</title>
	
	<link rel=STYLESHEET href="style.css" type="text/css">
<meta name="Title" content="CD-плееры - цифровая техника MEGAZOOM.RU">
		<meta name="Description" content="CD-плееры, ">
		<meta name="KeyWords" content="CD-плееры, ">

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
<tr><td>&nbsp;&nbsp;<b><font class=light><nobr>> CD-плееры</nobr></font></b>
</td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=14" class=lightstandard>Караоке</a></td></tr>
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

		<input type=hidden name=categoryID value="6">
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
<a href="index.php" class="cat">Главная</a> : <a class="cat" href="index.php?categoryID=1">Аудиотехника</a> : CD-плееры:<br></b></font></td></tr></table><p></p>
</p><p></p>
<center>
<p><table border=0 cellpadding=5 width=100%><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=2"><img src="products_pictures/bbk_pv300sssssss.gif" border=0 width="60" height="55" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=2">CD/MP3 плеер BBK PV300S с возможностью просмотра VCD</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=2',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 199</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>CD/MP3 плеер BBK PV300S воспроизводит VCD, MP3 и CD-DA форматы, записанные на CD и CD-R дисках. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=57"><img src="products_pictures/bbk_pv400sssssss.gif" border=0 width="25" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=57">CD/MP3 плеер BBK PV400S с возможностью просмотра VCD</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=57',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 81</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Портативный аудио BBK PV400S помимо аудиодисков форматов CD-DA и MP3, способен читать VCD-диски, подавая видеосигнал на телевизор, через входящий в комплект переходник. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=58"><img src="products_pictures/bbk_pv410ss.gif" border=0 width="60" height="47" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=58">CD/MP3 плеер BBK PV410S с возможностью просмотра VCD</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=58',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 83</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Отличительной чертой BBK PV410S является возможность воспроизводить диск во время зарядки аккумуляторных батарей. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=3"><img src="products_pictures/bbk_pv420ssssssss.gif" border=0 width="60" height="58" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=3">CD/MP3 плеер BBK PV420S с возможностью просмотра VCD</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=3',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 91</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>CD/MP3 плеер BBK PV420S воспроизводит VCD, MP3 и CD-DA форматы, записанные на CD и CD-R дисках. Семь предустановленных режимов эквалайзера. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=59"><img src="products_pictures/nexx_nc-450s.gif" border=0 width="22" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=59">CD/MP3/WMA/Ogg плеер NEXX NC-450</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=59',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 100</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Дисковый плеер, способный воспроизводить все наиболее распостранённые форматы записи музыкальных файлов. NEXX NC-450 поддерживает MP3, WMA, ASF, Audio CD и Ogg форматы. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=56"><img src="products_pictures/iriver_imp-900s.gif" border=0 width="27" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=56">CD\MP3 плеер iRiver iMP-900 SlimX</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=56',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 161</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>iRiver iMP-900 SlimX пришёл на замену iRiver iMP-550 SlimX. Изменение претерпела не только форма плеера, но и содержание.</td>
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
