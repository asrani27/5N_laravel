<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show()
    {
        $data = Mahasiswa::get();
        return view('mahasiswa.show', compact('data'));
    }
    public function add()
    {
    }
    public function save()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
    public function print()
    {
    }
}
