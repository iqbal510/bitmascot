@extends('layouts.app')
@section('content')

	<div class="content-wrapper">
          
          <div class="card">
            <div class="card-body">
              <h3>User List</h3>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Birth</th>
                          <th>Email</th>
                          <th>Phone</th>
                          
                         
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                          <tr>
                              <td>{{ $user->first_name." ".$user->last_name }}</td>
                              <td>{{ $user->birth }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->phone }}</td>
                          </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
          </div>
@endsection