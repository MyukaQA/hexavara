@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Data Customer</h5>
            <h5 class="card-title"><a href="{{route('admin.create')}}" class="btn btn-primary">Add Customer</a></h5>
          </div>
          <table class="table table-hover" id="customer-json">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Subs Plan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('script')
  <script>
    var table = $('#customer-json').DataTable({
      processing: true,
      serverSide: true,
      "ordering": true,
      searching: true,
      "ajax" : {
        "url" : '{{ route("data.customer") }}',
        "error" : function (jqXHR, textStatus, errorThrown) {
          $('#customer-json').DataTable().clear().draw();
        }
      },
      "columns": [
        {"data" : "name"},
        {"data" : "phone"},
        {"data" : "subs"},
        {"data" : "action"},
      ]
    });
  </script>
@endsection