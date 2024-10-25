<%@ Page Language=”C#”%>

<html>

<head>

<title>ASP.NET Test Page</title>

</head>

<body>

<%

for(int fontSize = 1; fontSize < 7; fontSize++)

{

Response.Write(“<p style=\”font-size: ” + (fontSize * 10) + “pt; text-align: center;\”>It Works!</p>”);

}

%>

</body>

</html>