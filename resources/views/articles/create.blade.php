@extends('layout')
@section('content')
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class=""><a href="#" accesskey="1" title="">Homepage</a></li>
				<li class=""><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class=""><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class=""><a href="/articles" accesskey="4" title="">Articles</a></li>
				<li class=""><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>

<div id="wrapper">
<div id="page" class="container">
<h1>New Article</h1>
<form method="POST" action="/articles">
@csrf
<div class="field">
<label class="label" for="title">Title</label>
<div class="control">
<input class="input" type="text" name="title" id="title" value="{{old('title')}}" >
@if($errors->has('title'))
<p class="help is_danger">{{$errors->first('title')}}</p>
@endif
</div>
</div>
<div class="field">
<label class="label" for="excerpt">excerpt</label>
<div class="control">
<input class="input" type="textarea" name="excerpt" id="excerpt" value="{{old('excerpt')}}">
</div>
</div>
<div class="field">
<label class="label" for="excerpt">Body</label>
<div class="control">
<input class="input" type="textarea" name="body" id="body" value="{{old('body')}}">
</div>
</div>


<!--displaying tags in create form
<div class="field">
<label class="label" for="excerpt">Tags</label>
<div class="control">
<select name="tags[]"multiple>
@foreach($tags as $tag)
<option value="{{$tag->id}}">{{$tag->name}}</option>
@endforeach

</select>
@error('tags')
<p class="help is-danger">{{$message}}</p>
@enderror
</div>
</div>-->


<div class="field is-grouped">
<div class="control">
<button class="button is-link" type="submit">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
@endsection('content')  