<x-app-layout>
    <x-slot name="header">
        <div class="container">

 
        <div class="row">

            <a type="button" class="btn btn-outline-primary {{ Request::segment(2) === 'projects-list' ? 'active' : null }} w-auto mr-3 text-xl" href="{{ url('projects/projects-list') }}">
                Projects List
            </a>

            <a type="button" class="btn btn-outline-success {{ Request::segment(2) === 'add-projects' ? 'active' : null }} w-auto mr-3 text-xl" href="{{ url('projects/add-projects') }}">
                Add Project
            </a>





        </div>
        </div>

    </x-slot>


    @yield('content')

    </x-app-layout>