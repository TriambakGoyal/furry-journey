@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-middle">
        <div class="col-3 p-4">
        <img src="https://image.shutterstock.com/image-photo/white-transparent-leaf-on-mirror-260nw-1029171697.jpg" alt="Profile photo" class="p-3 rounded-circle" style="width: 100%; height:110%">
        </div>
        <div class="col-9 pt-5">
        <h2> {{ Auth::user()->name }}</h2>
        <div class="d-flex">
            <div class="pr-3"><strong>51</strong> Posts</div>
            <div class="pr-3"><strong>21k</strong> Followers</div>
            <div class="pr-3"><strong>3k</strong> Following</div>

        </div>
        <div class="pt-3">
           <b>{{ $user->profile->title}}</b>
        </div>
        <div>
        {{ $user->profile->Bio}}
        </div>
        <div class="pt-1">
            <a href="#"><b>{{ $user->profile->url}}<b></a>
        </div>

        </div>
    </div>

    <div class="row pt-5">
    <div class="col-4">
    <img src="https://images.unsplash.com/photo-1494548162494-384bba4ab999?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="" class="w-100" style="background-size: cover;">
    </div>
    <div class="col-4">    <img src="https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg" alt="" class="w-100 h-100" style="background-size: cover;">
 </div>
    <div class="col-4">    <img src="https://image.shutterstock.com/image-photo/ancient-temple-ruins-gadi-sagar-260nw-786126286.jpg" alt="" class="h-100 w-100" style="background-size: cover;">
</div>
    </div>
</div>
@endsection
