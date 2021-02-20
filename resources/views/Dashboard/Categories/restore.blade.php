@extends("layouts.$theme.layout")
@section('titulo')
    Listado de Categorias
@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Listado de Categorias</h1>
            </div>

          </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Comision</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($categories as $category)

                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->commission }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a  href="{{route('Categories.restore',$category->id)}}"  class="btn btn-outline-success">
                                                <i class="fas fa-trash-restore"></i>
                                            </a>


                                        </div>

                                    </td>

                                </tr>
                            @empty
                                <h1>No hay categorias para restaurar</h1>
                            @endforelse



                        </tbody>
                    </table>
                    {{ $categories->links() }}


                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')


@endsection
