@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{asset('/css/detailevent.css')}}">
@endsection

@section('title', 'Detail Event')

@section('header')
@endsection

@section('content')
<div class="jumbotron content2">
    <div class="container">
        <div class="text-center">
            <h1>{{$event->name_event}}</h1>
            <br>
            <hr class="garis">
        </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Pendaftaran</a>
            </div>
        </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <br>
                        <h2>Jadwal Pelaksanaan</h2>
                        <p>{{$event->date_start}} <b>s/d</b> {{$event->date_finish}}</p><br>
                        <h2>Lokasi</h2>
                        <p>Kota Bogor <br>
                        Digital Innovation Lounge (DILo) Bogor <br>
                        Gedung OPMC Jalan Raya Pajajaran No.39 <br>
                        Kota Bogor 16128.
                        </p>
                        
                        <br>

                        <h2>Deskripsi</h2>
                        <img width="100%"
                        src="https://dicodingacademy.blob.core.windows.net/eventimages/201803202054329ec60f16509a9164bb0ce4bcc18dffd2.png" alt=""><br><br>
                        {{$event->description}}
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <br>
                    <h2>PESERTA</h2>
                    <p><b>Kuota : </b> {{$total = $event->quota}} <br>
                    <b>Pendaftar : </b> {{$jml = count($participant)}} <br>
                    <b>Sisa Kuota : </b> {{$total - $jml}} </p>
                    <h2>KEIKUTSERTAAN</h2>
                    @if(count($ket)>0) 
                    <h3>{{Auth::user()->name}} Sudah terdaftar
                    @else
                    <form class="" action="/user/{{$event->id}}/daftar" method="post">
                    @csrf
                        <button type="submit" class="btn btn-lg btn-primary col-lg-3" name="button"
                        onclick="confirm('Yakin ingin mendaftar event ini ?')">Daftar Event</button>
                    </form>
                    @endif
                    <br><br>
                </div>
            </div>
    </div>
</div>
@endsection

@section('js')
@endsection