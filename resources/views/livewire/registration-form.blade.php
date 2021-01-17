<div class="w-6/12 mx-auto mt-10">
    @if(!empty($successMessage))
    <div class="flex justify-center items-center shadow-md font-medium my-6 py-1 px-2 rounded-md text-white bg-green-500 border border-green-600 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="text-xl font-normal  max-w-full flex-initial">
            <div class="py-2">Welcome!
                <div class="text-sm font-base">{{ $successMessage }}</div>
            </div>
        </div>
        <div class="flex flex-auto flex-row-reverse">
            <div wire:click="$set('successMessage', '')" class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </div>
        </div>
    </div>
    @endif
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Register in our application</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Complete these fields and join us!
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent.action="submitForm" method="POST">
                {{ csrf_field() }}
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" wire:model="first_name" name="first_name"
                                    class="mt-1 p-2 block w-full focus:ring-2 focus:ring-blue-600 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('first_name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" wire:model="last_name" name="last_name"
                                    class="mt-1 p-2 block w-full focus:ring-2 focus:ring-blue-600 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('last_name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" wire:model="email_address" name="email_address"
                                    class="mt-1 p-2 block w-full focus:ring-2 focus:ring-blue-600 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('email_address') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">Country /
                                    Region</label>
                                <select id="country" wire:model="country" name="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Spain</option>
                                    <option>Ecuador</option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex items-center justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50">
                            <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
