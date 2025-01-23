<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jobseeker Dashboard') }}
        </h1>
    </x-slot>
    <style>
        .gradient-bg {
            background: linear-gradient(to bottom, #84A4FC, #A084FC, #84A4FC);
        }

        .flexbox-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .flexbox-item {
            width: calc(33.33% - 20px);
            margin-bottom: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
            justify-content: center; /* Center items vertically */
            overflow: hidden; /* Hide overflow to ensure the image fills the flexbox */
        }

        .pro-image {
            width: 100%; /* Make the image fill the entire flexbox horizontally */
            height: auto; /* Ensure aspect ratio is maintained */
            border-radius: 8px; /* Apply border radius */
            opacity: 0.3; /* Reduce opacity for a faded effect */
        }


        .flexbox-item:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1; /* Ensure text appears above the image */
            color: black; 
            text-align: center; /* Center the text horizontally */
            font-size: 1.7rem; /* Adjust the font size as needed */
            font-weight: bold;
        } 



    </style>

    <div class="gradient-bg py-12">
        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flexbox-container ">

                        <!-- First Row -->
                        <div class="flexbox-item">
                            <a href=""><img src="{{ asset('profile.png') }}" alt="Profile Image" class="pro-image"></a>
                            <h2 class="text-lg font-semibold mb-4 overlay-text">See Your Profile Information</h2>
                        </div>

                        <!-- Flexbox 2 -->
                        <div class="flexbox-item">
                            <a href=""><img src="{{ asset('job.jpg') }}" alt="Profile Image" class="pro-image"></a>
                            <h3 class="text-lg font-semibold mb-4 overlay-text">Job Search And Apply</h3>
                        </div>

                        <div class="flexbox-item">
                            <!-- Flexbox 2 -->
                            <a href=""><img src="{{ asset('noti.jpg') }}" alt="Profile Image" class="pro-image"></a>
                            <h3 class="text-lg font-semibold mb-4 overlay-text">Notifications</h3>
                            <!-- Display applied jobs here -->
                        </div>

                        
          </div>
    </div>
</x-app-layout>
