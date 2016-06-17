@extends('layouts.app')

@section('content')
       <div class="panel panel-default">
            <div class="panel-heading">
                Current Users
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $user->first_name}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->last_name}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $user->phone}}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="center-block">
        {{ $users->links() }}
        </div>
      </div>
    </div>
@endsection
