@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="float-left">
          <h5 class="card-title">History</h5>
          <h6 class="card-subtitle mb-2 text-muted">enter a name for the data that will appear</h6>
        </div>
        <div class="float-sm-right">
          <button id="btnsearch" type="button" class="btn btn-info btn-block"><i class="fa fa-search"></i>   Search</button>
        </div>
        <div class="float-sm-right" style="margin-right:10px;">
          <input type="text" class="form-control" id="name" placeholder="name">
        </div>
        <table class="table table-hover" id="history-json">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">phone</th>
              <th scope="col">Name Outgoing</th>
              <th scope="col">Number Outgoing</th>
              <th scope="col">Duration</th>
              <th scope="col">Date</th>
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
  var table = $('#history-json').DataTable({
    processing: true,
    serverSide: true,
    "ordering": true,
    searching: true,
    "ajax" : {
      "url" : '{{ route("data.history") }}',
      "error" : function (jqXHR, textStatus, errorThrown) {
        $('#history-json').DataTable().clear().draw();
      }
    },
    "columns": [
      {"data" : "name"},
      {"data" : "phone"},
      {"data" : "name_outgoing"},
      {"data" : "outgoing_number"},
      {"data" : "duration"},
      {"data" : "dialed_on"},
    ]
  });

  $('#btnsearch').click(function(e){ 
      var param = '';
      var param = param + 'name='+$('#name').val();
      // var param = param + 'judul='+$('#judul').val() + '&';
      // var param = param + 'status_artikel='+$('#status_artikel').val() + '&';
      // var param = param + 'kategori='+$('#kategori').val();
      var url = '{{ route("data.history") }}?'+param;
      table.ajax.url(url).load();
  });

</script>
@endsection