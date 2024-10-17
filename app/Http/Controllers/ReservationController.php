<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    /*************  ✨ Codeium Command 🌟  *************/
    /**
     * Display the landing page view.
     *
     * This method returns the view for the landing page of reservations.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function landingPage()
    {
        return view('reservations.landing-page');
    }
    /******  53794a39-0e5e-4f56-8a5e-3a85feffe435  *******/

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guest_name' => 'required',
            'room_number' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'total_price' => 'required|numeric',
        ]);

        Reservation::create($request->all());
        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }

    public function show($id)
    {
        // Ambil data reservasi berdasarkan id
        $reservation = Reservation::findOrFail($id);

        // Kirim data ke view 'reservations.show'
        return view('reservations.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'room_number' => 'required|integer|min:1|max:10',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after_or_equal:check_in',
            'total_price' => 'required|numeric|min:0',
        ]);

        // Ambil data reservasi berdasarkan id
        $reservation = Reservation::findOrFail($id);

        // Update data reservasi
        $reservation->update([
            'guest_name' => $request->guest_name,
            'room_number' => $request->room_number,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_price' => $request->total_price,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }


    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
}
