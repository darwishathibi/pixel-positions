@props(['job'])
<div class="p-4 bg-white/10 rounded-lg flex mt-6 space-x-6 border border-transparent hover:border-blue-800 group">
    <div><x-employer-logo :width="90" /></div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">
            {{ $job->salary }}
        </p>
    </div>

    <div>
        {{-- <x-tag>Design</x-tag>
        <x-tag>Development</x-tag>
        <x-tag>Marketing</x-tag> --}}

        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</div>
