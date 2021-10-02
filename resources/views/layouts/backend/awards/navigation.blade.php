<x-app-layout>
    <x-slot name="header">
        <div class="row">

            <a type="button" class="btn btn-outline-primary {{ Request::segment(2) === 'award-list' ? 'active' : null }} w-auto mr-3 text-xl" href="award-list">
                Award List
            </a>

            <a type="button" class="btn btn-outline-success {{ Request::segment(2) === 'add-awards' ? 'active' : null }} w-auto mr-3 text-xl" href="add-awards">
                Add Award
            </a>





        </div>

    </x-slot>


    @yield('content')

    </x-app-layout>