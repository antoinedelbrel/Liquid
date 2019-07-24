@extends('layout')

@section('content')
    <div id="contain" class="card bg-dark text-white">
    <img src="{{ asset('images/soiree.png') }}" class="soiree card-img mb-left" alt="soiree">
        <div class="box col-12 col-md-6 card-img-overlay form-group">
            <h1 class="mb-2 text-center card-title">Contact Us</h1>
            <form class="contact form-horizontal" method="POST" action="/contact">
                {{ csrf_field() }} 
                @csrf
                <div class="inputBox form-group card-text">
                    <input type="text" class="input form-control" id="name" name="name" required onkeyup="this.setAttribut('value',this.value);" value="">
                    <label for="Name">Name</label>
                </div>
                <div class="inputBox form-group card-text">
                    <input type="email" class="input form-control" id="email" name="email" required onkeyup="this.setAttribut('value',this.value);" value="">
                    <label for="email">Email</label>
                </div>
                <div class="inputBox form-group card-text">
                    <input type="text" class="input form-control" id="objet" name="objet" required onkeyup="this.setAttribut('value',this.value);" value="">
                    <label for="objet">Objet</label>
                </div>
                <div class="inputBox form-group card-text">
                    <input type="text" class="input form-control luna-message" id="message" name="message" required onkeyup="this.setAttribut('value',this.value);" value="">
                    <label for="message">Message</label>
                </div>
                <div class="form-group card-text">
                    <button type="submit" class="btn btn-primary" value="Send">Send</button>
                </div>
            </form>
        </div>
    </div>
        
    



@endsection