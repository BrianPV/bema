<!DOCTYPE html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewpoer" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeMarketing</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleAbout.css">
    <link rel="stylesheet" href="css/styleCategory.css">
    <link rel="stylesheet" href="css/styleContact.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500i,700&display=swap" rel="stylesheet">

    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
    
    <!-- Slider links-->
    <link rel="stylesheet" href="css/styleSlider.css">

    <!-- Imagenes -->
    <link rel="preload" href="resource/portada2.png" as="image" media="(min-width: 460px)">
    <link rel="preload" href="resource/portada3.png" as="image" media="(min-width: 460px)">
    <link rel="preload" href="resource/portada4.png" as="image" media="(min-width: 460px)">
       
    
    

</head>
<body> 
    <div class="slider">
        <div class="load">
        </div>
        <div class="content">
            <!-- Header -->    
            <div>
                <div class="container navbar">
                    <header>
                        <div class="logo">
                            <h1>BeMa</h1>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="#about">Acerca de</a></li>
                                <li><a href="#work">Trabajos</a></li>
                                <li><a href="#contact">Contacto</a></li>
                            </ul>
                        </nav>
                    </header> 
                </div>
                <!-- Primera parte: home page -->
                <div class="container main-info-section">
                    
                        <div class="text">
                            <h1>
                                <span class="h-amarillo">B</span>
                                <span class="h-azulClaro">e</span>
                                <span class="h-negro">M</span>
                                <span class="h-azulFuerte">a</span>
                            </h1>
                            <br>
                            <a href="#contact">Contactanos</a>
                        </div>                        
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda parte: Seccion acerca de nosotros-->
    <div class="container about" id="about">
        <h1>Acerca de nosotros</h1>
        <div class="about-me-info">
            <p>En el 2019 empezó el sueño por hacer algo más grande que nosotros y ahí comenzó todo.
                <br><br>
                Somos BeMa  una agencia creativa  dedicada  a crear contenido para diferentes marcas. Desde nuestra oficina en Manzanillo, ayudamos a nuestros clientes a gestionar su marca y sus campañas, con sensibilidad estética y creativa, pero también con mentalidad de negocio.                
                <br><br>
                No se trata solo de ideas, si no de hacerlas a lo <b>GRANDE</b>, y en BeMa nos gusta hacer las cosas a lo GRANDE.</p>
                <br>
                En tan poco tiempo que llevamos hemos alcanzando bastante <b>PERSONAS. 
                <br>
                ¿Increible, no?</b>
                <div class="containerBox">
                    <div class="row">
                        <div id="uno" class="column">
                            <img class="imgIcon" src="resource/icons/equipo.png">
                            
                            <p class="lowText">Personas alcanzadas</p>
                            <p class="highText">3,000,000+</p>
                            
                            
                        </div>
                        <div id="dos" class="column">
                            <img class="imgIcon" src="resource/icons/me-gusta.png">
                            <p class="lowText"> Likes conseguidos </p>
                            <p class="highText">10,000,000+</p>
                        </div>
                    </div>
                    <div class="row">
                        <div id="tres" class="column">
                            <img class="imgIcon" src="resource/icons/trabajo.png">
                            <p class="lowText">Empresas</p>
                            <p class="highText">15</p>
                        </div>
                        <div id="cuatro" class="column">
                            <img class="imgIcon" src="resource/icons/sonreir.png">
                            <p class="lowText">Gente feliz</p>
                            <p class="highText">¡Muchas!</p>
                        </div>
                    </div>
                </div>
        </div>
        <!--
        <img src="resource/marisol1.png" class="imgAbajo">
        -->
    </div>

    <!-- Tercera parte: Seccion de nuestros trabajos  -->
    <div class="container work" id="work">
        <h1>Trabajos</h1>
            <div class="categorias" id="categorias">
                <a href="#" class="activo"> Todos </a>
                <a href="#"> Fotografia</a>
                <a href="#"> Diseño</a>
                <a href="#"> Logos</a>
            </div>
            <section class="grid" id="grid">
                <div class="item">
                    <div class="item_contenido" 
                    data-categoria="fotografia">
                        <img src="resource/portada1.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="item_contenido"
                        data-categoria="diseño">
                        <img src="resource/marisol1.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="item_contenido"
                        data-categoria="diseño">
                        <img src="resource/portada5.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="item_contenido"
                        data-categoria="logo">
                        <img src="resource/portada6.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="item_contenido"
                        data-categoria="fotografia">
                        <img src="resource/platillo1.jpg">
                    </div>
                </div>
                <div class="item">
                    <div class="item_contenido"
                        data-categoria="logo">
                        <img src="resource/pollo.jpg">
                    </div>
                </div>

            </section>
    </div>

    <!-- Cuarta parte: Contactanos -->
    <div class="container contact" id="contact">
        <h1>Contactanos</h1>
        <form method="POST" action="correo.php">
            <input id="firstName" type="text" name="firstName" placeholder="Nombre">
            <input id="lastName" type="text" name="lastName" placeholder="Apellido">
            <input id="phone" type="text" name="phone" placeholder="Telefono">
            <input id="email" type="text" name="email" placeholder="Correo">
            <textarea id="message" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <input id="send" name="send" type="submit" value="ENVIAR"> 
        </form>
        <br>
    </div>
    
    <!-- Footer -->
    <footer>
        <hr>
        <p>2020. Copyright. Todos los derechos reversados</p>
    </footer>

    <!--Scrips de la libreria Muuri-->
    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


    

