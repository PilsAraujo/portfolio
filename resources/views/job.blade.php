<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1><strong>Faction:</strong> {{ $job->faction->name }}</h1>
    
    <h2>{{ $job['title'] }} </h2>


    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <p>
        {{ $job['description'] }}
    </p>


</x-layout>
    
