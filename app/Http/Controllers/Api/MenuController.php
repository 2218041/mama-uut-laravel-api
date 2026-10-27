<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    /**
     * GET /api/menu
     * Menampilkan semua menu.
     */
    public function index(): JsonResponse
    {
        $menus = Menu::query()
            ->orderBy('id_menu', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar menu berhasil diambil.',
            'total' => $menus->count(),
            'data' => $menus,
        ]);
    }

    /**
     * GET /api/menu/{id}
     * Menampilkan detail satu menu.
     */
    public function show(int $id): JsonResponse
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json([
                'success' => false,
                'message' => 'Menu tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail menu berhasil diambil.',
            'data' => $menu,
        ]);
    }

    /**
     * POST /api/menu
     * Menambahkan menu baru.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nama_menu' => ['required', 'string', 'max:100'],
            'kategori' => ['required', Rule::in(['Makanan', 'Minuman'])],
            'deskripsi' => ['nullable', 'string'],
            'harga' => ['required', 'numeric', 'min:0'],
            'stok' => ['required', 'integer', 'min:0'],
            'foto' => ['nullable', 'string', 'max:255'],
            'status' => ['required', Rule::in(['Tersedia', 'Habis'])],
        ]);

        $menu = Menu::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Menu berhasil ditambahkan.',
            'data' => $menu,
        ], 201);
    }

    /**
     * PUT /api/menu/{id}
     * Mengubah menu yang sudah ada.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json([
                'success' => false,
                'message' => 'Menu tidak ditemukan.',
            ], 404);
        }

        $validated = $request->validate([
            'nama_menu' => ['sometimes', 'required', 'string', 'max:100'],
            'kategori' => ['sometimes', 'required', Rule::in(['Makanan', 'Minuman'])],
            'deskripsi' => ['sometimes', 'nullable', 'string'],
            'harga' => ['sometimes', 'required', 'numeric', 'min:0'],
            'stok' => ['sometimes', 'required', 'integer', 'min:0'],
            'foto' => ['sometimes', 'nullable', 'string', 'max:255'],
            'status' => ['sometimes', 'required', Rule::in(['Tersedia', 'Habis'])],
        ]);

        $menu->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Menu berhasil diperbarui.',
            'data' => $menu->fresh(),
        ]);
    }

    /**
     * DELETE /api/menu/{id}
     * Menghapus menu.
     */
    public function destroy(int $id): JsonResponse
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json([
                'success' => false,
                'message' => 'Menu tidak ditemukan.',
            ], 404);
        }

        $menu->delete();

        return response()->json([
            'success' => true,
            'message' => 'Menu berhasil dihapus.',
        ]);
    }
}