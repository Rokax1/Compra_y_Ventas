@extends("layouts.$theme.layout")
@section('titulo')
    Creacion de productos
@endsection

@section('styles')
    <link href="{{ asset("assets/$theme/plugins/bootstrap-fileinput/css/fileinput.min.css") }}" rel="stylesheet">
@endsection

@section('scriptPlugins')



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
                <form action="{{ route('Products.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Nombre Producto </label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                name="name" id="name" placeholder="telefono motorola" required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault02"> precio</label>
                            <input type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                                name="price" id="price" placeholder="99999" required value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="stock"> Stock </label>
                                <input type="number" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}" id="stock" name="stock" value="{{ old('stock') }}" required>
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-9 mb-3">
                            <label for="exampleFormControlTextarea1">Descripcion</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} "
                                name="description" id="description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="stock"> Categoria </label>
                                <select name="category" id="Category" class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }} " >
                                    <option value="">Selecciona una categoria</option>
                                    @forelse ($categories as $category)
                                    <option value="{{$category->id}}" {{old('category') ? 'selected' : ''}} >{{$category->name}}</option>
                                    @empty

                                    @endforelse

                                </select>
                                @error('category')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="stock"> imagenes</label>

                                <input type="file"
                                    class=" {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file"
                                    name="file[]" multiple required>

                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
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

<script src="{{ asset("assets/$theme/plugins/bootstrap-fileinput/js/fileinput.min.js") }}"> </script>
<script src="{{ asset("assets/$theme/plugins/bootstrap-fileinput/js/locales/es.js") }}"> </script>
<script src="{{ asset("assets/$theme/plugins/bootstrap-fileinput/themes/fas/theme.min.js") }}"> </script>

<script>
    $('#file').fileinput({
        lenguage:'es',
        allowedFileExtensions:['jpg','jpeg','png'],
        maxFileSize:1000,
        showUpload:false,
        showClose:false,
        initialPreviewAsData:true,
        dropZoneEnabled:false,
        theme:"fas",
    });

</script>
@endsection
