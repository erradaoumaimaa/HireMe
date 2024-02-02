@extends('master.header')
@include('master.nav')
<!-- component -->
    {{-- <div class="sm:flex items-center max-w-screen-xl ml-10">
        <div class="sm:w-1/2 p-10">
            <div class="image object-center text-center">
                <img src="{{ asset('images/image.png') }}" >
            </div>
        </div>
        <div class="sm:w-1/2 p-5">
            <div class="text">
                <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">About us</span>
                <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">Trouvez le prestataire idéal pour tous les <span class="text-indigo-600"> services</span> du quotidien
                </h2>
                <p class="text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, commodi
                    doloremque, fugiat illum magni minus nisi nulla numquam obcaecati placeat quia, repellat tempore
                    voluptatum.
                </p>
            </div>
        </div>
    </div> --}}
<!--component section header -->
<div style="background-color: #fff;">
    <div class="max-w-screen-xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <h1 style="color: #131312;" class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center font-black leading-10">
            Discover Local Services with <span style="color: ">HireMe!</span> 👋
        </h1>
        <div class="mt-8 flex justify-center">
            <div class="inline-flex rounded-md shadow">
                <a style="background-color: #FFD700; color: #131312;" class="inline-flex items-center justify-center font-medium tracking-tight rounded-lg border transition hover:scale-105 hover:-rotate-1 focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset h-11 px-4 text-lg shadow focus:ring-white border-transparent hover:bg-yellow-400 focus:bg-yellow-600 focus:ring-offset-yellow-600"
                    href="{{ url('/') }}">
                    <span>Check out our plugins →</span>
                </a>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        @yield('content')
    </div>
    <div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
        <div class="text-center mb-10">
            <h2 class="text-4xl tracking-tight font-bold" style="color: #1B1267;">Home Services with Peace of Mind</h2>
        </div>
    
        <div class="flex flex-col md:flex-row">
            <!-- image -->
            <div class="mr-0 md:mr-8 mb-6 md:mb-0">
                <img class="w-1/2 md:w-full mx-auto" src="{{ asset('images/services.png') }}" alt="can_help_banner">
            </div>
            <!-- end image -->
            <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                <div class="w-full sm:w-1/2 mb-4 px-2">
                    <div class="h-full py-4 px-6 border border-blue-800 border-t-0 border-l-0 rounded-br-xl" >
                        <h3 class="text-2xl font-bold text-md mb-6">Qualified Service Providers</h3>
                        <p class="text-sm">All service providers are verified, monitored, and evaluated for each service rendered to ensure the highest level of satisfaction.</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2">
                    <div class="h-full py-4 px-6 border border-blue-800 border-t-0 border-l-0 rounded-br-xl" >
                        <h3 class="text-2xl font-bold text-md mb-6">Assured Services</h3>
                        <p class="text-sm">All services are covered by our AXA insurance, whether it's bodily or material damage caused at your place, with no deductible.</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2">
                    <div class="h-full py-4 px-6 border border-blue-800 border-t-0 border-l-0 rounded-br-xl" >
                        <h3 class="text-2xl font-bold text-md mb-6">Respected Budget</h3>
                        <p class="text-sm">All prices are defined in advance, and service providers commit to respecting them. All payments are triggered online after your agreement.</p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2">
                    <div class="h-full py-4 px-6 border border-blue-800 border-t-0 border-l-0 rounded-br-xl" >
                        <h3 class="text-2xl font-bold text-md mb-6">Guided Service</h3>
                        <p class="text-sm">Our customer service is available 7/7 to ensure a perfect experience from order placement to the end of the service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

@yield('script')
</body>
</html>
