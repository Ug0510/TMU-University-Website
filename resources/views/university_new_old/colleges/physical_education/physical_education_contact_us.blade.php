@extends('layouts.university.colleges.physical_education_with_sidebar')
@section('content')

        <div class="main-content">
            <div class="container">
            <div class="banner text-white text-center p-4 rounded" style="background-color: #001055;">
                <h3 style="color: #fff;">Need Help? Dial Tool Free</h3>
                <h1 style="color: #fff;">1800 270 1490</h1>
            </div>
            <div class="container contact-section">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Reach Us</h2>
                        <p>Have questions or feedback?</p>
                        <form>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First name">
                                </div>
                                <div class="col">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="emailAddress" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" placeholder="Email address">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="3"
                                    placeholder="Leave us a message"></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="privacyPolicy">
                                <label class="form-check-label" for="privacyPolicy">I agree to our friendly privacy
                                    policy</label>
                            </div>
                            <button type="submit" class="tmu-btn btn-4">Send</button>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <div class="contact-image">
                        <img class="contact-image" src="https://img.freepik.com/free-photo/top-view-chat-bubbles-with-telephone-receiver-copy-space_23-2148796078.jpg">
                        </div>
                        <div class="contact-info w-100 mt-3">
                            <div>
                                <!-- <img src="email-icon.png" alt="Email Icon"> -->
                                <div>
                                    <span>Email</span>
                                    <span>techteam@kawruh.com</span>
                                </div>
                            </div>
                            <div>
                                <!-- <img src="phone-icon.png" alt="Phone Icon"> -->
                                <div>
                                    <span>Phone</span>
                                    <span>(0252) 8324 9231</span>
                                </div>
                            </div>
                            <div>
                                <!-- <img src="address-icon.png" alt="Address Icon"> -->
                                <div>
                                    <span>Address</span>
                                    <span>Jl Harmoni No.12, Kelurahan Tanah Abang</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endsection