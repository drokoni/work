<!DOCTYPE HTML PUBLIC \'-//W3C//DTD HTML 4.0 Transitional//EN\'>

<html><head><title>����� ��������. ��������� ��� �����.</title>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<meta name='keywords' content='�����'>
<meta name='description' content='�������� �����'>
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
	if(!rex) b=(xx.indexOf("@")>0&&xx.indexOf(".")>0&&xx!=""&&xx!="������� e-mail");
	return (b);
	}

	function checkForm() {

              if(!mail(document.faq.mailtoadmin_mail.value) || document.faq.mailtoadmin_mail.value == '')
                 {		alert ("����������, ��������� ������� ��� e-mail");
			            document.faq.mailtoadmin_mail.select();
			            document.faq.mailtoadmin_mail.focus();
			            return false;
			     }
                 if (document.faq.mailtoadmin_message.value == '')
			    {
			        alert('����������, ��������� ���� "������"');
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
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=index.php>��������� � �������</a></div></td>
<td align=left rowspan=4 valign=center bgcolor=#AFB5CC>
<NOBR>
<a href=http://www.yandex.ru/cy?base=0&host=crimea-house.biz.ua>
<img src=http://www.yandex.ru/cycounter?crimea-house.biz.ua width=88 height=31 alt=������-����������� border=0 class=counter_gray80 onmouseover=this.className='' onmouseout=this.className='counter_gray80'></a>
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
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=../index.php>�������� �� �������</a></div></td></tr>
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=mailtoadmin.php>�������� ������</a></div></td></tr>
<tr><td align=left colspan=2 valign=top bgcolor=#AFB5CC><div id=AddLink><a href=catalog.php>�������� ������ � ������ ��������</a></div></td></tr>
<tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
</table>
</td></tr><tr><td rowspan=3 valign=top>
      <table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
      <tr><td colspan=3 align=center valign=top bgcolor=#8F95AC><br></td></tr>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=left valign=top>
      <div id=LastLinksHeader>���������� ������</div><br></td></tr>
      <tr><td align=left valign=top>
      <form action=/linkex/submit.php method=POST><div id=FormNickText>���� ��� ��� ���:<br><input id=FormNickInput name="nick" type="text" maxlength="16" value=""></div><div id=FormMailText>��� ����� ����������� �����:<br><input id=FormMailInput name="mail" type="text" maxlength="255" value=""></div><div id=FormCategoryText>�������� ���������� ���������:<br><select id=FormCategorySelect name="category"><option value=""></option><option>������ / �������</option><option>����� ���������� / ��������</option><option>��������</option><option>����������</option><option>������������</option><option>����������� / �����</option><option>����� / �����������</option><option>������</option><option>������������� / ������</option><option>������</option><option>������ / �����������</option><option>������ / ������</option></select></div><div id=FormHtmlText>HTML-��� ����� ��������� ������:<br><textarea id=FormHtmlTextarea name="htmltext"></textarea></div><div id=FormImageText>HTML-��� ������ ������������ �������:<br><textarea id=FormImageTextarea name="htmlimage"></textarea></div><div id=FormReturnText>����� ��������, ��� ����������� �������� ������:<br><input id=FormReturnInput name="urlink" type="text" maxlength="255" value=""></div><input id=FormButton name="submit_link" type="submit" value="�������� / ���������"><br><br><div id=CopyRightM><a href=http://samkov.msk.ru target=_blank>������ �������� ��� ������ �������� LinkExchanger v2.0</a></div></form></td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=center valign=top bgcolor=#8F95AC><br></td></tr>
      </table>
      </td><td valign=top align=right>
<table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
<tr><td colspan=3 align=center valign=top bgcolor=#8F95AC><br></td></tr>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=left valign=top>
      <div id=LastLinksHeader>������� ����������</div><br></td></tr>
      <tr><td colspan=3 align=center valign=top>

<div id=RulesShow>���� ������ ����� ��������� � ������� ������ <b>��� ������� �������� ������</b>, ������������� �� ����� �����.<BR>������ ��� �������� ������ <b>��������</b> �� ������ ���������� �� ����� ����� ����� �� ����������� ���� HTML-�����. ������ �������� ������� �������������� ���� � ������ ����� ����� ������� ���� ������ � ��� �������.<BR></div>
      </td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      </table>
      </td></tr>
      
<tr><td valign=top align=right>
<table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=center valign=top>
<div id=CodesShow><textarea onactivate=ReadOnly(this,true); onmouseover=SelectAll(this); onclick=SelectAll(this); onmouseout=unSelectAll(this);><a href="http://www.crimea-house.biz.ua/" style="color: #4525BD"><b><i>���������� ������������ �����</i></b></a>, <a href="http://www.crimea-house.biz.ua/linkex/">������� ������</a>, <a href="http://www.crimea-house.biz.ua/linkex/submit.php">����� ��������</a>.</textarea><br><a href="http://www.crimea-house.biz.ua/" style="color: #4525BD"><b><i>���������� ������������ �����</i></b></a>, <a href="http://www.crimea-house.biz.ua/linkex/">������� ������</a>, <a href="http://www.crimea-house.biz.ua/linkex/submit.php">����� ��������</a>.</div>
</td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      </table></td></tr>

<tr><td valign=top align=right>
<table cellspacing=0 cellpadding=0 width=400 bgcolor=#AFB5CC>
      <tr><td align=left valign=top><img src=images/login_lug.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rug.gif width=9 height=9 border=0></td></tr>
      <tr><td colspan=3 align=center valign=top>
<div id=CodesShow><textarea onactivate=ReadOnly(this,true); onmouseover=SelectAll(this); onclick=SelectAll(this); onmouseout=unSelectAll(this);><a target=_blank href="http://www.crimea-house.biz.ua/"><img src="http://www.crimea-house.biz.ua/images/crimea.gif" width="88" height="31" border="0" alt="���������� ������������ �����, ��������� ������� � �����, ������������ �����, �����������, ������, ���� ���������, �������, ���������� ���, ���������� �������, ��� � �����, ����, ������������, ��������, ������������ ������������ �����, ���������, ����������. ����� ����������. ������� ������, ����� ��������."></a></textarea><br><a target=_blank href="http://www.crimea-house.biz.ua/"><img src="http://www.crimea-house.biz.ua/images/crimea.gif" width="88" height="31" border="0" alt="���������� ������������ �����, ��������� ������� � �����, ������������ �����, �����������, ������, ���� ���������, �������, ���������� ���, ���������� �������, ��� � �����, ����, ������������, ��������, ������������ ������������ �����, ���������, ����������. ����� ����������. ������� ������, ����� ��������."></a></div>
</td></tr>
      <tr><td align=left valign=top><img src=images/login_ldg.gif width=9 height=9 border=0></td><td valign=top bgcolor=#AFB5CC width=100%></td><td align=right valign=top><img src=images/login_rdg.gif width=9 height=9 border=0></td></tr>
      </table></td></tr>
</div><br></body>
</html>