<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menu.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_menu' => 'required|string|max:255',
            'price_menu' => 'required|string|max:255',
            'description_menu' => 'required|string',
            'image_menu' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_categories' => 'required|exists:categories,id_categories',
        ]);

        $imagePath = $request->file('image_menu')->store('menu_images', 'public');

        Menu::create([
            'name_menu' => $request->name_menu,
            'price_menu' => $request->price_menu,
            'description_menu' => $request->description_menu,
            'image_menu' => $imagePath,
            'id_categories' => $request->id_categories,
        ]);

        return redirect()->route('menus.index')
            ->with('success', 'Menu berhasil ditambahkan');
    }

    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menu.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name_menu' => 'required|string|max:255',
            'price_menu' => 'required|string|max:255',
            'description_menu' => 'required|string',
            'image_menu' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'id_categories' => 'required|exists:categories,id_categories',
        ]);

        $data = [
            'name_menu' => $request->name_menu,
            'price_menu' => $request->price_menu,
            'description_menu' => $request->description_menu,
            'id_categories' => $request->id_categories,
        ];

        if ($request->hasFile('image_menu')) {
            // Hapus gambar lama jika ada
            if ($menu->image_menu) {
                Storage::disk('public')->delete($menu->image_menu);
            }
            $data['image_menu'] = $request->file('image_menu')->store('menu_images', 'public');
        }

        $menu->update($data);

        return redirect()->route('menus.index')
            ->with('success', 'Menu berhasil diperbarui');
    }

    public function destroy(Menu $menu)
    {
        // Hapus gambar dari storage
        if ($menu->image_menu) {
            Storage::disk('public')->delete($menu->image_menu);
        }

        $menu->delete();

        return redirect()->route('menus.index')
            ->with('success', 'Menu berhasil dihapus');
    }
}
