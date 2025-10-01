

<html>
<head>
	<title>Уничтожители бумаг - цифровая техника MEGAZOOM.RU</title>
	
	<link rel=STYLESHEET href="style.css" type="text/css">
<meta name="Title" content="Уничтожители бумаг - цифровая техника MEGAZOOM.RU">
		<meta name="Description" content="Уничтожители бумаг, ">
		<meta name="KeyWords" content="Уничтожители бумаг, ">

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

<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td width="230"><img src="images/megazoom3.jpg" alt="" width="300" height="60" border="0"></td>
    <td> <div align="right"><img src="images/hotline.gif" alt="" width="200" height="37" border="0"></div>
	</td>
</tr>
</table>


<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td width="200" valign="top">
	
	
	<table width="180" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;Каталог</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td>
	
	 <tr><td><a href="index.php?categoryID=1" class=light>Аудиотехника</a></td></tr>
<tr><td><a href="index.php?categoryID=5" class=light>Оригинальные товары</a></td></tr>
<tr><td><a href="index.php?categoryID=4" class=light>Офисная техника</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=18" class=lightstandard>Деректоры валют</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=20" class=lightstandard>Копиры</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=21" class=lightstandard>Обогреватели</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=19" class=lightstandard>Принтеры</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=22" class=lightstandard>Радиотелефоны</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=23" class=lightstandard>Счётчики банкнот</a></td></tr>
<tr><td>&nbsp;&nbsp;<b><font class=light><nobr>> Уничтожители бумаг</nobr></font></b>
</td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=25" class=lightstandard>Факсимильные аппараты</a></td></tr>
<tr><td><a href="index.php?categoryID=2" class=light>Фото / Видео</a></td></tr>

	
	</td>
</tr>
</table>

	
	
	
	</td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
</table>






<br>








<table width="180" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;Пользователь</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td>
	
	 

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

		<input type=hidden name=categoryID value="24">
</form>

</table>

		
	
	</td>
</tr>
</table>

	
	
	
	</td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
</table>




<br>


<table width="180" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;Помощь</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td><a href="">Как сделать заказ?</a><br>
	<a href="">Условия доставки</a><br>
	<a href="">Условия оплаты</a>
	</td>
</tr>
</table>



	
	
	</td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
</table>


<br>




<table width="180" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;Новости</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td>
	
	 <form action="index.php?subscribe=true" name="form1" onSubmit="return validate(this);" method=post><tr><td><b><font class=light>29.10.2004</font></b></td></tr><tr><td><font class=middle>Магазин почти открылся. Начинаем наполнение базы товаров. Скоро все будет!</font><br><br></td></tr><tr><td align=center><font class=light>Подписаться на новости:</font><br><input type=text name=email value="Email" class=ss size=15><br><input type=submit class=redbutton value="OK"><input type=hidden name=categoryID value="24"></td></tr></form>
	
	</td>
</tr>
</table>



	
	
	</td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
</table>


<br>








	
	
	
	</td>
    <td valign="top">



<table align="center" width="100%" cellspacing="0" cellpadding="1" border="0">
<tr>
    <td>
	
	
	
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;Найти в магазине</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td height="60">
	
	 <div align="center">

<table cellspacing=0 cellpadding=1 border=0>

<form action="index.php" method=get>

<tr>
<td><font class=light>Поиск:</font></td>
<td><input type="text" class="ss" name="searchstring" size=30 value=""></td>
<td><nobr>&nbsp;<input type="image" border=0 src="images/search.gif">&nbsp;&nbsp;&nbsp;</nobr></td>
</tr>

	

<tr>
<td colspan=3>
<input type="checkbox" name="inside"><font class=light>искать в найденном</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?adv_search=true" class=lightsmall>расширенный поиск</a>
</td>
</tr>

</form>
</table>


	</div>
	
	</td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
