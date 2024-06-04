@extends('layouts.main')
@section('title', 'Thank you so much')
@section('description', 'Your payment has been confirmed and a receipt has been sent to your mail')
@section('keywords', 'ui/ux, thanks, payment system, flutterwave, paystack, monnify, payment gateway, frontend, product designer, identity, marketing, channels, logos,visual, messaging, tone, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/bootcamp/payment')
@section('main')
<main>
 
        <section class="error__page">
          <div class="container line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="error__content">
                  <img src="{{ asset('assets/imgs/bootcamp/thanks.jpg') }}" alt="thank you so much">
                  <h3>Your payment has been confirmed and a receipt has been sent to your mail</h3>
                  <p>Your login detail has been sent to your registered email.</p>
                  <div class="btn_wrapper">
                    <a href="/" class="wc-btn-primary btn-hover btn-item"><span></span> Back to <br>Homepage <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> 

      </main>
@endsection