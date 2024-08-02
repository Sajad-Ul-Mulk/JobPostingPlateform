@props(['job'])
<div class=" flex-col justify-center relative overflow-hidden sm:py-8">
    <div class="max-w-7xl mx-auto">
        <div class="relative group">
            {{--                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>--}}
            <div class="relative  px-7 py-6 bg-gray-100 ring-1 ring-gray-900/5 rounded-lg leading-none flex items-top justify-start space-x-6">
                <svg class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24">
                </svg>
                <div class="space-y-2">
                    <a href="jobs/{{$job->id}}">
                        <strong>{{$job->jobTitle}}</strong>  pays  ${{$job->jobSalary}} employer name is <strong>{{$job->employer->name}}</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
