<!--#include file="db.asp"-->
<%
   on error resume next
	r=request.Form("realname")
   	s=request.Form("sex")
   	c=request.Form("city")
   	p=request.Form("phone")
   	e=request.Form("email")
   	m=request.Form("memo")
   	str = "updata [userinfo] set realname='" & r & "',sex='" & s & "',city='" & c & "',phone='" & p & "',email='"  & e & "',memo='" & m & "' where username='" & session("username") & "'"
   'response.write "<script> alert('" + str + "');</script>"
   	conn.execute str
   'response.write "<script> alert('�޸ĳɹ�!');window.close();</script>"
   	if conn.errors.count>0 then
		response.write "<script> alert('���ݿ����!');history.go(-1)</script>"
	else 
		response.write "<script> alert('�޸ĳɹ�!');</script>"
	end if
%>