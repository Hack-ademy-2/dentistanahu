@extends ('layouts.app') 
@section ('content')

<div class="row">
    <div class="col-12 mb-5">
    <h3>Clinica 32 piezas</h3>
    <h4>Teléfono: 664.397.645</h4>
    <h4>Horario: Lunes a Viernes 9 - 17 hs</h4>
    <h4>32piezas@gmail.com</h4>
    </div>
    <div class="col-8 mt-2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47871.098767207775!2d2.185625573101817!3d41.41874138150252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2d6aea3b629%3A0xdb0bf0b8e5f70abe!2sCl%C3%ADnica%20Dental%20Edo%20-%20Dentistas%20en%20Barcelona!5e0!3m2!1ses!2ses!4v1605551160695!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    <div class="col-4">
    <form method="POST" action="{{route('nuevocontacto')}}">
                    @csrf
                    <div class="form-group"><label for="nombre">Nombre</label><input type="text"
                            class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="nombrecontacto">
                    </div>
                    <div class="form-group"><label for="email">Email</label><input type="email"
                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailcontacto">
                    </div>
                    <div class="form-group"><label for="telefono">Teléfono</label><input type="number"
                            class="form-control" aria-describedby="telefonoHelp" name="telefonocontacto">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>
    </div>
</div>

@endsection