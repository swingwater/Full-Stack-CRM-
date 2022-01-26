
@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add project</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/save-projects" method="POST">
                  {{ csrf_field() }}
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name="title" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea name="description" class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Deadline:</label>
                            <input type="text" name="deadline" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                            <select name="status" class="form-control">
                                <option value="Open">Open</option>
                                <option value="In progress">In progress</option>
                                <option value="Cancelled">Cancelled</option>
                                <option value="Completed">Completed</option>

                            </select>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Projects List</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>Project Title</th>
                            <th>Project Description</th>
                            <th>Project Deadline</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </thead>
                            <tbody>
                            @foreach($projects as $data)
                            <tr>
{{--                                <td>{{ $data->id }}</td>--}}
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->description }}</td>
                                <td>{{ $data->deadline }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <a href="{{ url('projects-edit/'.$data->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ url('projects-delete/'.$data->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('Delete') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
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

@section('scripts')
@endsection

