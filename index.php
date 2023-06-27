<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Emirates | Vlieg beter</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/emirates-logo-badge (1).svg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li id="header1">
                    <a href="overons.php">Over ons</a>
                </li>
                <li id="header2">
                    <a href="informatie.php">Informatie</a>
                </li>
                <li id="header3">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="login-container">
            <div class="login"><a href="login.php">Inloggen</a></div>
        </div>
    </header>
    <div class="head">
        <img src="https://c.ekstatic.net/ecl/explore-destination/beach/young-woman-on-tropical-beach-hp-w1920x480.jpg?h=ZLcOC2qSx_ibQk-lRMJB9Q" alt="">
    </div>
    
        <div class="maincontent">
            <div class="covid-info">
                <h1>Bezoek ons COVID-19-centrum voor huidige bestemmingen, reisadvies en meer.</h1>
            </div>
            <div class="login-link">
                <a href="login.php">Log in om Skywards mijlen te verdienen of in te wisselen.</a>
                <a href="register.php">Registreer je om te beginnen met het verzamelen van Skywards mijlen.</a>
            </div>
            <div class="inputfield">
                <form action="#">
                    <select required>
                        <option value="">Luchthaven van vertrek</option>
                        <option value="airport">Amsterdam</option>
                        <option value="airport">Dubai</option>
                        <option value="airport">Eindhoven</option>
                        <option value="airport">Jakarta</option>
                        <option value="airport">Bangkok</option>
                        <option value="airport">Johannesburg</option>
                        <option value="airport">Kaapstad</option>
                        <option value="airport">Colombo</option>
                    </select>
                    <select required>
                        <option value="">Luchthaven van aankomst</option>
                        <option value="airport">Amsterdam</option>
                        <option value="airport">Dubai</option>
                        <option value="airport">Eindhoven</option>
                        <option value="airport">Jakarta</option>
                        <option value="airport">Bangkok</option>
                        <option value="airport">Johannesburg</option>
                        <option value="airport">Kaapstad</option>
                        <option value="airport">Colombo</option>
                    </select>
                    <input type="date" placeholder="Datum van vertrek" required>
                    <input type="number" placeholder="Passagiers" min="0" max="5" required>
                    <select required>
                        <option value="">Klasse</option>
                        <option value="Economy">Economy class</option>
                        <option value="Business">Business class</option>
                        <option value="First">First class</option>
                    </select>
                    <button type='submit'>Doorgaan</button>
                </form>
            </div>
        </div>
    
    <h1 class="title">Uitgelichte bestemmingen</h1>
    <div class="bestemmingen">
        <div class="row">
            <div class="destination">
                <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/BKK/810x270.jpg" alt="">
                <div class="destination-info">
                    <p>Thailand</p>
                    <h2>Bangkok</h2>
                    <h5>Vanaf €779*</h5>
                </div>
            </div>
            <div class="destination">
                <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/DXB/810x270.jpg" alt="">
                <div class="destination-info">
                    <p>Verenigde Arabische Emiraten</p>
                    <h2>Dubai</h2>
                    <h5>Vanaf €719*</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="destination">
                <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/CGK/810x270.jpg" alt="">
                <div class="destination-info">
                    <p>Indonesië</p>
                    <h2>Jakarta</h2>
                    <h5>Vanaf €865*</h5>
                </div>
            </div>
            <div class="destination">
                <img src="https://c.ekstatic.net/shared/images/destination/v1/airports/CMB/810x270.jpg" alt="">
                <div class="destination-info">
                    <p>Sri lanka</p>
                    <h2>Colombo</h2>
                    <h5>Vanaf €879*</h5>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Volg ons op onze socials </p>
        <ul class="socials">
            <li><a id="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a id="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a id="facebook" href="#" target="blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        <a id="privacybeleid" href="privacy.php">Privacybeleid & Algemene voorwaarden</a>

    </footer>
    <div class="footerbottom">
        <h1>copyright ©2023 Emirates | All Rights Reserved.</h1>
    </div>
</body>
</html>