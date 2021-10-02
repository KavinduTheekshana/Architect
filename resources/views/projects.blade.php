<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Projects') }}
    </h2>
  </x-slot>


  <div class="container mt-5 mb-5">
    <div class="card p-5">


      <form>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Award Title">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>
        </div>


        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Multiple files input example</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>


        <div class="text-right">
          <button type="button" class="btn btn-success ml-auto">Save Award Details</button>
        </div>




      </form>
    </div>
  </div>



</x-app-layout>