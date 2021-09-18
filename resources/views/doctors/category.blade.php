<x-app-layout>
    <h1 class="uppercase text-center text-3xl font-bold px-5 py-8">{{$category->name_category}}:</h1>
    <div class="flex items-center justify-center py-8 px-8">
    
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        @foreach ($doctors as $doctor)
        <div class=" bg-white shadow-xl rounded-lg py-3">
            <div class="photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src="https://randomuser.me/api/portraits/women/60.jpg" alt="John Doe">
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$doctor->name_doctor}}</h3>
                <div class="text-center text-gray-400 text-xs font-semibold">
                    <p>{{$category->name_category}}</p>
                </div>
                <table class="text-xs my-3">
                    <tbody><tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                        <td class="px-2 py-2">{{$doctor->address}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                        <td class="px-2 py-2">{{$doctor->phone}}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                        <td class="px-2 py-2">{{$doctor->email}}</td>
                    </tr>
                </tbody></table>
    
               
    
            </div>
        </div>
    

        @endforeach
    </div>
    </div>

    <div class="mt-4 py-8 px-8">
        {{$doctors->links()}}

    </div>
    
</x-app-layout>