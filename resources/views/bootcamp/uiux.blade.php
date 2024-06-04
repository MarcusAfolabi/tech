@extends('layouts.main')
@section('title', 'UI/UX Development')
@section('description', 'Hey there! Are you ready to level up your skills and open the door to a world of exciting opportunities?')
@section('keywords', 'ui/ux, frontend, product designer, identity, marketing, channels, logos,visual, messaging, tone, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('canonical', 'https://webshoptechnology.com/bootcamp/uiux')
@section('main')
<main>

    <!-- Job details top start -->
    <section class="job__detail-top">
        <img src="{{ asset('assets/imgs/bootcamp/uiux.png') }}" alt="Image" data-speed="auto">
    </section>
    <!-- Job details top end -->


    <!-- Job detail start -->
    <section class="job__detail">
        <div class="container g-0 line pb-110">
            <span class="line-3"></span>

            <div class="row">
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-8">
                    <div class="job__detail-wrapper">
                        <h2 class="sec-title">@yield('title')</h2>
                        <!-- <ul class="job__detail-meta">
                            <li><span>Location</span> 2541, Austin, New York</li>
                            <li><span>Date</span> 24, June 2022</li>
                            <li><span>Job Type</span> Full time (Remote)</li>
                        </ul> -->
                        <div class="job__detail-content">
                            <p>Hey there! Are you ready to level up your skills and open the door to a world of exciting opportunities? Our UI/UX Development Bootcamp is designed with YOU in mind, offering a transformative experience that goes beyond just learning – it's about mastering the art of creating exceptional user experiences.
                            </p>
                            <h2>Skills You'll Master:</h2>
                            <ul>
                                <li>Design Mastery: Dive deep into the principles of stunning design that captures attention and enhances user engagement.
                                </li>
                                <li>User-Centric Thinking: Learn to think like your users, anticipating their needs and creating interfaces that delight.</li>
                                <li>Prototyping and Wireframing: Turn your ideas into interactive prototypes, bringing your designs to life before a single line of code is written.</li>
                                <li>Front-End Development: Gain hands-on experience in coding, ensuring your designs are not just beautiful but also functional.
                                </li>
                            </ul>
                            <h2>Benefits You'll Reap:</h2>
                            <ul>
                                <li>In-Demand Expertise: UI/UX development is at the forefront of the digital revolution, and your expertise will be in high demand across industries.</li>
                                <li>Competitive Edge: Stand out in a crowded job market by showcasing your proficiency in creating seamless and user-friendly digital experiences.</li>
                                <li>Freelance Opportunities: Unleash your creativity and work on exciting freelance projects, offering your skills to clients around the globe.</li>
                                <li>Entrepreneurial Ventures: Turn your passion into profit by designing and developing your own apps or websites.</li>
                            </ul>
                            <h2>Job Opportunities Awaiting You:</h2>
                            <ul>
                                <li>UI/UX Designer: Craft visually appealing and user-friendly interfaces for websites and applications.</li>
                                <li>Front-End Developer: Bring designs to life through coding, ensuring a seamless user experience.</li>
                                <li>Product Designer: Shape the overall user experience and functionality of digital products.</li>
                                <li>UX Researcher: Dive into user behavior analysis to enhance and optimize digital interactions.</li>
                            </ul>

                            <p>Your future in UI/UX development starts NOW! Don't miss this chance to reshape your career and become a sought-after professional in the digital space. Enroll in the Ultimate UI/UX Development Bootcamp today and take the first step towards a brighter, more fulfilling future.</p>
                        </div>

                        <div class="job__apply btn_wrapper">
                            <button class="wc-btn-primary btn-hover btn-item"><span></span> Enroll for <br>this course <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                    <div class="job__detail-sidebar">
                        <ul>
                            <li><span>Freelance Projects:</span> Diverse Clients and Flexibility</li>
                            <li><span>Design Competitions:</span> Showcase Your Talent and Prizes and Awards</li>
                            <li><span>Tech Conferences and Meetups:</span>Networking Opportunities and Stay Updated</li>
                            <li><span>Online Courses and Webinars:</span> Continuous Learning, Teach and Share</li>
                            <li><span>Community Engagement:</span> Join Design Communities and Collaborative Projects</li>
                            <li><span>Entrepreneurial Ventures:</span>Create Your Apps and Build Your Brand</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job detail end -->

    <!-- Modal 1 -->
    <form action="{{ route('bootcamp.store') }}" method="post">
        <div class="modal__application" id="application_form">
            <div class="modal__apply">
                <button class="modal__close-2" id="apply_close"><i class="fa-solid fa-xmark"></i></button>
                <div class="form-top">
                    <img src="{{ asset('assets/imgs/logo/logo-black.png') }}" alt="Site logo">
                    <h2 class="sec-title">@yield('title')</h2>
                    <p>Online Or Onsite</p>
                </div>
                <div class="form-apply" id="applicationForm">
                    @csrf
                    <div class="input-apply">
                        <p>What motivates you to learn @yield('title')? *</p>
                        <input type="hidden" name="registered_for" value="@yield('title')">
                        <textarea maxlength="500" name="motivation" class="charCountTextarea" required></textarea>
                    </div>

                    <div class="input-apply">
                        <p>What specific goals do you hope to achieve through this course? *</p>
                        <textarea maxlength="500" name="goals" class="charCountTextarea" required></textarea>
                    </div>

                    <div class="input-apply">
                        <p>Do you have any prior experience in graphic design, web development, or related fields? *</p>
                        <textarea maxlength="500" name="prior_experience" class="charCountTextarea" required></textarea>
                    </div>

                    <div class="input-apply">
                        <p>Rate your proficiency in relevant tools (e.g., Adobe XD, Sketch, Figma) or programming languages (e.g., HTML, CSS, JavaScript). *</p>
                        <textarea maxlength="500" name="proficiency" class="charCountTextarea" required></textarea>
                    </div>

                    <div class="input-apply">
                        <p>What are your expectations from this @yield('title') course? *</p>
                        <textarea maxlength="500" name="expectation" class="charCountTextarea" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Provide links or attachments to any previous design work or projects.</p>
                        <textarea maxlength="500" name="previous_work" class="charCountTextarea"></textarea>
                    </div>
                    <div class="input-apply">
                        <p>How many hours per week can you commit to the course? *</p>
                        <textarea maxlength="500" name="commit_hour" class="charCountTextarea" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p> Your Current Job Title </p>
                        <textarea maxlength="500" name="job_title" class="charCountTextarea"></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Years of Work Experience *</p>
                        <textarea maxlength="500" name="work_experience" class="charCountTextarea" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Your Highest Level of Education Completed *</p>
                        <textarea maxlength="500" name="education_level" class="charCountTextarea" required></textarea>
                    </div>
                    <div class="input-apply">
                        <p>Your Field of Study *</p>
                        <textarea maxlength="500" name="study_field" class="charCountTextarea" required></textarea>
                    </div>
                </div>

                <div class="form-btn apply-trigger">
                    <button type="button" class="wc-btn-primary btn-hover" onclick="validateAndProceed()"><span></span> next <i class="fa-solid fa-arrow-right"></i></button>
                </div>

            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal__application" id="application_form2">
            <div class="modal__apply">
                <button class="modal__close-2" id="apply_close2"><i class="fa-solid fa-xmark"></i></button>
                <div class="form-top">
                    <img src="{{ asset('assets/imgs/logo/logo-black.png') }}" alt="Site logo">
                    <h2 class="sec-title">@yield('title')</h2>
                    <p>Online Or Onsite</p>
                </div>
                <div class="form-apply">
                    <form action="#">
                        <div class="input-apply-2">
                            <p>Full name *</p>
                            <input type="text" placeholder="Marcus Afolabi" name="name" required>
                        </div>
                        <div class="input-apply-2">
                            <p>Email *</p>
                            <input type="email" placeholder="marcus@gmail.com" name="email" required>
                        </div>
                        <div class="input-apply-2">
                            <p>Phone *</p>
                            <input type="tel" placeholder="08012345678" maxlength="11" name="phone" required>
                        </div>
                        <div class="input-apply-2">
                            <p>Location *</p>
                            <input type="text" name="location" placeholder="Ikeja, Lagos" required>
                        </div>
                        <!-- <div class="input-apply-2">
                    <p>Upload CV *</p>
                    <input type="file" name="cv">
                </div> -->
                    </form>
                </div>
                <div class="form-btn-2">
                    <button class="wc-btn-primary btn-hover" id="back_form1"><span></span> back <i class="fa-solid fa-arrow-right"></i></button>
                    <button type="submit" class="wc-btn-primary btn-hover"><span></span> enroll <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </form>

</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all textareas with the class 'charCountTextarea'
        const textareas = document.querySelectorAll('.charCountTextarea');

        // Loop through each textarea
        textareas.forEach(function(textarea) {
            // Create a corresponding charCount div for each textarea
            const charCount = document.createElement('div');
            charCount.className = 'charCount';
            charCount.textContent = '  0/500';

            // Insert the charCount div after the textarea
            textarea.parentNode.insertBefore(charCount, textarea.nextSibling);

            // Add input event listener to each textarea
            textarea.addEventListener('input', function() {
                const count = textarea.value.length;
                charCount.textContent = `  ${count}/500`;
            });
        });
    });

    function validateAndProceed() {
        const textareas = document.querySelectorAll('.charCountTextarea');
        let isValid = true;

        textareas.forEach(function(textarea) {
            const charCount = textarea.nextElementSibling;
            const count = textarea.value.length;

            if (count === 0) {
                isValid = false;
                charCount.style.color = 'red';
                charCount.textContent = 'This field is important. Please fill it.';
            } else {
                charCount.style.color = '#555'; // Reset color
            }
        });

        if (isValid) {
            // Proceed to the next step or submit the form
            // alert('Input is valid. You can proceed.');
            // Replace the alert with your actual form submission logic
        } else {
            alert('Please fill in all required fields.');
        }
    }
</script>
@endsection