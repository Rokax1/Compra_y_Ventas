@extends("layouts.$theme.layout")
@section('titulo')
    Creacion de productos
@endsection

@section('styles')
    <link href="{{ asset("assets/$theme//plugins/Dropzone/dropzone.min.css") }}" rel="stylesheet">
@endsection


@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Creacion de producto</h1>
            </div>
            <div class="col-1 mt-3 mb-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('Products.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Nombre Producto  {{$errors}}</label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="telefono motorola"required value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                               {{$message}}
                              </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02"> precio</label>
                            <input type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" id="price" placeholder="99999" required value="{{ old('price') }}">
                            @error('price')
                            <div class="invalid-feedback">
                               {{$message}}
                              </div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file" name="file[]" multiple required >
                                <label class="custom-file-label" for="validatedCustomFile">Selecciona las imagenes</label>
                                @error('file')
                            <div class="invalid-feedback">
                               {{$message}}
                              </div>
                            @enderror

                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlTextarea1">Descripcion</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} " name="description" id="description"
                                required >{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                   {{$message}}
                                  </div>
                                @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>



                {{-- <form action="" class="dropzone">
                    @csrf
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form> --}}

                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')

    <script src="{{ asset("assets/$theme/plugins/Dropzone/dropzone.min.js") }}"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = false;

        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };

    </script>

@endsection
