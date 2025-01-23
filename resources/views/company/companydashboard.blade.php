<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('company.companydashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('company.companydashboard')" :active="request()->routeIs('company.companydashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('company.companydashboard')" :active="request()->routeIs('company.companydashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .gradient-bg {
            /* Gradient background color */
            background: linear-gradient(to bottom, #84A4FC, #A084FC, #84A4FC);
        }

        .flexbox-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .flexbox-item {
            width: calc(25% - 20px);
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

        .flexbox-item:hover {
            transform: scale(1.05) translateY(-10px);
        }
        
        .pro-image {
            width: 100%; /* Make the image fill the entire flexbox horizontally */
            height: auto; /* Ensure aspect ratio is maintained */
            border-radius: 8px; /* Apply border radius */
            opacity: 0.3; /* Reduce opacity for a faded effect */
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
                        <div class="flexbox-item ">
                            <!-- Flexbox 1 -->
                            <a href=""><img src="{{ asset('profile.png') }}" alt="Profile Image" class="pro-image"></a>
                            <h3 class="text-lg font-semibold mb-4 overlay-text">Company Profile</h3>
                           
                        </div>

                        <!-- Flexbox 2 -->
                        <div class="flexbox-item">
                            <a href="{{route('company/companies')}}">
                            <img src="{{ asset('job1.png') }}" alt="Profile Image" class="pro-image">
                            </a>
                                <h3 class="text-lg font-semibold mb-4 overlay-text">Post and Manage Jobs</h3>
                        </div>

                        
                        <div class="flexbox-item">
                            <!-- Flexbox 3 -->
                            <a href="">
                            <img src="{{ asset('appli.png') }}" alt="Profile Image" class="pro-image">
                            </a>
                                <h3 class="text-lg font-semibold mb-4 overlay-text">Received Applications</h3>
                            <!-- Display received applications here -->
                        </div>

                        <!-- Flexbox 5 -->
                        <div class="flexbox-item">
                            <a href=""></a>
                            <img src="{{ asset('noti.jpg') }}" alt="Profile Image" class="pro-image">
                            <h3 class="text-lg font-semibold mb-4 overlay-text">Notifications</h3>                       
                         </div>
            </div>
    </div>

