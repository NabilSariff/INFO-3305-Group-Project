<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    


@extends('layouts.app')

@section('content')
<h1>Our products</h1>
<p>These are some of the trending and recommended products from our lovely customers.</p>

<div class="container1" >
    <div>
        <img src="{{URL('images/nike.png')}}" alt="">
        <h4>Nike Air Force 1</h4>
        <p>Light shoe. Nice design and long-lasting.</p>
    </div>

    <div>
        <img src="{{URL('images/nike.png')}}" alt="">
        <h4>Nike Air Force 1</h4>
        <p>Light shoe. Nice design and long-lasting.</p>
    </div>

    <div>
        <img src="{{URL('images/nike.png')}}" alt="">
        <h4>Nike Air Force 1</h4>
        <p>Light shoe. Nice design and long-lasting.</p>
    </div>
</div>

<div class="container2">
    <div>
        <img src="{{URL('images/nike.png')}}" alt="">
        <h4>Nike Air Force 1</h4>
        <p>Light shoe. Nice design and long-lasting.</p>
    </div>

    <div>
        <img src="{{URL('images/nike.png')}}" alt="">
        <h4>Nike Air Force 1</h4>
        <p>Light shoe. Nice design and long-lasting.</p>
    </div>

    <div>
        <img src="{{URL('images/nike.png')}}" alt="">
        <h4>Nike Air Force 1</h4>
        <p>Light shoe. Nice design and long-lasting.</p>
    </div>
</div>  
@endsection

@section('sidebar')
@endsection

  

</body>


</html>