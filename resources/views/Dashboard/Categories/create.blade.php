@extends("layouts.$theme.layout")
@section('titulo')
    Creacion de categorias
@endsection

@section('styles')
@endsection

@section('scriptPlugins')



@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Creacion de Categorias</h1>
            </div>
            <div class="col-1 mt-3 mb-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('Categories.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Nombre Categoria </label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                name="name" id="name" placeholder="Telefonos" required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02"> comisión</label>
                            <input type="number" class="form-control {{ $errors->has('commission') ? 'is-invalid' : '' }}"
                                name="commission" id="comission" placeholder="99999" required
                                value="{{ old('comission') }}">
                            @error('commission')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>



                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')

@endsection
