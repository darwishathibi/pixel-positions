<x-layout>
    <div class="space-y-10">

        <section class="text-center ">
            <h1 class="text-4xl font-bold">Lets Find Your Dream Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Search jobs..." class="border border-white/10 rounded-xl px-5 py-4 bg-white/10 w-full max-w-xl">
            </form>
        </section>
        <section>
            <x-section-heading>
                Top Jobs
            </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-4 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>

        <section>
            <x-section-heading>
                Tags
            </x-section-heading>

            <div class="mt-6">
                <x-tag size="base">Design</x-tag>
                <x-tag size="base">Development</x-tag>
                <x-tag size="base">Marketing</x-tag>
                <x-tag size="base">Sales</x-tag>
                <x-tag size="base">Customer Support</x-tag>
                <x-tag size="base">Human Resources</x-tag>
                <x-tag size="base">Finance</x-tag>
                <x-tag size="base">IT</x-tag>
                <x-tag size="base">Legal</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>

</x-layout>
