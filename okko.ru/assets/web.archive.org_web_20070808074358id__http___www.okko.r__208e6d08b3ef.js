	<!--
	function isFormValid()
	{
	var x = document.forms[0].email.value;
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
	if (document.forms[0].fio.value == "")
	{ alert("������� ���������� �������");
	  document.forms[0].fio.focus(); 
	   return false; }
	   
	   
	if (document.forms[0].email.value == "")
	{ alert("�� ������ E-mail ��� �����");
	  document.forms[0].email.focus(); 
	   return false; }	
	   
	if (filter.test(x) == false)
	{
	     alert('������ ���������� E-mail');
		 document.forms[0].email.focus(); 
		 return false; 
	}   
	
	if (document.forms[0].notes.value == "")
	{ alert("�� ������ ����� ���������");
	  document.forms[0].notes.focus(); 
	   return false; } 
	   
	if (document.forms[0].secretcode.value == "")
	{ alert("������� ��� ��������� �� ��������");
	  document.forms[0].secretcode.focus(); 
	   return false; }    
	       
	  document.forms[0].submit();
	  return true;     
	}
	//-->

