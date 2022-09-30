<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportRecords;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Record::paginate(5);
        return view('admin.records',['records'=>$data]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
         return view('admin.addRecord');
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        //Record::create($request->all()); -- shortcut of getting the data
        

        $request->validate([
            'refNum'=>'integer|required',
            'date'=>'date|required',
            'payer'=>'string|required',
            'city'=>'string|required',
            'prov'=>'string|required',
            'nameOfdead'=>'string|required',
            'nat'=>'string|required',
            'age'=>'numeric|min:1|max:150',
            'sex'=>'string|required',
            'dateofdeath'=>'date|required',
            'causeofdeath'=>'string|required',
            'nameofcemetery'=>'string|required',
            'infect'=>'string|required',
            'embalm'=>'string|required',
            'disposition'=>'string|required',
            'amt'=>'integer|required',
            'colOfficer'=>'string|required'
        ]);
        $query = DB::table('records')->insert([

            'refNum'=>$request->input('refNum'),
            'date'=>$request->input('date'),
            'payer'=>$request->input('payer'),
            'city'=>$request->input('city'),
            'prov'=>$request->input('prov'),
            'nameOfdead'=>$request->input('nameOfdead'),
            'nat'=>$request->input('nat'),
            'age'=>$request->input('age'),
            'sex'=>$request->input('sex'),
            'dateofdeath'=>$request->input('dateofdeath'),
            'causeofdeath'=>$request->input('causeofdeath'),
            'nameofcemetery'=>$request->input('nameofcemetery'),
            'infect'=>$request->input('infect'),
            'embalm'=>$request->input('embalm'),
            'disposition'=>$request->input('disposition'),
            'amt'=>$request->input('amt'),
            'colOfficer'=>$request->input('colOfficer'),
            'created_at'=>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now(),  # new \Datetime()
        ]);
        if($query){
            return redirect()->route('records')->with('success','Record has been successfully added!');
        }else{
            return back()->with('fail','Something is not right');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function exportRecords(Request $request){
        return Excel::download(new ExportRecords, 'Burial Permit Record.xlsx');
    }
}
