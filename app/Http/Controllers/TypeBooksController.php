<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TypeBooks; //นําเอาโมเดล TypeBooks เข้ามาใช้งาน

class TypeBooksController extends Controller
{
    public function index()
    {
        //$typebooks = TypeBooks::all();
        //$typebooks = TypeBooks::orderBy('id', 'desc')->get();
        $count = TypeBooks::count(); //นบัจํานวนแถวทงัหมด

        //แบ่งหน้า
        //$typebooks = TypeBooks::simplePaginate(5);

        $typebooks = TypeBooks::paginate(5);
        return view('typebooks.index', [
            'typebooks' => $typebooks,
            'count' => $count]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php
    }

    public function destroy($id)
    {
        //TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
        return back();
    }

}
