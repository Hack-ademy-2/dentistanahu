@extends ('layouts.app')
@section ('content')
<h1>Sobre nosotros</h1>

<div class="row mt-5">
    <div class="col-4">
        <div class="card">
            <img src="../img/dentista1.jpeg" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">Juan Gonzalez</h5>
                <p class="card-text">Cirugia e Implante</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="../img/dentista2.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">Marta Perez</h5>
                <p class="card-text">Tratamientos y Estética</p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="../img/dentista3.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">Mariano Colores</h5>
                <p class="card-text">Ortodoncia e Infantiles</p>
            </div>
        </div>
    </div>
    @endsection
