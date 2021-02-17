@extends("layouts.$theme.layout")
@section('titulo')
    Editar Producto
@endsection

@section('styles')
    <link href="{{ asset("assets/$theme/plugins/bootstrap-fileinput/css/fileinput.min.css") }}" rel="stylesheet">
@endsection

@section('contenido')


    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Edicion de producto</h1>
            </div>
            <div class="col-1 mt-3 mb-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('Products.update', $product->id) }}" method="POST"  enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Nombre Producto </label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                name="name" id="name" placeholder="telefono motorola" required
                                value="{{ $product->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault02"> precio</label>
                            <input type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                                name="price" id="price" placeholder="99999" required value="{{ $product->price }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="stock"> Stock</label>
                            <input type="number" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}"
                                id="stock" name="stock" value="{{ $product->stock }}" required>
                            @error('stock')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlTextarea1">Descripcion</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} "
                                name="description" id="description" required>{{ $product->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">

                            <label for="stock"> imagenes</label>
                            {{$imagesURL[0]}}
                            <input type="file" class=" {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file"
                                name="file[]" multiple required data-initial-preview="">
                            {{--  --}}
                            {{-- "public/leandro sepulveda_101/6zGt3deSey0DBwUq1UNanIvLgoRywQCeIHrKzhIm.jpg" --}}
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                    </div>

                    <button class="btn btn-primary" type="submit">Editar</button>
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

    {{-- $product->images[0]->url --}}
@endsection

@section('script')

    <script src="{{ asset("assets/$theme/plugins/bootstrap-fileinput/js/fileinput.min.js") }}"> </script>
    <script src="{{ asset("assets/$theme/plugins/bootstrap-fileinput/js/locales/es.js") }}"> </script>
    <script src="{{ asset("assets/$theme/plugins/bootstrap-fileinput/themes/fas/theme.min.js") }}"> </script>


    <script>
        /*
                                window.onload = function() {
                                    var url = '{{ env('APP_URL', 'fsdf') }}';
                                    var id = '{{ $product->id }}'
                                    //console.log(url+id)

                                    // fetch(url+'/api/img/'+id, {
                                    //   method: 'get', // or 'PUT'
                                    //   headers:{
                                    //     'Content-Type': 'application/json',
                                    //     'Access-Control-Allow-Origin': '*',
                                    //     'X-CSRF-TOKEN':window.CSRF_TOKEN,


                                    //   }
                                    // }).then(res => console.log( res))
                                    // .catch(error => console.error('Error:', error))
                                    // .then(response => console.log('Success:', response));
                                    var requestOptions = {
                                        method: 'GET',
                                        redirect: 'follow'
                                    };
                                    var img = [];
                                    fetch(url + '/api/img/' + id, requestOptions)
                                        .then(result => result.json())
                                        .then(function(result) {
                                            img = result[0]


                                            $('#file').fileinput({

                                                lenguage: 'es',

                                                allowedFileExtensions: ['jpg', 'jpeg', 'png'],
                                                maxFileSize: 1000,
                                                showUpload: false,
                                                showClose: false,
                                                initialPreviewAsData: true,
                                                dropZoneEnabled: false,
                                                theme: "fas",
                                            });

                                        })
                                        .catch(error => console.log('error', error));



                                    //alert('OK');
                                }
                                */

        $(document).ready(function() {
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': window.CSRF_TOKEN,
            //     }
            // });
            // // alert("document is ready");
            // var id = '{{ $product->id }}'


            // var settings = {
            //     "url": "http://localhost:8000/api/img/106",
            //     "method": "GET",
            //     "timeout": 0,
            // };
            // var img = [];
            // //console.log(typeof settings)
            // $.ajax(settings).done(function(response) {

            //     $.each(response, function(ind, elem) {



            //        img= [...img ,'/storage/'+elem]
            //     });


            //     console.log(img,['jpg', 'jpeg', 'png']);
            // });




            $('#file').fileinput({

                lenguage: 'es',

                allowedFileExtensions: ['jpg', 'jpeg', 'png'],
                maxFileSize: 1000,
                showUpload: false,
                showClose: false,
                initialPreviewAsData: true,
                dropZoneEnabled: false,
                theme: "fas",
            });
         });

    </script>

    <script>

    </script>
@endsection
