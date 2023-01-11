<div>
    @section('title', 'Atención Consulta |')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <br>

                <div class="row mb-2">
                    <div class="col-md-8">
                        <h4>REGISTRO DE APLICACION DE ANTICONCEPTIVOS</h4>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <span class="card-title"><i class="fas fa-info-circle"></i> Información del paciente</span>
                        <div class="float-right text-sm">
                            <strong>Inicio de Atención:</strong>
                            <input class="btn btn-primary " type="date" id="tdate" value="{{ date('Y-m-d') }}">
                            <input class="btn btn-primary " type="time" id="ttime" value="{{ date('H:i') }}">
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

    <!-- /.modal -->

    <section class="content container-fluid">
        <div class="card card-info">
            <div class="card-header">

                <label><i class="fas fa-vial"></i> Anticonceptivos
                </label>

            </div>
            <div class="card-body">

                <div class="row form-group">
                    <div wire:ignore class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <small>Medicamento</small>
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
                    <div class="col-sm-3 form-group">
                        <small>Dosis</small>
                        <select name="numdosis" id="numdosis" class="form-control form-control-sm">
                            <option value="1">Primera</option>
                            <option value="2">Segunda</option>
                            <option value="3">Tercera</option>
                            <option value="4">Cuarta</option>
                            <option value="4">Quinta</option>
                            <option value="4">Sexta</option>
                            <option value="4">Séptima</option>
                        </select>

                    </div>
                    <div class="col-sm-3 form-group">
                        <small>Próxima dosis</small>
                        <input type="date" class="form-control form-control-sm w-full" id="proxdosis">


                    </div>
                    <div class="col-sm-2 form-group text-white">
                        <br class="d-none d-sm-block d-md-block d-lg-block">
                        <button class="btn btn-sm btn-success btn-block" onclick="addTratamiento()">
                            <i class="far fa-arrow-alt-circle-down"></i>
                            Agregar
                        </button>
                    </div>
                    <div class="form-group table-responsive">
                        <table class="table table-sm table-hover table-bordered" id="tb_tratamiento">
                            <thead>
                                <tr class="table-info">
                                    <th style="width: 35px">ID.</th>
                                    <th>Medicamento</th>
                                    <th>Dosis</th>
                                    <th>Proxima dosis</th>
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

                                            <td>{{ $item['numdosis'] }}</td>
                                            <td>{{ $item['proxdosis'] }}</td>

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
            <div class="card card-success">
                <div class="card-header">
                    <i class="fas fa-comment"></i> RECOMENDACIONES
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <textarea class="form-control" name="recomendaciones" id="recomendaciones" rows="2"
                            placeholder="Recomendaciones"></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-7 form-inline">
                            <span><strong>Importe Bs.: </strong></span>
                            <input type="number" class="form-control " id="importe" value="">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-2 mb-1">
                            <button type="submit" onclick="cargaDatos();" class="btn btn-info btn-block">
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
                    $('.select2').on('change', function() {});
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
                if (document.getElementById('medicamento_id').value != '0') {
                    var tratamiento = {
                        "medicamento_id": document.getElementById('medicamento_id').value,
                        "medicamento": $("#medicamento_id option:selected").text(),
                        "numdosis": $("#numdosis option:selected").text(),
                        "proxdosis": document.getElementById('proxdosis').value
                    }

                    $('.select2').val(0).trigger('change');
                    document.getElementById("numdosis").value = 1;
                    @this.set('tratamiento', tratamiento);
                }

            }

            function delTratamiento(i) {
                @this.set('delTratamiento', i);
            }

            function cargaDatos() {
                mostrarLoading();
                @this.set('anamnesis', '02-Anticonceptivos');
                @this.set('paciente_id', document.getElementById('paciente_id').value);
                @this.set('recomendaciones', document.getElementById('recomendaciones').value);
                @this.set('dateConsulta', document.getElementById('tdate').value + ' ' + document.getElementById('ttime')
                    .value);
                @this.set('importe', document.getElementById('importe').value);

                let filas = $('#tb_tratamiento').find('tbody tr').length;
                if (filas <= 0) {
                    Swal.fire(
                        'Atencion!',
                        'Debe agregar al menos un medicamento en el registro',
                        'warning'
                    )
                    ocultarLoading();
                }
                else{
                    Livewire.emit('save');
                }
                
            }

            function hideMessage(nombreCampo) {
                $('#nombreCampo').hide();
            }
        </script>
    @endsection

</div>

