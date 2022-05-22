@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row no-gutters">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="pt-5">
            <a href="/edit/profile">Edit a profile example</a>
        </div>
        
        <div class="row no-gutters pt-5">
            <table class="table table-bordered table-hover">
                {{-- TODO: Populate these with results --}}
                {{-- TODO: Use javascript to send to their edit link --}}
                <tr>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                </tr>
                <tr>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                </tr>
              </table> 
        </div>
    </div>
@endsection