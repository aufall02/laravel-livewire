<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="seacrh" class="input input-bordered" placeholder="Pencarian" wire:model.live='search'>
        <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
            <x-tabler-plus class="ssize-5" />
            <span>Tambah menu</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <div class="flex gap-3 items-center">
                                <div class="avatar">
                                    <div class="w-10 rounded-lg">
                                        <img src="{{ $menu->avatar }}" alt="{{ $menu->name }}">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="font-bold"> {{ $menu->name }}</div>
                                    <div> {{ $menu->type }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $menu->harga }}</td>
                        <td class="whitespace-normal w-80">
                            <div class="line-clamp-2 ">{{ $menu->decs }}</div>
                        </td>
                        <td>
                            <div class="flex justify-center gap-1">
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('editMenu', {menu : {{ $menu->id }}})">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-square"
                                    wire:click="$dispatch('deleteMenu', {menu : {{ $menu->id }}})">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @livewire('menu.actions')
</div>
