<%@ Page Language="vb" AutoEventWireup="false" MasterPageFile="~/Site1.Master" CodeBehind="pricelist.aspx.vb" Inherits="CityBike.pricelist" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <header>
	<h1 style="margin-left:5ex">Cennik</h1>
</header>

<figure>
<table style="width:75%">
    <tr>
        <th colspan="2">Godzina</th>
        <th colspan="2">00:00-12:00</th>
        <th colspan="2">12:00-24:00</th>
    </tr>
    <tr>
        <th rowspan="2">
            <a href="https://dl.dropboxusercontent.com/u/47765666/pricelist.JPG">Pobierz</a>
            <a href="img/pricelist.JPG">(Mirror)</a></th>
        <th>Wiek</th>
        <th>&lt;18</th>
        <th>&gt;18</th>
        <th>&lt;18</th>
        <th>&gt;18</th>
    </tr>
    <tr>
        <th>Cena</th>
        <th>Za darmo</th>
        <th>Za darmo</th>
        <th>Za darmo</th>
        <th>Za darmo</th>
    </tr>
</table>
</figure>
<figcaption><em/>Cennik obowiązuje do odwołania<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></figcaption>
</asp:Content>



