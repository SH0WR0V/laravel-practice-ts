@extends('layout.app')
@section('content')
<main>
    <h1>My profile</h1>
    <h2><?php echo $name; ?></h2>
    <h2>{{$id}}</h2>
    <table>
        @foreach ($students as $student)
            <tr><td>{{$student}}</td></tr>
        @endforeach
    </table>
</main>
@endsection
