@extends('layout.app')
@section('content')
    <form action="{{ route('registration.submit') }}" method="post">
        {{ @csrf_field() }}
        <input type="text" name="s_name" placeholder="enter your name here" value = "{{ old('s_name') }}">
        @error('s_name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="number" name="s_id" placeholder="enter your id here" value = "{{ old('s_id') }}">
        @error('s_id')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="s_dept" placeholder="enter your department here" value = "{{ old('s_dept') }}">
        @error('s_dept')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="submit">
    </form>
@endsection
