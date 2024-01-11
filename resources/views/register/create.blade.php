<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name"s class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                    <input
                        type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    @error('name')
                        <p class="text-red-500 text-ms mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" class="border border-gray-400 p-2 w-full" name="username" value="{{ old('username') }}" id="username" required>
                     @error('username')
                        <p class="text-red-500 text-ms mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">  
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}" id="email" required>

                     @error('email')
                        <p class="text-red-500 text-ms mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" class="border border-gray-400 p-2 w-full" name="password" id="password" required>
                     @error('password')
                        <p class="text-red-500 text-ms mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit
                </button>
                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
            </form>
        </main>
    </section>
</x-layout>