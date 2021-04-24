@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    @include('layouts.navbars.navs.auth')

@include('layouts.navbars.sidebar')
    <br><br>
    <div class="container mt--0">
    <form>
  <div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6">
    <h1>Finish Business Registration</h1>
    <div class="form-group">
      <label for="">Business Owners</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Business Types</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    <div class="form-group">
      <label for="">Business Lines</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      
    
    </div>
    <div class="form-group" style="margin-left:45%;">
        <button type="button" class="btn btn-md btn-success">Finish</button>
      </div>
      <div class="col-md-3"></div>

  </div>
</form>
    </div>

</div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush