<div>
    {{-- <link rel="stylesheet" href="{{asset('css/custom.css')}}"> --}}
    @section('title', 'Atención Consulta |')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <br>

                <div class="row mb-2">
                    <div class="col-md-8">
                        <h4>ATENCIÓN DE CONSULTA</h4>
                    </div>
                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <span class="card-title"><i class="fas fa-info-circle"></i> Información del paciente</span>
                        <div class="float-right text-sm">
                            <strong>Inicio de Atención:</strong>
                            <input class="btn btn-info " type="date" id="tdate" value="{{ date('Y-m-d') }}">
                            <input class="btn btn-info " type="time" id="ttime" value="{{ date('H:i') }}">
                        </div>
                    </div>
                    <div class="card-body" style="font-size: 13px;">
                        <div class="table-responsive">

                            <table class="table table-sm table-bordered">
                                @foreach ($paciente as $item)
                                    @php
                                        $idPaciente = $item->id;
                                    @endphp
                                    <input type="hidden" value="{{ $item->id }}" id="paciente_id"
                                        wire.model="paciente_id">


                                    <thead>
                                        <tr class="table-secondary">
                                            <th>NOMBRE</th>
                                            <th>RAZA</th>
                                            <th>SEXO</th>
                                            <th>PROPIETARIO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->raza->nombre }}</td>
                                            <td>{{ $item->sexo }}</td>
                                            <td>{{ $item->cliente->nombre }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><b>Descripcion:</b>
                                                <span>{{ $item->descripcion }}</span>
                                            </td>
                                            <td colspan="2"><b>Edad:</b>
                                                <span>{{ $item->edad($item->fecnacimiento) }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                @endforeach
                            </table>
                            <div class="row container-fluid">
                                <div class="col-12 col-md-4 mb-2">
                                    <button class="btn btn-sm btn-secondary btn-block" data-toggle="modal"
                                        data-target="#modHistorial" title="Historial Clinico"><i
                                            class="fas fa-book-medical"></i>
                                        Historial Clinico</button>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <button class="btn btn-sm btn-secondary btn-block" data-toggle="modal"
                                        data-target="#modVacunas" title="Historial Vacunas"><i
                                            class="fas fa-syringe"></i>
                                        Historial de Vacunaciones</button>
                                </div>
                                <div class="col-12 col-md-4 mb-2">
                                    <button class="btn btn-sm btn-secondary btn-block" data-toggle="modal"
                                        data-target="#modAnticonceptivos" title="Historial Vacunas"><i
                                            class="fas fa-syringe"></i>
                                        Historial Anticonceptivos</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="card card-lightblue">
                    <div class="card-header">
                        <i class="fas fa-user-md"></i> ANAMNESIS
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" name="anamnesis" id="anamnesis" rows="4" placeholder="Escriba los detalles..."
                            wire:model="anamnesis"></textarea>


                    </div>
                </div>
                <div class="row" wire:ignore>
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <div class="icheck-primary d-inline">
                                    <i class="fas fa-notes-medical"></i>
                                    <input type="checkbox" id="cbdiagpresuntivo"
                                        onclick="enable_disable('cbdiagpresuntivo', 'diagpresuntivo');">
                                    <label for="cbdiagpresuntivo">DIAGNOSTICO PRESUNTIVO
                                    </label>
                                </div>

                            </div>
                            <div class="card-body">
                                <textarea class="form-control" name="diagpresuntivo" id="diagpresuntivo" rows="4"
                                    placeholder="Escriba los detalles..." readonly></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <i class="fas fa-microscope"></i>
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="cbdiagconclusivo"
                                        onclick="enable_disable('cbdiagconclusivo', 'diagconclusivo');">
                                    <label for="cbdiagconclusivo"> DIAGNOSTICO CONCLUSIVO
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" name="diagconclusivo" id="diagconclusivo" rows="4"
                                    placeholder="Escriba los detalles..." readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>


    {{-- HISTORIAL CLINICO --}}
    <div class="modal fade" id="modHistorial" aria-hidden="true" style="display: none;" style="height: 500px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Historial clínico</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @php
                        
                    @endphp
                    @livewire('historial', ['paciente_id' => $idPaciente])
                </div>
            </div>

        </div>

    </div>
    {{-- FIN HISTORIAL --}}

    {{-- HISTORIAL VACUNAS --}}
    <div class="modal fade" id="modVacunas" aria-hidden="true" style="display: none;" style="height: 500px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Historial Vacunaciones</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @php
                        
                    @endphp
                    @livewire('historial-vacunacion', ['id' => $idPaciente])
                </div>
            </div>

        </div>

    </div>
    {{-- FIN HISTORIAL --}}

    {{-- HISTORIAL ANTICONCEPTIVOS --}}
    <div class="modal fade" id="modAnticonceptivos" aria-hidden="true" style="display: none;" style="height: 500px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Historial Anticonceptivos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    @livewire('historial-anticonceptivo', ['id' => $idPaciente])
                </div>
            </div>

        </div>

    </div>
    {{-- FIN HISTORIAL --}}

    {{-- MODAL TRATAMIENTOS PRED. --}}
    <div class="modal fade" id="modalTratamientos" aria-hidden="true" style="display: none;"
        style="height: 500px;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tratamientos Predeterminados</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($tratamientospred as $item)
                            <div class="col-12 col-md-2">
                                <a class="btn btn-app bg-info btn-block"
                                    onclick="cargaTratamiento({{ $item->id }})">
                                    {{ $item->name }}
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </div>
    {{-- FIN TRATAMIENTOS PRED. --}}

    <!-- /.modal -->

    <section class="content container-fluid">
        <div class="card card-olive">
            <div class="card-header">

                <label><i class="fas fa-pills"></i> TRATAMIENTO
                </label>

            </div>
            <div class="card-body">

                <div class="row form-group">
                    <div wire:ignore class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">

                            <select name="medicamento_id" id="medicamento_id"
                                class="form-control form-control-sm select2" style="width: 100%">
                                <option value="0">Seleccione un medicamento</option>
                                @foreach ($medicamentos as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5 form-group">

                        <input type="text" class="form-control form-control-sm" id="indicaciones"
                            placeholder="Indicaciones">

                    </div>
                    <div class="col-sm-2 form-group">
                        <button class="btn btn-sm btn-success btn-block" onclick="addTratamiento()"><i
                                class="far fa-arrow-alt-circle-down"></i> Agregar</button>
                    </div>
                    <div class="col-sm-2 form-group">
                        <button class="btn btn-sm btn-info btn-block" data-toggle="modal"
                            data-target="#modalTratamientos">
                            Trat. Predefinido
                        </button>
                    </div>

                </div>
                <div class="form-group table-responsive" style="max-height: 250px;">
                    <table class="table table-sm table-hover table-bordered" id="tb_tratamiento">
                        <thead>
                            <tr class="table-info">
                                <th style="width: 35px">ID.</th>
                                <th>Medicamento</th>
                                <th>Indicaciones</th>
                                <th style="width: 40px"></th>
                            </tr>
                        </thead>
                        @if (!is_null($tratamientos))

                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($tratamientos as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item['medicamento'] }}</td>

                                        <td>{{ $item['indicaciones'] }}</td>

                                        <td class="text-right"><button class="btn btn-sm btn-warning"
                                                title="Eliminar" onclick="delTratamiento({{ $i - 1 }})"><i
                                                    class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach

                            </tbody>
                        @endif

                    </table>

                </div>

            </div>
        </div>



        <div class="card card-primary">
            <div class="card-header">
                <i class="fas fa-comment"></i> RECOMENDACIONES
            </div>
            <div class="card-body">
                <div class="form-group">
                    <textarea class="form-control" name="recomendaciones" id="recomendaciones" rows="2"
                        placeholder="Recomendaciones"></textarea>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3 col-lg-3">
                        <label for="cbfecreconsulta">Programar reconsulta:
                        </label>
                    </div>
                    <div class="col-sm-4" wire:ignore>
                        <input type="date" class="form-control form-control-sm" id="fecreconsulta">
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-7 form-inline form-group">
                        <span><strong>Importe Bs.: </strong></span>
                        <input type="number" class="form-control " id="importe" value="">
                    </div>
                    <div class="col-md-2 mb-1">
                        <button type="submit" onclick="cargaDatos();" class="btn btn-info btn-block"
                            wire:click="save">
                            <i class="far fa-save"></i>
                            Registrar
                        </button>

                    </div>
                    <div class="col-md-2">
                        <a href="javascript:history.back()" class="btn btn-secondary btn-block">
                            <i class="fas fa-ban"></i>
                            Cancelar
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>   

    @include('loading')

    @section('js')
        <script>
            document.addEventListener('livewire:load', function() {
                $(document).ready(function() {
                    $('.select2').select2();
                    $('.select2').on('change', function() {
                        // @this.set('selectedMedicamento', this.value);
                        setTimeout(() => {
                            $('#indicaciones').val('');
                            $('#indicaciones').focus();
                        }, 10);
                    });



                });

            })
        </script>

        <script>
            function enable_disable(checkbox, id) {
                if ($('#' + checkbox).prop('checked')) {
                    // Eliminamos el atributo de solo lectura
                    if (id == 'agregaMedicamento') {
                        $("#" + id).removeAttr("disabled");
                        // Eliminamos la clase que hace que cambie el color
                        $("#" + id).removeClass("disabled");
                    } else {
                        $("#" + id).removeAttr("readonly");
                        // Eliminamos la clase que hace que cambie el color
                        $("#" + id).removeClass("readOnly");
                    }

                } else {
                    if (id == 'agregaMedicamento') {
                        $("#" + id).attr("disabled", "disabled");
                        // Ponemos una clase para cambiar el color del texto y mostrar que
                        // esta deshabilitado
                        $("#" + id).addClass("disabled");
                    } else {
                        // Ponemos el atributo de solo lectura
                        $("#" + id).attr("readonly", "readonly");
                        // Ponemos una clase para cambiar el color del texto y mostrar que
                        // esta deshabilitado
                        $("#" + id).addClass("readOnly");
                    }
                }
            }
        </script>

        <script>
            function addTratamiento() {
                if (document.getElementById('medicamento_id').value != '0' && document.getElementById('indicaciones').value !=
                    "") {
                    var tratamiento = {
                        "medicamento_id": document.getElementById('medicamento_id').value,
                        "medicamento": $("#medicamento_id option:selected").text(),
                        "indicaciones": document.getElementById('indicaciones').value
                    }

                    $('.select2').val(0).trigger('change');
                    $("#indicaciones").val("");

                    @this.set('tratamiento', tratamiento);
                }

            }

            function delTratamiento(i) {
                @this.set('delTratamiento', i);
            }

            function cargaDatos() {
                mostrarLoading();
                @this.set('paciente_id', document.getElementById('paciente_id').value);
                @this.set('diagpresuntivo', document.getElementById('diagpresuntivo').value);
                @this.set('diagconclusivo', document.getElementById('diagconclusivo').value);
                @this.set('fecreconsulta', document.getElementById('fecreconsulta').value);
                @this.set('recomendaciones', document.getElementById('recomendaciones').value);
                @this.set('dateConsulta', document.getElementById('tdate').value + ' ' + document.getElementById('ttime')
                .value);
                @this.set('importe', document.getElementById('importe').value);
                if (document.getElementById('anamnesis').value == "") {
                    Swal.fire(
                        'Atencion!',
                        'El campo anamnesis es requerido',
                        'warning'
                    )
                    ocultarLoading();
                }
            }

            function hideMessage(nombreCampo) {
                $('#nombreCampo').hide();
            }

            function cargaTratamiento(id) {
                @this.set('tratamientospreds', id);
                $('#modalTratamientos').modal('hide');
            }
        </script>
    @endsection

</div>
