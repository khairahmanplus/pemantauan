@extends('layout.dashboard')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <thead>Nama</thead>
                </tr>
            </thead>
            <tbody>
                {{-- Komen --}}
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
<script>
    alert('Hello');
</script>
@endsection
