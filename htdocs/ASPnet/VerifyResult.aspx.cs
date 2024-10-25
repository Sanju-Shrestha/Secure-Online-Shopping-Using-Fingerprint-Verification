using System;
using System.Collections.Generic;

using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
public partial class VerifyResult : System.Web.UI.Page
{
    protected string userID;
    protected string message;
    protected string firTestData;
    protected string firDataSize;
    protected void Page_Load(object sender, EventArgs e)
    {
        string fUserID;
        string fFirTestData;
        string fFirDataSize;

        userID = Request.Form["UserID"];
        firTestData = Request.Form["FIRTextData"];

        string tmpPath = Request.ServerVariables["PATH_TRANSLATED"];
        string curPath = tmpPath.Substring(0, tmpPath.LastIndexOf("\\")) + "\\db\\";
        string fileToSearch = System.IO.Path.Combine(curPath, userID + ".fir");
        if (!System.IO.File.Exists(fileToSearch))
        {
            message = "User not found ! Verification failed !";
        }
        else
        {
            using (System.IO.FileStream fs = System.IO.File.OpenRead(fileToSearch))
            {
                System.IO.StreamReader sr = new System.IO.StreamReader(fs);
                fUserID = sr.ReadLine();
                fFirDataSize = sr.ReadLine();
                fFirTestData = sr.ReadLine();
                sr.Close();
            }

            Type BioBSPCOMM = Type.GetTypeFromProgID("BioBSPCOMM.BioBSP");
            object BioBSP = Activator.CreateInstance(BioBSPCOMM);
            object[] parameter = new object[2];
            parameter[0] = firTestData;
            parameter[1] = fFirTestData;
            BioBSPCOMM.InvokeMember("VerifyMatch", System.Reflection.BindingFlags.InvokeMethod, null, BioBSP, parameter);
            string errorCode = BioBSPCOMM.GetProperty("ErrorCode").GetValue(BioBSP, null).ToString();
            if (errorCode.Equals("0"))
            {
                string matchingResult = BioBSPCOMM.GetProperty("MatchingResult").GetValue(BioBSP, null).ToString();
                if (matchingResult.Equals("0"))
                {
                    message = "Matching failed ! Verification failed !";
                }
                else
                {
                    message = "Verification success !!!";
                }
            }
            else
            {
                message = "Matching failed ! Verification failed !";
            }
        }
    }
}