<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index (Request $request) {
        $pesquisar = $request->pesquisar;
        // $pesquisar = $request->get('pesquisar');
        // dd($pesquisar);
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');
       
        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function delete(Request $request) {
        $id = $request->id;
        $buscaRegistro = Produto::find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarProduto(Request $request) {
        if ($request->method == "POST") {
            //cria os dados
        }
        return view('pages.produtos.create');
    }
}
