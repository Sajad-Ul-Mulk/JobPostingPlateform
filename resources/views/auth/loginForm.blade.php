<x-layout>
    <x-slot name="heading">
        SignIn Form
    </x-slot>

    <form method="post" action="/login">
        @csrf
        <div>
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">WelCome Back</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-myinput-field>
                        <x-mylabel for='email'>Email</x-mylabel>
                        <div class="mt-2">
                            <x-myinput type="email" name="email" id="email" placeholder="xyz@123.com" :value="old('email')"/>
                            <x-myinput-error name="email"/>

                        </div>
                    </x-myinput-field>

                    <x-myinput-field>
                        <x-mylabel for='password'>Password</x-mylabel>
                        <div class="mt-2">
                            <x-myinput name="password" id="password" type="password" />
                            <x-myinput-error name="password"/>
                        </div>
                    </x-myinput-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-my-Submit-button>LogIn</x-my-Submit-button>
        </div>
    </form>


</x-layout>
