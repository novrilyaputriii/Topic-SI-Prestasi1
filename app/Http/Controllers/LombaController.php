<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LombaController extends Controller
{

    // Route Admin
    public function lomba()
    {
        $lomba = Lomba::all();
        return view('admin.lomba', compact(['lomba']));
    }

    public function admin_create_lomba(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'nisn' => 'required',
            'Kelas' => 'required',
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Data gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

        $sertifikat = $request->file('sertifikat');
        $sertifikat->storeAs('public/sertifikat', $sertifikat->hashName());

        // $namafile = time() . '_' . $request->name . '_' . $request->sertifikat->getClientOriginalName();
        // $request->sertifikat->move('sertifikat/', $namafile);

        Lomba::create([
            'user_id' => Auth::user()->username,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'Kelas' => $request->Kelas,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
            // 'sertifikat' => 'sertifikat/' . $namafile,
            'sertifikat'     => $sertifikat->hashName(),
        ]);
        return redirect()->route('lomba')->with('sukses', 'Lomba Berhasil Didaftarkan');;
    }

    public function admin_update_lomba(Request $request, $id)
    {
        $lomba = Lomba::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|mimes:jpg,jpeg,png,pdf',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Data gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

        // Hanya jika ada file sertifikat baru yang diunggah
        if ($request->hasFile('sertifikat')) {
            // Ambil File Kemudian Hapus
            $file = $lomba->sertifikat;
            // Impor Illuminate\Support\Facades\File
            File::delete($file);
            //

            $perubahan = $request->sertifikat;

            $namafile = time() . '_' . $request->name . '_' . $perubahan->getClientOriginalName();
            $perubahan->move('sertifikat/', $namafile);

            // Update path sertifikat di database
            $lomba->sertifikat = 'sertifikat/' . $namafile;
        }

        $lomba->user_id = Auth::user()->username;
        $lomba->name = $request->name;
        $lomba->npm = $request->npm;
        $lomba->jurusan = $request->jurusan;
        $lomba->lomba = $request->lomba;
        $lomba->penyelenggara = $request->penyelenggara;
        $lomba->tingkat = $request->tingkat;
        $lomba->tanggal = $request->date;

        if ($lomba->save()) {
            return redirect()->route('lomba')->with('sukses', 'Data Berhasil Diedit');
        } else {
            return redirect()->route('lomba')->with('gagal', 'Gagal Mengedit Data');
        }
    }


    public function admin_delete_lomba($id)
    {
        $lomba = Lomba::find($id);

        $kejuaraan = null;

        if (Prestasi::where('lomba', $lomba['lomba'])
            ->where('name', $lomba['name'])->first() != null
        ) {
            $kejuaraan = Prestasi::where('lomba', $lomba['lomba'])->where('name', $lomba['name'])->first();

            $kejuaraan->delete();
        }

        File::delete($lomba->sertifikat);
        $lomba->delete();
        return redirect()->route('lomba')->with('sukses', 'Data Berhasil Dihapus');
    }
    // End Route Admin


    //Route Mahasiswa
    public function user_create_lomba(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|mimes:jpg,jpeg,png,pdf',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Data gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

        $namafile = time() . '_' . Auth::user()->name . '_' . $request->sertifikat->getClientOriginalName();
        $request->sertifikat->move('sertifikat/', $namafile);

        Lomba::create([
            'user_id' => Auth::user()->username,
            'name' => Auth::user()->name,
            'npm' => Auth::user()->username,
            'jurusan' => Auth::user()->jurusan,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
            'sertifikat' => 'sertifikat/' . $namafile,
        ]);
        return redirect()->route('user_lomba')->with('sukses', 'Lomba Berhasil Didaftarkan');;
    }

    public function user_update_lomba(Request $request, $id)
    {
        // Menggunakan ID lomba untuk mengidentifikasi record yang akan diperbarui
        $lomba = Lomba::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat' => 'mimes:jpg,jpeg,png,pdf', // Menghapus karakter | yang tidak diperlukan
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Data gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

        // Inisialisasi variabel $namafile di luar blok kondisi
        $namafile = null;

        // Hanya jika ada file sertifikat baru yang diunggah
        if ($request->hasFile('sertifikat')) {
            // Ambil File Kemudian Hapus
            $file = $lomba->sertifikat;
            // Impor Illuminate\Support\Facades\File
            File::delete(public_path($file));

            $perubahan = $request->file('sertifikat');

            $namafile = time() . '_' . Auth::user()->name . '_' . $perubahan->getClientOriginalName();
            $perubahan->move('sertifikat/', $namafile);
        }

        $cek = [
            'user_id' => Auth::user()->username,
            'name' => Auth::user()->name,
            'npm' => Auth::user()->username,
            'jurusan' => Auth::user()->jurusan,
            'lomba' => $request->input('lomba'),
            'penyelenggara' => $request->input('penyelenggara'),
            'tingkat' => $request->input('tingkat'),
            'tanggal' => $request->input('date'),
            'sertifikat' => $namafile ? 'sertifikat/' . $namafile : $lomba->sertifikat,
        ];

        // Menggunakan metode update untuk mengupdate data
        if ($lomba->update($cek)) {
            return redirect()->route('user_lomba')->with('sukses', 'Data Berhasil Diedit');
        } else {
            return back()->with('failed', 'Data gagal diedit. Silakan coba lagi.');
        }
    }


    public function user_delete_lomba($id)
    {
        $lomba = Lomba::find($id);
        File::delete($lomba->sertifikat);
        $lomba->delete();
        return redirect()->route('user_lomba')->with('sukses', 'Data Berhasil Dihapus');
    }
    //End Route Mahasiswa

}
