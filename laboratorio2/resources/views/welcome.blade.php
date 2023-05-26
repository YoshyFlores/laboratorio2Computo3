@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="imagen-fondo">
            <div class="texto-superpuesto">
                <h1 class="naranjas titulo">Bienvenido </h1>
                <h1 class="blancos titulo">a tu organizador</h1><br>
                <h1 class="naranjas titulo">de tareas</h1>
                <br>
                <p class="parrafo">
                    Organiza tus tareas en diferentes categorias.
                </p>
            </div>
        </div>
    </div>

@endsection

<style>
    body {
        background: url("https://images.unsplash.com/photo-1506784983877-45594efa4cbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80") no-repeat center center fixed;
        background-size: cover;
    }

    .imagen-fondo {
        background: url("https://images.unsplash.com/photo-1506784983877-45594efa4cbe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80") no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        width: 100%;
        position: relative;
    }

    .texto-superpuesto {
        position: absolute;
        top: 30%;
        left: 75%;
        height: 40vh;
        width: 70%;
        transform: translate(-50%, -50%);
        color: black;
        text-align: center;
        background-color: rgba(255, 255, 255, 0);
        padding: 2rem;
        border-radius: 1rem;
    }

    .blancos {
        color: #ffffff;
        display: inline;
        font-weight: bold;
        -webkit-text-stroke-width: 0.1px; /* Ancho del borde */
        -webkit-text-stroke-color: rgb(11, 4, 4); /* Color del borde */

    }

    .naranjas {
        color: #ff7f50;
        display: inline;
        font-weight: bold;
        -webkit-text-stroke-width: 0.1px; /* Ancho del borde */
        -webkit-text-stroke-color: rgb(11, 4, 4); /* Color del borde */

    }

    .parrafo {
        font-size: 30px;
        color: #4e555b;
        max-width: 800px;
        
    }

    .titulo {
        font-size: 50px;
    }

</style>
