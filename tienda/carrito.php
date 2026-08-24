<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}


/* AGREGAR PRODUCTO */

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['accion']) &&
    $_POST['accion'] === 'agregar'
) {

    $producto = [
        'nombre' => $_POST['producto'],
        'precio' => $_POST['precio'],
        'imagen' => $_POST['imagen'],
        'color' => $_POST['color'],
        'talla' => $_POST['talla'],
        'cantidad' => 1
    ];

    $_SESSION['carrito'][] = $producto;

    header("Location: carrito.php");
    exit();
}


/* AUMENTAR */

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['accion']) &&
    $_POST['accion'] === 'aumentar'
) {

    $indice = $_POST['indice'];

    $_SESSION['carrito'][$indice]['cantidad']++;

    header("Location: carrito.php");
    exit();
}


/* DISMINUIR */

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['accion']) &&
    $_POST['accion'] === 'disminuir'
) {

    $indice = $_POST['indice'];

    $_SESSION['carrito'][$indice]['cantidad']--;

    if ($_SESSION['carrito'][$indice]['cantidad'] <= 0) {

        unset($_SESSION['carrito'][$indice]);

        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
    }

    header("Location: carrito.php");
    exit();
}


/* ELIMINAR */

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['accion']) &&
    $_POST['accion'] === 'eliminar'
) {

    $indice = $_POST['indice'];

    unset($_SESSION['carrito'][$indice]);

    $_SESSION['carrito'] = array_values($_SESSION['carrito']);

    header("Location: carrito.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

	<head>

	    <meta charset="UTF-8">

	    <title>Carrito</title>

	    <link rel="stylesheet" href="informacion.css">
	    <link rel="stylesheet" href="tienda.css">

	    <link rel="stylesheet"
	          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

	    <style>

	        .carrito {
	            width: 75%;
	            max-width: 900px;
	            margin: 50px auto;
	        }


	        .carrito h2 {
	            text-align: center;
	            color: #d86aa5;
	            margin-bottom: 35px;
	        }


	        .producto-carrito {

	            display: flex;

	            align-items: center;

	            gap: 20px;

	            padding: 18px;

	            margin-bottom: 20px;

	            background: white;

	            border-radius: 10px;

	            box-shadow: 0 3px 10px rgba(0,0,0,0.10);
	        }


	        .producto-carrito img {

	            width: 160px;

	            height: 180px;

	            object-fit: contain;

	            flex-shrink: 0;
	        }


	        .informacion-producto {

	            flex: 1;
	        }


	        .informacion-producto h3 {

	            margin: 0 0 15px;

	            color: #333;

	            font-size: 20px;
	        }


	        .informacion-producto p {

	            margin: 7px 0;

	            color: #555;
	        }


	        /* CANTIDAD */

	        .cantidad {

	            display: flex;

	            align-items: center;

	            gap: 8px;

	            margin-top: 15px;
	        }


	        .cantidad form {

	            margin: 0;
	        }


	        .btn-cantidad {

	            width: 30px;

	            height: 30px;

	            border: none;

	            background: #ffb7e9;

	            color: white;

	            border-radius: 5px;

	            cursor: pointer;

	            font-size: 18px;
	        }


	        .btn-cantidad:hover {

	            background: #d86aa5;
	        }


	        .numero-cantidad {

	            min-width: 25px;

	            text-align: center;

	            font-weight: bold;
	        }


	        /* ELIMINAR */

	        .btn-eliminar {

	            border: none;

	            background: none;

	            color: #d86aa5;

	            cursor: pointer;

	            font-size: 14px;

	            margin-top: 10px;

	            padding: 0;
	        }


	        .btn-eliminar:hover {

	            color: #a94470;
	        }


	        /* TOTAL */

	        .total {

	            text-align: right;

	            margin-top: 30px;

	            padding-top: 20px;

	            border-top: 1px solid #ddd;
	        }


	        .total h3 {

	            color: #333;

	            font-size: 22px;
	        }


	        .btn-comprar {

	            display: inline-block;

	            margin-top: 15px;

	            padding: 12px 25px;

	            background: #ff80d9;

	            color: white;

	            text-decoration: none;

	            border-radius: 5px;

	            font-weight: bold;
	        }


	        .btn-comprar:hover {

	            background: #d86aa5;
	        }


	        /* CARRITO VACÍO */

	        .carrito-vacio {

	            text-align: center;

	            padding: 60px;

	            color: #555;
	        }


	        .carrito-vacio i {

	            font-size: 60px;

	            color: #d86aa5;
	        }

	    </style>

	</head>


	<body>


	<header>Envío a Todo Costa Rica</header>


	<header class="segundario">

	    <img src="img-icon/logo.png" class="logo">


	    <ul>

	        <li>
	            <a href="index.php">Inicio</a>
	        </li>

	        <li>
	            <a href="tienda.php">Tienda</a>
	        </li>

	        <li>
	            <a href="nosotros.php">Nosotros</a>
	        </li>

	        <li>
	            <a href="contacto.php">Contacto</a>
	        </li>

	    </ul>

	</header>


	<div class="carrito">


	    <h2>MI CARRITO</h2>


	    <?php if (empty($_SESSION['carrito'])) { ?>


	        <div class="carrito-vacio">

	            <i class="bi bi-bag"></i>

	            <h3>Tu carrito está vacío</h3>

	            <p>
	                Agrega productos desde la tienda.
	            </p>

	            <a href="tienda.php" class="btn-comprar">
	                IR A LA TIENDA
	            </a>

	        </div>


	    <?php } else { ?>


	        <?php

	        $total = 0;


	        foreach ($_SESSION['carrito'] as $indice => $producto) {

	            $subtotal =
	                $producto['precio'] *
	                $producto['cantidad'];

	            $total += $subtotal;

	        ?>


	            <div class="producto-carrito">


	                <img src="<?php echo htmlspecialchars($producto['imagen']); ?>">


	                <div class="informacion-producto">


	                    <h3>
	                        <?php
	                        echo htmlspecialchars(
	                            $producto['nombre']
	                        );
	                        ?>
	                    </h3>


	                    <p>

	                        <strong>Talla:</strong>

	                        <?php
	                        echo htmlspecialchars(
	                            $producto['talla']
	                        );
	                        ?>

	                    </p>


	                    <p>

	                        <strong>Color:</strong>

	                        <?php
	                        echo htmlspecialchars(
	                            $producto['color']
	                        );
	                        ?>

	                    </p>


	                    <p>

	                        <strong>Precio:</strong>

	                        ₡<?php
	                        echo number_format(
	                            $producto['precio'],
	                            0,
	                            ',',
	                            '.'
	                        );
	                        ?>

	                    </p>


	                    <div class="cantidad">


	                        <form action="carrito.php" method="POST">

	                            <input
	                                type="hidden"
	                                name="accion"
	                                value="disminuir"
	                            >

	                            <input
	                                type="hidden"
	                                name="indice"
	                                value="<?php echo $indice; ?>"
	                            >

	                            <button
	                                type="submit"
	                                class="btn-cantidad"
	                            >
	                                −
	                            </button>

	                        </form>


	                        <span class="numero-cantidad">

	                            <?php
	                            echo $producto['cantidad'];
	                            ?>

	                        </span>


	                        <form action="carrito.php" method="POST">

	                            <input
	                                type="hidden"
	                                name="accion"
	                                value="aumentar"
	                            >

	                            <input
	                                type="hidden"
	                                name="indice"
	                                value="<?php echo $indice; ?>"
	                            >

	                            <button
	                                type="submit"
	                                class="btn-cantidad"
	                            >
	                                +
	                            </button>

	                        </form>


	                    </div>


	                    <form action="carrito.php" method="POST">

	                        <input
	                            type="hidden"
	                            name="accion"
	                            value="eliminar"
	                        >

	                        <input
	                            type="hidden"
	                            name="indice"
	                            value="<?php echo $indice; ?>"
	                        >

	                        <button
	                            type="submit"
	                            class="btn-eliminar"
	                        >

	                            <i class="bi bi-trash"></i>

	                            Eliminar

	                        </button>

	                    </form>


	                </div>


	            </div>


	        <?php } ?>


	        <div class="total">

	            <h3>

	                Total:

	                ₡<?php
	                echo number_format(
	                    $total,
	                    0,
	                    ',',
	                    '.'
	                );
	                ?>

	            </h3>


	            <a
	                href="comprar.php"
	                class="btn-comprar"
	            >
	                FINALIZAR COMPRA
	            </a>

	        </div>


	    <?php } ?>


	</div>


	<footer>


	    <h4 class="informacion">
	        INFORMACIÓN
	    </h4>


	    <div class="footer">

	        <a href="faq.php">
	            FAQ
	        </a>

	        <a href="guia.php">
	            Guía de tallas
	        </a>

	        <a href="envios.php">
	            Envíos
	        </a>

	        <br />

	        <a href="privacidad.php">
	            Política de Privacidad
	        </a>

	        <a href="terminos.php">
	            Términos y Condiciones
	        </a>

	    </div>


	    <div class="desarrollador">

	        <p>
	            © 2026 Liora Boutique | Desarrollado por Hayanna Gallo
	        </p>

	    </div>


	</footer>


	</body>

</html>