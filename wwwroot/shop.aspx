<%@ Page Language="vb" AutoEventWireup="false" MasterPageFile="~/Site1.Master" CodeBehind="shop.aspx.vb" Inherits="CityBike.shop" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form id="form1" runat="server" style="margin-left: 278px">
        
        <asp:RadioButtonList id="RadioButtonList1" runat="server" OnSelectedIndexChanged="Index_Changed" AutoPostBack="true">
            <asp:ListItem selected="true" Value="1">Rowery miejskie</asp:ListItem>
            <asp:ListItem Value="2">Rowery MTB góskie</asp:ListItem>
            <asp:ListItem Value="3">Rowery dziecięce</asp:ListItem>
         </asp:RadioButtonList>

        <asp:CheckBoxList id="rowery_miejskie_checkboxlist" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatLayout="Flow"
           TextAlign="Right"
           runat="server">
      </asp:CheckBoxList>

        <asp:CheckBoxList id="rowery_gorskie_checkboxlist" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatLayout="Flow"
           TextAlign="Right"
           runat="server">
      </asp:CheckBoxList>

        <asp:CheckBoxList id="rowery_dzieciece_checkboxlist" 
           AutoPostBack="True"
           CellPadding="5"
           CellSpacing="5"
           RepeatLayout="Flow"
           TextAlign="Right"
           runat="server">
      </asp:CheckBoxList>
         <br/>
        <div >
            <asp:Button ID="add_to_basket_button" runat="server" Text="Dodaj do koszyka" onclick="Add_To_Basket_Click" />
        <br/>
        <asp:Button ID="order_summary_button" runat="server" Text="Podsumowanie zamówienia" onclick="Order_Summary_Click" />

        </div>

        <p >Liczba produktow w koszyku : <asp:Label ID="liczba_w_koszyku_label" runat="server"></asp:Label></p>

        

    </form>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</asp:Content>

