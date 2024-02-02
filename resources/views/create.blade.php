@include('master.header')
@include('master.nav')

<div class="max-w-2xl mx-auto mt-8 p-6 bg-white rounded shadow-lg">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="relative mx-auto max-w-5xl text-center m-12">
    <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-900 md:text-4xl ">
       Add Services:
      </h2>
</div>
    <h1 class="mb-6 text-2xl font-semibold text-secondary">Contact :</h1>
    
    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data" id="contact-form" role="form" class="space-y-4">
        @csrf
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label class="block text-sm font-medium text-gray-700">First Name<span class="text-red-500">*</span></label>
                <input type="text" name="fname" class="form-input mt-1 block w-full rounded-md border border-black focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter first name" required>
            </div>
    
            <div>
                <label class="block text-sm font-medium text-gray-700">Last Name<span class="text-red-500">*</span></label>
                <input type="text" name="lname" class="form-input mt-1 block w-full rounded-md border border-black focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter last name" required>
            </div>
        </div>
    
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                <input id="form_email" type="user_email" name="user_email" class="form-input mt-1 block w-full rounded-md border border-black focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter email" required>
            </div>
    
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number <span class="text-red-500">*</span></label>
                <input id="form_phone" type="tel" name="user_phone" class="form-input mt-1 block w-full rounded-md border border-black focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter phone number" required>
            </div>
        </div>
    
        <h1 class="mt-6 mb-4 text-2xl font-semibold text-secondary">Service :</h1>
    
        <div>
            <label class="block text-sm font-medium text-gray-700">Titre <span class="text-red-500">*</span></label>
            <input id="form_title" type="text" name="titre" class="form-input mt-1 block w-full rounded-md border border-black focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter titre" required>
        </div>
    
        <div>
            <label for="form_category" class="block text-sm font-medium text-gray-700">Catégorie <span class="text-red-500">*</span></label>
            <select name="cat_id" class="form-select mt-1 block w-full rounded-md border border-black focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->titre }}</option>
                @endforeach
            </select>
        </div>   
        <div>
            <label for="form_description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
            <textarea id="form_description" name="body"  class="form-textarea mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Entrer la description ici." rows="4" required></textarea>
        </div>
        
        <div>
            <label  class="block text-sm font-medium text-gray-700">Prix en DH <span class="text-red-500">*</span></label>
            <input id="form_price" type="number" name="prix" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Entrer le prix" required>
        </div>
  
      <div class="relative w-full">
    <div class="items-center justify-center max-w-xl mx-auto">
        <label class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md cursor-pointer hover:border-gray-400 focus:outline-none" id="drop-user-image">
            <span class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <span class="font-medium text-gray-600">Drop files for User Image, or<span class="text-blue-600 underline ml-[4px]">browse</span></span>
            </span>
            <input type="file" name="image_user" class="opacity-0 absolute h-full w-full" accept="image/png,image/jpeg" id="input-user-image">
        </label>
    </div>
</div>

<!-- Service Image -->
<div class="relative w-full">
    <div class="items-center justify-center max-w-xl mx-auto">
        <label class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md cursor-pointer hover:border-gray-400 focus:outline-none" id="drop-service-image">
            <span class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <span class="font-medium text-gray-600">Drop files for Service Image, or<span class="text-blue-600 underline ml-[4px]">browse</span></span>
            </span>
            <input type="file" name="image" class="opacity-0 absolute h-full w-full" accept="image/png,image/jpeg" id="input-service-image">
        </label>
    </div>
</div>
 <!-- Submit -->
 <div class="pt-4 flex items-center space-x-4">
    <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
        Create
    </button>
</div>


    </form>
</div>
