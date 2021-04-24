@extends('layouts.app', ['title' => __('User Profile')])

@section('content')


    <div class="container" style="">
        <div class="row">
            <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">

                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="#" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="Mugwanya" value="" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="Mug@gmail.com" value="" required>

                                    
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="#" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Business Information') }}</h6>

                            
                                

                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business Name') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative' is-invalid' : '' }}" placeholder="mateo Snacks and Drinks " value="" required>
                                     </div>
                                     <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business registration Number') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative" placeholder="4535553535353535" value="" required>
                                     </div>
                                     <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business Owners') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative" placeholder="Mugwanya" value="" required>
                                     </div>
                                     <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business Ownership') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative" placeholder="Sole Proprietoirship" value="" required>
                                     </div>
                                     <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business TIN') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative" placeholder="4542623433434343432" value="" required>
                                     </div>
                                     <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business Email') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative" placeholder="mateo@gmail.com" value="" required>
                                     </div>
                                     <div class="form-group">
                                    <label class="form-control-label" for="input-current-password">{{ __('Business Contacts') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative" placeholder="0789674522" value="" required>
                                     </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Update Record') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- @include('layouts.footers.auth') -->
    </div>
@endsection
