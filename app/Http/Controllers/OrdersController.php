<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Orders;
use App\Models\User;
use App\Models\Instructor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $orders;
    public function __construct()
    {
        $this->orders = new Orders;
    }
    public function index()
    {
        //
        $orders = Orders::all();

        return view("orders.index", compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $course = Course::all();
        $user = User::all();
        $instructor = Instructor::all();
        return view("orders.create", compact('course',  'user', 'instructor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'course_id' => 'required',
            'users_id' => 'required',
            'instructor_id' => 'required',
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong',
        ];

        $this->validate($request, $rules, $messages);

        $this->orders->course_id = $request->course_id;
        $this->orders->users_id = $request->users_id;
        $this->orders->instructor_id = $request->instructor_id;
        $this->orders->save();

        // With sweet alert
        Alert::success('SUCCESSFUL', 'Data Berhasil Ditambahkan!');
        return redirect()->route('orders');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $orders = Orders::findOrFail($id);
        $users = User::all();
        $instructor = Instructor::all();
        $course = Course::all();

        return view('orders.edit', compact('orders', 'users', 'course', 'instructor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $update = Orders::findOrFail($id);

        $update->orders = $request->course_id;
        $update->users_id = $request->users_id;
        $update->instructor_id = $request->instructor_id;

        if ($update->isDirty()) {
            // Validate the request data
            $this->validate($request, [
                'course_id' => 'required',
                'users_id' => 'required',
                'instructor_id' => 'required',
            ]);

            $this->orders->course_id = $request->course_id;
            $this->orders->users_id = $request->users_id;
            $this->orders->instructor_id = $request->instructor_id;

            // Save the Mahasantri instance
            $this->orders->save();

            // Redirect to the 'mahasantri' route after successful storage
            return redirect()->route('orders');
        } else {
            echo "tidak ada perubahan";
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $orders = Orders::findOrFail($id);

        $orders->delete(); // fungsi menghapus data
        return redirect()->route("orders"); // redirect hlaman ketika fungsi berhasil di jalankan
    }
}
