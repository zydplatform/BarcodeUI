@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    @include('layouts.navbars.navs.auth')

    @include('layouts.navbars.sidebar')

    <div class="container mt--7">
        
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Products</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('products') }}" class="btn btn-sm btn-primary">Add Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Product Description</th>
                                    <th scope="col">Product Price (UGX)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Honey   
                                    </th>
                                    <td>
                                        569
                                    </td>
                                    <td>
                                        Natural Sweet Honey
                                    </td>
                                    <td>10000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Honey   
                                    </th>
                                    <td>
                                        569
                                    </td>
                                    <td>
                                        Natural Sweet Honey
                                    </td>
                                    <td>10000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Honey   
                                    </th>
                                    <td>
                                        569
                                    </td>
                                    <td>
                                        Natural Sweet Honey
                                    </td>
                                    <td>10000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Honey   
                                    </th>
                                    <td>
                                        569
                                    </td>
                                    <td>
                                        Natural Sweet Honey
                                    </td>
                                    <td>10000
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Honey   
                                    </th>
                                    <td>
                                        569
                                    </td>
                                    <td>
                                        Natural Sweet Honey
                                    </td>
                                    <td>10000
                                    </td>
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
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush