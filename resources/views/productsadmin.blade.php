@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    @include('layouts.navbars.navs.auth')

@include('layouts.navbars.sidebar')
    <br><br>
    <div class="container mt--0">
    <h2 style="margin-left:40%;">Adding Products to Inventory</h2>
  <hr>
    <form>
  <div class="row">

    <div class="col-md-6">
    <div class="form-group">
      <label for="">Product Name</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Product Segement</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    <div class="form-group">
      <label for="">Product Segement Code</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      
    <div class="form-group">
      <label for="">Product Family</label>
        <input type="email" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Product Family Code</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      
    <div class="form-group">
      <label for="">Product Class</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      </div>
    <div class="col-md-6">
    
    <div class="form-group">
      <label for="">Product Class Code</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Product Core attribute</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Product Core attribute Code</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Product Core attribute description</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Product Specified Description</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div><br>
      <div class="form-group" style="margin-left:45%;">
        <button type="button" class="btn btn-md btn-success">Finish</button>
      </div>
    </div>
    </div>
    
  </div>
</form>
    </div>

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