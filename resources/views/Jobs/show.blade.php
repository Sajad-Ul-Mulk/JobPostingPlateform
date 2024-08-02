<x-layout>
    <x-slot name="heading">
        Jobs Page
    </x-slot>

    <h1>Job Details</h1>
{{--  @dd($job)--}}


        <h1> <strong>{{$job->jobTitle}}</strong></h1>
        <p>
            This job is posted by <strong>{{$job->employer->name}}</strong> and  salary is <strong>${{$job->jobSalary}}</strong> and is Remote base.
        </p>
    <p>

    @can('edit',$job)
    <div CLASS="flex justify-between">
        <x-button href="/jobs/{{$job->id}}/edit" class="mt-3">Edit Job</x-button>

        <form method="post" action="/jobs/{{$job->id}}">
            @csrf
            @method('DELETE')
            <x-danger-button   type="submit" class="mt-3">Delete Job</x-danger-button>
        </form>

    </div>
        @endcan
     </p>

</x-layout>
