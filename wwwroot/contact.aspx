<%@ Page Language="vb" AutoEventWireup="false" MasterPageFile="~/Site1.Master" CodeBehind="contact.aspx.vb" Inherits="CityBike.contact" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form runat="server" style="margin-left: 278px">

    Imię:<br/>
    <asp:TextBox id="TextBox1" runat="server" style="margin-left: 120px"/><br/>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="Podaj imię" ControlToValidate="TextBox1" Display="Dynamic"></asp:RequiredFieldValidator>
    <br/><br/>

    Nazwisko:<br/>
    <asp:TextBox id="TextBox2" runat="server" RequiredFieldValidator="" ErrorMessage="Pole wymagane" style="margin-left: 120px"/><br/>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="Podaj nazwisko" ControlToValidate="TextBox2" Display="Dynamic"></asp:RequiredFieldValidator>
    <br/><br/>


    E-mail:<br/>
    <asp:TextBox id="TextBox3" runat="server" RequiredFieldValidator="" ErrorMessage="Pole wymagane" style="margin-left: 120px"/><br/>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Nie podano maila" ControlToValidate="TextBox3" Display="Dynamic"></asp:RequiredFieldValidator>
    <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ErrorMessage="Podano błędny mail" ControlToValidate="TextBox3" Display="Dynamic" ValidateRequestMode="Inherit" ForeColor="Red" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>    
    <br/><br/>


    Wiadomość:<br/>
    <asp:TextBox id="TextBox4" rows="5" TextMode="multiline" runat="server" RequiredFieldValidator="" ErrorMessage="Pole wymagane" style="margin-left: 120px"/><br/>
    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="Pamiętaj o napisaniu wiadomości" ControlToValidate="TextBox4" Display="Dynamic"></asp:RequiredFieldValidator>
        
    <br/><br/>


    <asp:Button ID="Button1" runat="server" Text="Wyślij" />
        <p>
    <asp:Label ID="Label1" runat="server" Text="Poprawnie wysłano" Visible="False"></asp:Label>
        </p>
</form>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</asp:Content>

  