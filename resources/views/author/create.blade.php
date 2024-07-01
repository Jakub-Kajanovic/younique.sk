<x-layout-admin>
    <x-breadcrumbs :links="['Admin' => route('dashboard'), 'Všetci autorovia' => route('author.index'), 'Vytvoriť autora' => '#']" class="mb-4" />
        <h1 class="text-3xl font-bold text-center text-lightGray">
        Nový autor
    </h1>
    <div>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
    </div>
    <form method="POST" action="{{ route('author.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="max-w-3xl mx-auto">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="name">Názov</label>
                <input type="text" id="name" name="name" value="{{old('name', $author->name)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('name')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="facebook">facebook</label>
                <input type="text" id="facebook" name="facebook" value="{{old('facebook', $author->facebook)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('facebook')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="linkedin">linkedin</label>
                <input type="linkedin" id="linkedin" name="linkedin" value="{{old('linkedin', $author->linkedin)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('linkedin')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="instagram">instagram</label>
                <input type="text" id="instagram" name="instagram" value="{{old('instagram', $author->instagram)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('instagram')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="photo">Hlavný Obrázok</label>
                <input type="file" id="photo" name="photo" value="{{old('photo', $author->photo)}}" class="editor shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('photo')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror    
            </div>
            <label class="block text-lightGray text-sm font-bold mb-2" for="bio">
                Bio
            </label>
            <textarea name="bio" id="myeditorinstance" value="{{old('bio', $author->bio)}}">{{old('bio', $author->bio)}}</textarea>
            <label class="block text-lightGray text-sm font-bold mb-2" for="short_bio">Krátke Bio</label>
            <textarea name="short_bio" id="myeditorinstance" value="{{old('short_bio', $author->short_bio)}}">{{old('short_bio', $author->short_bio)}}</textarea>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Vytvoriť</button>
            </div>
        </div>
    </form>
</x-layout-admin>
