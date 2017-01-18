<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="shop.aspx.vb" Inherits="CityBike.shop" %>

<!doctype html>
<html class="no-js" lang="pl">
<head>
    <meta charset="utf-8">
    <title>Sklep internetowy</title>
    <meta name="description" content="Wroclawski rower miejski">
    <meta name="keywords" content="rower, wroclaw, miejski"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Pawel Piedel, Ernest Dziemidowicz"/>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="main.css">

 </head>
<body>
    <nav class="navigation">
         <ul class="left">
             <li class="active" ><a href="index.aspx">Jak zacząć ? </a></li>
             <li><a href="pricelist.aspx">Cennik</a></li>
             <li><a href="contact.aspx">Mam pytanie</a></li>
             <li><a href="supersite.html">Superstrona</a></li>
             <li><a href="shop.aspx">E-sklep</a></li>
         </ul>
 </nav>



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
         <br>
        <div >
            <asp:Button ID="add_to_basket_button" runat="server" Text="Dodaj do koszyka" onclick="Add_To_Basket_Click" />
        <br>
        <asp:Button ID="order_summary_button" runat="server" Text="Podsumowanie zamówienia" onclick="Order_Summary_Click" />

        </div>

        <p >Liczba produktow w koszyku : <asp:Label ID="liczba_w_koszyku_label" runat="server"></asp:Label></p>

        

    </form>

    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</body>
</html>
