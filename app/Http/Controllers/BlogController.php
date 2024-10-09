<?php

namespace App\Http\Controllers;

use App\Constants\MessageConstants;
use App\Models\Blog;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\Cast\Bool_;

class BlogController extends Controller
{
    use ApiResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userName = $request->input('user_name');
        $query = Blog::with(['user']);

        if (!empty($userName)) {
            $query->whereHas('user', function ($query) use ($userName) {
                $query->where('name', 'like', '%' . $userName . '%');
            });
        }
        $blogs = $query->paginate(50);
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input('title'));
        $validator = Validator::make(request()->all(), [
            'title' => 'required|string|max:255',
            'body' => 'required|string|min:8|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        try {
            DB::beginTransaction();
            $request['user_id'] = Auth::user()->id;
            $blog = Blog::create($request->all());
            
            DB::commit();
            return $this->apiResponse($blog, MessageConstants::STORE_SUCCESS, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->apiResponse(null, $e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
