<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/ca2716a385.js" crossorigin="anonymous"></script>
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
            <h1>Información</h1>
            <p>Aquí puedes agregar información sobre tu empresa o proyecto.</p>
        </div>
    </section>


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
    </header>
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
    
    // Muestra la sección de "Proyectos" cuando se desplaza más abajo de la posición definida
    if (scrollPosition > showProjectsPosition) {
        projectsSection.style.opacity = '1';
        projectsSection.style.transform = 'translateY(0)';
    } else {
        projectsSection.style.opacity = '0';
        projectsSection.style.transform = 'translateY(100px)';
    }
});

    </script>
</body>
</html>
