<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Restaurante deliciOS</title>
    <!-- Agregamos la CDN de PureCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.1/pure-min.css" integrity="sha512-Eezd8qwvNPTNlMGzKbjcNkW+x0BvSkL4de4f/3jCA/b2iGiwhkPStvu+dByMQVwi1xGsk8nYEMp9ghruXT4qg==" crossorigin="anonymous" />

    <style>
        /** Nuestro propio estilo personalizado **/

        /* Cambiamos el color de fondo */
        body {
            background-color: #f7e6d2;
        }

        /* Agregamos margenes al contenido principal */
        .main-content {
            margin-top: 50px;
            margin-bottom: 100px;
        }

        /* Estilo para la navegacion */
        .nav {
            background-color: #1b4353;
            color: #fff;
        }

        /* Estilo para los enlaces de la navegacion */
        .nav a {
            color: #fff;
        }

        /* Estilizamos el boton principal */
        .primary-button {
            background-color: #ffcc00;
            color: #1b4353;
            border-radius: 5px;
            padding: 10px 20px;
        }

        /* Agregamos un efecto hover para el boton principal */
        .primary-button:hover {
            background-color: #c89f00;
            cursor: pointer;
        }

        /* Estilo para la seccion de presentacion */
        .presentation-section {
            background-image: url('https://picsum.photos/id/237/1920/1080');
            background-size: cover;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            text-shadow: 2px 2px #000;
        }

        /* Estilo para el contenido dentro de la seccion de presentacion */
        .presentation-text {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            max-width: 800px;
            color: #fff;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <!-- Agregamos la barra de navegacion -->
    <div class="nav pure-menu pure-menu-horizontal">
        <a href="#" class="pure-menu-heading pure-menu-link">Restaurante deliciOS</a>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Inicio</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Menú</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sobre nosotros</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contacto</a></li>
        </ul>
    </div>

    <!-- Agregamos la sección de presentación -->
    <section class="presentation-section pure-g">
        <div class="presentation-text pure-u-1">
            <h1>Bienvenidos a Restaurante deliciOS</h1>
            <p>La mejor comida en la ciudad</p>
            <button class="primary-button">Nuestro menú</button>
        </div>
    </section>

    <!-- Agregamos el contenido principal -->
    <main class="main-content pure-g">
        <div class="pure-u-1">
            <h2>Nuestra especialidad</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sem in neque faucibus, nec feugiat lorem rutrum. Etiam eget ex vitae dolor mattis fermentum. Nullam molestie tempus dictum. Donec ullamcorper justo sed bibendum euismod. Cras id lorem eros. Integer malesuada diam nec erat tristique rhoncus.</p>

            <h2>Nuestros platillos</h2>