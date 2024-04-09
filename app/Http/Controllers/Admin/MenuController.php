<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;
use http\Env\Request;

class MenuController extends Controller
{
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;

    }
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.menu.add', [
            'title' => 'Thêm Danh Mục Mới',
            'menus' => $this->menuService->get(0)

        ]);
    }

    public function store(CreateFormRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->menuService->create($request);

        return redirect()->back();
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.menu.list', [
            'title' => 'Danh Sách Danh Mục Mới Nhất',
            'menus' => $this->menuService->get()
        ]);
    }
    public function destroy(Request $request): \Illuminate\Http\JsonResponse
    {
        $result = $this->menuService->destroy($request);
        if ($result){
            return response()->json([
                'error' => false,
                'message' => 'Xóa Thành Công'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
