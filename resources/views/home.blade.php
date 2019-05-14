@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.ggpht.com/a/AGF-l7_sGUrG_alh-mdTIDmdcaw1GanuPL2PxVajjQ=s48-c-k-c0xffffffff-no-rj-mo" class="rounded-circle">
        </div>
        <div class="col-9 pt-5 ">
            <div class="d-flex justify-content-between" >
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>

            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>152</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-5 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>

        </div>
        <div class="row pt-5">

            <div class="col-4">
                <img src="https://bloximages.chicago2.vip.townnews.com/tribdem.com/content/tncms/assets/v3/editorial/3/83/38384be2-3ba5-11e8-adec-bf48bc62810f/5acadc92f3c7d.image.jpg?resize=400%2C357" class="w-100">
            </div>

            <div class="col-4">
                
                <img src="https://bloximages.chicago2.vip.townnews.com/tribdem.com/content/tncms/assets/v3/editorial/3/83/38384be2-3ba5-11e8-adec-bf48bc62810f/5acadc92f3c7d.image.jpg?resize=400%2C357" class="w-100">
            </div>

            <div class="col-4">
                <img src="https://bloximages.chicago2.vip.townnews.com/tribdem.com/content/tncms/assets/v3/editorial/3/83/38384be2-3ba5-11e8-adec-bf48bc62810f/5acadc92f3c7d.image.jpg?resize=400%2C357" class="w-100">
            </div>
            
        </div>
    </div>


</div>
@endsection
