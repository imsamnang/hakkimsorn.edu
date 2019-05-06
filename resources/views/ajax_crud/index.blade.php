@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Dashboard
                <button class="btn btn-primary btn-sm float-right" id="read-data">Load Data</button>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped table-condensed">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function(){
      $('#read-data').on('click',function(e){
        e.preventDefault();
        alert('test');
      })
    });    

  </script>
@endpush
