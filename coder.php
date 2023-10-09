
<!DOCTYPE html>
<html>
<head>
    
<script src="https://kit.fontawesome.com/ca2716a385.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Coders</title>
    <style>

.container {
  position: relative;


}
       
.container {
            text-align: center;
            margin-top: 150px; /* Ajusta el valor según tus necesidades */
        }

        .technology {
    display: inline-block;
    margin: 10px;
    padding: 10px 15px;
    background-color: #007bff; /* Color de fondo más llamativo */
    color: #fff; /* Color del texto */
    border: 2px solid #007bff; /* Borde más destacado */
    border-radius: 5px; /* Esquinas redondeadas */
    font-weight: bold; /* Texto en negrita */
    text-align: center; /* Texto centrado */
    text-decoration: none; /* Eliminar subrayado de hipervínculo */
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
    cursor: pointer;
}

.technology:hover {
    background-color: #0056b3; /* Cambio de color al pasar el mouse */
    transform: scale(1.05); /* Efecto de escala al pasar el mouse */
}

        .selected {
            background-color: orange;
            color: #fff;
            border: 2px solid orange; /* Borde más destacado */
        }
/* Estilos para el .tech-box */
.tech-box {
    position: relative;
    width: 100%; /* Asegura que el contenedor se ajuste al ancho de su padre */
    max-width: 400px; /* Ajusta el ancho máximo según tus necesidades */
    height: 0; /* Inicialmente establece la altura en 0 */
    padding-bottom: 75%; /* Esto mantiene una relación de aspecto 4:3 (opcional, ajusta según la relación de aspecto de tu imagen) */
    overflow: hidden; /* Evita que el contenido se desborde */
    display: flex;
    flex-direction: column; /* Cambia la dirección de flex para apilar contenido */
    align-items: center; /* Centra horizontalmente el contenido */
    text-align: center; /* Centra el texto horizontalmente */
    border: 10px;
}

.tech-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ajusta la imagen para que cubra todo el contenedor sin distorsionarla */
    z-index: -1;
}

/* Estilos para el enlace dentro del .tech-box */
.tech-box a {
    padding: 10px; /* Añade un poco de espacio alrededor del enlace */
    background-color: transparent; /* Color de fondo */
    color: #fff; /* Color del texto */
    text-decoration: none; /* Elimina el subrayado de enlace */
    border-radius: 5px; /* Borde redondeado */
    transition: background-color 0.3s; /* Transición de color de fondo */
    width: 100%; /* Ancho completo del enlace */
    display: block; /* Hace que el enlace ocupe todo el espacio disponible */
}

.tech-info:hover {
    color: orange; /* Cambio de color al pasar el mouse */
}



        .tech-info {
            flex: 1;
            color: #fff;
           
        }

        .tech-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Columnas automáticas con un ancho mínimo de 250px */
    gap: 20px; /* Espacio entre los tech-box */
}

        @media (max-width: 768px) {
    .technology {
        padding: 3px 6px; /* Ajusta el padding cuando la ventana es más pequeña */
        margin: 5px;
        font-size: 14px; /* Reduce el tamaño de fuente */
    }
}
    </style>
</head>


<main>
<?php include 'nav.html' ?>


<div class="container">
<div class="technology" data-selected="false">HTML</div>
        <div class="technology" data-selected="false">CSS</div>
        <div class="technology" data-selected="false">JavaScript</div>
        <div class="technology" data-selected="false">React</div>
        <div class="technology" data-selected="false">Angular</div>
        <div class="technology" data-selected="false">Vue.js</div>
        <div class="technology" data-selected="false">Python</div>
        <div class="technology" data-selected="false">Java</div>
        <div class="technology" data-selected="false">Ruby</div>
        <div class="technology" data-selected="false">Node.js</div>
        <div class="row">
            <div class="col-md-4">
            <div class="tech-container">   
            <div class="tech-box">
            <img src="img/v1.jpg" alt="Tecnología 2" class="tech-image">
            <a href="pagina1.html">        
                    <div class="tech-info">
                        <h3>Technology 1</h3>
                        <p class="tech-description">