</table>

	
	
	
	
	
	
	
	
	
	
	</td>
    <td width="150">
	
	
	
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;Корзина</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td height="60">
	
	 

		<table>
			<form name="shopping_cart_form">
			<tr><td>

	<input class=cart type=text name=gc value="(нет товаров)"><br><input type=text class=cart name=ca value=""><br><a class=lightsmall href="index.php?register=yes&order=yes"><nobr>Оформить заказ >></nobr></a>

		</td></tr></form></table>

	
	
	</td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
</table>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</td>
</tr>
</table>

	
	

		
<A HREF="http://www.megazoom.ru/">Каталог цифровой техники</A> |
<a class=light href="index.php?register=yes">Регистрация</a> |
<A HREF="javascript:open_window('cart.php',400,300);">Корзина</A> |
<a class=light href="index.php?currency=yes">Изменить валюту</a> |
<A HREF="http://www.megazoom.ru/index.php?show_price=yes">Прайс-лист</A> |
<A HREF="http://www.megazoom.ru/index.php?aux_page=aux1">Помощь</A> |
<A HREF="http://www.megazoom.ru/index.php?aux_page=aux2">Статьи</A> |
<A HREF="http://www.megazoom.ru/index.php?aux_page=links">Ссылки</A>
	
	<br>
	<br>
	 <p>
<table><tr><td><font class="cat"><b>
<a href="index.php" class="cat">Главная</a> : <a class="cat" href="index.php?categoryID=4">Офисная техника</a> : Уничтожители бумаг:<br></b></font></td></tr></table><p></p>
</p><p></p>
<center>
[1-10] &nbsp;<a href="index.php?categoryID=24&offset=10">[11-20]</a> &nbsp;<a href="index.php?categoryID=24&offset=20">[21-30]</a> &nbsp;<a href="index.php?categoryID=24&offset=30">[31-40]</a> &nbsp;<a href="index.php?categoryID=24&offset=40">[41-50]</a> &nbsp;<a href="index.php?categoryID=24&offset=50">[51-60]</a> &nbsp;<a href="index.php?categoryID=24&offset=60">[61-64]</a> <a href="index.php?categoryID=24&offset=10">[след]</a><p><table border=0 cellpadding=5 width=100%><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=210"><img src="products_pictures/gladwork_1000csss.jpeg" border=0 width="50" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=210"> Уничтожитель бумаг Gladwork 1000 С (Шредер)</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=210',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 107</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Gladwork 1000C - может использоваться как персональный уничтожитель, так и для работы в небольшом офисе. Модель имеет современный дизайн. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=206"><img src="products_pictures/vs701702cgs.jpeg" border=0 width="53" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=206">Уничтожители бумаг Gladwork VS 701CG шредер</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=206',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 87</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Gladwork VS 701 CG - подойдет как персональный уничтожитель документов, так и для работы в небольшом офисе. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=207"><img src="products_pictures/vs701702cgs.jpeg" border=0 width="53" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=207">Уничтожители бумаг Gladwork VS 702CG шредер</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=207',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 97</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Gladwork VS 702CG - подойдет как персональный уничтожитель документов, так и для работы в небольшом офисе.</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=214"><img src="products_pictures/blsCaddysssss.jpeg" border=0 width="44" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=214">Уничтожитель бумаг BLS-Caddy (Шредер)</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=214',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 75</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>
<li>Модель: BLS-Caddy
<li>Емкость корзины - 18 л.
<li> Ширина захвата - 220 мм
<li> Количество листов 70 г/m2 - 4 шт
<li>Размер измельчения - 3,9 мм

