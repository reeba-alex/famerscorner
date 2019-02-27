<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="reg.aspx.cs" Inherits="WebApplication1.reg" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
            background-color: #FFCCCC;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <table class="auto-style1">
            <tr>
                <td colspan="2">
                <center>   <asp:Label ID="Label1" runat="server" Text="Registration Form"></asp:Label></center> 
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label2" runat="server" Text="Name"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label3" runat="server" Text="Address"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox2" runat="server" TextMode="MultiLine"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label4" runat="server" Text="Gender"></asp:Label>
                </td>
                <td>
                    <asp:RadioButtonList ID="RadioButtonList1" runat="server" RepeatDirection="Horizontal">
                        <asp:ListItem>Male</asp:ListItem>
                        <asp:ListItem>Female</asp:ListItem>
                    </asp:RadioButtonList>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label5" runat="server" Text="Course"></asp:Label>
                </td>
                <td>
                    <asp:DropDownList ID="DropDownList1" runat="server">
                        <asp:ListItem>BCA</asp:ListItem>
                        <asp:ListItem>MCA</asp:ListItem>
                    </asp:DropDownList>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label8" runat="server" Text="Email"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox3" runat="server" TextMode="Email"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label9" runat="server" Text="User Name"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox4" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label10" runat="server" Text="Password"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox5" runat="server" TextMode="Password"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label11" runat="server" Text="Confirm Password"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox6" runat="server" TextMode="Password"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:Label ID="Label12" runat="server" Text="Photo"></asp:Label>
                </td>
                <td>
                    <asp:FileUpload ID="FileUpload1" runat="server" />
                </td>
            </tr>
        </table>
    <div>
    
     <center>   <asp:CheckBox ID="CheckBox1" runat="server" Text="I Accept All Terms &amp; Condition" /></center>
    
    </div>
    <center> <asp:Button ID="Button1" runat="server" Text="SUBMIT" /></center> 
    </form>
</body>
</html>
