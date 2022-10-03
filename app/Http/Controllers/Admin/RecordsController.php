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
            'Reference Number'=>'integer|required',
            'Date'=>'date|required',
            'Name'=>'string|required',
            'City'=>'string|required',
            'Province'=>'string|required',
            'Name of Deceased'=>'string|required',
            'Nationality'=>'string|required',
            'Age'=>'numeric|min:1|max:150',
            'Sex'=>'string|required',
            'Date of Death'=>'date|required',
            'Cause of Death'=>'string|required',
            'Name of Cemetery'=>'string|required',
            'Infectious/Non-Infectious'=>'string|required',
            'Body Embalmed/Not Embalmned'=>'string|required',
            'Disposition of Remains'=>'string|required',
            'Amount'=>'integer|required',
            'Collecting Officer'=>'string|required'
        ]);
        $query = DB::table('records')->insert([

            'Reference Number'=>$request->input('refNum'),
            'Date'=>$request->input('date'),
            'Name'=>$request->input('payer'),
            'City'=>$request->input('city'),
            'Province'=>$request->input('prov'),
            'Name of Deceased'=>$request->input('nameOfdead'),
            'Nationality'=>$request->input('nat'),
            'Age'=>$request->input('age'),
            'Sex'=>$request->input('sex'),
            'Dateof Death'=>$request->input('dateofdeath'),
            'Cause of Death'=>$request->input('causeofdeath'),
            'Name of Cemetery'=>$request->input('nameofcemetery'),
            'Infectious/Non-Infectious'=>$request->input('infect'),
            'Body Embalmed/Not Embalmned'=>$request->input('embalm'),
            'Disposition of Remains'=>$request->input('disposition'),
            'Amount'=>$request->input('Amount'),
            'Collecting Officer'=>$request->input('colOfficer'),
            // 'created_at'=>  \Carbon\Carbon::now(), # new \Datetime()
            // 'updated_at' => \Carbon\Carbon::now(),  # new \Datetime()
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