Technology Description 1. Uses open source technologies such as PHP, MySQL and jQuery.</p>
                    </div>
            </a>
                </div>
                <div class="tech-box">
                    <img src="img/v2.jpg" alt="Tecnología 2" class="tech-image">
                    <a href="pagina1.php">  
                    <div class="tech-info">
                        <h3>Technology 2</h3>
                        <p class="tech-description">Technology Description 2. It uses Python and Django, both open source.</p>
                    </div>
                    </a>
                </div>
                <div class="tech-box">
                    <img src="img/v3.jpg" alt="Tecnología 3" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 3</h3>
                        <p class="tech-description">
Technology description 3. Based on Ruby on Rails and uses PostgreSQL as a database.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v4.jpg" alt="Tecnología 4" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 4</h3>
                        <p class="tech-description">Technology Description 4. Developed with Angular and Node.js for the backend.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v5.jpg" alt="Tecnología 5" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 5</h3>
                        <p class="tech-description">Technology Description 5. Uses Java for enterprise applications.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v6.jpg" alt="Tecnología 6" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 6</h3>
                        <p class="tech-description">Technology Description 6. Written in C++ for high performance applications.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v7.jpg" alt="Tecnología 7" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 7</h3>
                        <p class="tech-description">Technology description 7. Based on Ruby and Ruby on Rails for web development.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v8.jpg" alt="Tecnología 8" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 8</h3>
                        <p class="tech-description">Technology Description 8. Uses TypeScript and React for creating user interfaces.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v9.jpg" alt="Tecnología 9" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 9</h3>
                        <p class="tech-description">Technology description 9. Based on PHP and Laravel for rapid web development.</p>
                    </div>
                    </a>
                </div>

                <div class="tech-box">
                    <img src="img/v10.jpg" alt="Tecnología 10" class="tech-image">
                    <a href="pagina1.html">  
                    <div class="tech-info">
                        <h3>Technology 10</h3>
                        <p class="tech-description">Technology Description 10. Use Swift for iOS application development.</p>
                    </div>
                    </a>
                </div>
            </div>
            </div>

            <!-- Coloca aquí más columnas para más tecnologías si es necesario -->
        </div>
    </div>
    </main>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
    const technologies = document.querySelectorAll('.technology');
    const techBoxes = document.querySelectorAll('.tech-box');

    technologies.forEach(tech => {
        tech.addEventListener('click', () => {
            const isSelected = tech.getAttribute('data-selected') === 'true';
            tech.setAttribute('data-selected', isSelected ? 'false' : 'true');
            tech.classList.toggle('selected', !isSelected);

            // Filtra los tech-box según las tecnologías seleccionadas
            const selectedTechs = Array.from(technologies)
                .filter(tech => tech.getAttribute('data-selected') === 'true')
                .map(tech => tech.textContent.trim().toLowerCase());

            techBoxes.forEach(box => {
                const techDescription = box.querySelector('.tech-description').textContent.toLowerCase();
                const boxTechs = selectedTechs.some(tech => techDescription.includes(tech));

                // Muestra el tech-box si coincide con al menos una tecnología seleccionada
                box.style.display = boxTechs ? 'flex' : 'none';
            });
        });
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

         // Función para mostrar la sección de "Proyectos" al desplazarse hacia abajo
    window.addEventListener('scroll', function() {
    const projectsSection = document.querySelector('.container');

    
    // Obtén la posición de desplazamiento vertical
    const scrollPosition = window.scrollY;
    
    // Define una posición de desplazamiento a partir de la cual mostrar la sección de "Proyectos"
    const showProjectsPosition = infoSection.offsetHeight * 0.7;

});
    </script>
</body>
</html>
