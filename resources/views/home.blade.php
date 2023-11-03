@extends('layout.main')

@section('content')
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

h1 {letter-spacing: 6px}
.w3-row-padding img {margin-bottom: 12px}
</style>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center" style="padding:128px 16px">
  <h1 class="w3-xlarge">GALERY</h1>
  <h1>John Doe</h1>

  <div class="w3-padding-32">
    <div class="w3-bar w3-border">
      <a href="#" class="w3-bar-item w3-button w3-light-grey">Portfolio</a>
      <a href="#" class="w3-bar-item w3-button">Contact</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small">Weddings</a>
    </div>
  </div>
</header>

<!-- Photo Grid -->
<div class="row-padding grayscale" style="margin-bottom:128px">
  <div class="w3-half">
    <img src="https://images.pexels.com/photos/1379640/pexels-photo-1379640.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width:50%">

    {{-- <img src="https://i.pinimg.com/736x/7a/37/57/7a3757ced4d067d87e8fe8de70a33ad1.jpg" style="width:100%">
    <img src="https://i.pinimg.com/564x/97/f3/71/97f37197650d9a97cbe566d1a34d6984.jpg" style="width:100%">
    <img src="https://i.pinimg.com/564x/15/31/7f/15317f39b369ebfe56a357aaea4860ab.jpg" style="width:100%"> --}}
  </div>

  <div class="w3-half">
    {{-- <img src="https://i.pinimg.com/564x/1f/87/b2/1f87b29a2df46100a75aa86b170a21cb.jpg" style="width:40%">
    {{-- <img src="https://i.pinimg.com/564x/88/aa/36/88aa3604f3ce284be6fba7bbe802e0fe.jpg" style="width:100%">
    <img src="https://i.pinimg.com/564x/b1/a8/29/b1a829800bf332d4dcba3fa366ab401e.jpg" style="width:100%">
    <img src="https://i.pinimg.com/564x/6d/fd/cb/6dfdcb54bc031c560d14400a1b037fc8.jpg" style="width:100%"> --}} --}}
  </div>
</div>

<!-- End Page Content -->
</div>

</body>
</html>
@endsection
