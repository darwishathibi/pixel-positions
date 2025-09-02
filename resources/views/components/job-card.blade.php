@props(['job'])
<div class="p-4 bg-white/10 rounded-lg flex flex-col text-center border border-transparent hover:border-blue-800 group">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl font-bold">{{ $job->title }}</h3>
        <p class="text-sm mt-4 ">
            {{ $job->salary }}
        </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>

            {{-- <x-tag size="small">Development</x-tag>
            <x-tag size="small">Design</x-tag>
            <x-tag size="small">Marketing</x-tag> --}}

            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>

        <x-employer-logo :width="42" />
    </div>
</div>
