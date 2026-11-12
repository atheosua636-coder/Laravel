@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
    <h2>User Accounts</h2>
    <p>List of POS staff accounts.</p>

    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
