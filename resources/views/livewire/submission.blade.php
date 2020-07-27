<div>
    <form class="pb-8 bg-white shadow"
          wire:submit.prevent="create"
          x-data="{ selected: '{{ $type }}' }">

        <div class="w-full bg-white">
            <div class="flex justify-around uppercase tracking-wide text-center font-bold ">

                @foreach($types as $key => $label)
                    <div class="flex-1 border-b-2 py-3" :class="{ 'border-red-400': selected === '{{ $key }}'}">
                        <input x-model="selected" wire:model="type" type="radio" id="{{ $key }}" name="{{ $key }}" value="{{ $key }}" class="sr-only w-auto h-auto">
                        <label for="{{ $key }}">
                            {{ $label }}
                        </label>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="px-8">
            <div class="mt-6">
                <label for="body" class="block text-sm font-medium text-gray-700 leading-5">
                    Body
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="body" id="body" type="text" autofocus required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('body') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                </div>

                @error('body')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            </div>

            <div class="mt-6">
                <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                    Password
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                </div>

                @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
            </div>

            <button type="submit" class="flex justify-center w-full px-4 py-2 mt-6 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 transition duration-150 ease-in-out">
                Register
            </button>
        </div>
    </form>
</div>