</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=208"><img src="products_pictures/bls_rabbits.jpeg" border=0 width="52" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=208">Уничтожитель бумаг BLS-Rabbit</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=208',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 97</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>
<li>Модель: BLS-Rabbit
<li>Ширина захвата, мм: 220
<li>Размер фрагментов, мм: 4х23
<li>Емкость корзины, л: 15
</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=151"><img src="products_pictures/eba_1122sssss.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=151">Уничтожитель бумаг EBA 1122S</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=151',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 259</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уничтожитель EBA 1122S характеризуется продольным типом резки. Скорость резки составляет 3.6 метров в минуту. Вес уничтожителя 10 кг.</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=150"><img src="products_pictures/eba_1122cs.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=150">Уничтожитель бумаг EBA 1122С</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=150',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 319</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уничтожитель EBA 1122С характеризуется перекрёстным типом резки. Скорость резки составляет 3.6 метров в минуту. Вес уничтожителя 12.5 кг. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=152"><img src="products_pictures/eba_1124cssss.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=152">Уничтожитель бумаг EBA 1124С</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=152',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 487</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уничтожитель EBA 1124С характеризуется перекрёстным типом резки. Скорость резки составляет 3 метров в минуту. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=158"><img src="products_pictures/eba_bingo_22sssss.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=158">Уничтожитель бумаг EBA BINGO 22S</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=158',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 169</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уничтожитель EBA BINGO 22S характеризуется продольным типом резки. Скорость резки составляет 3.6 метров в минуту. Вес уничтожителя 5 кг.</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=157"><img src="products_pictures/eba_bingo_22cs.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=157">Уничтожитель бумаг EBA BINGO 22С</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=157',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 249</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Уничтожитель EBA BINGO 22С характеризуется перекрёстным типом резки. Скорость резки составляет 3.6 метров в минуту. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr></table>[1-10] &nbsp;<a href="index.php?categoryID=24&offset=10">[11-20]</a> &nbsp;<a href="index.php?categoryID=24&offset=20">[21-30]</a> &nbsp;<a href="index.php?categoryID=24&offset=30">[31-40]</a> &nbsp;<a href="index.php?categoryID=24&offset=40">[41-50]</a> &nbsp;<a href="index.php?categoryID=24&offset=50">[51-60]</a> &nbsp;<a href="index.php?categoryID=24&offset=60">[61-64]</a> <a href="index.php?categoryID=24&offset=10">[след]</a></center>

	
	</td>
</tr>


</table>

<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td height="50" bgcolor="#F4F4F4">
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>MegaZoom:</strong> (095) 542-9569, <a href="mailto:info@megazoom.ru">mailto:info@megazoom.ru</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- HotLog -->
<script language="javascript">
hotlog_js="1.0";
hotlog_r=""+Math.random()+"&s=49697&im=115&r="+escape(document.referrer)+"&pg="+
escape(window.location.href);
document.cookie="hotlog=1; path=/"; hotlog_r+="&c="+(document.cookie?"Y":"N");
</script><script language="javascript1.1">
hotlog_js="1.1";hotlog_r+="&j="+(navigator.javaEnabled()?"Y":"N")</script>
<script language="javascript1.2">
hotlog_js="1.2";
hotlog_r+="&wh="+screen.width+'x'+screen.height+"&px="+
(((navigator.appName.substring(0,3)=="Mic"))?
screen.colorDepth:screen.pixelDepth)</script>
<script language="javascript1.3">hotlog_js="1.3"</script>
<script language="javascript">hotlog_r+="&js="+hotlog_js;
document.write("<a href='http://click.hotlog.ru/?49697' target='_top'><img "+
" src='http://hit3.hotlog.ru/cgi-bin/hotlog/count?"+
hotlog_r+"&' border=0 width=88 height=31 alt=HotLog></a>")</script>
<noscript><a href=http://click.hotlog.ru/?49697 target=_top><img
src="http://hit3.hotlog.ru/cgi-bin/hotlog/count?s=49697&im=115" border=0 
width="88" height="31" alt="HotLog"></a></noscript>
<!-- /HotLog -->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--begin of Top100-->
<a href="http://top100.rambler.ru/top100/">
<img src="http://counter.rambler.ru/top100.cnt?679673" alt="Rambler's Top100" width=88 height=31 border=0></a>
<!--end of Top100 code-->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--Rating@Mail.ru COUNTER--><script language="JavaScript" type="text/javascript"><!--
d=document;var a='';a+=';r='+escape(d.referrer)
js=10//--></script><script language="JavaScript1.1" type="text/javascript"><!--
a+=';j='+navigator.javaEnabled()
js=11//--></script><script language="JavaScript1.2" type="text/javascript"><!--
s=screen;a+=';s='+s.width+'*'+s.height
a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth)
js=12//--></script><script language="JavaScript1.3" type="text/javascript"><!--
js=13//--></script><script language="JavaScript" type="text/javascript"><!--
d.write('<a href="http://top.mail.ru/jump?from=868315"'+
' target=_top><img src="http://top.list.ru/counter'+
'?id=868315;t=59;js='+js+a+';rand='+Math.random()+
'" alt="Рейтинг@Mail.ru"'+' border=0 height=31 width=88/><\/a>')
if(11<js)d.write('<'+'!-- ')//--></script><noscript><a
target=_top href="http://top.mail.ru/jump?from=868315"><img
src="http://top.list.ru/counter?js=na;id=868315;t=59"
border=0 height=31 width=88
alt="Рейтинг@Mail.ru"/></a></noscript><script language="JavaScript" type="text/javascript"><!--
if(11<js)d.write('--'+'>')//--></script><!--/COUNTER-->



