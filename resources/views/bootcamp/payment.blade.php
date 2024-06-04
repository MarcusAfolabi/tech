@extends('layouts.main')
@section('title', 'Bootcamp Payment')
@section('description', 'Explore the creation of fantastic digital products and experiences through our practical training approach.')
@section('keywords', 'ui/ux, payment system, flutterwave, paystack, monnify, payment gateway, frontend, product designer, identity, marketing, channels, logos,visual, messaging, tone, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/bootcamp/payment')
@section('main')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>
    /* Custom styles for the radio button */
    input[type="radio"] {
        width: 20px;
        /* Adjust the width as needed */
        height: 20px;
        /* Adjust the height as needed */
        margin-right: 5px;
        /* Optional spacing between the radio button and label */
    }

    /* Style for the radio button when it's checked */
    input[type="radio"]:checked {
        outline: 2px solid black;
        /* Outline color when checked */
        background-color: orange;
        /* Background color when checked */
    }
</style>
<main>
    <section class="brand__area">
        <div class="container g-0 line pt-140">
            <div class="row g-0">
                <!-- <div class="col-xxl-12"> -->
                <div class="sec-title-wrapper">
                    <br>
                    <br>
                    <h2 class="sec-sub-title title-anim">Bootcamp Payment</h2>
                    <h3 hidden class="sec-title title-anim">Explore the creation of fantastic digital products and experiences through our practical training approach.</h3>
                    <h5 class="sec-title title-anim">Select any one of the payment secheme to gain access to the academy portal</h5>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="price__area pt-130 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-6">
                    <div class="price__table">
                        <a href="https://flutterwave.com/pay/bootcampfullpayment" >
                        <div class="price__item animation_from_bottom" onclick="activateRadioButton('full')">
                            @csrf
                                <input type="radio" name="bootcampType" id="fullRadio" value="full">
                                <!-- <div class="price__icon"><span><i class="fa-solid fa-check"></i></span></div> -->
                                <div class="price__info">
                                    <h2 class="price__type">Full Payment</h2>
                                    <p>Bootcamp fee is &#8358;120,000 and it one time payment.</p>
                                </div>
                                <div class="price__amount">
                                    <h4 class="best-value">Best Value</h4>
                                    <p>&#8358;120<span>,000</span></p>
                                </div>
                            </div>
                        </a>

                        <a href="https://flutterwave.com/pay/bootcampmonthlypayment">
                            @csrf
                            <div class="price__item animation_from_top" onclick="activateRadioButton('monthly')">
                                <input type="radio" name="bootcampType" id="monthlyRadio" value="monthly">
                                <!-- <div class="price__icon"><span><i class="fa-solid fa-check"></i></span></div> -->
                                <div class="price__info">
                                    <h2 class="price__type">Monthly Payment</h2>
                                    <p>Bootcamp fee is &#8358;50,000 and automatically renews each month.</p>
                                </div>
                                <div class="price__amount">
                                    <p>&#8358;50<span>,000</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="price__btn btn_wrapper">
                        <a href="contact.html" class="wc-btn-black btn-hover btn-item"><span></span> Try it <br>Free Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div> -->
                </div>
            </div>

            <script>
                function activateRadioButton(value) {
                    // Clear all radio buttons
                    $('input[name="bootcampType"]').prop('checked', false);

                    // Activate the clicked radio button
                    $(`#${value}Radio`).prop('checked', true);
                }
            </script>

        </div>
    </section>
    @endsection