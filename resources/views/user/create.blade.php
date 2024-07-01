<x-layout-admin>
    <x-breadcrumbs :links="['Admin' => route('dashboard'), 'Zoznam používatelov' => route('user.index'), 'Vytvoriť používatela' => '#']" class="mb-4" />
    <h1 class="text-3xl font-bold text-center text-lightGray">
        Nový použivatel
    </h1>
    <div>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
        @if (session('errors'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-[#f86767] dark:text-green-400" role="alert">
            <span class="font-medium">Errors alert!</span> {{ session('errors') }}
          </div>
        @endif
    </div>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="max-w-3xl mx-auto">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="name">Meno</label>
                <input type="text" id="name" name="name" value="{{old('name', $user->name)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('name')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="email">E-mail</label>
                <input type="text" id="email" name="email" value="{{old('email', $user->email)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
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
                <label class="block text-lightGray text-sm font-bold mb-2" for="confirmed_password">Overiť heslo</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline" type="password" id="password_confirmation" name="password_confirmation"/>
                <div class="input-error"></div>
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="confirmed_password">Overiť heslo</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"  id="is_admin" name="is_admin">
                    <option value="1">Je admin</option>
                    <option value="0">Nie je admin</option>
                </select>
                <div class="input-error"></div>
            </div>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Vytvoriť</button>
            </div>
        </div>
    </form>
</x-layout-admin>
