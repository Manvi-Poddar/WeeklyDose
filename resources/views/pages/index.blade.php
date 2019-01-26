@extends('layouts.app')

@section('content')

        <section class="jumbotron text-center">
                <div class="container">
                        <h1 class="jumbotron-heading">Employee Portal</h1>
                        <p class="lead text-muted">“Employee Portal” is an open-source tool developed by ColoredCow to assist organizations in managing their operations. It has different modules that help with various aspects of operations like Finance, Hiring, KnowledgeCafe, CRM, Employee Management, etc.</p>
                        <p>
                                <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
                                <a href="/register" class="btn btn-success btn-lg"role="button">Register</a>
                        </p>
                </div>
        </section>
        <h1>Home Page</h1>
        {{$title}}
@endsection
