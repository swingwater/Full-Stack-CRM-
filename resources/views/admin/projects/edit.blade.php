
@extends('layouts.master')

@section('title')
    Dashboard edit
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Edit</h4>
                    <form action="{{ url('projects-update/'.$projects->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT' )}}
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Title:</label>
                                <input type="text" name="title" class="form-control" value="{{ $projects->title }}">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Description:</label>
                                <textarea name="description" class="form-control">{{ $projects->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Deadline:</label>
                                <input type="text" name="deadline" class="form-control" value="{{ $projects->deadline }}">
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
                            <a href="{{ url('projects') }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
