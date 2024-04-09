<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use Illuminate\Support\Str;
use MongoDB\Driver\Session;

class MenuService
{
    public function get($parent_id = 1)
    {
        return Menu::
        when($parent_id = 0, function ($query) use ($parent_id) {
            $query->where('parent_id', $parent_id);
        })
            ->get();
    }

    public function getAll()
    {
        return Menu::orderbyDesc('id')->paginate(20);
    }

    public function create($request)
    {
        try{
            Menu::create([
                'name' => (string)$request->input('name'),
                'parent_id' => (string)$request->input('parent_id'),
                'description' => (string)$request->input('description'),
                'content' => (string)$request->input('content'),
                'active' => (string)$request->input('active')

            ]);
//            Session::flash('success', 'Tạo Danh Mục Thành Công');
        }catch (\Exception $err){
//            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $menu = Menu::where('id', $id)->first();
        if ($menu){
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();

        }
        return false;
    }

}