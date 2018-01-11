@extends('layouts.master')

@section('content')
	
  <div class="container">
	 
    <div class="flex-column">
      
      <div class="row col justify-content-center">
          <img src="assets/breakbot-header.png" style="padding-top: 100px; padding-left: 25px; width: 100%; height: 100%; max-width: 700px; max-height: 270px">
      </div>

      <div class="lead text-center" style="padding-top: 25px">
        <p>
           Welcome to the official Breakbot website.
        </p>
        <p>
          This website contains a comprehesive collection of Breakbot's discography
        </p>
      </div>

        <div class="row justify-content-center">
          <img class="breakbot" src="assets/breakbot.jpg" style="border-radius: 25px; margin-top: 10px; width: 100%; height: 100%; max-width: 540px; max-height: 324px;">
        </div>

    </div>

  </div>
	
@endsection