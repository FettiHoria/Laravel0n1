@extends('layout')
@section('title', 'Edit Home')


@section('content')

    <center>
        <div class="mb-3" style >
            <form action="{{route('EditHomePost')}}" method="POST" enctype="multipart/form-data" style="align:center">
                @csrf

                <input style="width:60%" type="file" class="form-control" name="image" />
                <label for="exampleFormControlTextarea1" class="form-label">Edit home text page</label>
                <textarea style="width:60%" class="form-control" id="exampleFormControlTextarea1" rows="3" name="homeArea">
            <?php
            echo $articol->corpText;
            ?>
        </textarea>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </form>
        </div>
    </center>
@endsection
