@extends('admin.admin-layout')

@section('title', 'Categories')

@section('content')
    <h1>Category List</h1>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
