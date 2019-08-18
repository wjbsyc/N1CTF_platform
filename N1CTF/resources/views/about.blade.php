@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<style>
            .desc {
                height: 250px;
                
            }
            .photo{
                line-height: 150px;
                float:left;
                width:10%;
                margin-left:5%;
                margin-top:1%;
                vertical-align: middle;
                
            }
            .intro{
                float:right;
                width:80%;
            }
</style>
@endsection
@section('content')
            <div class="golf"></br>
                <div class="desc">
                    <div class="photo" ><img src="https://nu1lctf.com/images/logo.png" width="135"></div>
	                <div class="intro">
	                    <h3><i class="fa fa-address-card" aria-hidden="true"> About Us</i></h3>
                           <span>
                    We, Nu1L, a CTF team comes from China, took the name from the word "NULL".We are a group of whitehats who loves CTFs and cyber security.<br>
                    We've held <a href="https://ctftime.org/event/584">N1CTF(https://ctftime.org/event/584)</a> in 2018.
                    We've also won the championship of BCTF in 2017 and 2018, we've got 10th place in HITCON CTF 2018.
                    There are people among us who participate in professional hacking contests like Pwn2Own & Geekpwn and security conferences like HITCON, KCON and Blackhat.
                        </span>
                          <h3><hr><i class="fa fa-link" aria-hidden="true"></i> Team Page</h3>
                           <span>Welcome to join us===><a href="https://nu1l-ctf.com">https://nu1l-ctf.com</a></span><hr>
                          <h3><i class="fa fa-github" aria-hidden="true"></i> Github Page</h3>
                           <span>We will update wp&tasks on <a href="https://github.com/Nu1LCTF">https://github.com/Nu1LCTF</a></span> 
	                </div>
                </div>
                <br/>
               
            </div>

@endsection