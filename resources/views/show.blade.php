@include('master.nav')
<div class="relative mx-auto max-w-5xl text-center mt-12">
<h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
   {{ $services->titre }} 🌟:
  </h2>
</div>
<div class="mt-10 mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
    <div class="absolute left-0 bottom-0 w-full h-full z-10" style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
    <img src="{{ asset('./uploads/'.$services->image) }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
    <div class="p-4 absolute bottom-0 left-0 z-20">
        <a href="#" class="px-4 py-1 bg-yellow-500  inline-flex items-center justify-center mb-2"style="color: #131312;">{{ $services->category->titre }}</a>
        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
           {{ Str::limit($services->titre,20) }}
        </h2>
        <div class="flex mt-3">
            <img src="{{ asset('./uploads/'.$services->image_user) }}" class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
                <p class="font-semibold text-gray-200 text-sm"> {{ $services->fname }} {{ $services->lname }} </p>
                <p class="font-semibold text-gray-400 text-xs"> {{ \Carbon\Carbon::parse($services->created_at)->format('d/m/Y H:i') }}
            </p>
            </div>
        </div>
    </div>
</div>
<div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
    <p class="text-2xl font-semibold leading-tight pb-6"style="color: #131312;"> Prix :</p>
    <div class=" text-2xl  border-l-4 border-gray-500 pl-4 mb-6 italic rounded"  style="color: #1B1267">
        {{ $services->prix }} DH
    </div>

</div>
<div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
    <p class="text-2xl font-semibold leading-tight pb-6"style="color: #131312;"> Description :</p>
    <div class="text-2xl border-l-4 border-gray-500 pl-4 mb-6 italic rounded" style="color: #1B1267">
    {{ $services->body }}
    </div>

</div>

<div class="max-w-screen-md mx-auto mt-8">
    <!-- User Information Card -->
    <div class="bg-white rounded-lg overflow-hidden shadow-md">
        <div class="p-4">
            <h2 class="text-2xl font-semibold leading-tight">
                Contact 
                <span style="color: #F90E0E">{{ $services->fname }} {{ $services->lname }}</span>
            </h2>
                        <div class="flex mt-5">
                <img src="{{ asset('./uploads/'.$services->image_user) }}" class="h-10 w-10 rounded-full mr-2 object-cover" />
                <div>
                    <p class="font-semibold text-gray-700 text-sm">{{ $services->fname }} {{ $services->lname }}</p>
                    <p class="font-semibold text-gray-400 text-xs"> {{ \Carbon\Carbon::parse($services->created_at)->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>
        <div class="px-4 lg:px-0 mt-4 text-gray-700 text-lg leading-relaxed">
            
            <div class="flex divide-x divide-gray-200 p-4">
                <a href="mailto:erradaoumaima@gmail.com" class="flex-1 inline-flex items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-2 text-sm font-semibold text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="#F90E0E">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    
                    {{ $services->user_email }}
                </a>
                <a href="tel:+1-202-555-0170" class="flex-1 inline-flex items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-2 text-sm font-semibold text-gray-900">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="#16BE30" aria-hidden="true">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    Call {{ $services->user_phone}}
                </a>
            </div>
        </div>
       
    </div>
</div>



