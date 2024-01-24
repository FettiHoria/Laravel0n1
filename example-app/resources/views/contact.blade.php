@extends('layout')
@section('title', 'Contact')
@section('content')

    <center><h1>Contact</h1></center>
    <?php

    if(auth()->user()->role == 'admin'){
        echo '<a class="btn btn-primary" href="/editcontact" role="button" style="margin-left:10%">Edit Contact Page</a><br></br>';
    }
        echo '<center><img src="images/contactphoto.png" alt="profile Pic" height="200" width="200"></center><br></br>';


    ?>

    <p class="lh-base" style="margin-left:10%; margin-right:10%">
        <?php
        echo $articol->corpText;
        ?>
    </p>

@endsection

