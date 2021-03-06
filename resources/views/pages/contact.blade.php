@extends('layouts.app')

@section('content')
    <div class="card mt-5 pl-1 pr-1">
        <div class="card-title mt-0"><h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner</p></div>

        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
