{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<ul class="menu p-4 w-80 min-h-full bg-base-300 text-base-content border-b-2 border-base-300 space-y-4">
    <!-- Sidebar content here -->
    <li>
        <h2 class="menu-title">Dashboard</h2>
        <ul>
            <li>
                <a href="{{route('home')}}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-dashboard size='5' />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-file-plus size='5' />
                    <span>Input transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Data master</h2>
        <ul>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-layout-grid-add size='5' />
                    <span>Menu makana</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-users size='5' />
                    <span>Data customer</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-file size='5' />
                    <span>Riwayat transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Account</h2>
        <ul>
            <li>
                <a href="{{route('profile')}}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user size='5' />
                    <span>Edit profile</span>
                </a>
            </li>
            <li>
                <button wire:click='logout'>
                    <x-tabler-logout size='5' />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>

</ul>
