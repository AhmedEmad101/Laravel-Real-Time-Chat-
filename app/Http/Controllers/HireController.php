<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HireController extends Controller
{
    public function GetAllHires()
    {
        return Hire::all();
    }
    public function FindHirer($id)
    {
       $query = Hire::where('HirerID',$id)->get();
       return $query;
    }
    public function FindHired($id)
    {
        $query = Hire::where('HiredID',$id)->get();
        return $query;
    }
    public function DeleteAllHires()
    {
       $query = Hire::where('id','>','0')->delete();
       return $query;
    }
    public function DeleteHire($id)
{
    $Hire = Hire::find($id);
    $Hire->delete();
    return response()->json('Hire '.$id.' Deleted');
}
}
