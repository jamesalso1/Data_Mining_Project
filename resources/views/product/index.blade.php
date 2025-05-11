@extends('layouts.index')

@section('content')
    <form action="{{ route('product.post') }}" method="POST" enctype="multipart/form-data">
        {{-- csrf token --}}
        @csrf
        <label for="file">Upload file của bạn</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload">
    </form>
@endsection
