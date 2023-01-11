@extends('adminlte::page')

@section('title', 'Enfermedades | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/ekko-lightbox/ekko-lightbox.css') }}">
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary mt-3">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Enfermedad - {{ $enfermedade->nombre }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="javascript:history.back()"><i
                                    class="far fa-arrow-alt-circle-left"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $enfermedade->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $enfermedade->descripcion }}
                        </div>
                        <hr>
                        <h5 class="text-center"><strong>CONTENIDO MULTIMEDIA</strong></h5>
                        <div class="form-group">
                            <div class="row">
                                @if ($enfermedade->image1)
                                   <div class="col-12 col-md-4">
                                    <a href="{{Storage::url($enfermedade->image1)}}" data-toggle="lightbox"
                                        data-title="{{$enfermedade->nombre}}" data-gallery="gallery">
                                        <img src="{{Storage::url($enfermedade->image1)}}" class="img-fluid mb-2"
                                            alt="white sample" />
                                    </a>
                                </div> 
                                @endif
                                @if ($enfermedade->image2)
                                   <div class="col-12 col-md-4">
                                    <a href="{{Storage::url($enfermedade->image2)}}" data-toggle="lightbox"
                                        data-title="{{$enfermedade->nombre}}" data-gallery="gallery">
                                        <img src="{{Storage::url($enfermedade->image2)}}" class="img-fluid mb-2"
                                            alt="black sample" />
                                    </a>
                                </div> 
                                @endif
                                @if ($enfermedade->image3)
                                   <div class="col-12 col-md-4">
                                    <a href="{{Storage::url($enfermedade->image3)}}"
                                        data-toggle="lightbox" data-title="{{$enfermedade->nombre}}" data-gallery="gallery">
                                        <img src="{{Storage::url($enfermedade->image3)}}"
                                            class="img-fluid mb-2" alt="red sample" />
                                    </a>
                                </div> 
                                @endif                                
                            </div>

                        </div>
                        <div class="form-group text-center">
                            @if ($enfermedade->youtube)
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$enfermedade->youtube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('vendor/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
    <script>
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        })
    </script>
@endsection
