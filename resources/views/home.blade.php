@include('master.header')
@extends('master.layout')


@section('style')
    <style>
        body{
            /* background-color: #c77575; */
        }
    </style>
@endsection


@section('title')
    Home
@endsection
@section('content')
    <div class="container mx-auto  ml-16" >
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl p-5 m-8 text-center"style="color: #1B1267;">What service do you need ?</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach ($services as $service)
                    <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden mb-4">
                        <img class="w-full h-48 object-cover" src="{{ asset('./uploads/' .$service->image) }}" alt="Service Image">
                        <div class="p-4">
                            <div class="flex items-center mb-2">
                                <img src="{{ asset('./uploads/'.$service->image_user) }}" class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <p class="font-semibold text-lg">{{ $service->fname }} {{ $service->lname }}</p>
                            </div>
                            <p class="text-sm text-gray-500 mt-2 text-center">{{ $service->titre }}</p>
                            <div class="flex justify-between items-center mt-4">
                                <p class="text-lg font-semibold" style="color: #00296B;">
                                    {{ $service->prix }} DH
                                </p>
                                <button class="bg-yellow-500 text-white px-4 py-2 rounded focus:outline-none">
                                    {{ $service->category->titre }}
                                </button>
                            </div>
                            <div>
                                <a href="{{ route('service.show', $service->slug) }}"
                                    class="inline-block pb-1 mt-2 text-base font-black text-red-600 uppercase border-b border-transparent hover:border-blue-600">Read
                                    More -></a>

                                    <form method="post" action="{{ route('service.destroy' , $service->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

    <div class="flex justify-center mt-8">
        {{ $services->links() }}
    </div>
@endsection

@section('script')

@endsection
