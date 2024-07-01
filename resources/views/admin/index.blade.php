<x-layout-admin>
    <x-breadcrumbs :links="['Admin' => route('dashboard')]" class="mb-4" />
    <h1 class="py-10">Ahoj! {{auth()->user()->name}}, prajem ti pekný deň!</h1>
    <h2 class="py-10 text-center">Vytvorenie nových príspevkov</h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
    <a href="{{route('blog.create')}}"><x-card>vytvoriť blog</x-card></a>
    <a href="{{route('category.create')}}"><x-card>vytvoriť kategóriu</x-card></a>
    <a href="{{route('reference.index')}}#referenceCreate"><x-card>vytvoriť referenciu</x-card></a>
    <a href="{{route('course.create')}}"><x-card>vytvoriť program</x-card></a>
    <a href="{{route('user.create')}}"><x-card>vytvoriť použivatela</x-card></a>
    <a href="{{route('author.create')}}"><x-card>vytvoriť autora</x-card></a>
</div>
<h2 class="py-10 text-center">Všetky príspevky</h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
    <a href="{{route('blog.index')}}"><x-card>Všetky články</x-card></a>
    <a href="{{route('category.index')}}"><x-card>Všetky kategórie</x-card></a>
    <a href="{{route('reference.index')}}#referenceCreate"><x-card>Všetky referencie</x-card></a>
    <a href="{{route('course.index')}}"><x-card>Všetky programy</x-card></a>
    <a href="{{route('user.index')}}"><x-card>Všetci používatelia</x-card></a>
    <a href="{{route('author.index')}}"><x-card>Zoznam autorov</x-card></a>
</div>
</x-layout-admin>