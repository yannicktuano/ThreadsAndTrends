<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
        <h2>Welcome to Your Cart!</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            

                <!-- Cart Contents -->
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Your Cart</h3>

                    
                    <div class="flex flex-col space-y-4">
                        
                        <div class="flex items-center justify-between border-b py-2">
                            <span>Hypebeast</span>
                            <span>PHP 2000.00</span>
                        </div>

                     
                        <div class="flex items-center justify-between border-b py-2">
                            <span>90s Shirt</span>
                            <span>PHP 1500.00</span>
                        </div>

                        

                    </div>

                    
                    <div class="flex items-end justify-between mt-4">
                        <span class="text-lg font-semibold">Total:</span>
                        <span class="text-lg font-semibold">PHP3500.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>