
@extends('layout')

@section('content')

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{Request::path()==='/'?'current_page_item':''}}"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li class="{{Request::path()==='Our Clients'?'current_page_item':''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{Request::path()==='About Us'?'current_page_item':''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class="{{Request::path()==='Articles'?'current_page_item':''}}"><a href="#" accesskey="4" title="">Articles</a></li>
				<li class="{{Request::path()==='Contact Us'?'current_page_item':''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div id="header-featured">
		<div id="banner-wrapper">
			<div id="banner" class="container">
				<h2>Maecenas luctus lectus</h2>
				<p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
				<a href="#" class="button">Etiam posuere</a> </div>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>

                <!--we mostly use this when any one can view particular page
				but certain can update  .The submit button
				 can be shown to only the owner or the admin
				@can('update',$project)
				<a href="">Update</a>
				@endcan-->

				<span class="byline">{{$article->excerpt}}</span> </div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			{{$article->body}}
			<p>
			@foreach($article->tags as $tag)
			<a href="/articles?tag={{$tag->name}}">{{$tag->name}}</a>
			@endforeach
			</p>
		</div>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection('content')



