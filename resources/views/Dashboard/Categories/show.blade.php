@extends("layouts.$theme.layout")
@section('titulo')
    Listado de subcategorias
@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-11 mt-3 mb-3">
                <h1>Listado de subcategorias</h1>
            </div>
            <div class="col-1 mt-3 mb-3">
                <a  href="{{route('SubCategory.create',$idCategory)}}" class="btn btn-outline-success">
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
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($categories as $category)

                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        <a  href="{{route('Categories.edit',$category->id)}}"  class="btn btn-outline-success">
                                            <i class="fas fa-edit"></i>
                                        </a>


                                        <a  class="btn btn-outline-danger" data-idcat="{{$category->id}}" data-cat="{{$category->name}}" data-toggle="modal" data-target="#delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        {{-- <a href="{{route('LandingPage.show',$category->id)}}"  class="btn btn-outline-primary">
                                            <i class="far fa-eye"></i>
                                        </a> --}}
                                        </div>

                                    </td>

                                </tr>
                            @empty
                                <h1>No hay categorias registradas</h1>
                            @endforelse



                        </tbody>
                    </table>
                    {{ $categories->links() }}

                    @include('Layouts/components/modalCategory')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
       $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var idcat =   button.data('idcat')
      var cat_name  =  button.data('cat')
      ///console.log(prod_name);
      var modal = $(this)
      modal.find('.modal-footer #id_cat').val(idcat);
      $("#prod_name").text(cat_name);
       })
    </script>

@endsection
