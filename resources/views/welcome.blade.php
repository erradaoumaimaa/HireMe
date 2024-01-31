@extends('master.layout')

@section('title')
    Home
@endsection


@section('content')
<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full h-48 object-cover" src="service-image.jpg" alt="Service Image">
    <div class="px-6 py-4">
        <div class="flex items-center mb-4">
            <img class="w-10 h-10 rounded-full mr-4" src="user-avatar.jpg" alt="User Avatar">
            <div>
                <div class="font-bold text-xl mb-2">Service Title</div>
                <p class="text-gray-700 text-base">
                    Service Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
        <div class="mt-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Category</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">Price: $20.00</span>
        </div>
    </div>
    <div class="px-6 py-4">
        <p class="text-gray-600 text-sm">Created by: John Doe</p>
        <p class="text-gray-600 text-sm">Created on: January 30, 2024</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Show User Info
        </button>
        <span class="inline-block bg-teal-200 rounded-full px-3 py-1 text-sm font-semibold text-teal-800">#Contact</span>
    </div>
</div>


@endsection
@section('script')
@endsection
