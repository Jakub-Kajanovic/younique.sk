<x-layout>
    <form method="POST" action="{{route('login.store')}}">
        @csrf
        <div class="w-1/2 mx-auto max-w-md">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="email">E-mail</label>
                <input type="text" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('email')
                    <div class="text-xs text-[red]">{{$message}}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="password">Password</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline" type="password" id="password" name="password"/>
                <div class="input-error"></div>
            </div>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Login</button>
            </div>
        </div>
    </form>
</x-layout>