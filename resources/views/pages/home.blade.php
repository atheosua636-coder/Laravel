@extends('layouts.app')

@section('title', 'POS Home')

@section('content')
    <section class="hero">
        <p class="task-eyebrow">POINT OF SALE</p>
        <h2>Simple POS Home</h2>
        <p>This project combines customer and staff records with a task manager for daily POS work.</p>
        <div class="actions">
            <a class="button" href="{{ route('customers.index') }}">View Customers</a>
            <a class="button" href="{{ route('users.index') }}">View POS Staff</a>
            <a class="button" href="{{ route('tasks.index') }}">View Tasks</a>
        </div>
    </section>
@endsection
