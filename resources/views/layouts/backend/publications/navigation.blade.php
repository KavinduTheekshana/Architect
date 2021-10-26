<x-app-layout>
    <x-slot name="header">
        <div class="container">

 
        <div class="row">

            <a type="button" class="btn btn-outline-primary {{ Request::segment(2) === 'publications-list' ? 'active' : null }} w-auto mr-3 text-xl" href="{{ url('publications/publications-list') }}">
                Publications List
            </a>

            <a type="button" class="btn btn-outline-success {{ Request::segment(2) === 'add-publications' ? 'active' : null }} w-auto mr-3 text-xl" href="{{ url('publications/add-publications') }}">
                Add Publications
            </a>





        </div>
        </div>

    </x-slot>


    @yield('content')

    </x-app-layout>