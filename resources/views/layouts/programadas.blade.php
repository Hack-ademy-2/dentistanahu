@extends ('layouts.app')
@section ('content')

<div class="row">

<div class="col-12">
        @if (!session('citas'))
            <h1>Aún no hay citas concertadas!</h1>
        @else 
    <h2>Citas Programadas</h2>
    </div>
    @foreach($nuevaCita as $cita)
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{$cita['nombre']}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Email: {{$cita['email']}}</h6>
                <p class="card-text">Teléfono: {{$cita['telefono']}}</p>
                <p class="card-text">Motivo: {{$cita['motivo']}}</p>
                <p class="card-text">Fecha: {{$cita['fecha']}}</p>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>

@endsection
