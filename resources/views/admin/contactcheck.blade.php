<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('問い合わせ確認') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">お名前</th>
                                <th class="px-4 py-2">メール</th>
                                <th class="px-4 py-2">電話番号</th>
                                <th class="px-4 py-2">メッセージ</th>
                                <th class="px-4 py-2">日付</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allContact as $item)
                            <tr>
                                <td class="border px-4 py-2">{{$item->id}}</td>
                                <td class="border px-4 py-2">{{$item->name}}</td>
                                <td class="border px-4 py-2">{{$item->email}}</td>
                                <td class="border px-4 py-2">{{$item->phone}}</td>
                                <td class="border px-4 py-2">{{$item->message}}</td>
                                <td class="border px-4 py-2">{{$item->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</x-app-layout>
