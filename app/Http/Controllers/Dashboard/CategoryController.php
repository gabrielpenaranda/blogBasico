<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::paginate(2);
        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = new Category();
        return view('dashboard.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
               
        Category::create($request->validated());
        return redirect(route('category.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('dashboard.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
                
        $category->update($data);
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index');
    }
}
