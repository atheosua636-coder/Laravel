@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Welcome to the Simple POS System</h2>
    <p>This application provides basic customer and user account management for a point-of-sale system.</p>
    <a href="{{ route('customers.index') }}">View Customers</a>
    <a href="{{ route('users.index') }}">View Users</a>
@endsection