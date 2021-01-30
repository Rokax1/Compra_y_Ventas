@extends("layouts.$theme.layout")
@section('titulo')
    Listado de Productos
@endsection

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                          </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
@endsection
