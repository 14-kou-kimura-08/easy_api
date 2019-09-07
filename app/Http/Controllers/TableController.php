<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $tables;

    /**
     * Create a new controller instance.
     *
     * @param Table $tables
     */
    public function __construct(Table $tables)
    {
        $this->tables = $tables;
    }

    /**
     * View create page.
     *
     */
    public function create()
    {
        return view('tables.create');
    }

    /**
     * Store request data.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $this->tables->create([
            'user_id'       => Auth::id(),
            'name'          => $validate['name'],
            'is_published'  => false,
        ]);

        return redirect()->route('home');
    }
}
