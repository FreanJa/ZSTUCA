<!--#include file="db.asp"-->
<%
u=request.Form("username")
p=request.Form("userpsd")
   str="select * from[userinfo] where username='" & u & "'"
	rs.open str,conn,1
	if rs.recordcount=0  then
		'response.write("<script> alert('�û���������!');window.close();</script>") 
	response.Redirect("Login.asp?err=�û���������!")
	else 
	if rs("password")<>p  then
			'response.write("<script> alert('���벻��ȷ!');window.close();</script>") 
		response.Redirect("Login.asp?err=���벻��ȷ!")
		else 
			session("username")=u
   			application.lock()
   			application("count")=application("count")+1
   			application.unlock()
			if(request.Form("auto")="on")  then
				response.Cookies("LoginUser")=u
				response.Cookies("LoginUser").expires=date()+365
			End if
		response.Redirect("index.asp")
		End  if
	End  if
   
%>