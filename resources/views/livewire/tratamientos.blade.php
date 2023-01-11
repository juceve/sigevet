<div>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-secondary mt-3">
                    <div class="card-header">
                        <span class="card-title">NUEVO TRATAMIENTO PREDEFINIDO</span>
                        <div class="float-right">
                            <a class="btn btn-secondary btn-sm" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tratamientos.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">

                                    <div class="form-group">
                                        {{ Form::label('Nombre tratamiento') }}
                                        <input type="text" class="form-control" wire:model="name"
                                            placeholder="Escriba el nombre del tratamiento">
                                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                </div>

                            </div>


                            <div class="card card-olive">
                                <div class="card-header">

                                    <label><i class="fas fa-pills"></i> TRATAMIENTO
                                    </label>

                                </div>
                                <div class="card-body">

                                    <div class="row form-group">
                                        <div wire:ignore class="col-sm-4">
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
                                        <div class="col-sm-6 form-group">

                                            <input type="text" class="form-control form-control-sm" id="indicaciones"
                                                placeholder="Indicaciones">

                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-success btn-block"
                                                onclick="addTratamiento()"><i class="far fa-arrow-alt-circle-down"></i>
                                                Agregar</a>
                                        </div>

                                    </div>
                                    <div class="form-group table-responsive">
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

                                                            <td class="text-right"><a
                                                                    href="javascript:void(0)"class="btn btn-sm btn-warning"
                                                                    title="Eliminar"
                                                                    onclick="delTratamiento({{ $i - 1 }})"><i
                                                                        class="fas fa-trash-alt"></i></a></td>
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
                            <div class="box-footer mt20">
                                <a type="javascript:void(0)" wire:click="save" class="btn btn-primary"><i
                                        class="far fa-save"></i> Guardar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
    </script>
@endsection
