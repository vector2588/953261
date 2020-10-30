@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Page - Contact List</h2>
    <h3>Table - Contact</h3>
    <a href="/contact/create" class="btn btn-primary my-2">create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ Carbon\Carbon::now()->diffInYears($row->date_of_birth) }} Years</td>
                <td>

                <a href="{{route('contact.edit',$row->id)}}" class="btn btn-success my-2">edit</a>
                </td>
                <td>
                <form action="{{route('contact.destroy',$row->id)}}" method="post">
                    @csrf @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger my-2" onclick="return confirm('Do you sure to delete this id?')">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
