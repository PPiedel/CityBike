<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="confirm.aspx.vb" MasterPageFile="~/Site1.Master" Inherits="CityBike.confirm" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
       <div  >
        <h2 style="margin-left: 278px">Podsumowanie zamówienia : </h2>

        <form id="form1" runat="server" style="margin-left: 278px">
            <h2>Dziękujemy za zakupy w naszym sklepie.</h2>
            <h2>Łączny koszt zamówienia: </h2>
            <asp:Label ID="kosztLabel" runat="server"></asp:Label>

            <h2>Płatność : </h2>
            <asp:Label ID="platnoscLabel" runat="server"></asp:Label><br><br><br>

            <asp:Button ID="Cofnij_button" runat="server" Text="Cofnij do listy rowerów" OnClick="Cofnij_Click" />
        </form>
		
		
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div>
</asp:Content>

