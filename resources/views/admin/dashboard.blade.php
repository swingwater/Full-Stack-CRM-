
@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
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
                            </thead>
                        <tbody>
                            <tr>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>
                                    <div class="form-group">

                                        <select name="#" class="form-control">
                                            <option value="">Open</option>
                                            <option value="">In progress</option>
                                            <option value="">Cancelled</option>
                                            <option value="">Completed</option>

                                        </select>
                                    </div>
                                </td>
                            </tr>

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

