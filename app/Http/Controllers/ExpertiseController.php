<?php
namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    public function index()
    {
        $psychologists = Psychologist::all();
        return view('admin.psychologists.index', compact('psychologists'));
    }

    public function edit(Psychologist $psychologist)
    {
        return view('admin.psychologists.edit', compact('psychologist'));
    }

    public function update(Request $request, Psychologist $psychologist)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        $psychologist->update($validatedData);
        return redirect()->route('psychologists.index')->with('success', 'Psikolog berhasil diperbarui.');
    }

    public function destroy(Psychologist $psychologist)
    {
        $psychologist->delete();
        return redirect()->route('psychologists.index')->with('success', 'Psikolog berhasil dihapus.');
    }
}