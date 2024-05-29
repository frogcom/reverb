<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                <div id="users"></div>
{{--                <a href="{{route('reverb')}}">--}}
                <button class="btn btn-primary" onclick="activateEvent()">event</button>
{{--                <button class="btn btn-primary" >event</button>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>
    <script >

        function activateEvent(){
            axios.get('{{route('reverb')}}')
                .then( function (response){
                    console.log(response)
                });
        }

        document.addEventListener("DOMContentLoaded", () => {

            Echo.channel('channel')
                .listen('.event', (e) => {
                    console.log('success')

                    console.log(e);
                    const p = document.createElement("p");
                    const text = document.createTextNode(e.user.name);
                    p.appendChild(text);
                    const element = document.getElementById("users");
                    element.appendChild(p);
                })
            })






    </script>
</x-app-layout>
