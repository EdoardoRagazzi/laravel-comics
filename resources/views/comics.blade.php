{{------EXTENDS----->Connect Home page with the extension of app.blade.php (structure pages) --}}
@extends('layouts.app')

{{-- Insert section / title / with an expression to app.php with the called variables --}}
@section('title', 'Comics-Laravel')

@section('main')
    <div class="ecc">
        <h1>Comics and Novel</h1>
    </div>
    <section>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima nam hic, mollitia nihil magni iusto sapiente vel voluptatem neque officia.
        </p>
    </section>

@endsection