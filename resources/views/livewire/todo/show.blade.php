<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-8 py-4">Item Name</th>

            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list as $item)


            @php
                          $lineThrough ='';
                        @endphp
                        @if($item->is_completed)
                            @php
                                $lineThrough = 'line-through ';
                            @endphp
                        @endif
                        <tr @if($loop->even)class="bg-grey <?=$lineThrough?>" @else class="<?=$lineThrough?>" @endif>


                <td class="border px-4 py-2">{{ $item->title }}</td>

                <td class="border px-4 py-2">
                    @if($item->is_completed)
                        <button wire:click="markAsToDo({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                            Undo Item
                        </button>
                    @else
                        <button wire:click="markAsDone({{ $item->id }})" class="bg-gray-800 text-white px-6 rounded-full">
                            Mark as Completed
                        </button>
                    @endif

                    <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
