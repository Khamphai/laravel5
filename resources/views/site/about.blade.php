@extends('layouts.app')

@section('content')

      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">About</div>
                      <div class="panel-body">
                          {{ $fullname }}<br>
                          {{ $website }}
                      </div>
                  </div>
              </div>
          </div>
      </div>

@endsection

@section('footer')
    <script>
        alert("Hello, About Page");
    </script>
@endsection
