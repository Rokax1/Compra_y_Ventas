@extends("layouts.$theme.layout")
@section('titulo')
    Listado de product
@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Papelera</h1>
            </div>
            <div class="col-1 mt-3 mb-3">
                {{-- <a  href="{{route('Products.create')}}" class="btn btn-outline-success">
                    <i class="fas fa-plus-circle"></i>
                </a> --}}
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
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Stock</th>

                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($products as $product)

                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        <a  href="{{route('Products.restore',$product->id)}}"  class="btn btn-outline-success">
                                            <i class="fas fa-trash-restore"></i>
                                        </a>

                                        {{-- <a href="{{route('LandingPage.show',$product->id)}}"  class="btn btn-outline-primary">
                                            <i class="far fa-eye"></i>
                                        </a> --}}
                                        </div>

                                    </td>

                                </tr>
                            @empty
                                <h1>No hay productos para restaurar</h1>
                            @endforelse



                        </tbody>
                    </table>
                    {{ $products->links() }}


                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')


@endsection
