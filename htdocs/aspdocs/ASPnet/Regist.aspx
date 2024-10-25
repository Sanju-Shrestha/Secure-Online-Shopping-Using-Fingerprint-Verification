<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Regist.aspx.cs" Inherits="Regist" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Registration</title>
    <object classid="CLSID:E730808D-30BE-32FE-B057-0B0EA7F79060"		 
		height="0" width="0">
    </object>

    <script type="text/javascript" language='javascript'>
        function regist() 
         {
            var err, payload;
            var result = false;

            // Check ID is not NULL
            if (document.MainForm.UserID.value == '') {
                alert('Please enter user id !');
                return (false);
            }

            try // Exception handling
	        {
                DEVICE_AUTO_DETECT = 255;
                payload = document.getElementById("UserID").value;
                var objBioBSP = new ActiveXObject('BioBSPCOMM.BioBSP');
                // Open device. [AUTO_DETECT]
                // You must open device before enroll.
                objBioBSP.Open(DEVICE_AUTO_DETECT);

                err = objBioBSP.ErrorDescription; // Get error code	
                if (err != " ")		// Device open failed
                {
                    alert('Device open failed !');
                }
                else {
                    // Enroll user's fingerprint.
                    objBioBSP.Enroll(payload);
                    err = objBioBSP.ErrorDescription; // Get error code
                    if (err != " ")		// Enroll failed
                    {
                        alert('Registration failed ! Error Number : [' + err + ']');
                    }
                    else	// Enroll success
                    {
                        // Get text encoded FIR data from NBioBSP module.
                        document.MainForm.FIRTextData.value = objBioBSP.TextEncodeFIR;
                        alert('Registration success !');
                        result = true;
                    }

                    // Close device. [AUTO_DETECT]
                    objBioBSP.Close(DEVICE_AUTO_DETECT);
                }
                objBioBSP = 0;
            }
            catch (e) {
                alert(e.message);
                return (false);
            }

            if (result) {
                // Submit main form
                document.MainForm.submit();
            }
            return result;
        }
    </script>
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

<form action="RegistResult.aspx" name="MainForm" method='post' onsubmit="javascript:return false;">
<input type="hidden" name="FIRTextData"/>

<table>
<tr><td>User ID</td>
	<td>: <input type="text" name="UserID" id="UserID" size="20" style="width: 145px"/></td></tr>
</table>

&nbsp;<input type="button" onclick="regist()" 
        value="Click here to register your fingerprint" style="width: 304px"/>
</form>
</center>
<br/>
<br/>
<br/>
<hr/>
</body>
</html>
