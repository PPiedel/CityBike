﻿<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="pricelist.aspx.vb" Inherits="CityBike.pricelist" %>

<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="stylesheet" href="css/main.css">
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 5px;
            text-aligh: left;
        }
		h1      {font-family; halvetica,sans-serif; color:blue; margin-left:6ex; font-size:300% }
    </style>
    <meta charset="UTF-8">
    <title>Pricelist</title>
</head>
<body>
 <nav class="navigation">
         <ul class="left">
             <li class="active" ><a href="index.aspx">Jak zacząć ? </a></li>
             <li><a href="pricelist.aspx">Cennik</a></li>
             <li><a href="contact.aspx">Mam pytanie</a></li>
             <li><a href="supersite.html">Superstrona</a></li>
         </ul>
 </nav>
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
<figcaption><em>Cennik obowiązuje do odwołania<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></figcaption>
</body>
</html>

</html>
