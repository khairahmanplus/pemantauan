@extends('layout.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <thead>Nama</thead>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
