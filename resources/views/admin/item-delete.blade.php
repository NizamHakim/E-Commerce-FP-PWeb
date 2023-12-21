@extends('admin.admin-layout')

@section('title', 'Delete Item')

@section('content')
    <h2>Are you sure you want to delete item {{ $item->name }} ?</h2>

    <div class="mt-5">
        <a href="/item-destroy/{{ $item->id }}" class="btn btn-danger me-3">Sure</a>
        <a href="/items" class="btn btn-primary">Cancel</a>
    </div>
@endsection