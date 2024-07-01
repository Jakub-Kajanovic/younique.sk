<x-layout-admin>
    <x-breadcrumbs :links="['Admin' => route('dashboard'), 'Všetky kategórie' => route('category.index'), 'Vytvoriť kategóriu' => '#']" class="mb-4" />
    <h1 class="text-3xl font-bold text-center text-lightGray">
        Nová kategória pre blog
    </h1>
    <div>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
    </div>
    <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="max-w-3xl mx-auto">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="name">Názov</label>
                <input type="text" value="{{old('name', $category->name)}}" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('name')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Vytvoriť</button>
            </div>
        </div>
    </form>
</x-layout-admin>
