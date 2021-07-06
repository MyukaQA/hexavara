@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Data Customer</h5>
          </div>
          <form action="{{route('admin.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label>Name</label>
              <input name="name" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input name="phone" type="tel" class="form-control">
            </div> 
            <div class="form-group">
              <label>Example select</label>
              <select name="subscription_id" class="form-control">
                <option value="">-- Pilih Subs Plan (quota) --</option>
                @foreach ($subs as $sub)
                <option value="{{$sub->id}}">{{$sub->plan}} ({{$sub->quota}})</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection