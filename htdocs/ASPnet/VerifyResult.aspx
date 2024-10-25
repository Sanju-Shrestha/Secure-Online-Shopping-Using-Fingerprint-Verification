<%@ Page Language="C#" AutoEventWireup="true" CodeFile="VerifyResult.aspx.cs" Inherits="VerifyResult" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Verification Result</title>
</head>
<body>
    <br/>
<br/>
<center>
<font size="5"><b>BioBSP ASP Sample</b></font>
<hr/>
<p>
<font color="#800000"><b>Verification</b></font>
</p>
<br/>
<br/>
<br/>
<b>User ID : <%= userID %></b>
<br/>
<br/>
<font size="5" color="#000080"><b><%= message %></b></font>
<hr noshade="noshade" width="300"/>
<br/>
<br/>
<br/>
<a href="welcome.php">Return to HOME</a>.
</center>
<br/>
<br/>
<br/>
<hr/>
</body>
</html>
