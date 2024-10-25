<%@ Page Language="C#" AutoEventWireup="true" CodeFile="RegistResult.aspx.cs" Inherits="RegistResult" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Registration Result</title>
</head>
<body>
    <br/>
<br/>

<center>
<font size="5"><b>BioBSP ASP Sample</b></font>
<hr/>
<p>
<font color="#800000"><b>Registration</b></font>
</p>
<br/>
<br/>
<br/>

<font size="5" color="#000080"><b>Registration Success !!!</b></font>
<hr noshade="noshade" width="300"/>
<br/>
<br/>
<b>Registration Information</b>
<table border="1" cellpadding="3">
<tr><th width="200">Item</th><th width="100">Value</th></tr>
<tr><td>User ID</td><td><%= userID %></td></tr>
<tr><td>FIR Data size</td><td><%= firDataSize %></td></tr>
</table>
<p>
<a href="Default.aspx">Return to HOME</a>.
</p>
</center>
<br/>
<br/>
<br/>
<hr/>
</body>
</html>
