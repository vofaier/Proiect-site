<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/My project-5.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Pachete</a></li>
                <li><a href="#">Mobil</a></li>
                <li><a href="#">Net</a></li>
                <li><a href="#">Tv</a></li>
                <li><a href="#">Telefoane</a></li>
                <li><a href="#">Alte servicii</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Hai și tu în rețeaua cu acoperirea #1 din țară!</h1>
            <p>Alege abonamentul NELIMITAT și te bucuri de net și minute nelimitate.</p>
            <a class="main-btn" href="#contact">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text" data-aos="fade-right">
                    <h4>Cartela</h4>
                    <p>Net mobil nelimitat.</p>
                    <a href="#" class="main-btn">abonează-te</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text" data-aos="fade-up">
                    <h4>Internet fix</h4>
                    <p>Viteze de pana la 1000Mbps</p>
                    <a href="#" class="main-btn">abonează-te</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text" data-aos="fade-left">
                    <h4>Televiziune</h4>
                    <p>Peste 200 de canale.</p>
                    <a href="#" class="main-btn">abonează-te</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text" data-aos="slide-left">
            <h2>Acum poti plati online</h2>
            <p>Plătește acum cu un card online și ai un drum în minus de făcut.</p>
            <button class="main-btn">Plătește</button>
        </div>
    </section>

    <footer id="contact" class="contact">
        <div class="contact-heading">
            <h1>Contact</h1>
            <p>Pentru detalii suplimentare despre pachetele noastre, vă rugăm să completați formularul de mai jos și vă vom contacta în cel mai scurt timp.</p>
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
         </script>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Nume Întreg"/>
            <input type="email" name="email" placeholder="Adresă E-Mail"/>
            <textarea name="message" placeholder="Aici scrieți mesajul"></textarea>
            <button class="main-btn contact-btn" type="submit">Trimite</button>
        </form>
    </footer>
</body>
</html>