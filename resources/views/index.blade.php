@extends('layout/main')

@section('title','Ruang Kelas')

@section('container')
<img src="{{url('images/bg2.png')}}" class="img-fluid" alt="Responsive image" width="100%">
<div class="container">
<br>
<br>

    
      <div class="carousel-caption text-dark">
         <h1 class="display-1 font-weight-bolder">Selamat Datang <b><span>{{ auth()->user()->name }}</span></b></h1>
         <hr style="height:5px;background-color:dark;width:auto;">
      </div>
    </div>
        </div>
    </div>
</div>
@endsection