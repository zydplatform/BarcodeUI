@extends('layouts.app')

@section('content')
    @include('layouts.headers.clientcards')

    @include('layouts.navbars.navs.auth')

    @include('layouts.navbars.client-sidebar')

    <div class="container mt--7">
        <br><br><br>
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Get barcode for all your products here</h3>
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
                                    <th scope="col">Barcode Request</th>
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
                                    <td><button class="btn btn-sm btn-warning">Send Request</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Banana Juice   
                                    </th>
                                    <td>
                                        59098
                                    </td>
                                    <td>
                                        Cock Tail Juice
                                    </td>
                                    <td>5000
                                    </td>
                                    <td><button class="btn btn-sm btn-warning">Send Request</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Cake 
                                    </th>
                                    <td>
                                        10078
                                    </td>
                                    <td>
                                        Vanilla Flavor
                                    </td>
                                    <td>14000
                                    </td>
                                    <td><button class="btn btn-sm btn-warning">Send Request</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Cookies 
                                    </th>
                                    <td>
                                        67878
                                    </td>
                                    <td>
                                        Roasted brown cookies
                                    </td>
                                    <td>15500
                                    </td>
                                    <td><button class="btn btn-sm btn-warning">Send Request</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Bans  
                                    </th>
                                    <td>
                                        7009
                                    </td>
                                    <td>
                                        Creamy iced bans
                                    </td>
                                    <td>10000
                                    </td>
                                    <td><button class="btn btn-sm btn-warning">Send Request</button></td>
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