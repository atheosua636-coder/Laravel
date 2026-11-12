@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <section class="task-page">
        <p class="task-eyebrow">ACCOUNT</p>
        <h2>Profile</h2>
        <p class="task-muted">User information stored in the database.</p>

        <dl class="profile-card">
            <div>
                <dt>Username</dt>
                <dd>{{ $user->username }}</dd>
            </div>
            <div>
                <dt>Full name</dt>
                <dd>{{ $user->full_name }}</dd>
            </div>
            <div>
                <dt>Email</dt>
                <dd>{{ $user->email }}</dd>
            </div>
        </dl>
    </section>
@endsection
