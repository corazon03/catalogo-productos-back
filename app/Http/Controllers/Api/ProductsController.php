<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Traits\ResponseModel;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    use ResponseModel;

    public function index(Request $request): JsonResponse
    {
        $page = $request->query('page', 1);
        $limit = $request->query('limit', 5);
        try {
            $productos = Product::paginate($limit, ['*'], 'page', $page)->appends($request->query());
            if ($productos->isEmpty()) {
                return $this->errorResponse('No se encontraron productos', 404);
            }
            return $this->successResponse($productos, 'Productos obtenidos con éxito');
        } catch (\Exception $e) {
            return $this->errorResponse('Ocurrió algún error', 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
