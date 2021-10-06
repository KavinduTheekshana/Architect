<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">

  <div class="row">
      <div class="col-md-6 p-3">
      <div class="card shadow-xl sm:rounded-lg p-4" style="width: 100%;cursor: pointer;">
      <h2>Total Projects</h2>
      <h1><b>{{$project}}</b></h1>
      </div>
  </div>


  <div class="col-md-6 p-3">
      <div class="card shadow-xl sm:rounded-lg p-4" style="width: 100%;cursor: pointer;">
      <h2>Total Awards</h2>
      <h1><b>{{$award}}</b></h1>
      </div>
  </div>
  
  <div class="col-md-6 p-3">
      <div class="card shadow-xl sm:rounded-lg p-4" style="width: 100%;cursor: pointer;">
      <h2>Total Members</h2>
      <h1><b>{{$member}}</b></h1>
      </div>
  </div>
  <div class="col-md-6 p-3">
      <div class="card shadow-xl sm:rounded-lg p-4" style="width: 100%;cursor: pointer;">
      <h2>Total Users</h2>
      <h1><b>{{$user}}</b></h1>
      </div>
  </div>
</div>
</div>

</x-app-layout>
