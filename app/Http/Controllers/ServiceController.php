<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    private const DIR = "admin.service.";
    public function index()
    {
        $services = Service::paginate(config('pagination.limit'));

        return view(self::DIR . 'index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::DIR . 'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        Service::create($data);

        return to_route(self::DIR . 'index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view(self::DIR . 'show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view(self::DIR . 'edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        $service->update($data);

        return to_route(self::DIR . 'index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return to_route(self::DIR . 'index');
    }
}
