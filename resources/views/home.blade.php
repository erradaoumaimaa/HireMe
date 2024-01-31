@extends('master.layout')
@extends('master.header')
@extends('master.nav')

@section('style')
    <style>
        body{
            /* background-color: #c77575; */
        }
    </style>
@endsection


@section('title')
    Acceuil
@endsection
@section('content')

    <div class="container mx-auto p-4">
        <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl p-5 m-8">Column me neatly.</h2>
          </div>
        <div class="flex flex-wrap -mx-4 justify-center">
            @foreach ($services as $service)
                <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden mb-4 mx-4">
                    <img class="w-full h-48 object-cover" src="{{ asset($service->image) }}" alt="Service Image">
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <svg class="text-blue-600 w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="font-semibold text-lg">{{ $service->fname }} {{ $service->lname }}</p>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="text-blue-600 w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-sm">{{ $service->created_at }}</p>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">{{ $service->titre }}</p>
                        <p class="text-lg font-semibold" title="{{ $service->body }}">
                            {{ $service->body }}
                        </p>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-lg font-semibold" style="color: #00296B;">
                                {{ $service->prix }} DH
                            </p>
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded focus:outline-none">
                                {{ $service->category->titre }}
                            </button>
                        </div>
                        <div>
                            <a  href="{{ route('service.show', $service->id) }}"
                                class="inline-block pb-1 mt-2 text-base font-black text-blue-600 uppercase border-b border-transparent hover:border-blue-600">Read
                                More -></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>   
    <div class="flex justify-center mt-8">
        {{ $services->links() }}
    </div>    
@endsection  




@section('script')
<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
    });
      // JavaScript to handle modal functionality
      const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const modalOverlay = document.getElementById('modalOverlay');
    const createServiceModal = document.getElementById('createServiceModal');

    openModalButton.addEventListener('click', () => {
        modalOverlay.classList.remove('hidden');
        createServiceModal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modalOverlay.classList.add('hidden');
        createServiceModal.classList.add('hidden');
    });
</script>
@endsection
