@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a class="btn btn-success my-3" href="{{route('compagny.create')}}">Create Compagny</a>
                    <div class="responsive-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$compagnies->isEmpty())
                                @foreach ($compagnies as $comp)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$comp->name}}</td>
                                    <td>{{$comp->email}}</td>
                                    <td>{{$comp->website}}</td>
                                    <td><img src="{{asset($comp->logo)}}" alt="logo"></td>
                                    <td></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6" class="text-center">Nothing was found.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection