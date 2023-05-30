<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $rekordy = User::all();
        return response()->json($rekordy);
    }

    public function create(Request $request): JsonResponse
    {
        $dane = $request->all();
        $nowyRekord = User::create($dane);
        return response()->json($nowyRekord, 201);
    }

    public function read($id): JsonResponse
    {
        $rekord = User::findOrFail($id);
        return response()->json($rekord);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $rekord = User::findOrFail($id);
        $dane = $request->all();
        $rekord->update($dane);
        return response()->json($rekord);
    }

    public function delete($id): JsonResponse
    {
        $rekord = User::findOrFail($id);
        $rekord->delete();
        return response()->json(null, 204);
    }

    public function getPeople($id)
    {
        $user = User::findOrFail($id);
        $people = $user->people;

        return response()->json($people);
    }
}
