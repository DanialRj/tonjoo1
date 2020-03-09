<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    } 

    public function testOne()
    {
        return view('one', ['title' => 'PartnerIklan.com']);
    } 

    public function testSecond()
    {
        $datas = Crud::paginate('5');

        $data = [
            'title' => 'Tonjoo',
            'datas' => $datas
        ];

        return view('second', $data)->with('no', 1);
    } 

    public function testSecondStore( Request $request )
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
        ]);

        Crud::create($request->all());

        return redirect('test-two')->with('success','Product created successfully.');
    }

    public function testSecondEdit( $id )
    {
        $user = Crud::findOrFail($id);

        return view('edit', ['data' => $user]);
    }

    public function testSecondUpdate(Request $request, $id)
    {

        $user = Crud::findOrFail($id);
        $user->nama = $request->nama;
        $user->umur = $request->umur;

        $user->update();

        return redirect('test-two')->with('success','Product Update successfully.');
    }

    public function testSecondDestroy( Request $request )
    {
        $user = Crud::findOrFail( $request->id )->delete();

        return redirect('test-two')->with('success','Product Delete successfully.');
    }

    public function testThird()
    {
        return view('third', ['title' => 'Tonjoo']);
    } 
}
