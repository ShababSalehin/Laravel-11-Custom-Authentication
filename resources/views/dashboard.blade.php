@extends("layouts.layout")

@section("title", "Dashboard Page")

@section("content")

<h2>Hi "{{ auth()->user()->name }}", Welcome to the Dashboard</h2>
<p>This is the Personal Dashboard.</p>

@endsection
