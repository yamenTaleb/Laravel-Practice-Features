@extends('admin.master')

@section('title', __('keywords.features'))

@section('content')
    <div class="container-fluid">
        <div class="my-4">
            <div class="flex items-center justify-between mb-2">
                <h2 class="white h5 page-title">{{ __('keywords.features') }}</h2>
                <x-action-button href="{{ route('admin.features.create') }}" type="create"></x-action-button>
            </div>
            <div class="card shadow">
                <div class="card-body">
                    <x-success-alert></x-success-alert>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>{{ __('keywords.title') }}</th>
                            <th width="10%">{{ __('keywords.icons') }}</th>
                            <th width="15%">{{ __('keywords.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($features) > 0)
                            @foreach($features as $key => $feature)
                                <tr>
                                    <td>{{ $features->firstItem() + $loop->index }}</td>
                                    <td>{{ $feature->title }}</td>
                                    <td><i class="{{ $feature->icon }} fa-2x"></i></td>
                                    <td>
                                        <x-action-button href="{{ route('admin.features.edit', ['feature' => $feature]) }}" type="edit"></x-action-button>
                                        <x-delete-button href="{{ route('admin.features.destroy', ['feature' => $feature]) }}" id="{{ $feature->id }}"></x-delete-button>
                                        <x-action-button href="{{ route('admin.features.show', ['feature' => $feature]) }}" type="show"></x-action-button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <x-empty-alert></x-empty-alert>
                        @endif
                        </tbody>
                    </table>
                    <div>{{ $features->links() }}</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

