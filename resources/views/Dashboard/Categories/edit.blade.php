@extends("layouts.$theme.layout")
@section('titulo')
    Editar de categorias
@endsection

@section('styles')
@endsection

@section('scriptPlugins')



@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Edicion de Categorias</h1>
            </div>
            <div class="col-1 mt-3 mb-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('Categories.update',$category->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Nombre Categoria {{$errors}}</label>
                            <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                name="name" id="name" placeholder="Telefonos" required value="{{$category->name}}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02"> comisión</label>
                            <input type="number" class="form-control {{ $errors->has('commission') ? 'is-invalid' : '' }}"
                                name="commission" id="commission" placeholder="99999" required
                                value="{{$category->commission}}">
                            @error('commission')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <button class="btn btn-primary" type="submit">Editar</button>
                </form>



                </form>
            </div>
        </div>
    </div>


@endsection


@section('script')

@endsection
