<%@ Page Language="vb" AutoEventWireup="false" MasterPageFile="~/Site1.Master" CodeBehind="pricelist.aspx.vb" Inherits="CityBike.pricelist" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form id="form1" runat="server">
        <header>
	<h1 style="margin-left:550px;margin-right:auto">Cennik</h1>
</header>

<figure>
</figure>
        <em/>
        <div style="margin-left:550px;margin-right:auto" id="cennik">
        <asp:GridView ID="GridView1" runat="server" AllowPaging="True" AllowSorting="True" AutoGenerateColumns="False" CellPadding="4" DataSourceID="SqlDataSource1" ForeColor="#333333" GridLines="None">
            <AlternatingRowStyle BackColor="White" />
            <Columns>
                <asp:BoundField DataField="opis" HeaderText="opis" SortExpression="opis" />
                <asp:BoundField DataField="cena" HeaderText="cena" SortExpression="cena" />
            </Columns>
            <EditRowStyle BackColor="#2461BF" />
            <FooterStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
            <HeaderStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
            <PagerStyle BackColor="#2461BF" ForeColor="White" HorizontalAlign="Center" />
            <RowStyle BackColor="#EFF3FB" />
            <SelectedRowStyle BackColor="#D1DDF1" Font-Bold="True" ForeColor="#333333" />
            <SortedAscendingCellStyle BackColor="#F5F7FB" />
            <SortedAscendingHeaderStyle BackColor="#6D95E1" />
            <SortedDescendingCellStyle BackColor="#E9EBEF" />
            <SortedDescendingHeaderStyle BackColor="#4870BE" />
        </asp:GridView>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:Database1ConnectionString %>" SelectCommand="SELECT [opis], [cena] FROM [Table]"></asp:SqlDataSource>
        </div>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></figcaption>
</em>
    </form>
</asp:Content>



