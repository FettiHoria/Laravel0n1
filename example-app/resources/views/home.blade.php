@extends('layout')
@section('title', 'Home')
@section('content')

    <center><h1>Home</h1></center>

@auth
    <?php
    if(auth()->user()->role == 'admin')
        echo '<a class="btn btn-primary" href = "/edithome" role = "button" style = "margin-left:10%" > Edit Home Page </a ><br ></br>';
    ?>
@endauth

    <?php
    echo '<center><img src="images/homephoto.png" alt="profile Pic" height="200" width="200"></center><br></br>';


    ?>

    <p class="lh-base" style="margin-left:10%; margin-right:10%">
        <?php
        echo $articol->corpText;
        ?>
    </p>

@endsection
