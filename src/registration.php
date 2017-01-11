<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="rejestracja">
    <meta name="description" content="Rejestracja">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rejestracja</title>

    <link rel="stylesheet" href="css/registration.css">

</head>
<?php
	$cookie_name = "kolor";
	if(!isset($_COOKIE[$cookie_name])) 
	{
		$cookie_value = "niebieski";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	else
	{
		if(strcmp($_COOKIE[$cookie_name],"niebieski")==0)
		{
			print("<body style=\"background-color:#00A0FF\">");
		}	
		else if(strcmp($_COOKIE[$cookie_name],"czerwony")==0)
		{
			print("<body style=\"background-color:#FA5E5E\">");
		}
		else if(strcmp($_COOKIE[$cookie_name],"zielony")==0)
		{
			print("<body style=\"background-color:#00E060\">");
		}
	}
	?>
<div class="container">
    <div class="header col-lg-12 text-center">
        <h1>Rejestracja użytkownika</h1>
    </div>
    <div class="stepwizard">
        <div class="stepwizard-row">
            <div class="stepwizard-step">
                <button type="button" class="stepwizard-step-button  btn btn-default btn-primary btn-circle">1</button>
                <p>Dane konta</p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="stepwizard-step-button btn btn-default btn-circle" >2</button>
                <p>Dane osobowe</p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="stepwizard-step-button  btn btn-default btn-circle" >3</button>
                <p>Zakończenie</p>
            </div>
        </div>
    </div>

    <form id="registration-form" class="form-horizontal" autocomplete="on" action="#" method="post">
        <section class="form-section current " id="registration-form-fieldset1" >
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tel_rg">Telefon</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" id="tel_rg" placeholder="Numer telefonu" autofocus required >
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="email_rg">Email</label>
                    <div class="col-lg-4">
                        <input type="email" class="form-control" id="email_rg" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">Hasło</label>
                    <div class="col-lg-4">
                        <input type="password" class="form-control" id="password" placeholder="Hasło" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="confirm">Powtórz hasło</label>
                    <div class="col-lg-4">
                        <input type="password" class="form-control" id="confirm" placeholder="Powtórz hasło jeszcze raz" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-4 control-label" for="rulesCheckbox_rg">Akceptuję regulamin</label>
                    <div class="col-lg-4">
                        <div class="checkbox">
                            <label for="rulesCheckbox_rg">
                                <input type="checkbox" name="rulesCheckbox" id="rulesCheckbox_rg" value="1">
                            </label>
                        </div>
                    </div>
                </div>


        </section>

        <section class="form-section " id="registration-form-fieldset2" style="display: none">
            <div class="form-group">
                <label class="col-lg-4 control-label" for="name">Imię</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="name" placeholder="Imię" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-4 control-label" for="surname">Nazwisko</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="surname" placeholder="Nazwisko" required autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-4 control-label" for="birthDate">Data urodzenia</label>
                <div class="col-lg-4">
                    <input type="date" class="form-control" id="birthDate" placeholder="Data urodzenia" required autofocus>
                </div>
            </div>
        </section>

        <section class="form-section col-lg-4 col-lg-offset-5" id="registration-form-fieldset3" style="display: none">
            <button id="submit" class="btn btn-default btn-success" type="submit">Wyslij</button>
        </section>

        <div id="navigation-buttons" class="form-navigation col-md-4 col-md-offset-4">
            <a id="previous" class="btn btn-default previous disabled" >Poprzedni</a>
            <button id="next" class="btn btn-primary next" type=button>Dalej</button>
            <input type="submit" class="btn btn-default pull-right" style="display: none">
        </div>

    </form>
</div>

<script type="text/javascript" src="js/registration.js"></script>

</body>
</html>
