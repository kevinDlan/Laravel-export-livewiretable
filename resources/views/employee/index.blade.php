@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <a class="btn btn-success my-3 col-2" href="{{route('employee.create')}}">Create Employe</a>
                        <a class="btn btn-success my-3 col-2 @if ($employees->isEmpty()) disabled @endif"
                            href="{{route('employee.export')}}"><i class="bi bi-filetype-csv"></i> Export</a>
                    </div>
                    {{-- <div class="responsive-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>email</th>
                                    <th>Phone Number</th>
                                    <th>Compagny</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$employees->isEmpty())
                                @foreach ($employees as $employe)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$employe->firstname}}</td>
                                    <td>{{$employe->lastname}}</td>
                                    <td>{{$employe->email}}</td>
                                    <td>{{$employe->phone}}</td>
                                    <td>{{$employe->compagny->name}}</td>
                                    <td>
                                        <a href="{{route(" employee.edit",$employe->id)}}" class="btn btn-info">Edit</a>
                                        <form class="d-inline-block" method="POST"
                                            action="{{route('employee.destroy',$employe->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6" class="text-center">Nothing was found.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div> --}}
                    <livewire:employee-table theme="bootstrap-5" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection