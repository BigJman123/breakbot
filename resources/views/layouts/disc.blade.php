@extends('layouts.master')

@section('content')

  <main role="main">
    <div class="container">
        <h1 class="jumbotron-heading text-center" style="padding-top: 100px;">Breakbot Discography</h1>
        <p class="lead text-muted text-center">A collection of Breakbots entire discography. Studio albums, EPs, Compilations, Remixes, and Mixtapes.</p> 
        <p class="lead text-muted text-center">Click an album, song, or mixtape to listen.</p>
        {{-- <hr> --}}

        <div class="row justify-content-center" style="padding-top: 30px">
          <h4 class="text-muted">Studio Albums</h4>
        </div>

        <hr width="90%">

      <div class="studio d-flex justify-content-center" style="padding-top: 25px;">
        <div class="img1" style="margin-right: 35px;">
          <a href="https://goo.gl/5gaMSt" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-by-your-side.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">By Your Side, 2012</p>
        </div>
        <div class="img2">
          <a href="https://goo.gl/sztQoZ" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-still-waters.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">Still Waters, 2016</p>
        </div>
      </div>

      <div class="row justify-content-center" style="padding-top: 50px">
        <h4 class="text-muted">EPs</h4>
      </div>
      <hr width="90%">

      <div class="EP d-flex justify-content-center"">
        <div class="EP1" style="margin-right: 35px; padding-top: 25px;">
          <a href="https://goo.gl/zq6Por" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-happy-rabbit-ep.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">Happy Rabbit EP, 2007</p>
        </div>
        <div style="padding-top: 25px;">
          <a href="https://goo.gl/K83ZnH" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-baby-im-yours-ep.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">Baby I'm Yours EP, 2010</p>
        </div>
        <div class="EP2" style="margin-left: 35px; padding-top: 25px;">
          <a href="https://goo.gl/NdqqS7" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-fantasy-ep.png" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">Fantasy EP, 2011</p>
        </div>
      </div>

      <div class="EP d-flex justify-content-center">
        <div class="EP3" style="margin-right: 35px; padding-top: 25px;">
          <a href="https://goo.gl/8zyMND" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-one-out-of-two-ep.png" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">One Out Of Two EP, 2012</p>
        </div>
        <div style="padding-top: 25px;">
          <a href="https://goo.gl/8zyMND" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-you-should-know-ep.png" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">You Should Know EP, 2013</p>
        </div>
      </div>

      <div class="row justify-content-center" style="padding-top: 50px">
        <h4 class="text-muted">Compilations</h4>
      </div>
      <hr width="90%">

      <div class="comp d-flex justify-content-center"">
        <div class="comp1" style="margin-right: 35px; padding-top: 25px;">
          <a href="https://goo.gl/n9nBYQ" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-ed-rec-vol-x.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">The Beach from Ed Rec Vol. X, 2013</p>
        </div>
        <div style="padding-top: 25px;">
          <a href="https://goo.gl/f2mFmg" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-star-wars-headspace.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">Star Tripper from Star Wars HeadSpace, 2016</p>
        </div>
        <div class="comp2" style="margin-left: 35px; padding-top: 25px;">
          <a href="https://goo.gl/dvjjod" target="_blank" style="text-decoration: none">
            <img src="assets/breakbot-ed-rec-100.jpg" style="border: 2px solid #000; max-width: 300px; max-height: 300px">
          </a>
            <p class="card-text">Mystery from Ed Rec 100, 2017</p>
        </div>

      </div>

      <div class="row justify-content-center" style="padding-top: 50px">
        <h4 class="text-muted">Remixes</h4>
      </div>
      <hr width="90%">

      <div class="container" style="padding-top: 25px">
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><b>Title</b></div>
          <div class="col-4 text-center"><b>Artist</b></div>
          <div class="col-4 text-center" style="border-left: 1px solid #000"><b>Year</b></div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/qip1V8" target="_blank" class="remix">Let There Be Light (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Justice</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2006</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/YDDs2f" target="_blank" class="remix">Aerius Light (Breakbot Remix)</a></div>
          <div class="col-4 text-center">DatA</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2007</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/SE8Sgd" target="_blank" class="remix">D.O.E.S (Breakbot's French Pute Mix)</a></div>
          <div class="col-4 text-center">Arrow</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2007</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/xwqaSo" target="_blank" class="remix">Runway to Elsewhere (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Pacific!</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/KaVRFB" target="_blank" class="remix">Hold Me (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Pacific!</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/SwEWNX" target="_blank" class="remix">A Thing For Me (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Metronomy</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/nCePmR" target="_blank" class="remix">Bathroom Gurgle (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Late of the Pier</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/mpYGye" target="_blank" class="remix">What's Up Fatlip (Breakbot RMX)</a></div>
          <div class="col-4 text-center">Fatlip</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/gQ52QZ" target="_blank" class="remix">Sweet Sensation (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Aib</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/ReZgE4" target="_blank" class="remix">Apollo-Gize (Breakbot 'Hypnotoad' Extened Remix)</a></div>
          <div class="col-4 text-center">Digitalism</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/fUHdVC" target="_blank" class="remix">Lion (Breakbot Remix)</a></div>
          <div class="col-4 text-center">ZZZ</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://www.youtube.com/watch?v=ERhJtDEIrdY" target="_blank" class="remix">They Live! (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Evil Nine</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/EhGS5t" target="_blank" class="remix">Kelly (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Van She</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/PSdJXf" target="_blank" class="remix">When We Were Young (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Sneaky Sound System</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/rTLTqb" target="_blank" class="remix">Baby (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Pnau</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2008</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/FAWQWg" target="_blank" class="remix">Extraball (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Yuksek</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/aH73Gk" target="_blank" class="remix">Happy Up Here (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Röyksopp</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/USrkoC" target="_blank" class="remix">Roche (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Sébastien Tellier</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/7oBk4z" target="_blank" class="remix">The Edge of a Sunday (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Séverin</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000">That's The Reason (Breakbot Remix)</div>
          <div class="col-4 text-center">The Rakes</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2009 (unreleased)</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/wuo4oz" target="_blank" class="remix">In My Spaceship (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Jan Turkenburg</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/9bShVB" target="_blank" class="remix">So Light Is Here Footfall (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Air</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/tWMaL3" target="_blank" class="remix">Nightcall (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Kavinsky</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/MXDne8" target="_blank" class="remix">I Think I Like U 2 (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Jamaica</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/p2w8JH" target="_blank" class="remix">Without Lies (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Aeroplane</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/DEuiTi" target="_blank" class="remix">You Put A Spell On Me (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Matthew Dear</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/EzwAJz" target="_blank" class="remix">When The Night Falls (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Chromeo</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2011</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/MRwCGR" target="_blank" class="remix">Heaven Can Wait (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Charlotte Gainsbourg</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2011</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/qf5dxQ" target="_blank" class="remix">When The Night (feat. Jaw) (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Para One</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/DdeP7h" target="_blank" class="remix">Manthem (Breakbot Beatport Remix)</a></div>
          <div class="col-4 text-center">The Swiss</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/CAMJwD" target="_blank" class="remix">Defiant Order (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Birdy Nam Nam</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/A3AUeh" target="_blank" class="remix">Trying To Be Cool (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Phoenix</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/Uy5KNR" target="_blank" class="remix">Paint a Smile On Me (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Black Yaya</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/96F5Re" target="_blank" class="remix">Kiss To Kiss (Breakbot Remix)</a></div>
          <div class="col-4 text-center">The Swiss</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/G9eprd" target="_blank" class="remix">This Song (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Busy P</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2014</div>
        </div>
        <div class="row" style="border: 1px solid #000">
          <div class="col-4 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/3hMw4L" target="_blank" class="remix">Love Invaders (Breakbot Remix)</a></div>
          <div class="col-4 text-center">Fatima Yamaha</div>
          <div class="col-4 text-center" style="border-left: 1px solid #000">2016</div>
        </div>
      </div>

      <div class="row justify-content-center" style="padding-top: 50px">
        <h4 class="text-muted">Mixtapes</h4>
      </div>
      <hr width="90%">

      <div class="container" style="padding-top: 25px; margin-bottom: 50px">
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><b>Title</b></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000"><b>Year</b></div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/e6Pzfd" target="_blank" class="remix">Disco Mini Mix: Dance on Glass</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/su9Ecy" target="_blank" class="remix">BBC Heroes Mix "In New DJ We Trust"</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/nnZSK6" target="_blank" class="remix">TILT! Megamix</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2009</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/mytybo" target="_blank" class="remix">Annie Mac Minimix</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/mqVxbn" target="_blank" class="remix">Valentine Mixtape</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2010</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/aPYr8Y" target="_blank" class="remix">The Lazy Sunday Selecta</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2011</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/ECTjuN" target="_blank" class="remix">Breakbot Beatport Live</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/28EwgF" target="_blank" class="remix">Breakbot MixTape: October 2012</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/v4qfHU" target="_blank" class="remix">Breakbot Le Mouv' Radio 2012</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/u6HV91" target="_blank" class="remix">Breakbot Mixtape Meca Festival</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/YUCbkA" target="_blank" class="remix">Breakbot DJ set in The Lab LDN</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2012</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/cNaTbg" target="_blank" class="remix">Ed Banger, part 3 avec Breakbot | Novaplanet Mix</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/hhScrT" target="_blank" class="remix">Bedtime Stories</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/eZFMnn" target="_blank" class="remix">BreakBot Mixtape: Blue Wheels Journey (solé Fixtape Vol.19)</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/LX9XNP" target="_blank" class="remix">Breakbot Boiler Room Paris DJ Set</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2013</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/TrCbnu" target="_blank" class="remix">Breakbot Summer mix @ Le Mouv' Radio</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2014</div>
        </div>
        <div class="row" style="border: 1px solid #000;">
          <div class="col-6 text-center" style="border-right: 1px solid #000"><a href="https://goo.gl/eaNv83" target="_blank" class="remix">Breakbot Audi Q2 X Boiler Room DJ Set</a></div>
          <div class="col-6 text-center" style="border-left: 1px solid #000">2016</div>
        </div>
      </div>

    </main>
  </div>

@endsection