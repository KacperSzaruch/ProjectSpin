@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('') ,       
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">            
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Dodaj nowe materiały dydaktyczne') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/material/" autocomplete="off">
                            @csrf                           

                            <h6 class="heading-small text-muted mb-4">{{ __('Informacje o materiale') }}</h6>
                            
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
                                    <label class="form-control-label" for="input-name">{{ __('Tytuł') }}</label>
                                    <input type="text" name="title" id="input-name" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Tytuł') }}"  required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Tematyka') }}</label>
                                    <input type="text" name="subject" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Teamtyka') }}"  required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>                                                            
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">{{ __('Zawartość') }}</label>
                                    <textarea name="description" cols="100" rows="7" id="input-description" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Zawartosć') }}"  required autofocus></textarea>                     
                                </div>                    


                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="btn btn-success mt-4" style="font-size: 15px;background-color: #5e72e4;border-color: #5e72e4; " for="input-file">{{ __('Dodaj Plik') }}</label>
                                    <input type="file" name="file" id="input-file" class="form-control form-control-file" placeholder="{{ __('Pliki') }}"   autofocus>
                                </div>    


                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Dodaj materiał') }}</button>
                                </div>
                            </div>
                        </form>                    
                     </div>
                </div>
            </div>
        </div>        
        @include('layouts.footers.auth')
    </div>
@endsection
