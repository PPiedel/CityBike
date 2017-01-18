<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="summary.aspx.vb" Inherits="CityBike.summary" %>

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


	<style type= "text/css">
         h1      {font-family: halvetica,sans-serif; color:blue; margin-left:6ex; font-size:300% }
         h4      {font-size:30px; text-align:center;}
         p       {font-size:16pt;
                 font-family:arial;
				 padding: 5px;
				 }
         .listy  {font-size:2em}
         </style>

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
    <div  >
        <h2 style="margin-left: 278px">Podsumowanie zamówienia : </h2>

        <form id="form1" runat="server" style="margin-left: 278px">
            <h2>Dziękujemy za zakupy w naszym sklepie.</h2>
			<h2>Łączny koszt zamówienia: </h2> 
			<asp:Label ID="kosztLabel" runat="server"></asp:Label>
			
			<h2>Płatność : </h2> 
			<asp:Label ID="platnoscLabel" runat="server"></asp:Label>
			
			<asp:Button ID="Cofnij_button" runat="server" Text="Cofnij do listy rowerów" onclick="Cofnij_Click" />
        </form>
		
		
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
   

  
</body>
</html>

