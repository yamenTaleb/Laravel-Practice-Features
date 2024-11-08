@extends('admin.master')

@section('title', __('keywords.show_service'))

@section('content')

    <div class="container-fluid">
        <div class=" my-4">
            <div class="flex items-center justify-between mb-2">
                <h2 class="white h5 page-title">{{ __('keywords.show_service') }}</h2>
            </div>
            <div class="card shadow">
                <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <input type="text" class="form-control p-3 text-sm rounded text-white bg-transparent" id="title" value="{{ $service->title }}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <div class="form-control flex items-center  rounded bg-transparent text-white" id="icon">
                                    <div class="mr-2 text-sm">
                                        {{ $service->icon }}
                                    </div>
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label for="description">{{ __('keywords.description') }}</label>
                            <textarea class="form-control" name="description" id="description" disabled >{{ $service->description }}</textarea>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
