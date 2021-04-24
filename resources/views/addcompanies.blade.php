@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    @include('layouts.navbars.navs.auth')

@include('layouts.navbars.sidebar')
    <br><br>
    <div class="container mt--0">
    <form>
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="">Business Contacts</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Business Name</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    <div class="form-group">
      <label for="">Business Registration Number</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      
    <div class="form-group">
      <label for="">Business Email</label>
        <input type="email" class="form-control" id="" placeholder="">
      </div>
      </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="">Business Ownership</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      
    <div class="form-group">
      <label for="">Business TIN Number</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    <div class="form-group">
      <label for="">Business Physical Address</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <div class="form-group">
      <label for="">Business Postal Address</label>
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    </div>
    </div>
    <div class="form-group" style="margin-left:45%;">
        <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#busy">Next</button>
      </div>
  </div>
</form>
    </div>
<!-- Modal 2-->
<div class="modal fade" id="busy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document2">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Business Location</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">District</label>
        <input class="form-control" type="text" value="Kampala" id="example-text-input">
    </div>
    <div class="form-group">
        <label for="example-search-input" class="form-control-label">Country</label>
        <input class="form-control" type="text" value="Uganda" id="example-search-input">
    </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-md btn-success"><a href="{{ route('finishbusiness') }}" style="color:white;">Next </a></button>
      </div>
    </div>

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