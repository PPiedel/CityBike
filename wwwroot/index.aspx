﻿<%@ Page Language="vb" AutoEventWireup="false" MasterPageFile="~/Site1.Master" CodeBehind="index.aspx.vb" Inherits="CityBike.index" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <div class="container">
	<h1>Jak zacząć ?</h1>
    <hr/> <!-- horizontal line -->
    <div id="1">

        <div class="slider-container">
            <ul id="slides">
                <li class="slide showing"><img style="margin-left:6ex;" width="700" height="470"  alt="1" src="img/1.jpg"/>
                </li>
                <li class="slide"><img style="margin-left:6ex;" width="700" height="470" src="img/2.jpg" alt="2"/></li>
                <li class="slide"><img style="margin-left:6ex;" width="700" height="470" src="img/3.jpg" alt="3"/></li>
                <li class="slide"><img style="margin-left:6ex;" width="700" height="470" src="img/4.jpg" alt="4"/></li>
            </ul>
            <div class="buttons">
                <button style="margin-left:6ex;" class="controls" id="previous">Previous</button>
                <button class="controls" id="pause">Pause</button>
                <button class="controls" id="next">Next</button>
            </div>

        </div>
            
        <div id="s" class="article">
             <article><p>
            <br/><br/><br/><br/><br/><b>Rowery miejskie</b> to świetne rozwiązanie sprawy komunikacji.
            Możesz wypożyczyć rower na jednej stacji, pojechać w wybrane
            miejsce i oddać przy kolejnej stacji.
			Dzięki elektrozamkom proces wynajmu znacznie się uprości. Podstawowe czynności wyglądają dokładnie tak samo, jak do tej pory. Wystarczy podejść do terminala i na klawiaturze komputera nacisnąć przycisk „Wypożycz”. Następnie zalogować się, podając numer telefonu komórkowego i PIN nadany podczas rejestracji i podać numer roweru, który chcemy wynająć. Tutaj nowość! Wybrany rower zostanie zwolniony automatycznie.
			Zapięcie szyfrowe, z którego wrocławianie korzystali do tej pory, stanie się przydatnym dodatkiem, kiedy użytkownik będzie zabezpieczał rower na czas przerwy podczas wynajmu (np. na kawę czy zakupy) bądź podczas zwrotu na stacji, na której zajęte będą wszystkie elektrozamki. Dlatego warto zapisać sobie kod do zamka szyfrowego, który zostaje podany na wyświetlaczu w czasie wypożyczania. Jeżeli zdarzy się, że rower na stacji jest zabezpieczony linką – wystarczy odblokować ją właśnie za pomocą tego kodu.
			Wypożyczanie będzie jeszcze wygodniejsze, gdy połączymy swoje konto użytkownika WRM z dowolną kartą zbliżeniową (np. Urban Card). Aby zintegrować kartę z systemem, wystarczy za pierwszym razem przyłożyć ją do czytnika stacji, a następnie podać numer telefonu i PIN. Od tego momentu przy wypożyczaniu można logować się już za pomocą tej karty.
        </p></article>
        </div>

       
        <div class ="article" id="dynamicImageContainer">
        </div>

        <div class="article">
        <article><p>
                Aby zacząć wystarczy się zarejestrować i przy stacji
                wpisać <b>indywidualny kod</b>, który pozwili na wypożyczenie roweru.
				Kolejna nowość, wynikająca z wprowadzenia elektrozamków, dotyczy momentu zwrotu roweru. Żeby to zrobić – wystarczy tylko wstawić rower do elektrozamka. Prawidłowy zwrot zostanie potwierdzony sygnałem dźwiękowym. W takim przypadku, żadne inne czynności przy stacji nie są już wymagane. Jeśli na stacji nie ma wolnego miejsca, przypinamy rower zamkiem szyfrowym do innego roweru lub ucha stojaka, przetasowujemy cyfry, podchodzimy do terminala, przyciskamy „Zwrot” i postępujemy zgodnie ze wskazówkami podanymi na wyświetlaczu. To taka sama forma zwrotu, z jakiej wrocławianie korzystali wcześniej.
        </p></article>
         </div>


        
    </div>
    <hr/> <!-- horizontal line -->

    <div id="2" class="listy">
        <ul>


            <li><details>
                <summary>Stacje działające:</summary>

                <ul>
                    <li>Grabiszyńska</li>
                    <li>Cmentarz</li>
                    <li>Plac Grunwaldzki</li>
                    <li>Jeszcze inna</li>
                </ul>
            </details></li>
            <li><details>
                <summary>Stacje planowane:</summary>
                <ul>
                    <li>Hotel Wrocław</li>
                    <li>Hallera</li>
                    <li>Kolejna stacja</li>
                </ul>
            </details></li>

        </ul>
    </div>

</div>
</asp:Content>








 
 
 


