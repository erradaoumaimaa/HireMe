@include('master.header')
@include('master.nav')

<div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
    <div class="max-w-md mx-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                    <h2 class="leading-relaxed">Create a Service</h2>
                    <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="divide-y divide-gray-200">
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <!-- User Information -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label class="leading-loose">First Name</label>
                            <input type="text" name="fname"class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="First Name">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Last Name</label>
                            <input type="text" name="lname"class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Last Name">
                        </div>
                    </div>

                    <!-- Email and Phone Number -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col">
                            <label class="leading-loose">Email</label>
                            <input type="email"name="user_email" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Email">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Phone Number</label>
                            <input type="tel" name="user_phone" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Phone Number">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Upload Image user</label>
                            <input type="file" name="image_user" class="py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Upload Image">
                        </div>
                    </div>

                    <!-- Service Title and Description -->
                    <div class="flex flex-col">
                        <label class="leading-loose">Service Title</label>
                        <input type="text" name="titre"class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Service Title">
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose">Service Description</label>
                        <input type="text"name="body" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Description of service">
                    </div>

            <!-- Price -->
                <div class="flex flex-col">
                    <label class="leading-loose">Price</label>
                    <input type="text" name="prix" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Price">
                </div>

                <!-- Category Dropdown and Image Upload -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label class="leading-loose">Category</label>
                        <select name="cat_id" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->titre }}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Upload Image</label>
                            <input type="file" name="image" class="py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Upload Image">
                        </div>
                    </div>
                </div>

                <!--Submit -->
                <div class="pt-4 flex items-center space-x-4">
                    
                    <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                        Create
                    </button>
                </div>
            </form>
            </div>
    </div>
</div>