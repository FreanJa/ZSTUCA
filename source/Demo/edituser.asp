<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD >
<TITLE>�༭�û�</TITLE>
<META content="text/html; charset=GB2312" http-equiv=Content-Type>

<style type="text/css">
#content {
	FONT-SIZE: 1.2em
}
.alt {
	BORDER-BOTTOM: #ddd 1px solid; BACKGROUND-COLOR: #f8f8f8; BORDER-TOP: #ddd 1px solid
}
.btn {
	font-size: 20px;
	color: #FFF;
	background-color: #333;
	width: 100px;
	border: 1px solid #333;
	cursor: pointer;
	height: 30px;
	font-family: "΢���ź�";
	border-radius:2px;
}
.btn:hover{
	color: #333;
	background-color: #FFF;
	}
.btn:active{
	color: #333;
	background-color:#C30;
	}
.inpt-line {
	height: 30px;
	width: 200px;
	border: 1px solid #333;
	border-radius:2px;
	font-size: 24px;
	line-height: 30px;
	border-radius:2px;
}
.inpt-textarea {
	width: 200px;
	border: 1px solid #333;
	border-radius:2px;
	font-size: 24px;
	line-height: 30px;
	border-radius:2px;
}
</style>
</head>
	
<!--#include file="db.asp"-->
<%
   	str="select * from[userinfo] where username='" & session("username") & "'"
	rs.open str,conn,1 
%>	
<body>
<DIV id=content>
        <H2><center>�û���Ϣ</center></H2>
        <DIV class="alt">
          <form name="form1" method="post" action="modifyuser.asp">
            <table width="80%" border="0">
              <tr>
                <td width="30%" align="left">�û�ID��</td>
                <td align="left"><%=session("username")%></td>
              </tr>
              <tr>
                <td align="left">��ʵ������</td>
                <td align="left"><input name="realname"  type="text" class="inpt-line"id="realname" value="<%=rs("realname")%>" size="16"></td>
              </tr>
              <tr>
                <td align="left">�Ա�</td>
                <td align="left"><select name="sex" class="inpt-line" id="sex">
     			<option value="��" <% if rs("sex")="��" then response.write "selected" %> >��</option>
     			<option value="Ů" <% if rs("sex")="Ů" then response.write "selected" %> >Ů</option>
                </select></td>
              </tr>
              <tr>
                <td align="left">���ڳ��У�</td>
                <td align="left"><input name="city"  type="text" class="inpt-line" id="city"   value="<%=rs("city")%>" size="16"></td>
              </tr>
              <tr>
                <td align="left">�绰��</td>
                <td align="left"><input name="phone" type="text" class="inpt-line" id="phone" value="<%=rs("phone")%>" size="16"></td>
              </tr>
              <tr>
                <td align="left">�����ʼ���</td>
                <td align="left"><input name="email" type="text" class="inpt-line" id="email" value="<%=rs("email")%>" size="38"></td>
              </tr>
              <tr>
                <td align="left">����ǩ����</td>
                <td align="left"><textarea name="memo"  cols="40" rows="5" class="inpt-textarea" id="memo"><%=rs("memo")%></textarea></td>
              </tr>
            </table>
            <center>
              <p><input name="button" type="submit" class="btn" id="button" style="font-family:'΢���ź�'" value="����">&nbsp;
              <input name="button2" type="button" class="btn" id="button2" style="font-family:'΢���ź�'" onClick="window.close();" value="ȡ��">
            </p></center>
          </form>
        </DIV>
</DIV>
</body>
</html>
