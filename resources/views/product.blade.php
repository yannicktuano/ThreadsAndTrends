<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
            
        </h2>
        <h2>Welcome to the Product Page!</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Hypebeast</h3>
                    <div class="flex items-center">

                        <div class="w-1/2 pr-4">
                            <img src="tshirt_placeholder.jpg" alt="T-shirt" class="w-full h-auto">
                        </div>

                
                        <div class="w-1/2">
                            <p>This is a fantastic T-shirt that will meet all your style needs. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">90s Shirt</h3>
                    <div class="flex items-center">

                        <div class="w-1/2 pr-4">
                            <img src="tshirt_placeholder.jpg" alt="T-shirt" class="w-full h-auto">
                        </div>

        
                        <div class="w-1/2">
                            <p>This is a fantastic T-shirt that will meet all your style needs. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>