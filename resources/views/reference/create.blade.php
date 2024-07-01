<x-layout-admin>
    <div class="container mx-auto">
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('reference.store') }}" enctype="multipart/form-data" id="referenceCreate">
            @csrf
            <div class="max-w-3xl mx-auto">
                <div class="mt-4">
                    <label class="block text-lightGray text-sm font-bold mb-2" for="name">Meno a priezvisko</label>
                    <input type="text" value="{{old('name', $reference->name)}}" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                    @error('name')
                        <div class="text-xs text-[red]">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-lightGray text-sm font-bold mb-2" for="content">Skúsenosť</label>
                    <input type="text" value="{{old('content', $reference->content)}}" id="content" name="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                    @error('content')
                        <div class="text-xs text-[red]">{{ $message }}</div>
                    @enderror
                </div><div class="mt-4">
                    <label class="block text-lightGray text-sm font-bold mb-2" for="place">Škola alebo pracovisko</label>
                    <input type="text" value="{{old('place', $reference->place)}}" id="place" name="place" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                    @error('content')
                        <div class="text-xs text-[red]">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="block text-lightGray text-sm font-bold mb-2" for="type">Typ programu</label>
                    <select value="{{old('type', $reference->type)}}" id="type" name="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline">
                    <option value="adult">Adult</option>
                    <option value="youth">Youth</option>
                    <option value="other">Other</option>
                    </select>
                    @error('type')
                        <div class="text-xs text-[red]">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Nová referencia</button>
                </div>
            </div>
        </form>
    </div>
</x-layout-admin>