</td>
</tr>
</table>


<br>


<table align="center" width="90%" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td align="center" bgcolor="#FFFFEC"><strong>Мы рекомендуем:</strong></td>
</tr>
<tr>
    <td bgcolor="#F5F5F5"><a href="http://www.bantik.ru/">Бизнес-сувениры</a> в магазине Бантик Ру. 
Арбалеты, ножи - <a href="http://www.bantik.ru/index.php?categoryID=32">старинное оружие</a>.
<a href="http://www.bantik.ru/index.php?categoryID=3">Глобусы-бары</a> из Италии. 
<a href="http://www.bantik.ru/">Подарки</a> для друзей.
</td>
</tr>
<tr>
    <td bgcolor="#E8F8FF">
Sporthome - 
<a href="http://www.sporthome.ru/">спортивные тренажеры</a>.	
<a href="http://www.sporthome.ru/index.php?categoryID=13">Эллиптические тренажеры</a> для разных групп мышщ.	
Семейные <a href="http://www.sporthome.ru/index.php?categoryID=2">велотренажеры</a>. 
<a href="http://www.sporthome.ru/index.php?categoryID=19">Силовые тренажеры</a> и 
<a href="http://www.sporthome.ru/index.php?categoryID=8">беговые дорожки</a> для повышения тонуса. 	
	
	</td>
</tr>
<tr>
    <td bgcolor="#F5F5F5">
Tehnohome - <a href="http://www.tehnohome.ru/">интернет магазин бытовой техники</a>.
Саморазмораживающиеся <a href="http://www.tehnohome.ru/index.php?CID=1">холодильники</a>. Функциональная <a href="http://www.tehnohome.ru/index.php?CID=73">встраиваемая техника</a>.	
Автоматические <a href="http://www.tehnohome.ru/index.php?CID=13">стиральные машины</a>.	
Бесплатная <a href="http://www.tehnohome.ru/">доставка бытовой техники</a>.

	
	</td>
</tr>
<tr>
    <td bgcolor="#E8F8FF">

Аквафон - <a href="http://www.aquafon.ru/filter_blocks/">продажа аквариумов Juwel</a>, 
аквариумных фонов.
Дизайн <a href="http://www.aquafon.ru/aquarium_meer/">морского аквариума</a>.
<a href="http://www.aquafon.ru/catalog_waterfalls/">Декоративные фонтаны</a> в ландшафтном дизайне.
<a href="http://www.aquafon.ru/catalog_waterfalls/">Водопады</a> в интерьере. 
Примеры <a href="http://www.aquafon.ru/ustanovka/">оформления аквариума</a>, фото.
	
	</td>
</tr>
<tr>
    <td bgcolor="#F5F5F5">
	

Realflowers - <a href="http://www.realflowers.ru/">доставка цветов по Москве</a>.
<a href="http://www.realflowers.ru/">Оформление букетов на заказ</a> и 
<a href="http://www.realflowers.ru/">свадебные букеты</a>.
<a href="http://www.realflowers.ru/">Заказ цветов и букетов</a> для торжеств и юбилеев.
	
	</td>
</tr>
</table>


</body>
</html>
