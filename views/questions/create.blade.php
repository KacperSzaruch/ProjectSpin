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
                            <h3 class="mb-0">{{ __('Zadaj nowe pytanie') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/question/" autocomplete="off">
                            @csrf                           

                            <h6 class="heading-small text-muted mb-4">{{ __('Informacje o pytaniu') }}</h6>                           
                            


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Treść') }}</label>
                                    <input type="text" name="question" id="input-name" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Treść') }}"  required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-subject">{{ __('Tematyka') }}</label>
                                    <input type="text" name="subject" id="input-subject" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Teamtyka') }}"  required autofocus>
                                </div>

                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" name="type" value="anonymous" id="anonymousType" type="checkbox">
                                    <label class="custom-control-label" for="anonymousType">
                                        <span class="text-muted">{{ __('Chcę pozostać ') }} <a href="#!">{{ __('Anonimowy') }}</a></span>
                                    </label>
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Zadaj Pytanie') }}</button>
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
