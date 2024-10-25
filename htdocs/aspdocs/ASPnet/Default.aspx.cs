using System;
using System.Collections.Generic;

using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected string version;
    protected int captureTimeout;
    protected int securityLevel;
    protected int enrollImgaeQuality;
    protected int verifyImageQuality;
    protected void Page_Load(object sender, EventArgs e)
    {
        Type BioBSPCOMM = Type.GetTypeFromProgID("BioBSPCOMM.BioBSP");
        object BioBSP = Activator.CreateInstance(BioBSPCOMM);
        string majorVersion = BioBSPCOMM.GetProperty("MajorVersion").GetValue(BioBSP, null).ToString();
        string minorVersion = BioBSPCOMM.GetProperty("MinorVersion").GetValue(BioBSP, null).ToString();
        version = majorVersion + "." + minorVersion;

        captureTimeout = Convert.ToInt32(BioBSPCOMM.GetProperty("DefaultTimeout").GetValue(BioBSP, null));
        securityLevel = Convert.ToInt32(BioBSPCOMM.GetProperty("SecurityLevel").GetValue(BioBSP, null));
        enrollImgaeQuality = Convert.ToInt32(BioBSPCOMM.GetProperty("EnrollImageQuality").GetValue(BioBSP, null));
        verifyImageQuality = Convert.ToInt32(BioBSPCOMM.GetProperty("VerifyImageQuality").GetValue(BioBSP, null));
    }
}