using System;
using System.Collections.Generic;

using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class RegistResult : System.Web.UI.Page
{
    protected string userID;
    protected string firTestData;
    protected int firDataSize;
    protected void Page_Load(object sender, EventArgs e)
    {
        userID = Request.Form["UserID"];
        firTestData = Request.Form["FIRTextData"];
        firDataSize = firTestData.Length;

        string tmpPath = Request.ServerVariables["PATH_TRANSLATED"];
        string curPath = tmpPath.Substring(0,tmpPath.LastIndexOf("\\")) + "\\db\\";
        string fileToCreate = System.IO.Path.Combine(curPath, userID + ".fir");
        if (!System.IO.File.Exists(fileToCreate))
        {
            using (System.IO.FileStream fs = System.IO.File.Create(fileToCreate))
            {

                System.IO.StreamWriter sw = new System.IO.StreamWriter(fs);
                sw.WriteLine(userID);
                sw.WriteLine(firDataSize);
                sw.WriteLine(firTestData);
                sw.Close();
            }
        }

    }
}