<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h2>{{ $job->title }} </h2>


    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <p class="mb-4">
        {{ $job['description'] }}
    </p>

    @can('edit', $job)
        <x-buttons href="/jobs/{{ $job->id }}/edit">Edit Job</x-buttons>
    @endcan

</x-layout>
    