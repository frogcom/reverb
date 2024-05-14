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
                </div>'

                <button class="btn btn-primary" onclick="sendevent()">event</button>
            </div>
        </div>
    </div>
    <script >


        function sendevent(){
            axios.get('{{route('reverb')}}')
                .then( function (response){
                    console.log(response)
                });
        }

        window.onload=function(){
            Echo.channel('sample')
                .listen('.message.sent', (e) => {
                    console.log(e);
                })
        }





    </script>

    <script type="module">


        // Echo.private(`player`)
        //     .listenForWhisper('position', (e) => {
        //         // console.log(e.position);
        //         console.log(e.players)
        //
        //         e.players.forEach((key, value) => {
        //             console.log(value)
        //             players.push(value)
        //         })
        //     });
    </script>
</x-app-layout>
