

<html>
<head>
	<title>Проекторы - цифровая техника MEGAZOOM.RU</title>
	
	<link rel=STYLESHEET href="style.css" type="text/css">
<meta name="Title" content="Проекторы - цифровая техника MEGAZOOM.RU">
		<meta name="Description" content="Проекторы, ">
		<meta name="KeyWords" content="Проекторы, ">

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
<tr><td><a href="index.php?categoryID=2" class=light>Фото / Видео</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=15" class=lightstandard>DVD-плееры</a></td></tr>
<tr><td>&nbsp;&nbsp;<b><font class=light><nobr>> Проекторы</nobr></font></b>
</td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=16" class=lightstandard>Домашние кинотеатры</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=10" class=lightstandard>Цифровые видеокамеры</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=11" class=lightstandard>Цифровые фотоаппараты</a></td></tr>

	
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

		<input type=hidden name=categoryID value="17">
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
	
	 <form action="index.php?subscribe=true" name="form1" onSubmit="return validate(this);" method=post><tr><td><b><font class=light>29.10.2004</font></b></td></tr><tr><td><font class=middle>Магазин почти открылся. Начинаем наполнение базы товаров. Скоро все будет!</font><br><br></td></tr><tr><td align=center><font class=light>Подписаться на новости:</font><br><input type=text name=email value="Email" class=ss size=15><br><input type=submit class=redbutton value="OK"><input type=hidden name=categoryID value="17"></td></tr></form>
	
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
<A HREF="http://www.megazoom.ru/links/">Ссылки</A>
	
	<br>
	<br>
	 <p>
<table><tr><td><font class="cat"><b>
<a href="index.php" class="cat">Главная</a> : <a class="cat" href="index.php?categoryID=2">Фото / Видео</a> : Проекторы:<br></b></font></td></tr></table><p></p>
</p><p></p>
<center>
[1-10] &nbsp;<a href="index.php?categoryID=17&offset=10">[11-20]</a> &nbsp;<a href="index.php?categoryID=17&offset=20">[21-30]</a> &nbsp;<a href="index.php?categoryID=17&offset=30">[31-40]</a> &nbsp;<a href="index.php?categoryID=17&offset=40">[41-50]</a> &nbsp;<a href="index.php?categoryID=17&offset=50">[51-60]</a> &nbsp; ... &nbsp;<a href="index.php?categoryID=17&offset=80">[81-80]</a> <a href="index.php?categoryID=17&offset=10">[след]</a><p><table border=0 cellpadding=5 width=100%><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=264"><img src="products_pictures/3m_x50s.gif" border=0 width="60" height="24" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=264"> Видеопроектор 3M X50</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=264',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 2817</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор 3M X50 обладает яркостью 2000 ANSI люмен. Контрастность - 300:1. Реальное разрешение - 1024 х 768.</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=276"><img src="products_pictures/acer_pl111s.gif" border=0 width="60" height="35" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=276"> Видеопроектор Acer PL111</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=276',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 1019</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор Acer PL111 обладает яркостью 1300 ANSI люмен. Контрастность - 500:1. Реальное разрешение - 800 x 600. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=279"><img src="products_pictures/epson_emp-tw10dreamios.gif" border=0 width="60" height="31" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=279"> Видеопроектор Epson EMP-TW10 Dreamio</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=279',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 1111</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор Epson EMP-TW10 Dreamio обладает яркостью 1000 ANSI люмен. Контрастность - 700:1. Реальное разрешение - 800 х 600, максимальное 1024 х 768. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=280"><img src="products_pictures/hp_sb21s.gif" border=0 width="60" height="27" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=280"> Видеопроектор HP SB21</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=280',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 1567</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор HP SB21 обладает яркостью 800 ANSI люмен. Контрастность - 400:1. Реальное разрешение - 800 х 600. Воспроизводимые сигналы - NTSC, PAL, SECAM. Лампа P-VIP 120 Вт, срок службы лампы 2000 часов. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=297"><img src="products_pictures/panasonic_pt_ae300sss.jpeg" border=0 width="60" height="39" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=297"> Видеопроектор Panasonic PT-AE300E</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=297',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 1778</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Panasonic PT-AE300 имеет технологию SmoothScreenTM для уменьшения эффекта «проволочной сетки», технологию Digital Cinema RealityTM, 6 предустановленных режимов изображения: Кино 1 (Cinema 1), Кино 2 (Cinema 2), Музыка (Music), Динамика (Dynamic), Спорт (Sports), Норма (Normal).</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=244"><img src="products_pictures/3m_mp8790s.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=244">Видеопроектор 3M MP 8790</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=244',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 5197</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор 3M MP 8790 обладает яркостью 3500 ANSI люмен. Контрастность - 750 : 1. Реальное разрешение - 1024 х 768, максимальное 1280 x 1024.</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=245"><img src="products_pictures/3m_mp8795s.gif" border=0 width="60" height="34" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=245">Видеопроектор 3M MP 8795</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=245',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 5787</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор 3M MP 8795 обладает яркостью 4500 ANSI люмен. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=243"><img src="products_pictures/3m_mp7640is.gif" border=0 width="60" height="60" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=243">Видеопроектор 3M MP7640i</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=243',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 1797</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор 3M MP7640i обладает яркостью 1100 ANSI люмен. Контрастность - 350:1. Реальное разрешение - 800 x 600.</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=246"><img src="products_pictures/3m_s10s.gif" border=0 width="60" height="31" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=246">Видеопроектор 3M S10</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=246',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 1223</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор 3M S10 обладает яркостью 1200 ANSI люмен. Контрастность - 300:1. Реальное разрешение - 800 x 600. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=269"><img src="products_pictures/3m_s40s.gif" border=0 width="60" height="24" alt="подробнее... ...">
<font class=small><nobr>подробнее...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=269">Видеопроектор 3M S40</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=269',400,300);"><img src="images/cart_small.gif" border=0 alt="добавить в корзину"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>Наша цена: <font  color=red>USD 4183</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Мультимедийный цифровой проектор 3M S40 обладает яркостью 1400 ANSI люмен. Контрастность - 350:1. Реальное разрешение - 800 x 600. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr></table>[1-10] &nbsp;<a href="index.php?categoryID=17&offset=10">[11-20]</a> &nbsp;<a href="index.php?categoryID=17&offset=20">[21-30]</a> &nbsp;<a href="index.php?categoryID=17&offset=30">[31-40]</a> &nbsp;<a href="index.php?categoryID=17&offset=40">[41-50]</a> &nbsp;<a href="index.php?categoryID=17&offset=50">[51-60]</a> &nbsp; ... &nbsp;<a href="index.php?categoryID=17&offset=80">[81-80]</a> <a href="index.php?categoryID=17&offset=10">[след]</a></center>

	
	</td>
</tr>


</table>

<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td height="50" bgcolor="#F4F4F4">
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>MegaZoom:</strong> (095) 542-9569, <a href="mailto:info@megazoom.ru">mailto:info@megazoom.ru</a></td>
</tr>
</table>



</body>
</html>
