@extends('master.header')
    <a href="{{ route('service') }}" class="back text-gray-600 hover:text-gray-800 ml-4 mt-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
<div class="mt-10 mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
    <div class="absolute left-0 bottom-0 w-full h-full z-10" style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
   
    <img src="{{ asset($services->image) }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
    <div class="p-4 absolute bottom-0 left-0 z-20">
        <a href="#" class="px-4 py-1 bg-yellow-500 text-white inline-flex items-center justify-center mb-2">{{ $services->category->titre }}</a>
        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
            {{ $services->titre }}
        </h2>
        <div class="flex mt-3">
            <img src="https://randomuser.me/api/portraits/men/97.jpg" class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
                <p class="font-semibold text-gray-200 text-sm"> {{ $services->fname }} {{ $services->lname }} </p>
                <p class="font-semibold text-gray-400 text-xs">{{ $services->created_at }}</p>
            </div>
        </div>
    </div>
</div>

<div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
    <p class="pb-6">Description :</p>
    <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
    {{ $services->body }}
    </div>

</div>

<div class="max-w-screen-md mx-auto mt-8">
    <!-- User Information Card -->
    <div class="bg-white rounded-lg overflow-hidden shadow-md">
        <div class="p-4">
            <h2 class="text-2xl font-semibold text-gray-800 leading-tight">User:</h2>
            <div class="flex mt-5">
                <img src="https://randomuser.me/api/portraits/men/97.jpg" class="h-10 w-10 rounded-full mr-2 object-cover" />
                <div>
                    <p class="font-semibold text-gray-700 text-sm">{{ $services->fname }} {{ $services->lname }}</p>
                    <p class="font-semibold text-gray-500 text-xs">Date of Creation</p>
                </div>
            </div>
        </div>
        <div class="px-4 lg:px-0 mt-4 text-gray-700 text-lg leading-relaxed">
            
            <div class="flex divide-x divide-gray-200 p-4">
                <a href="mailto:erradaoumaima@gmail.com" class="flex-1 inline-flex items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-2 text-sm font-semibold text-gray-900">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                        <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                    </svg>
                    {{ $services->user_email }}
                </a>
                <a href="tel:+1-202-555-0170" class="flex-1 inline-flex items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-2 text-sm font-semibold text-gray-900">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    Call {{ $services->user_phone}}
                </a>
            </div>
        </div>
       
    </div>
</div>



