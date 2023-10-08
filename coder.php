<?php include 'nav.html' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página con Barra de Búsqueda y Filtro Popup</title>
    <style>
        .search-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .search-box {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: white /* Color del texto en blanco */

        }

        .filter-button {
            padding: 10px;
            font-size: 16px;
            background-color: #007bff; /* Color de fondo del botón de filtrar */
            color: #ffff; /* Color del texto del botón de filtrar */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Estilos para el filtro popup */
        .filter-popup {
            display: none;
            position: absolute;
            top: 40px; /* Ajusta la posición vertical según tus necesidades */
            right: 10px; /* Ajusta la posición horizontal según tus necesidades */
            background-color: #333; /* Fondo oscuro */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .filter-popup label {
            display: block;
            margin-bottom: 5px;
            color: #fff; /* Color del texto en blanco */
        }

    </style>
</head>
<body>
    <h1>Lista de Elementos</h1>

    <!-- Barra de búsqueda y botón de filtro -->
    <div class="search-container">
        <input type="text" class="search-box" placeholder="Buscar...">
        <button class="filter-button" onclick="mostrarFiltro()">Filtrar</button>
    </div>

    <!-- Lista de elementos (simulada) -->
    <ul id="element-list">
        <li>Opción 1 - Elemento 1</li>
        <li>Opción 2 - Elemento 2</li>
        <li>Opción 3 - Elemento 3</li>
        <li>Opción 1 - Elemento 4</li>
    </ul>

    <!-- Filtro Popup -->
    <div class="filter-popup" id="filter-popup">
        <h2>Filtrar por Opciones</h2>
        <label>
            <input type="checkbox" value="opcion1"> Opción 1
        </label>
        <label>
            <input type="checkbox" value="opcion2"> Opción 2
        </label>
        <label>
            <input type="checkbox" value="opcion3"> Opción 3
        </label>
        <button onclick="filtrar()">Aplicar Filtro</button>
    </div>

    <script>
        // Función para mostrar el filtro popup
        function mostrarFiltro() {
            const popup = document.getElementById('filter-popup');
            popup.style.display = 'block';
        }

        // Función para ocultar el filtro popup
        function ocultarFiltro() {
            const popup = document.getElementById('filter-popup');
            popup.style.display = 'none';
        }

        // Función para filtrar la lista de elementos
        function filtrar() {
            const searchBox = document.querySelector('.search-box');
            const elementList = document.querySelector('#element-list');
            const searchText = searchBox.value.toLowerCase();

            // Obtén las opciones seleccionadas
            const checkboxes = document.querySelectorAll('.filter-popup input[type="checkbox"]');
            const selectedFilters = Array.from(checkboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value.toLowerCase());

            // Recorre la lista de elementos y muestra/oculta según los criterios de búsqueda y filtro
            const elements = elementList.querySelectorAll('li');
            elements.forEach(function(element) {
                const text = element.textContent.toLowerCase();
                const shouldDisplay = selectedFilters.includes('todas') || selectedFilters.some(filter => text.includes(filter));
                element.style.display = shouldDisplay && text.includes(searchText) ? 'block' : 'none';
            });

            // Oculta el filtro popup
            ocultarFiltro();
        }
    </script>
</body>
</html>
