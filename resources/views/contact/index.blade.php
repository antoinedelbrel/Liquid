@extends('layout')

@section('content')
    <div id="contain" class="card bg-dark text-white">
        <h1 class="mb-2 text-center card-title">Contact Us</h1>
        
        
        
        <!-- @if ($message = Session::get('success'))
            <div class='alert alert-success'>
                <p>{{ $message }}</p>
            </div>
        @endif -->
        <div id="back ">
            <img src="{{ asset('images/soiree.png') }}" class="soiree card-img mb-left" alt="soiree">
            <div class="box col-12 col-md-6 card-img-overlay form-group">
                <form class="contact form-horizontal" method="POST" action="/contact">
                    {{ csrf_field() }} 
                    @csrf
                    <div class="inputBox form-group card-text">
                        <label for="Name"></label>
                        <input type="text" class="input form-control" placeholder="Nom" id="name" name="name" required >
                    </div>
                    <div class="inputBox form-group card-text">
                        <label for="email"></label>
                        <input type="email" class="input form-control" placeholder="Email" id="email" name="email" required >
                    </div>
                    <div class="inputBox form-group card-text">
                        <label for="Objet"></label>
                        <input type="text" class="input form-control" placeholder="Objet" id="objet" name="objet" required >
                    </div>
                    <div class="inputBox form-group card-text">
                        <label for="message"></label>
                        <input type="text" class="input form-control luna-message" placeholder="Message" id="message" name="message" required >
                    </div>
                    <div class="form-group card-text">
                        <button type="submit" class="btn btn-primary" value="Send">Send</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
        
    



@endsection