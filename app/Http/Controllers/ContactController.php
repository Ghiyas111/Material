<?php
<<<<<<< HEAD
=======
// app/Http/Controllers/ContactController.php
>>>>>>> 6258cd1d5fda567045a8fd0fc706ce9cd9224216

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
<<<<<<< HEAD
    //
=======
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Lakukan sesuatu dengan data (misalnya, simpan ke database)
        // Di sini kita hanya menampilkan pesan sebagai contoh
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Lakukan sesuatu dengan data (misalnya, simpan ke database)
        // Di sini kita hanya menampilkan pesan sebagai contoh
        // Anda dapat menyesuaikan ini sesuai kebutuhan aplikasi Anda
        // Misalnya, menyimpan data ke dalam tabel kontak di database
        // atau mengirim email pemberitahuan ke admin
        // Contoh menyimpan ke database:
        // Contact::create(['name' => $name, 'email' => $email, 'message' => $message]);

        // Tampilkan pesan sukses dan redirect ke halaman formulir kontak
        return redirect('/contact')->with('success', 'Formulir kontak berhasil dikirim!');
    }
>>>>>>> 6258cd1d5fda567045a8fd0fc706ce9cd9224216
}
