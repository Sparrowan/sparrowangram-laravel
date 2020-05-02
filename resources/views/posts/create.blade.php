@extends('layouts.app') @section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post" >
      @csrf
        <div class="row">
            <div class="col-8">
              <div class=" form-group row ">
                <h1>Add New Post</h1>
              </div>
                <div class="form-group row">
                    <label
                        for="caption"
                        class="col-md-4 col-form-label text-md-right"
                        >{{ __("Post Caption") }}</label
                    >

                    <div class="col-md-6">
                        <input
                            id="caption"
                            type="text"
                            class="form-control @error('caption') is-invalid @enderror"
                            name="caption"
                            value="{{ old('caption') }}"
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
                  {{ __('Submit') }}
              </button>
          </div>
      </div>
    </form>
</div>
@endsection
