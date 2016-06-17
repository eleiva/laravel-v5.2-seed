@extends('layouts.app')

@section('content')
       <div class="panel panel-default">
            <div class="panel-heading">
                Access Log
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th>#id</th>
                        <th>User</th>
                        <th>Logged at</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($accessLogs as $accessLog)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $accessLog->id}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $accessLog->user->first_name.' '.$accessLog->user->last_name}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $accessLog->created_at}}</div>
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
        {{ $accessLogs->links() }}
        </div>
      </div>
    </div>
@endsection
