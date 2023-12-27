@extends('layouts.master')
@section('page_title', 'Manage Places')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Places</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-dorms" class="nav-link active" data-toggle="tab">Manage Places</a></li>
                <li class="nav-item"><a href="#new-dorm" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Add Place</a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-dorms">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dorms as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->description}}</td>
                                    <td>{{ $d->category->name}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    @if(Qs::userIsTeamSA())
                                                    {{--Edit--}}
                                                    <a href="{{ route('places.edit', $d->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                   @endif
                                                        @if(Qs::userIsSuperAdmin())
                                                    {{--Delete--}}
                                                    <a id="{{ $d->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ $d->id }}" action="{{ route('places.destroy', $d->id) }}" class="hidden">@csrf @method('delete')</form>
                                                        @endif

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                <div class="tab-pane fade" id="new-dorm">

                    <div class="row">
                        <div class="col-md-6">
                            <form class="ajax-store" method="post" action="{{ route('places.store') }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Name of the Place">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Description</label>
                                    <div class="col-lg-9">
                                        <textarea name="description" class="form-control" rows="3" placeholder="Description of the Place">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Location</label>
                                    <div class="col-lg-9">
                                        <input name="location" value="{{ old('location') }}"  type="text" class="form-control" placeholder="Location of the Place">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Image</label>
                                    <div class="col-lg-9">
                                        <div class="custom-file">
                                          <input name="image" accept="image/*" type="file" class="custom-file-input" id="placeImage" data-show-caption="false" data-show-upload="false">
                                          <label class="custom-file-label" for="placeImage">Choose file</label>
                                        </div>
                                        <script>
                                          document.getElementById('placeImage').addEventListener('change', function(e) {
                                            var fileName = e.target.files[0].name;
                                            var label = document.querySelector('.custom-file-label');
                                            label.textContent = fileName;
                                          });
                                        </script>
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Category</label>
                                    <div class="col-lg-9">
                                        <select name="category" class="form-control">
                                            <option value="">Pick Category</option>
                                            @foreach($categories as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button id="ajax-btn" type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Places List Ends--}}

@endsection
