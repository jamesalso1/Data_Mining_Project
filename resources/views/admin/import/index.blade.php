@extends('admin.layouts.index')
@section('content')
    <h1>This is import place</h1>
    <form action="{{ route('admin.import.post') }}" method="POST" enctype="multipart/form-data">
        {{-- csrf token --}}
        @csrf
        <label for="file">Upload file của bạn</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload">
    </form>
@endsection
