@extends('admin.master')

@section('title', __('keywords.add_service'))

@section('content')

    <div class="container-fluid">
        <div class=" my-4">
            <div class="flex items-center justify-between mb-2">
                <h2 class="white h5 page-title">{{ __('keywords.add_service') }}</h2>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <input type="text" class="form-control p-3 rounded" id="title" placeholder="{{ __('keywords.title') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <input type="text" class="form-control p-3 rounded" id="icon" placeholder="{{ __('keywords.icon') }}">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label for="description">{{ __('keywords.description') }}</label>
                            <textarea class="form-control" id="description" placeholder="{{ __('keywords.description') }}"></textarea>
                        </div>
                        <button type="submit" class="mt-2 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
