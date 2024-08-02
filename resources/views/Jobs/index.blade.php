<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

<h2>Job Openings</h2>
    @foreach($jobs as $job)
        <x-job-card :$job/>
    @endforeach
    <div>
        {{$jobs->links()}}
    </div>
</x-layout>
