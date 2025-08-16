<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Listar todos os produtos        -> GET
    public function index()
    {
        try {
            return response()->json(Produto::orderBy('id')->get(), 200);
        } catch (\Exception $e) {
            return response()->json(['erro' => $e->getMessage()], 500);
        }
    }

    // Buscar um produto específico            -> GET
    public function show($id)
    {
        try {
            $produto = Produto::findOrFail($id);
            return response()->json($produto, 200);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Produto não encontrado ou erro interno.'], 404);
        }
    }

    // Criar novo produto                        -> POST
    public function store(Request $request)
    {
        try {
            $produto = Produto::create($request->all());
            return response()->json($produto, 201);
        } catch (\Exception $e) {
            return response()->json(['erro' => $e->getMessage()], 500);
        }
    }

    // Atualizar um produto existente                   ->PUT
    public function update(Request $request, $id)
    {
        try {
            $produto = Produto::findOrFail($id);
            $produto->update($request->all());
            return response()->json($produto, 200);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao atualizar produto.'], 500);
        }
    }

    // Deletar um produto                               -> DELETE
    public function destroy($id)
    {
        try {
            $produto = Produto::findOrFail($id);
            $produto->delete();
            return response()->json(['mensagem' => 'Produto deletado com sucesso.'], 200);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao deletar produto.'], 500);
        }
    }
}
