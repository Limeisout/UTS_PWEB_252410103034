<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function loginform()
    {
        return view('main.login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $users = config('perpustakaan.users');

        foreach ($users as $user) {
            if ($user['email'] == $email && $user['password'] == $password) {
                session(['user' => $user]);

                return redirect()->route('dashboard');
            }
        }

        return redirect()->route('loginform')->with('error', 'Email atau password salah.');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function pengelolaan(Request $request)
    {
        $semuaBuku = config('perpustakaan.buku', []);

        $search = trim((string) $request->input('search', ''));
        $filter = trim((string) $request->input('filter', ''));

        $kategoriList = collect($semuaBuku)
            ->map(function ($item) {
                return $item['kategori'] ?? $item['penerbit'] ?? null;
            })
            ->filter()
            ->unique()
            ->values()
            ->all();

        $buku = collect($semuaBuku)->filter(function ($item) use ($search, $filter) {
            $judul = (string) ($item['judul'] ?? '');
            $pengarang = (string) ($item['pengarang'] ?? '');
            $kategori = (string) ($item['kategori'] ?? $item['penerbit'] ?? '');
            $penerbit = (string) ($item['penerbit'] ?? '');
            $tahun = (string) ($item['tahun_terbit'] ?? '');
            $stok = (int) ($item['stok'] ?? 0);
            $status = $stok > 0 ? 'tersedia' : 'dipinjam';

            
            if ($filter === 'tersedia' || $filter === 'status:tersedia') {
                if ($stok <= 0) {
                    return false;
                }
            } elseif ($filter === 'dipinjam' || $filter === 'status:dipinjam') {
                if ($stok > 0) {
                    return false;
                }
            } elseif (str_starts_with($filter, 'kategori:')) {
                $katFilter = substr($filter, 9);
                if (strcasecmp($kategori, $katFilter) !== 0) {
                    return false;
                }
            }

            // If search is empty, keep items that matched any direct filter above
            if ($search === '') {
                return true;
            }

            // Search by specific column if selected
            if ($filter === '1' || $filter === 'judul' || $filter === 'nama_buku') {
                return mb_stripos($judul, $search) !== false;
            }

            if ($filter === '2' || $filter === 'pengarang' || $filter === 'penulis') {
                return mb_stripos($pengarang, $search) !== false;
            }

            if ($filter === '3' || $filter === 'kategori') {
                return mb_stripos($kategori, $search) !== false || mb_stripos($penerbit, $search) !== false;
            }

            if ($filter === '4' || $filter === 'tahun' || $filter === 'tahun_terbit') {
                return mb_stripos($tahun, $search) !== false;
            }

            if ($filter === '5' || $filter === 'status') {
                if (mb_stripos('tersedia', $search) !== false && $stok > 0) {
                    return true;
                }
                if (mb_stripos('dipinjam', $search) !== false && $stok <= 0) {
                    return true;
                }

                return mb_stripos($status, $search) !== false;
            }

            // Default: search across all fields
            return mb_stripos($judul, $search) !== false
                || mb_stripos($pengarang, $search) !== false
                || mb_stripos($kategori, $search) !== false
                || mb_stripos($penerbit, $search) !== false
                || mb_stripos($tahun, $search) !== false
                || mb_stripos($status, $search) !== false;
        })->values();

        return view('main.pengelolaan', compact('buku', 'kategoriList', 'search', 'filter'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
        return redirect('/login');
    }
}

