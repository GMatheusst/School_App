<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use App\Http\Requests\StoreUpdateBannerRequest;

class BannerController extends Controller
{
    public function store(StoreBannerRequest $request)
    {
        $banner = Banner::create($request->validated());

        return response()->json($banner, 201);
    }

    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $banner->update($request->validated());

        return response()->json($banner, 200);
    }
}
