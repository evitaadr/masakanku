<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $menus = Menu::with('category')->take(6)->get();
        $galeris = Galeri::all();

        return view('home', compact('categories', 'menus', 'galeris'));
    }

    public function menu()
    {
        $categories = Category::all();
        $menus = Menu::with('category')->get();

        return view('menu', compact('categories', 'menus'));
    }

    public function galeri()
    {
        $galeris = Galeri::all();

        return view('galeri', compact('galeris'));
    }

    public function menuByCategory($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);
        $menus = Menu::where('id_categories', $id)->get();

        return view('menu_by_category', compact('categories', 'category', 'menus'));
    }

    public function dashboard()
    {
        $menuCount = Menu::count();
        $categoryCount = Category::count();
        $galeriCount = Galeri::count();

        return view('admin.dashboard', compact('menuCount', 'categoryCount', 'galeriCount'));
    }
}
