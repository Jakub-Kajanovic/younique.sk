<x-layout-admin>
    <x-breadcrumbs :links="['Admin' => route('dashboard'), 'Všetky programy' => route('reference.index'), 'Upraviť referenciu' => '#']" class="mb-4" />
    <h1 class="text-3xl font-bold text-center text-lightGray">
        Úprava referencie
    </h1>
        <div>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
    </div>
    <form method="POST" action="{{ route('reference.update',$reference->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="max-w-3xl mx-auto">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="name">Názov programu</label>
                <input type="text" value="{{old('name', $reference->name)}}" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('name')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="content">Opis programu</label>
                <input type="text" value="{{old('content', $reference->content)}}" id="content" name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('content')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="type">Cena programu</label>
                <input type="text" value="{{old('type', $reference->type)}}" id="type" name="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('type')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="place">Škola alebo pracovisko</label>
                <input type="text" value="{{old('place', $reference->place)}}" id="place" name="place" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('place')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Upraviť</button>
            </div>
        </div>
    </form>
</x-layout-admin>
