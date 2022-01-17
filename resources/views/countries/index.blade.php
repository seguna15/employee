@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Countries</h1>
    
</div>

<div class="row">
    <div class="card mx-auto">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-auto">
                    <form method="GET" action="{{ route('countries.index')}}" class="row gy-2 gx-3 align-items-center">
                        <div class="col-auto">
                            <input type="search" name="search" class="form-control" id="autoSizingInput" placeholder="Nigeria">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{ route('countries.create') }}" class="btn btn-primary float-right">Create</a>
                </div>
            </div>
    
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Country Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <th scope="row">{{$country->id}}</th>
                            <td>{{ $country->country_code}}</td>
                            <td>{{ $country->name}}</td>
                            <td>
                                <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection