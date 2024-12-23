@extends('admin.master')

@section('title', __('keywords.edit_feature'))

@section('content')

    <div class="container-fluid">
        <div class=" my-4">
            <div class="flex items-center justify-between mb-2">
                <h2 class="white h5 page-title">{{ __('keywords.edit_feature') }}</h2>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('admin.features.update', ['feature' => $feature]) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <x-form-label label="title"/>
                                <input type="text" class="form-control p-3 rounded text-white bg-transparent" name="title" id="title" placeholder="{{ __('keywords.title') }}" required value="{{ $feature->title }}">
                                <x-validation-error field="title"/>
                            </div>
                            <div class="form-group col-md-6">
                                <x-form-label label="icon"/>
                                <input type="text" class="form-control p-3 rounded text-white bg-transparent" name="icon" id="icon" placeholder="{{ __('keywords.icon') }}" required value="{{ $feature->icon }}">
                                <x-validation-error field="icon"/>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <x-form-label label="description"/>
                            <textarea class="form-control" name="description" id="description" placeholder="{{ __('keywords.description') }}" required>{{ $feature->description }}</textarea>
                            <x-validation-error field="description"/>
                        </div>
                        <x-submit-button/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
