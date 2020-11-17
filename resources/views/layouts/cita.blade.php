@extends ('layouts.app') 
@section ('content') 


    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1>Cita Online</h1>
                <p>Reserva turno de forma rapida y sencilla!</p>
            </div>
            <div class="col-4">
                <form method="POST" action="{{route('solicitud')}}">
                    @csrf
                    <div class="form-group"><label for="nombre">Nombre</label><input type="text"
                            class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="nombre">
                    </div>
                    <div class="form-group"><label for="email">Email</label><input type="email"
                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"><small
                            id="emailHelp" class="form-text text-muted">Recibira por correo el número de
                            reserva.</small>
                    </div>
                    <div class="form-group"><label for="telefono">Teléfono</label><input type="number"
                            class="form-control" aria-describedby="telefonoHelp" name="telefono">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Motivo</label>
                        <select class="form-control" name="motivo">
                            <option>Consulta</option>
                            <option>Limpieza</option>
                            <option>Ortodoncia</option>
                            <option>Implantes</option>
                            <option>Urgencias</option>
                            <option>Otros</option>
                        </select>
                    </div>
                    <div class="form-group"><label for="fecha">Fecha</label><input type="date" name="fecha"
                            value="2020-11-01" min="2020-11-25" max="2020-12-31" class="form-control"
                            aria-describedby="fechaHelp">
                        <small id="emailHelp" class="form-text text-muted">Solo atendemos con cita previa.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
