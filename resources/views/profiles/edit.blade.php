@extends('layouts.app') @section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post" >
      @csrf

      @method('PATCH')
        <div class="row">
            <div class="col-8">
              <div class=" form-group row ">
                <h1>Edit Profile</h1>
              </div>
                <div class="form-group row">
                    <label
                        for="title"
                        class="col-md-4 col-form-label text-md-right"
                        >{{ __("Title") }}</label
                    >

                    <div class="col-md-6">
                        <input
                            id="title"
                            type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            name="title"
                            value="{{ old('title' ) ?? $user->profile->title}}"
                            required
                            autocomplete="name"
                            autofocus
                        />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="description"
                        class="col-md-4 col-form-label text-md-right"
                        >{{ __("Description") }}</label
                    >

                    <div class="col-md-6">
                        <input
                            id="description"
                            type="text"
                            class="form-control @error('description') is-invalid @enderror"
                            name="description"
                            value="{{ old('description') ?? $user->profile->description }}"
                            required
                            autocomplete="name"
                            autofocus
                        />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="url"
                        class="col-md-4 col-form-label text-md-right"
                        >{{ __("URL") }}</label
                    >

                    <div class="col-md-6">
                        <input
                            id="url"
                            type="text"
                            class="form-control @error('url') is-invalid @enderror"
                            name="url"
                            value="{{ old('url') ?? $user->profile->url }}"
                            required
                            autocomplete="name"
                            autofocus
                        />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="form-group row">
                    <label
                        for="image"
                        class="col-md-4 col-form-label text-md-right"
                        >{{ __("Post Image") }}
                    </label>

                    <div class="col-md-6">
                        <input
                            type="file"
                            class="form-control-file"
                            id="image"
                            name="image"
                        />

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

       
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Save Profile') }}
              </button>
          </div>
      </div>
    </form>
</div>
@endsection
