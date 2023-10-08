<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/ca2716a385.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <meta charset="UTF-8">
    <title>Eclipse UX</title>
</head>
<body>

<?php include 'nav.html' ?>

    <link rel="stylesheet" type="text/css" href="css/inicio.css">
   
    <section class="info-section">
        <video autoplay loop muted class="info-video">
            <source src="video/fondo.mp4" type="video/mp4">
            Tu navegador no admite videos HTML5.
        </video>
        <div class="info-content">
            <h1>Conectar el Conocimiento, Forjar el Futuro</h1>
        </div>
    </section>

    <section class="about-section">
    <div class="about-content">
        <h2>Acerca de Nosotros</h2>
        <p>Somos un equipo apasionado de desarrolladores y entusiastas de la tecnología comprometidos en hacer que la colaboración en proyectos de código abierto y ciencia abierta sea más accesible y efectiva.</p>
        <p>Nuestra aplicación tiene como objetivo conectar a creadores de proyectos con colaboradores interesados que posean las habilidades necesarias para contribuir. Facilitamos la comunicación y la creación conjunta de soluciones innovadoras para abordar desafíos en campos diversos.</p>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-twitter" style="color: black; font-size: 30px;"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram" style="color: black; black; font-size: 30px;"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube" style="color: black; black; font-size: 30px;"></i></a>
        </div>
    </div></section>

    <section class="project-section">
        <h2>Proyectos Recientes</h2>
    </section>
    <section class="project-section">
        <div class="project">
            <h3>Proyecto 1</h3>
            <p>Descripción del proyecto 1.</p>
        </div>
        <div class="project">
            <h3>Proyecto 2</h3>
            <p>Descripción del proyecto 2.</p>
        </div>
        <div class="project">
            <h3>Proyecto 3</h3>
            <p>Descripción del proyecto 3.</p>
        </div>
        <div class="project">
            <h3>Proyecto 4</h3>
            <p>Descripción del proyecto 4.</p>
        </div>
    </section>

    <div>
        <section class="wasa">
            <h2>Proyecto con mas interacciones</h2>
        </section>
        <section class="wasa2">
            <div class="wasatere">
                <div class="wasaimg">
                <h3>Sistema de Chatbot Inteligente</h3>
                <p>El proyecto de código abierto "Sistema de Chatbot Inteligente" tiene como objetivo desarrollar un chatbot avanzado que utiliza tecnologías de inteligencia artificial para interactuar con los usuarios de manera efectiva y personalizada.</p>
                
                <p>Este proyecto aprovecha una serie de tecnologías y herramientas relacionadas con la inteligencia artificial, incluyendo:</p>
                <ul>
                    <li><strong>Procesamiento del Lenguaje Natural (NLP):</strong> para comprender y generar respuestas en lenguaje humano.</li>
                    <li><strong>Aprendizaje Automático (Machine Learning):</strong> para mejorar la capacidad de respuesta del chatbot a medida que interactúa con más usuarios.</li>
                    <li><strong>Redes Neuronales:</strong> para el procesamiento de información y la toma de decisiones basadas en datos.</li>
                    <li><strong>Tecnologías de API de NLP:</strong> para integrar capacidades avanzadas de procesamiento de lenguaje natural.</li>
                    <li><strong>Desarrollo web:</strong> para crear una interfaz de usuario amigable para los usuarios finales.</li>
                </ul>

                <p>El chatbot se enfoca en una amplia gama de aplicaciones, desde asistencia al cliente hasta recomendaciones de productos y respuestas a preguntas frecuentes. Su capacidad de aprendizaje continuo y adaptación lo convierte en una solución poderosa para empresas y organizaciones que desean mejorar la interacción con sus clientes y usuarios.</p>

                <p>Si te apasiona la inteligencia artificial y deseas contribuir o aprender más sobre este proyecto de código abierto, ¡te invitamos a unirte a nuestra comunidad y explorar el código en GitHub!</p>
               <p><a href="https://github.com/tuusuario/tuproyecto" target="_blank">Visitar el repositorio en GitHub</a></p>
            </div>
        </div>
    </section>
</div>




    <script>

        //Menu nav
        const toggleBtn = document.querySelector(".toggle_btn")
        const toggleBtnIcon = document.querySelector(".toggle_btn i")
        const dropDownMenu = document.querySelector(".dropdown_menu")
        
        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }

        /*video loop
        const video = document.getElementById('video');
        video.addEventListener('ended', function(){
            video.currentTime = 0;
            video.play();
        });

        video.play();
        */

        // Función para mostrar la sección de "Proyectos" al desplazarse hacia abajo
    window.addEventListener('scroll', function() {
    const projectsSection = document.querySelector('.project-section');
    const infoSection = document.querySelector('.info-section');
    
    // Obtén la posición de desplazamiento vertical
    const scrollPosition = window.scrollY;
    
    // Define una posición de desplazamiento a partir de la cual mostrar la sección de "Proyectos"
    const showProjectsPosition = infoSection.offsetHeight * 0.7;

});

    </script>
</body>
</html>
