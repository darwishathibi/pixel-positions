<x-layout>
    <div class="space-y-10">
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
                <x-tag>Design</x-tag>
                <x-tag>Development</x-tag>
                <x-tag>Marketing</x-tag>
                <x-tag>Sales</x-tag>
                <x-tag>Customer Support</x-tag>
                <x-tag>Human Resources</x-tag>
                <x-tag>Finance</x-tag>
                <x-tag>IT</x-tag>
                <x-tag>Legal</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
        </section>
    </div>

</x-layout>
