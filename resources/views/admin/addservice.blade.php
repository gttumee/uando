<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('サービス追加') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                     @endif
                 @if(session('error'))
                 <div class="alert alert-danger">
                   {{ session('error') }}
                   </div>
                @endif
                
                    <form method="post" action="{{ route('addservice') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                    
                        <div>
                            <x-input-label for="name" :value="__('サービス名')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required />
                        </div>
                        
                        <div>
                            <x-input-label for="content" :value="__('サービス内容')" />
                            <x-text-input id="content" name="content" type="text" class="mt-1 block w-full" required />
                        </div>
                        
                        <div>
                            <x-input-label for="date" :value="__('サービス時間')" />
                            <x-text-input id="date" name="date" type="text" placeholder='1時間' class="mt-1 block w-full" required />
                        </div>
                        
                        <div>
                            <x-input-label for="price" :value="__('値段')" />
                            <x-text-input id="price" name="price" type="text" placeholder='80,000' class="mt-1 block w-full" required />
                        </div>
                        
                        <div>
                            <x-input-label for="image" :value="__('画像')" />
                            <input id="image" name="image" type="file" class="mt-1 block w-full" required />
                        </div>
                        
                    
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('保存') }}</x-primary-button>
                        </div>
                    </form>                    
                </div>
                <div class="p-6 text-gray-900">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">お名前</th>
                                <th class="px-4 py-2">サービス時間</th>
                                <th class="px-4 py-2">値段</th>
                                <th class="px-4 py-2">削除</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allService as $item)
                            <tr>
                                <td class="border px-4 py-2">{{$item->id}}</td>
                                <td class="border px-4 py-2">{{$item->name}}</td>
                                <td class="border px-4 py-2">{{$item->date}}</td>
                                <td class="border px-4 py-2">{{$item->price}}</td>
                                <td class="border px-4 py-2">
                                    <form method="post" action="{{ route('addservice', ['id' => $item->id]) }}">
                                        @csrf
                                        <x-danger-button onclick="confirmDelete({{ $item->id }})" type="submit" id='deleteForm'>{{ __('削除') }}</x-danger-button>
                                    </form>
                                </td>
                                <script>
                                    function confirmDelete(itemId) {
                                        if (confirm('本当に削除しますか？')) {
                                            document.getElementById('deleteForm' + itemId).submit();
                                        }
                                    }
                                </script>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
