<x-layout>
    <x-slot name="heading">
        Create Job
    </x-slot>

    <form method="post" action="/job">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a NEW Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Some information about the Job.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                   <x-myinput-field>
                           <x-mylabel for='title'>Title</x-mylabel>
                           <div class="mt-2">
                               <x-myinput name="title" id="title" placeholder="Job's Designation"/>
                               <x-myinput-error name="title"/>
                           </div>
                   </x-myinput-field>

                    <x-myinput-field>
                        <x-mylabel for='salary'>Saalary</x-mylabel>
                        <div class="mt-2">
                            <x-myinput name="salary" id="salary" placeholder="$35000 USD"/>
                            <x-myinput-error name="salary"/>
                        </div>
                    </x-myinput-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-my-Submit-button>Save</x-my-Submit-button>
        </div>
    </form>


</x-layout>
