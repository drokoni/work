

<html>
<head>
	<title>�������� ����������� - �������� ������� MEGAZOOM.RU</title>
	
	<link rel=STYLESHEET href="style.css" type="text/css">
<meta name="Title" content="�������� ����������� - �������� ������� MEGAZOOM.RU">
		<meta name="Description" content="�������� �����������, ">
		<meta name="KeyWords" content="�������� �����������, ">

</head>


<script> //java-������, ����������� ����� ���� �� ������� ������� � �������
	function open_window(link,w,h) {
		var win = "width="+w+",height="+h+",menubar=no,location=no,resizable=yes,scrollbars=yes";
		newWin = window.open(link,'newWin',win);
		newWin.focus();
	}
	function confirmDelete() { //������������� �������� ������������
		temp = window.confirm('�� ������������� ������ �������� ���� ����������� � ����� ��������?');
		if (temp) { //�������
			window.location="index.php?killuser=yes";
		};
	}
	function validate() { // �������
		if (document.form1.email.value.length<1) {
			alert("���������� ������� ��� e-mail");
			return false;
		};
		if (document.form1.email.value == 'Email') {
			alert("���������� ������� ��� e-mail");
			return false;
		};
		return true;
	}
	function validate_disc() { // ����� ����� ���������
		if (document.formD.nick.value.length<1) {
			alert("���������� ������� ��� ��� ���������");
			return false;
		};

		if (document.formD.topic.value.length<1) {
			alert("���������� ������� ���� ���������");
			return false;
		};

		return true;
	}
	function validate_search() {

		if (document.Sform.price1.value!="" && ((document.Sform.price1.value < 0) || isNaN(document.Sform.price1.value))) {
			alert("� �������� ����1 ������ ���� ������������� �����");
			return false;
		};
		if (document.Sform.price2.value!="" && ((document.Sform.price2.value < 0) || isNaN(document.Sform.price2.value))) {
			alert("� �������� ����2 ������ ���� ������������� �����");
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
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;�������</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td>
	
	 <tr><td><a href="index.php?categoryID=1" class=light>������������</a></td></tr>
<tr><td><a href="index.php?categoryID=5" class=light>������������ ������</a></td></tr>
<tr><td><a href="index.php?categoryID=4" class=light>������� �������</a></td></tr>
<tr><td><a href="index.php?categoryID=2" class=light>���� / �����</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=15" class=lightstandard>DVD-������</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=17" class=lightstandard>���������</a></td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=16" class=lightstandard>�������� ����������</a></td></tr>
<tr><td>&nbsp;&nbsp;<b><font class=light><nobr>> �������� �����������</nobr></font></b>
</td></tr>
<tr><td>&nbsp;&nbsp;<a href="index.php?categoryID=11" class=lightstandard>�������� ������������</a></td></tr>

	
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
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;������������</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td>
	
	 

<font class=middle><b>���� ��� �������������</b></font>

<table cellspacing=0>

<form action="index.php" method=post>

<tr>
 <td>
	<table border=0>
	 <input type="hidden" name="enter" value="1">
	 <tr>
		<td align=right><font class=light>�����:</font></td>
		<td><input type="text" class=ss name="user_login" size=10></td>
	 </tr>
	 <tr>
		<td align=right><font class=light>������:</font></td>
		<td><input name="user_pw" class=ss type="password" size=10></td>
	 </tr>
	</table>
 </td>
 <td>
	<input type="submit" class=redbutton value="OK"><br>
	<a href="index.php?logging=yes" class=lightsmall>������ ������?</a>
 </td>
</tr>

		<input type=hidden name=categoryID value="10">
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
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;������</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td><a href="">��� ������� �����?</a><br>
	<a href="">������� ��������</a><br>
	<a href="">������� ������</a>
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
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;�������</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td>
	
	
	<table cellspacing="2" cellpadding="2" border="0">
<tr>
    <td>
	
	 <form action="index.php?subscribe=true" name="form1" onSubmit="return validate(this);" method=post><tr><td><b><font class=light>29.10.2004</font></b></td></tr><tr><td><font class=middle>������� ����� ��������. �������� ���������� ���� �������. ����� ��� �����!</font><br><br></td></tr><tr><td align=center><font class=light>����������� �� �������:</font><br><input type=text name=email value="Email" class=ss size=15><br><input type=submit class=redbutton value="OK"><input type=hidden name=categoryID value="10"></td></tr></form>
	
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
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;����� � ��������</b></font></td>
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
<td><font class=light>�����:</font></td>
<td><input type="text" class="ss" name="searchstring" size=30 value=""></td>
<td><nobr>&nbsp;<input type="image" border=0 src="images/search.gif">&nbsp;&nbsp;&nbsp;</nobr></td>
</tr>

	

<tr>
<td colspan=3>
<input type="checkbox" name="inside"><font class=light>������ � ���������</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?adv_search=true" class=lightsmall>����������� �����</a>
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
    <td bgcolor="#FFF2F2"><font class=middle><b>&nbsp;&nbsp;�������</b></font></td>
</tr>
<tr>
    <td height="1" bgcolor="#C0C0C0"></td>
</tr>
<tr>
    <td height="60">
	
	 

		<table>
			<form name="shopping_cart_form">
			<tr><td>

	<input class=cart type=text name=gc value="(��� �������)"><br><input type=text class=cart name=ca value=""><br><a class=lightsmall href="index.php?register=yes&order=yes"><nobr>�������� ����� >></nobr></a>

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

	
	

		
<A HREF="http://www.megazoom.ru/">������� �������� �������</A> |
<a class=light href="index.php?register=yes">�����������</a> |
<A HREF="javascript:open_window('cart.php',400,300);">�������</A> |
<a class=light href="index.php?currency=yes">�������� ������</a> |
<A HREF="http://www.megazoom.ru/index.php?show_price=yes">�����-����</A> |
<A HREF="http://www.megazoom.ru/index.php?aux_page=aux1">������</A> |
<A HREF="http://www.megazoom.ru/index.php?aux_page=aux2">������</A> |
<A HREF="http://www.megazoom.ru/links/">������</A>
	
	<br>
	<br>
	 <p>
<table><tr><td><font class="cat"><b>
<a href="index.php" class="cat">�������</a> : <a class="cat" href="index.php?categoryID=2">���� / �����</a> : �������� �����������:<br></b></font></td></tr></table><p></p>
</p><p></p>
<center>
<p><table border=0 cellpadding=5 width=100%><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=68"><img src="products_pictures/canon_mvx200is.gif" border=0 width="60" height="36" alt="���������... ...">
<font class=small><nobr>���������...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=68"> �������� ����������� Canon MVX200i</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=68',400,300);"><img src="images/cart_small.gif" border=0 alt="�������� � �������"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>���� ����: <font  color=red>USD 691</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Canon MVX200i - �������� ����������� ������� miniDV. ������� ��� 1/4,5" 1330000 ��������, ���������� / �������� ���������� 14� / 280�, ���������� ������������ �����������...</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=5"><img src="products_pictures/canon_mv600ss.gif" border=0 width="37" height="60" alt="���������... ...">
<font class=small><nobr>���������...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=5">�������� ����������� Canon MV600 KIT</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=5',400,300);"><img src="images/cart_small.gif" border=0 alt="�������� � �������"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>���� ����: <font  color=red>USD 445</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Canon MV-600i KIT - �������� ����������� ������� miniDV. ������� ��� 1/6" 800000 ��������, �������� Canon, ���������� / �������� ���������� 18� / 360�, ������� ������������, ����������� ������������ �����������...</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=67"><img src="products_pictures/canon_mv600ss.gif" border=0 width="37" height="60" alt="���������... ...">
<font class=small><nobr>���������...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=67">�������� ����������� Canon MV600i KIT</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=67',400,300);"><img src="images/cart_small.gif" border=0 alt="�������� � �������"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>���� ����: <font  color=red>USD 447</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Canon MV-600i KIT - �������� ����������� ������� miniDV. ������� ��� 1/6" 800000 ��������, �������� Canon, ���������� / �������� ���������� 18� / 360�, ������� ������������...</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=70"><img src="products_pictures/panasonic_nv-gs400s.gif" border=0 width="60" height="60" alt="���������... ...">
<font class=small><nobr>���������...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=70">�������� ����������� Panasonic NV-GS400</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=70',400,300);"><img src="images/cart_small.gif" border=0 alt="�������� � �������"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>���� ����: <font  color=red>USD 1193</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Panasonic NV-GS400K - �������� ����������� ������� miniDV. ������� ��� 1/4,7" 4.0 ���. �������� (��� �������), �������� Leica Dicomar, ���������� / �������� ���������� 12� / 600�</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=69"><img src="products_pictures/panasonic_sv-as10gc-sms.gif" border=0 width="45" height="60" alt="���������... ...">
<font class=small><nobr>���������...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=69">�������� ����������� Panasonic SV-AS10GC-S</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=69',400,300);"><img src="images/cart_small.gif" border=0 alt="�������� � �������"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>���� ����: <font  color=red>USD 277</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>Panasonic SV-AS10GC-S - ���������������� ������ �� ���������� �������� ���������� ����������� ����������� � ����������� 2 ����������� � ����� � ������� Motion JPEG. </td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr><tr><td width=50% valign=top>

<p><table width=95% border=0 cellspacing=1 cellpadding=2>
<tr>
<td width=1% align=center valign=top rowspan=2> <!-- product picture -->
	<a href="index.php?productID=4"><img src="products_pictures/sony_dcr-pc109essssss.gif" border=0 width="32" height="60" alt="���������... ...">
<font class=small><nobr>���������...</nobr></font></a>


</td>

<td valign=top width=99%> <!-- different product properties -->

<table width=100% border=0 cellpadding=4>

<tr>
<td valign=top>

<table border=0>
<tr>
<td>

	<a class=cat href="index.php?productID=4">�������� ����������� SONY DCR-PC109E</a></td>

</td>
</tr>
</table>
<br>

	

</td>
<td align=right valign=top> <!-- add to cart link -->

	<a href="javascript:open_window('cart.php?add=4',400,300);"><img src="images/cart_small.gif" border=0 alt="�������� � �������"></a>
</td>
</tr>

<tr>
<td colspan=2>

	<b>���� ����: <font  color=red>USD 679</font></b>


</td>
</tr>

	

<tr>
<!-- description -->

	<td width=99% colspan=2><p>SONY DCR-PC109E - �������� ����������� ������� miniDV. ������� ��� 1/5" 1070000 �������� ��������, �������� Carl Zeiss, ���������� / �������� ���������� 10� / 120�, ������� ������������, ����������� ������������ �����������, ����� ������ Memory Stick Duo / Memory Stick Duo Pro, ����������, ����.���������� ���������� 1152 x 864 ��������, ����������� ������������ 7 lux</td>
<td width=1% valign=top align=right></td></tr></table>

</td>

</tr>
</table>

	</td></tr></table></center>

	
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
