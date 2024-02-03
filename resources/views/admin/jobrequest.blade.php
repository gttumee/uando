<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('依頼一覧') }}
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
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">お名前</th>
                                <th class="px-4 py-2">メール</th>
                                <th class="px-4 py-2">電話番号</th>
                                <th class="px-4 py-2">住所</th>
                                <th class="px-4 py-2">作業内容・希望日付等</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allRequest as $item)
                            <tr>
                                <td class="border px-4 py-2">{{$item->id}}</td>
                                <td class="border px-4 py-2">{{$item->name}}</td>
                                <td class="border px-4 py-2">{{$item->email}}</td>
                                <td class="border px-4 py-2">{{$item->phone}}</td>
                                <td class="border px-4 py-2">{{$item->address}}</td>
                                <td class="border px-4 py-2">{{$item->content}}</td>
                                <td class="border px-4 py-2">{{$item->created_at}}</td>
                                <td class="border px-4 py-2">
                                    <form method="post" action="{{ route('jobrequest', ['id' => $item->id]) }}">
                                        @csrf
                                        <x-danger-button onclick="confirmDelete({{ $item->id }})" type="submit" id='delete'>{{ __('対応済み') }}</x-danger-button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</x-app-layout>
