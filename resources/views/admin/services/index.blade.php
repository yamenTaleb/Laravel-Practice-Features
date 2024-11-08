@extends('admin.master')

@section('title', __('keywords.services'))

@section('content')
    <div class="container-fluid">
        <div class=" my-4">
            <div class="flex items-center justify-between mb-2">
                <h2 class="white h5 page-title">{{ __('keywords.services') }}</h2>
                <a href="{{ route('admin.services.create') }}" class="p-1.5 mb no-underline rounded text-white bg-blue-500 hover:bg-blue-600 ">{{ __('keywords.add_new') }}</a>
            </div>
            <div class="card shadow">
                <div class="card-body">
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
                        @if(count($services) > 0)
                            @foreach($services as $key => $service)
                                <tr>
                                    <td>{{ $services->firstItem() + $loop->index }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>
                                        <i class=" {{ $service->icon }} fa-2x"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-warning">
                                            <i class="fe fe-edit fe-2x"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="fe fe-trash-2 fe-2x"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fe fe-eye fe-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="alert alert-danger" colspan="4">
                                    {{ __('keywords.no_records_found') }}
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <div>{{ $services->links() }}</div>
                </div>
            </div>
        </div> <!-- simple table -->
    </div>
@endsection
