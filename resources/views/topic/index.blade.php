@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Topic</th>
                                <th class="text-center">Posted By</th>
                                <th class="text-center">Posted At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($topics as $topic)
                            <tr>
                                <td>{{ $topic->title }}</td>
                                <td class="text-center">{{ $topic->user->name }}</td>
                                <td class="text-center">{{ $topic->created_at }}</td>
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
