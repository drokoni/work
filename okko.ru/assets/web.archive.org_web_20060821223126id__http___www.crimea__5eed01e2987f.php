<!DOCTYPE HTML PUBLIC \'-//W3C//DTD HTML 4.0 Transitional//EN\'>

<html><head><title>Обмен ссылками. Заполните эту форму.</title>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<meta name='keywords' content='форма'>
<meta name='description' content='описание формы'>
<meta name='robot' content='all'>
<link rel='stylesheet' type='text/css' href='admin/design/main.css'>
<link rel='stylesheet' type='text/css' href='admin/design/form.css'>
</head>
<body bgColor=#DB2929>
<SCRIPT language=javaScript>
  function ReadOnly(obj,flag)
  {
    obj.readOnly = flag;
  }
  function SelectAll(obj)
  {
    obj.select();
  }
  function unSelectAll(obj)
  {
    obj.value=obj.value;
  }
</SCRIPT>

<SCRIPT language=JavaScript type=text/JavaScript>
//<!--
function mail(xx)
	{
	rex=true;
	if (window.RegExp)
		{
		st="a";ex=new RegExp(st);
		if (st.match(ex))
			{
			r1=new RegExp("(@.*@)|(\\.\\.)|(@\\.)|(^\\.)");
			r2=new RegExp("^.+\\@(\\[?)[a-zA-Z0-9\\-\\.]+\\.([a-zA-Z]{2,3}|[0-9]{1,3})(\\]?)$");
			b=(!r1.test(xx)&&r2.test(xx));
			}
		else
			{
			rex=false;
			}
		}
	else
		{
		rex=false;
		}
	if(!rex) b=(xx.indexOf("@")>0&&xx.indexOf(".")>0&&xx!=""&&xx!="введите e-mail");
	return (b);
	}

	function checkForm() {

              if(!mail(document.faq.mailtoadmin_mail.value) || document.faq.mailtoadmin_mail.value == '')
                 {		alert ("Пожалуйста, правильно укажите ваш e-mail");
			            document.faq.mailtoadmin_mail.select();
			            document.faq.mailtoadmin_mail.focus();
			            return false;
			     }
                 if (document.faq.mailtoadmin_message.value == '')
			    {
			        alert('Пожалуйста, заполните поле "Вопрос"');
			        document.faq.mailtoadmin_message.select();
			        document.faq.mailtoadmin_message.focus();
			        return false;
			    }
 document.forms.faq.submit();
			}
            //-->
</SCRIPT>
	  </HEAD>
<center>
<table cellspacing=0 cellpadding=0 width="728">
<tr><td align=center valign=top>

