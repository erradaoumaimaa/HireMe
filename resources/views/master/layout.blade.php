@extends('master.header')


    <div class="sm:flex items-center max-w-screen-xl ml-10">
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
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
        <div class="text-center mb-10">
            <h2 class="text-4xl tracking-tight font-bold text-primary-800">Le service à domicile en toute sérénité</h2>
        </div>
    
        <div class="flex flex-col md:flex-row">
            <!-- image -->
            <div class="mr-0 md:mr-8 mb-6 md:mb-0">
                <img class="w-1/2 md:w-full mx-auto" src="{{ asset('images/image.png') }}" alt="can_help_banner">
            </div>
            <!-- end image -->
    
            <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                        <h3 class="text-2xl font-bold text-md mb-6">Prestataires qualifiés</h3>
                        <p class="text-sm">Tous les prestataires sont vérifiés, suivis et évalués pour chaque service rendu afin de vous garantir le meilleur niveau de satisfaction.<p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                        <h3 class="text-2xl font-bold text-md mb-6">Prestations assurées</h3>
                        <p class="text-sm">Toutes les prestations sont couvertes par notre assurance AXA, qu’il s’agisse de dommages corporels ou matériels occasionnés chez vous, sans franchise.</p>
                    </div>
                </div>
    
                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                        <h3 class="text-2xl font-bold text-md mb-6">Budget respecté</h3>
                        <p class="text-sm">Tous les prix sont définis à l’avance, les prestataires s’engagent à les respecter. Toutes les rémunérations sont déclenchées en ligne après votre accord.</p>
                    </div>
                </div>
    
                <div class="w-full sm:w-1/2 mb-4 px-2 ">
                    <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl">
                        <h3 class="text-2xl font-bold text-md mb-6">Service encadré</h3>
                        <p class="text-sm">Notre service client est à votre disposition 7j/7 pour vous assurer une expérience parfaite de la prise de commande jusqu'à la fin de la prestation.</p>
                    </div>
                </div>
                
              
    
            </div>
        </div>
    </div>

<!-- Modal Trigger Button -->
<button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none">
    Open Create Service Modal
</button>

<!-- Create Service Modal -->
<div id="createServiceModal" class="hidden fixed inset-0 flex items-center justify-center">
    <div class="absolute inset-0 bg-black opacity-50" id="modalOverlay"></div>    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                        <h2 class="leading-relaxed">Create a Service</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <!-- User Information -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">First Name</label>
                                <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="First Name">
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Last Name</label>
                                <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Last Name">
                            </div>
                        </div>

                        <!-- Email and Phone Number -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Email</label>
                                <input type="email" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Email">
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Phone Number</label>
                                <input type="tel" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Phone Number">
                            </div>
                        </div>

                        <!-- Service Title and Description -->
                        <div class="flex flex-col">
                            <label class="leading-loose">Service Title</label>
                            <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Service Title">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Service Description</label>
                            <input type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Description of service">
                        </div>

                        <!-- Category Dropdown and Image Upload -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex flex-col">
                                <label class="leading-loose">Category</label>
                                <select class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                    <option value="category1">Category 1</option>
                                    <option value="category2">Category 2</option>
                                    <option value="category3">Category 3</option>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose">Upload Image</label>
                                <input type="file" class="py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Upload Image">
                            </div>
                        </div>
                    </div>

                    <!-- Close Modal Button -->
                    <div class="pt-4 flex items-center space-x-4">
                        <button id="closeModal" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg> Cancel
                        </button>
                        <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('script')
</body>
</html>
