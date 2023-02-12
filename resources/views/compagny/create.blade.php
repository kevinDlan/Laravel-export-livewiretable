@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-info my-3" href="{{route('compagny.index')}}">Go Back</a>
                    <div>
                        <form method="POST" action="{{route('compagny.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name')
                                    }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="off">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="off">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="website" class="col-md-4 col-form-label text-md-end">{{ __('Website') }}</label>
                                <div class="col-md-6">
                                    <input id="website" type="text"
                                        class="form-control @error('website') is-invalid @enderror" name="website"
                                        value="{{ old('website') }}" required autocomplete="off">

                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="logo" class="col-md-4 col-form-label text-md-end">{{ __('logo') }}</label>
                                <div class="col-md-6 mt-5">
                                    <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo"
                                        value="{{ old('logo') }}" required autocomplete="off">
                            
                                    @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">
                                    <img id="updloadImage" src="" alt="">
                                </div>
                            </div>
                            <div class="row mb-3 col-3 mx-auto">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("js")
<script>
  $("#logo").on('change', function(e)
  {
    $("#updloadImage").attr('src', () => URL.createObjectURL(e.target.files[0]));
    $('#updloadImage').attr('width',()=>130)
    $('#updloadImage').attr('height',()=>100)
  })
</script>
@endpush