<br><div id=LinkExchanger><table cellspacing=0 cellpadding=0 width=810>
<tr><td colspan=2 align=center valign=top>
<table cellspacing=0 cellpadding=0 width=810 bgcolor=#AFB5CC>
<tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=index.php>Вернуться в каталог</a></div></td>
<td align=left rowspan=4 valign=center bgcolor=#AFB5CC>
<NOBR>
<a href=http://www.yandex.ru/cy?base=0&host=crimea-house.biz.ua>
<img src=http://www.yandex.ru/cycounter?crimea-house.biz.ua width=88 height=31 alt=Яндекс-цитирования border=0 class=counter_gray80 onmouseover=this.className='' onmouseout=this.className='counter_gray80'></a>
<!--LiveInternet counter--><script language=JavaScript><!--
document.write('<a href=http://www.liveinternet.ru/click '+
'target=_blank '+'rel=nofollow><img src=http://counter.yadro.ru/hit?t45.10;r'+
escape(document.referrer)+((typeof(screen)=='undefined')?'':
';s'+screen.width+'*'+screen.height+'*'+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+';u'+escape(document.URL)+
';'+Math.random()+
' title=LiveInternet '+
'border=0 width=31 height=31></a>')//-->
</script>
<!--/LiveInternet--></NOBR>&nbsp;&nbsp;</td><td valign=top bgcolor=#AFB5CC width=100%></td>
</tr>
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=../index.php>Вернутся на главную</a></div></td></tr>
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=mailtoadmin.php>Написать админу</a></div></td></tr>
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=catalog.php>Добавить ссылку в другие каталоги</a></div></td></tr>
<tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
</table>
</td></tr><tr><td rowspan=3 valign=top>
      <table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
      <tr><td colspan=3 align=center valign=top bgcolor=#8F95AC><br></td></tr>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=left valign=top>
      <div id=LastLinksHeader>Добавление ссылки</div><br></td></tr>
      <tr><td align=left valign=top>
      <form action=/linkex/submit.php method=POST><div id=FormNickText>Ваше имя или ник:<br><input id=FormNickInput name="nick" type="text" maxlength="16" value=""></div><div id=FormMailText>Ваш адрес электронной почты:<br><input id=FormMailInput name="mail" type="text" maxlength="255" value=""></div><div id=FormCategoryText>Выберите подходящую категорию:<br><select id=FormCategorySelect name="category"><option value=""></option><option>Бизнес / Финансы</option><option>Доски объявлений / Каталоги</option><option>Интернет</option><option>Компьютеры</option><option>Недвижимость</option><option>Образование / Наука</option><option>Отдых / Развлечения</option><option>Работа</option><option>Строительство / Ремонт</option><option>Товары</option><option>Туризм / Путешествия</option><option>Услуги / Сервис</option></select></div><div id=FormHtmlText>HTML-код Вашей текстовой ссылки:<br><textarea id=FormHtmlTextarea name="htmltext"></textarea></div><div id=FormImageText>HTML-код Вашего графического баннера:<br><textarea id=FormImageTextarea name="htmlimage"></textarea></div><div id=FormReturnText>Адрес страницы, где установлена ответная ссылка:<br><input id=FormReturnInput name="urlink" type="text" maxlength="255" value=""></div><input id=FormButton name="submit_link" type="submit" value="Добавить / Исправить"><br><br><div id=CopyRightM><a href=http://samkov.msk.ru target=_blank>Скрипт каталога для обмена ссылками LinkExchanger v2.0</a></div></form></td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=center valign=top bgcolor=#8F95AC><br></td></tr>
      </table>
      </td><td valign=top align=right>
<table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
<tr><td colspan=3 align=center valign=top bgcolor=#8F95AC><br></td></tr>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=left valign=top>
      <div id=LastLinksHeader>Правила добавления</div><br></td></tr>
      <tr><td colspan=3 align=center valign=top>

<div id=RulesShow>Ваша ссылка будет добавлена в каталог только <b>при наличии ответной ссылки</b>, установленной на Вашем сайте.<BR>Прежде чем нажимать кнопку <b>добавить</b> Вы должны установить на своем сайте любой из приведенных ниже HTML-кодов. Скрипт проверит наличие установленного кода и только после этого добавит Вашу ссылку в наш каталог.<BR></div>
      </td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      </table>
      </td></tr>
      
<tr><td valign=top align=right>
<table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=center valign=top>
<div id=CodesShow><textarea onactivate=ReadOnly(this,true); onmouseover=SelectAll(this); onclick=SelectAll(this); onmouseout=unSelectAll(this);><a href="http://www.crimea-house.biz.ua/" style="color: #4525BD"><b><i>Загородная недвижимость Крыма</i></b></a>, <a href="http://www.crimea-house.biz.ua/linkex/">Каталог ссылок</a>, <a href="http://www.crimea-house.biz.ua/linkex/submit.php">обмен ссылками</a>.</textarea><br><a href="http://www.crimea-house.biz.ua/" style="color: #4525BD"><b><i>Загородная недвижимость Крыма</i></b></a>, <a href="http://www.crimea-house.biz.ua/linkex/">Каталог ссылок</a>, <a href="http://www.crimea-house.biz.ua/linkex/submit.php">обмен ссылками</a>.</div>
</td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      </table></td></tr>

<tr><td valign=top align=right>
<table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=center valign=top>
<div id=CodesShow><textarea onactivate=ReadOnly(this,true); onmouseover=SelectAll(this); onclick=SelectAll(this); onmouseout=unSelectAll(this);><a target=_blank href="http://www.crimea-house.biz.ua/"><img src="http://www.crimea-house.biz.ua/images/crimea.gif" width="88" height="31" border="0" alt="Загородная недвижимость Крыма, земельный участок в Крыму, недвижимость Крыма, Севастополя, эллинг, мини гостиница, коттедж, загородный дом, коттеджный поселок, дом в Крыму, дача, домовладение, доходная, коммерческая недвижимость Крыма, недострой, инвестиции. Доска объявлений. Каталог ссылок, обмен ссылками."></a></textarea><br><a target=_blank href="http://www.crimea-house.biz.ua/"><img src="http://www.crimea-house.biz.ua/images/crimea.gif" width="88" height="31" border="0" alt="Загородная недвижимость Крыма, земельный участок в Крыму, недвижимость Крыма, Севастополя, эллинг, мини гостиница, коттедж, загородный дом, коттеджный поселок, дом в Крыму, дача, домовладение, доходная, коммерческая недвижимость Крыма, недострой, инвестиции. Доска объявлений. Каталог ссылок, обмен ссылками."></a></div>
</td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      </table></td></tr>
</div><br></body>
</html>