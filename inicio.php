<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/ca2716a385.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <meta charset="UTF-8">
    <title>Eclipse UX</title>
</head>


<?php include 'nav.html' ?>

    <link rel="stylesheet" type="text/css" href="css/inicio.css">
   
    <section class="info-section">
        <video autoplay loop muted class="info-video">
            <source src="video/fondo.mp4" type="video/mp4">
            Tu navegador no admite videos HTML5.
        </video>
        <div class="info-content">
            <h1 style="font-size: 85px;">CONNECT KNOWLEDGE, SHAPE THE FUTURE</h1>
        </div>
    </section>

    <section class="about-section">
    <div class="about-content">
        <h2>About us</h2>
        <p>We are a passionate team of developers and technology enthusiasts committed to making collaboration on open source and open science projects more accessible and effective.</p>
        <p>Our app aims to connect project creators with interested collaborators who possess the necessary skills to contribute. We facilitate communication and co-creation of innovative solutions to address challenges in diverse fields.</p>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-twitter" style="color: black; font-size: 30px;"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram" style="color: black; black; font-size: 30px;"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube" style="color: black; black; font-size: 30px;"></i></a>
        </div>
    </div></section>

    <section class="project-section">
        <h2>Recent projects</h2>
    </section>
    <section class="project-section">
    <div class="project">
        <a class="project-link" href="#">
            <h3>Project  A</h3>
            <p>Project A is an open source collaboration platform that facilitates collaboration in distributed teams. Provides tools for project management, communication and task tracking.</p>
        </a>
    </div>
    <div class="project">
        <a class="project-link" href="#">
            <h3>Project B</h3>
            <p>Project B is an open source content management system that allows users to create and manage websites efficiently. It offers a wide range of features and is highly customizable.
</p>
        </a>
    </div>
    <div class="project">
        <a class="project-link" href="#">
            <h3>Project C</h3>
            <p>Project C is an open source 3D graphics library designed for real-time rendering applications. It is widely used in the video game and 3D visualization industry.</p>
        </a>
    </div>
    <div class="project">
        <a class="project-link" href="#">
            <h3>Project D</h3>
            <p>Project D is an open source web development framework that simplifies the creation of modern, scalable web applications. It is based on popular technologies such as React and Node.js.</p>
        </a>
    </div>
</section>


    <div>
        <section class="wasa">
            <h2>Project with more interactions</h2>
        </section>
        <section class="wasa2">
            <div class="wasatere">
                <div class="wasaimg">
                <a href="pagina2.php">
                            <h3>Smart Chatbot System</h3>
                <p>The open source project "Intelligent Chatbot System" aims to develop an advanced chatbot that uses artificial intelligence technologies to interact with users in an effective and personalized way.</p>
                
                <p>This project leverages a number of technologies and tools related to artificial intelligence, including:</p>
                <ul>
                    <li><strong>Natural Language Processing (NLP):</strong> to understand and generate responses in human language.</li>
                    <li><strong>Machine Learning:</strong> to improve the responsiveness of the chatbot as it interacts with more users.</li>
                    <li><strong>Neural Networks:</strong> for information processing and data-based decision making.</li>
                    <li><strong>NLP API technologies:</strong> to integrate advanced natural language processing capabilities.</li>
                    <li><strong>Web development:</strong> to create a friendly user interface for end users.</li>
                </ul>

                <p>The chatbot focuses on a wide range of applications, from customer support to product recommendations and answers to frequently asked questions. Its ability to continuously learn and adapt makes it a powerful solution for companies and organizations that want to improve interaction with their customers and users.</p>

                <p>If you are passionate about artificial intelligence and want to contribute or learn more about this open source project, we invite you to join our community and explore the code on GitHub!</p>
                <a>
                <p><a href="https://github.com/IRadical/NasaPHP" target="_blank">Visit the repository on GitHub</a></p>
            </div>
        </div>
    </section>
</div>




    <script>
document.querySelectorAll('.project-link').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Evita la navegación normal
        var url = this.getAttribute('href');
        window.open(url, '_blank'); // Abre el enlace en una nueva ventana o pestaña
    });
});

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
