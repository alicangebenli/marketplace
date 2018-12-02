<?php

namespace App\Http\Controllers\Admin;
use stdClass;
use App\Bank;
use App\Http\Requests\BankFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BankController extends Controller
{
    protected $data;
    public function __construct()
    {
        $this->data = new stdClass();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->data->title = "Bankalar";
        $this->data->banks = Bank::all();
        return view('admin/bank/index')->with('data',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->data->title = "Yeni Hesap Oluştur";
        $this->data->banks = Bank::all();
        return view('admin/bank/create')->with('data',$this->data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BankFormRequest $request)
    {
        //
//        $validator = \Validator::make($request->all(), [
//            'name'=>'required',
//            'iban'=>'required',
//            'account_name'=>'required',
//            'account_number'=>'required'
//        ]);
//        if ($validator->fails())
//        {
//            return response()->json(['errors'=>$validator->errors()->all()]);
//        }
//        return response()->json(['success'=>'Başaralı bir şekilde eklendi!']);
        Bank::create($request->all());
        redirect()->route('admin.bank.create');
        //return \Response::json(['success'=>'Başaralı']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $this->data->title = "Kategori Düzenle";
        $this->data->bank = Bank::find($id)->get()->first();
        return view('admin/bank/edit')->with('data',$this->data);
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
        Bank::find($id)->update($request->all());
        redirect()->route('admin.bank.create');
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
        $result = Bank::find($id)->delete();
        if($result){
            echo "ok";
        }else{
            echo "no";
        }
    }
}
