@extends("layouts.$theme.layout")
@section('titulo')
    Listado de product
@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Listado de productos</h1>
            </div>
            <div class="col-1 mt-3 mb-3">
                <a class="btn btn-outline-success">
                    <i class="fas fa-plus-circle"></i>
                </a>
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
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->product->id }}</th>
                                    <td>{{ $product->product->name }}</td>
                                    <td>{{ $product->product->description }}</td>
                                    <td>{{ $product->product->price }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        <a   class="btn btn-outline-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a  class="btn btn-outline-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a href="{{route('LandingPage.show',$product->product->id)}}"  class="btn btn-outline-primary">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        </div>

                                    </td>

                                </tr>
                            @empty
                                <h1>No hay productos registrados</h1>
                            @endforelse



                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
