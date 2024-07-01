<x-layout-admin>
    <x-breadcrumbs :links="['Admin' => route('dashboard'), 'Všetky programy' => route('course.index'), 'Upraviť program' => '#']" class="mb-4" />
    <h1 class="text-3xl font-bold text-center text-lightGray">
        Úprava programu {{$course->title}}
    </h1>
        <div>
        @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success alert!</span> {{ session('success') }}
          </div>
        @endif
    </div>
    <form method="POST" action="{{ route('course.update',$course->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="max-w-3xl mx-auto">
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="title">Názov programu</label>
                <input type="text" value="{{old('title', $course->title)}}" id="title" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('title')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="description">Opis programu</label>
                <input type="text" value="{{old('description', $course->description)}}" id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('description')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-lightGray text-sm font-bold mb-2" for="price">Cena programu</label>
                <input type="number" value="{{old('price', $course->price)}}" id="price" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-lightGray leading-tight focus:outline-none focus:shadow-outline"/>
                @error('price')
                    <div class="text-xs text-[red]">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="px-6 py-2 rounded-md hover:scale-110 hover:duration-700 text-[white] bg-lightBlue">Vytvoriť</button>
            </div>
        </div>
    </form>
</x-layout-admin>
