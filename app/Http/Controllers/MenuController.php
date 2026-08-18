<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class MenuController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:MENU_VIEW', only: ['index']),
            new Middleware('permission:MENU_CREATE', only: ['create', 'store']),
            new Middleware('permission:MENU_UPDATE', only: ['edit', 'update']),
            new Middleware('permission:MENU_DELETE', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Menu::with('parent')->withCount('children');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('url', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $menus = $query->parentsFirst()->latest('id')->get();

        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents = Menu::whereNull('parent_id')->orderBy('sort_order')->get();

        return view('menus.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'sort_order' => 'required|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        Menu::create([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'icon' => $request->input('icon'),
            'parent_id' => $request->input('parent_id'),
            'sort_order' => $request->input('sort_order') ?? 0,
            'status' => $request->input('status'),
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        // Exclude self and its descendants so a menu cannot become its own
        // parent (which would create a cyclic reference).
        $excludeIds = collect([$menu->id]);
        foreach ($menu->children as $child) {
            $excludeIds->push($child->id);
            foreach ($child->children as $grandchild) {
                $excludeIds->push($grandchild->id);
            }
        }

        $parents = Menu::whereNotIn('id', $excludeIds->all())
            ->whereNull('parent_id')
            ->orderBy('sort_order')
            ->get();

        return view('menus.edit', compact('menu', 'parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'sort_order' => 'required|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        $newParent = $request->input('parent_id');

        if ($newParent && $this->isSelfOrDescendant($menu, (int) $newParent)) {
            return back()
                ->withErrors(['parent_id' => 'A menu cannot be its own parent or a parent of one of its descendants.'])
                ->withInput();
        }

        $menu->update([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'icon' => $request->input('icon'),
            'parent_id' => $newParent,
            'sort_order' => $request->input('sort_order') ?? 0,
            'status' => $request->input('status'),
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // Detach children so they become top-level menus (no orphaned data).
        Menu::where('parent_id', $menu->id)->update(['parent_id' => null]);

        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }

    /**
     * Determine if the candidate id is the menu itself or one of its descendants.
     */
    protected function isSelfOrDescendant(Menu $menu, int $candidateParentId): bool
    {
        if ($menu->id === $candidateParentId) {
            return true;
        }

        foreach ($menu->children as $child) {
            if ($this->isSelfOrDescendant($child, $candidateParentId)) {
                return true;
            }
        }

        return false;
    }
}
