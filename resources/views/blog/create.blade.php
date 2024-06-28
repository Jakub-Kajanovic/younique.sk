<x-layout-admin>
    <h1 class="text-3xl font-bold text-center text-lightGray">
        Nový blog
    </h1>
    <div>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
    </div>
    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="max-w-3xl mx-auto">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="title">Názov</label>
                <input type="text" id="title" name="title" value="{{old('title', $blog->title)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('title')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="featured_text">Featured Text</label>
                <input type="text" id="featured_text" name="featured_text" value="{{old('featured_text', $blog->featured_text)}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('featured_text')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="author">Autor</label>
                <select name="author" id="author" value="{{old('author', $blog->author)}}" class="rounded-md">
                    <option value="Lucia Barkolová">Lucia Barkolová</option>
                    <option value="Bibiána Čermáková">Bibiána Čermáková</option>
                </select>
                @error('author')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="category_id">Kategória</label>
                <select name="category_id" id="category_id" class="rounded-md">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="my-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="image">Hlavný Obrázok</label>
                <input type="file" id="image" name="image" value="{{old('image', $blog->image)}}" class="editor shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('image')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror    
            </div>
            <textarea name="content" id="myeditorinstance" value="{{old('content', $blog->content)}}">Sem napíš o čom bude tvoj blog!</textarea>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Vytvoriť</button>
            </div>
        </div>
    </form>
</x-layout-admin>
