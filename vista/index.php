<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Midgard</title>
    <link rel="stylesheet" href="css/styleindex.css">
    
    <script src="https://kit.fontawesome.com/e674bba739.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo (2).png" class="logo"></img>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="catalogo.html">Catalogo</a></li>
                    <li><a href="#">Contactanos</a></li>
                    <li><a href="#">Quienes Somos</a></li>
                    <li><a href="loginyregis.php">Registrate/Inicia Sesion</a></li>
                    <div class="search-box">
                        <input type="text"
                        placeholder="¿Que estas buscando?">
                        <button><i class="fa fa-search"></i></button>

                    </div>
                    <i class="fas fa-times"></i>
                </ul>
                <i class="fas fa-bars"></i>

            </nav>
            <div class="header-text">
                <p>Haciendo Sueños Realidad</p>
                <h1>Bienvenido a<span> Midgard</span><br>Inmoviliarias</h1>
            </div>
        </div>
    </div>
    <!-- ----------ABOUT---------- -->
    <!-- ----------SERVICES---------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">Nuestros Servicios</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-info"></i>
                    <h2>Informacion</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nam sit. Soluta quasi
                        officia, alias vitae fugiat fuga exercitationem.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-regular fa-calendar"></i>
                    <h2>Reservaciones</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nam sit. Soluta quasi
                        officia, alias vitae fugiat fuga exercitationem.</p>
                    <a href="#">Learn more</a>

                </div>
                <div>

                    <i class="fa-solid fa-city"></i>
                    <h2>Catalogo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nam sit. Soluta quasi
                        officia, alias vitae fugiat fuga exercitationem.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>

                    <i class="fa-solid fa-business-time"></i>
                    <h2>Fechas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore aliquam nam sit. Soluta quasi
                        officia, alias vitae fugiat fuga exercitationem.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------PORTFOLIO--------- -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">Los Mas populares</h1>
            <div class="work-list">
                <div class="work">
                    <img src="https://github.com/J0NAS0SANCHEZ/MIDGARD_PROYECT/blob/main/Vista/img/Casa1.jpeg?raw=true" alt="">
                    <div class="layer">
                        <h2>Las mejores casas</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam facere quibusdam
                            deserunt dolore vero. Incidunt ea nihil sint. Velit.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="https://github.com/J0NAS0SANCHEZ/MIDGARD_PROYECT/blob/main/Vista/img/Playa1.jpeg?raw=true" alt="">
                    <div class="layer">
                        <h2>Frente a la playa</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam facere quibusdam
                            deserunt dolore vero. Incidunt ea nihil sint. Velit.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="https://github.com/J0NAS0SANCHEZ/MIDGARD_PROYECT/blob/main/Vista/img/Estudiantes1.jpeg?raw=true" alt="">
                    <div class="layer">
                        <h2>Para Estudiantes</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quam facere quibusdam
                            deserunt dolore vero. Incidunt ea nihil sint. Velit.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            <a href="" class="btn">See more</a>
        </div>
    </div>

    <!-- ----------CONTACT---------- -->
    <div id="contact">
        <div class="copyright">
            <p>copyright @ MidgardInvo.</i> 5J</p>
        </div>
    </div>
    
    <script>
        var tabLinks = document.getElementsByClassName('tab-links');
        var tabContents = document.getElementsByClassName('tab-contents');

        function openTab(tabName) {
            for (tabLink of tabLinks) {
                tabLink.classList.remove('active-link');
            }
            for (tabContent of tabContents) {
                tabContent.classList.remove('active-tab');
            }
            event.currentTarget.classList.add('active-link');
            document.getElementById(tabName).classList.add('active-tab');
        }

        // JavaScript for handling the mobile navigation menu
        document.querySelector('.fas.fa-bars').addEventListener('click', function () {
            document.querySelector('nav ul').classList.toggle('show');
        });

        document.querySelector('.fas.fa-times').addEventListener('click', function () {
            document.querySelector('nav ul').classList.remove('show');
        });

    </script>
</body>

</html>