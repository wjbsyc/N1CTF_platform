@extends('layouts.app')

@section('style')
<style>
.photo{
    float:left;
    width:10%;
    margin-left:5%;
    margin-top:1%;
}
.intro{
    float:right;
    width:80%;
}
</style>
@endsection
@section('content')


<div class="golf" >
	<div class="photo" ><img src="{{url('images/logo.png')}}" width="150"></div>
	<div class="intro">
	    <h3>About Us</h3>
	    <span>
            We, Nu1L, a CTF team comes from China, took the name from the word "NULL".
            We are a group of whitehats who loves CTFs and cyber security.
            We've held <a href="https://ctftime.org/event/584">N1CTF(https://ctftime.org/event/584)</a> in 2018.
            We've also won the championship of BCTF in 2017 and 2018, recently we've got 10th place in HITCON CTF.
            There are people among us who participate in professional hacking contests like Pwn2Own & Geekpwn and security conferences like HITCON, KCON and Blackhat.
        </span>
	</div>
</div>

@endsection