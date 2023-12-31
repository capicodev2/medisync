@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center p-5">
        <div class="card mb-3 border-0 " style="">
            <a class="card-title text-body-title">Editar información de una actividad:</a>
            <p class="card-text">
            <form action="{{route('saveeditactivity')}}" method="POST">
                @csrf
                <input type="hidden" id="activities_id" name="activities_id" value="{{$activity->id}}">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre actividad</span>
                    <input id="name_activity" name="name_activity" type="text" class="form-control"
                           aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                           maxlength="100" value="{{$activity->name_activity}}" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Permisos minimos</span>
                    <select id="min_permissions" name="min_permissions" class="form-select"
                            aria-label="Default select example" required>
                        <option>Selecciona una opción</option>
                        <option value="DOCTOR" {{$activity->min_permissions == 'DOCTOR' ? 'selected':''}}>Doctor
                        </option>
                        <option value="BOSS_NURSE" {{$activity->min_permissions == 'BOSS_NURSE' ? 'selected':''}}>Jefe
                            de
                            enfermeria
                        </option>
                        <option value="NURSE" {{$activity->min_permissions == 'NURSE' ? 'selected':''}}>Enfermero
                        </option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Temporalidad</span>
                    <select id="temporality" name="temporality" class="form-select" aria-label="Default select example"
                            required>
                        <option>Selecciona una opción</option>
                        <option value="diary" {{$activity->temporality == 'diary' ? 'selected':''}}>Diario</option>
                        <option value="every 4 hours" {{$activity->temporality == 'every 4 hours' ? 'selected':''}}>Cada
                            4
                            horas
                        </option>
                        <option value="every 8 hours" {{$activity->temporality == 'every 8 hours' ? 'selected':''}}>Cada
                            8
                            horas
                        </option>
                        <option value="every 12 hours" {{$activity->temporality == 'every 12 hours' ? 'selected':''}}>
                            Cada
                            12 horas
                        </option>
                        <option value="weekly" {{$activity->temporality == 'weekly' ? 'selected':''}}>Semanal</option>
                        <option value="monthly" {{$activity->temporality == 'monthly' ? 'selected':''}}>mensual</option>
                        <option value="every 2 days" {{$activity->temporality == 'every 2 days' ? 'selected':''}}>Cada 2
                            días
                        </option>
                        <option value="every 3 days" {{$activity->temporality == 'every 3 days' ? 'selected':''}}>Cada 3
                            días
                        </option>
                        <option value="every 4 days" {{$activity->temporality == 'every 4 days' ? 'selected':''}}>Cada 4
                            días
                        </option>
                        <option value="every 5 days" {{$activity->temporality == 'every 5 days' ? 'selected':''}}>Cada 5
                            días
                        </option>
                        <option value="every 6 days" {{$activity->temporality == 'every 6 days' ? 'selected':''}}>Cada 6
                            días
                        </option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Horario</span>
                    <select id="schedule" name="schedule" class="form-select" aria-label="Default select example"
                            required>
                        <option>Selecciona una opción</option>
                        <option value="00:00" {{$activity->schedule == '00:00' ? 'selected':''}}>00:00</option>
                        <option value="02:00" {{$activity->schedule == '02:00' ? 'selected':''}}>02:00</option>
                        <option value="04:00" {{$activity->schedule == '04:00' ? 'selected':''}}>04:00</option>
                        <option value="06:00" {{$activity->schedule == '06:00' ? 'selected':''}}>06:00</option>
                        <option value="08:00" {{$activity->schedule == '08:00' ? 'selected':''}}>08:00</option>
                        <option value="10:00" {{$activity->schedule == '10:00' ? 'selected':''}}>10:00</option>
                        <option value="12:00" {{$activity->schedule == '12:00' ? 'selected':''}}>12:00</option>
                        <option value="14:00" {{$activity->schedule == '14:00' ? 'selected':''}}>14:00</option>
                        <option value="16:00" {{$activity->schedule == '16:00' ? 'selected':''}}>16:00</option>
                        <option value="18:00" {{$activity->schedule == '18:00' ? 'selected':''}}>18:00</option>
                        <option value="20:00" {{$activity->schedule == '20:00' ? 'selected':''}}>20:00</option>
                        <option value="22:00" {{$activity->schedule == '22:00' ? 'selected':''}}>22:00</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Medicamento</span>
                    <input id="medicine_id" name="medicine_id" type="text" class="form-control"
                           aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                           maxlength="100" value="{{$activity->medicine_id}}" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Dosis</span>
                    <input id="dose" name="dose" type="text" class="form-control"
                           aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                           maxlength="100" value="{{$activity->dose}}" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Vía</span>
                    <input id="via" name="via" type="text" class="form-control"
                           aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                           maxlength="100" value="{{$activity->via}}" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de creacion</span>
                    <input id="create_date" name="create_date" type="date" class="form-control"
                           max="{{ date('Y-m-d') }}" value="{{$activity->create_date}}" required>
                    <i class="fas fa-calendar input-prefix"></i>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de suspensión</span>
                    <input id="suspension_date" name="suspension_date" type="date" class="form-control"
                           value="{{$activity->suspension_date}}" required>
                    <i class="fas fa-calendar input-prefix"></i>

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observaciones</span>
                    <input id="observations" name="observations" type="text" class="form-control"
                           aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-default" maxlength="200"
                           value="{{$activity->observations}}" required>
                </div>
                <div class="d-flex justify-content-start">
                    <div class="pr-5">
                        <button type="submit" class="button-usuario" style="margin-right: 5px;">Guardar</button>
                    </div>
                    <div>
                        <a href="{{route('dashboardpatient')}}" class="button-regresar a">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
