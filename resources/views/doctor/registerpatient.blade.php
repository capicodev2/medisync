@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center p-5">
        <div class="card mb-3 border-0 " style="">
            <a class="card-title text-body-title">Registra un nuevo paciente:</a>
            <p class="card-text">
            @include('doctor.cancelModal')
            <form action="{{route('storepatient')}}" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre completo</span>
                    <input id="name" name="name" type="text" class="form-control"
                           aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                           maxlength="100" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cédula</span>
                    <input id="identification" name="identification" type="number" class="form-control"
                           aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                           maxlength="12" required>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Sexo</span>
                    <select id="sex" name="sex" class="form-select" aria-label="Default select example" required>
                        <option disabled selected value>Selecciona una opción</option>
                        <option value="MEN">Hombre</option>
                        <option value="FEMALE">Mujer</option>
                    </select>
                </div>


                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de nacimiento</span>
                    <input id="birth_date" name="birth_date" type="date" class="form-control"
                           max="{{ date('Y-m-d') }}" required>
                    <i class="fas fa-calendar input-prefix"></i>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de ingreso</span>
                    <input id="in_date" name="in_date" type="date" class="form-control"
                           max="{{ date('Y-m-d') }}" required>
                    <i class="fas fa-calendar input-prefix"></i>

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Habitación</span>
                    <input id="room" name="room" type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default" maxlength="10" required>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="pr-5">
                        <button type="submit" class="button-usuario" style="margin-right: 5px;">Crear</button>
                    </div>
                    <div>
                        <button type="button" data-bs-toggle="modal" class="button-regresar"  data- data-bs-target="#cancelModal">Cancelar</button>

                    </div>
                </div>
            </form>
            </p>

        </div>
    </div>
@endsection
