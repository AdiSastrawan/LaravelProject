<x-admin-layout>
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Package</h1>
    
    
            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <a class="hover:bg-blue-800 py-2 px-3 m-2 border-white text-white bg-blue-500 rounded-md " href="{{route('admin-package-create')}}">Create</a>
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Package Code</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Package Name</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Description</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Image</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($package as $p)
                            <tr>
                                <td class="text-left py-3 px-4">{{$p->package_code}}</td>
                                <td class=" text-left py-3 px-4">{{$p->package_name}}</td>
                                <td class=" text-left py-3 px-4">{{$p->package_desc}}</td>
                                <td class=" text-left py-3 px-4">{{"Rp " . number_format($p->prices['monthly_price'],2,',','.');}}</td>
                                <td class=" text-left py-3 px-4"><img class="w-40 h-40" src="{{asset('img')}}/{{$p->feature_img}}" alt=""></td>
                                
                                <td class="text-left py-3 px-4">
                                    <div class="flex flex-wrap ">
                                        <a class="hover:bg-blue-800 py-2 px-3 m-2 border-white text-white bg-blue-500 rounded-md " href="{{route('admin-package-edit',['id'=>$p->package_id])}}">edit</a> <a class="hover:bg-red-800 py-2 px-3 border-white text-white m-2 bg-red-500 rounded-md " href="{{route('admin-package-destroy',['id'=>$p->package_id])}}">delete</a></td>
                                        </div>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
</x-admin-layout>