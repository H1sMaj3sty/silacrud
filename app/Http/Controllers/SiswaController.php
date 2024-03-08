<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Inventory;
use App\Models\Pengguna;
use App\Models\Siswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SiswaController extends Controller
{
    // Siswa
    public function index()
    {
        // Index Siswa
        $siswa = Siswa::latest()->paginate(5);
        return view('welcome', ['data' => $siswa]);
        // return response()->json($siswa,200,[],JSON_PRETTY_PRINT);
    }

    public function index_user()
    {
        // Index Siswa
        $siswa = Siswa::latest()->paginate(5);
        return view('users-dashboard', ['data' => $siswa]);
        // return response()->json($siswa,200,[],JSON_PRETTY_PRINT);
    }

    public function upload(): View
    {
        // Get HTML form Siswa to post new data
        return view('upload');
    }

    public function create(Request $request): RedirectResponse
    {
        // Post the new Siswa data
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'class' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'age' => 'required|numeric'
        ]);

        Siswa::create([
            'name' => $request->name,
            'class' => $request->class,
            'address' => $request->address,
            'age' => $request->age,
        ]);

        return redirect()->route('index')->with('success', 'Data succesfully added');
    }

    public function show(string $id): View
    {
        // Show details of Siswa data
        $siswa = Siswa::findOrFail($id);
        return view('details', ['datad' => $siswa]);
    }

    public function edit(string $id)
    {
        // Get old Siswa data and HTML form
        $siswa = Siswa::findOrFail($id);
        return response()->json(['datae' => $siswa]);
    }

    public function change(Request $request): RedirectResponse
    {
        // Post the edited Siswa data
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'class' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'age' => 'required|numeric',
        ]);

        $siswa = $request->input('id');
        $data = Siswa::findOrFail($siswa);
        $data->update([
            'name' => $request->name,
            'class' => $request->class,
            'address' => $request->address,
            'age' => $request->age,
        ]);

        return redirect()->route('index')->with('success', 'Data succesfully changed');
    }

    public function delete(string $id): RedirectResponse
    {
        // Delete Siswa data
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('index')->with('success', 'Data succesfully deleted');
    }
    // - Siswa


    // Mobil
    public function invent()
    {
        // Index Mobil
        $data = Inventory::all();
        return view('cars.inventory', ['datas' => $data]);
        // return response()->json($data,200,[],JSON_PRETTY_PRINT);
    }

    public function upload_mobil()
    {
        // Get HTML form and Siswa data for the owner
        $siswa = Siswa::all();
        return view('cars.upload', ['data' => $siswa]);
    }

    public function create_mobil(Request $request)
    {
        // Post the new Mobil data
        $this->validate($request, [
            'brand' => 'required|string',
            'year' => 'required|string',
            'owner' => 'required|numeric'
        ]);

        Inventory::create([
            'brand' => $request->brand,
            'year' => $request->year,
            'user_id' => $request->owner
        ]);

        return redirect()->route('invent')->with('success', 'car succesuflly added');
    }

    public function edit_mobil(string $id)
    {
        // Get old Mobil data
        $mobil = Inventory::findOrFail($id);
        $siswa = Siswa::all();
        return view('cars.edit', ['datae' => $mobil, 'datad' => $siswa]);
    }

    public function change_mobil(Request $request)
    {
        // Post edited Mobil data
        $this->validate($request, [
            'brand' => 'required|string',
            'year' => 'required|string',
            'owner' => 'required|numeric'
        ]);

        $mobil = $request->input('id');
        $data = Inventory::findOrFail($mobil);
        $data->update([
            'brand' => $request->brand,
            'year' => $request->year,
            'user_id' => $request->owner
        ]);

        return redirect()->route('invent')->with('success', 'car successfully changed');
    }

    public function delete_mobil(string $id)
    {
        // Delete Mobil data
        $mobil = Inventory::findOrFail($id);
        $mobil->delete();

        return redirect()->route('invent')->with('success', 'car succesfully deleted');
    }

    // - Mobil

    // HP
    public function index_hp()
    {
        // Index HP
        $hp = Handphone::all();
        return view('hp.inventory', ['datas' => $hp]);
    }

    public function upload_hp()
    {
        // Get HTML form
        $siswa = Siswa::all();
        return view('hp.upload', ['data' => $siswa]);
    }

    public function create_hp(Request $request)
    {
        // Post new HP data
        $this->validate($request, [
            'brand' => 'required|string',
            'series' => 'required|string',
            'owner' => 'required|numeric'
        ]);

        $isItExist = Handphone::where('user_id', $request->owner)->first();
        if ($isItExist) {
            return redirect()->route('index')->with('failed', 'owner already have hp');
        }

        Handphone::create([
            'brand' => $request->brand,
            'series' => $request->series,
            'user_id' => $request->owner
        ]);

        return redirect()->route('index')->with('success', 'hp succesuflly added');
    }

    public function edit_hp(string $id)
    {
        // Get old HP data and HTML form
        $hp = Handphone::findOrFail($id);
        $owner = Siswa::all();
        // return view('hp.edit', ['datae' => $hp, 'datad' => $owner]);
        return response()->json(['datae' => $hp, 'datad' => $owner]);
    }

    public function change_hp(Request $request)
    {
        // Post the new edited HP data
        $this->validate($request, [
            'brand' => 'required|string',
            'series' => 'required|string',
            'owner' => 'required|numeric'
        ]);

        $hp = $request->input('id');
        $data = Handphone::findOrFail($hp);
        $data->update([
            'brand' => $request->brand,
            'series' => $request->series,
            'user_id' => $request->owner
        ]);

        $datab = Handphone::with('siswa')->get();

        return response()->json(['success' => true, 'message' => 'data successfully aded', 'data' => $datab]);
    }

    public function delete_hp(string $id)
    {
        $hp = Handphone::findOrFail($id);
        $hp->delete();

        return redirect()->route('inventhp')->with('success', 'hp successfully deleted');
    }

    // - HP

    // Add User
    public function add_user()
    {
        return view('user.create');
    }

    public function store_user(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'status' => 'required|in:admin,user'
        ]);

        $password = bcrypt($request->password);

        Pengguna::create([
            'name' => $request->name,
            'password' => $password,
            'status' => $request->status,
        ]);

        return redirect()->route('index')->with('success', 'user succesuflly added');
    }
    // - Add User

    // Download
    public function download_siswa()
    {
        $data = Siswa::with(['handphone', 'inventory'])->get();

        $jsonData = $data->toJson(JSON_PRETTY_PRINT);

        $filename = 'data.txt';
        Storage::disk('local')->put($filename, $jsonData);

        return Storage::download($filename);
    }
    // - Download
}
