@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="bio d-flex flex-row container" style="padding-top: 100px; max-width: 1000px; max-height: 549px">
			<div>
				<h1>
					Bio
				</h1>
				<hr align="left" width="250px">

				<p style="padding-top: 25px">
					<b>Thibaut Berland</b> (stage name <b>Breakbot</b>) is a French producer and DJ who signed with <b>Ed Banger Records</b> in May of 2009.
				</p>

				<p>
					Thibaut is well known for remixing songs along with creating the funkiest mixtapes you'll ever listen to.
				</p>

				<p>
					He's released two studio albums with singer <b>Christopher Irfan Khan-Acito</b> and has been featured in multiple compilations, including Star Wars Headspace, a collection of electronic music inspired by the Star Wars franchise.
				</p>

				<p>
					Recently Thibaut and Irfane have been touring in Asia.
				</p>
			</div>
				 
			<div>
				{{-- 385x549 --}}
				<img class="wrap" src="assets/breakbot-working.jpg">
			</div>			 

		</div>
	</div>
@endsection