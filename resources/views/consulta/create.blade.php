@extends('adminlte::page')

@section('title', 'Editar Paciente | ')

@section('content')


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
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Información del paciente</h3>
                    </div>
                    <div class="card-body" style="font-size: 13px;">
                        <div class="table-responsive">

                            <table class="table table-sm table-bordered">
                                <thead>
                                    <tr class="table-secondary">
                                        <th style="width: 30%">NOMBRE</th>
                                        <th style="width: 30%">RAZA</th>
                                        <th style="width: 40%">PROPIETARIO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paciente 1</td>
                                        <td>Raza 1</td>
                                        <td>Propietario 1 propietario</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3"><b>Descripcion:</b> <span>Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit. Exercitationem.</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="card card-lightblue">
                    <div class="card-header">
                        ANAMNESIS
                    </div>
                    <div class="card-body">
                        <textarea class="form-control" name="anamnesis" id="anamnesis" rows="4"
                            placeholder="Escriba los detalles..."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-lightblue">
                            <div class="card-header">
                                <div class="icheck-primary d-inline">
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
                        <div class="card card-olive">
                            <div class="card-header">

                                <div class="icheck-success d-inline">
                                    <input type="checkbox" id="cbdiagconclusivo"
                                        onclick="enable_disable('cbdiagconclusivo', 'diagconclusivo');">
                                    <label for="cbdiagconclusivo">DIAGNOSTICO CONCLUSIVO
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
                <div class="card card-olive">
                    <div class="card-header">
                        TRATAMIENTO
                        <div class="float-right">
                            <a class="bbtn-sm" href="javascript:void()" data-toggle="modal"
                                data-target="#modal-lg"><i class="fas fa-plus-square"></i> Agregar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-bordered">
                                <thead>
                                    <tr class="table-info">
                                        <th style="width: 35px">No.</th>
                                        <th>Medicamento</th>
                                        <th>Dósis</th>
                                        <th>Intervalo</th>
                                        <th style="width: 100px">Vía</th>
                                        <th style="width: 40px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Paracetamol</td>
                                        <td>1 comprimido</td>
                                        <td>cada 8 horas durante 3 dias</td>
                                        <td>Oral</td>
                                        <td class="text-right"><button class="btn btn-sm btn-warning"
                                                title="Eliminar"><i class="fas fa-trash-alt"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-7">
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <input type="checkbox" id="cbfecreconsulta"
                                                onclick="enable_disable('cbfecreconsulta', 'fecreconsulta');">
                                            <label for="cbfecreconsulta">Programar reconsulta: 
                                            </label>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="date" readonly class="form-control form-control-sm" id="fecreconsulta">
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2 mb-1">
                                <button class="btn btn-info btn-block">
                                    <i class="far fa-save"></i>
                                    Registrar
                                </button>
                            </div>
                            <div class="col-md-2">
                                <a href="consultas" class="btn btn-secondary btn-block">
                                    <i class="fas fa-ban"></i>
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- MODAL --}}
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Seleccione el medicamento y su administración</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">                    
                    @livewire('form-medicamento')                
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    @section('js')
        <script>
            function enable_disable(checkbox, id) {
                if ($('#' + checkbox).prop('checked')) {
                    // Eliminamos el atributo de solo lectura
                    $("#" + id).removeAttr("readonly");
                    // Eliminamos la clase que hace que cambie el color
                    $("#" + id).removeClass("readOnly");
                } else {
                    // Ponemos el atributo de solo lectura
                    $("#" + id).attr("readonly", "readonly");
                    // Ponemos una clase para cambiar el color del texto y mostrar que
                    // esta deshabilitado
                    $("#" + id).addClass("readOnly");
                }
            }
        </script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    @endsection
@endsection
