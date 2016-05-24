<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Customer;
use App\Sign;

class CustomerController extends Controller {

    //
    public function index() {

        return view('welcome');
        // return view('data/employee_list');
    }

    public function detail(Request $request) {

        if ($request->input('customer_id')) {
            $var_customer_id = $request->input('customer_id');
        } else {
            $var_customer_id = $request->session()->get('customer_id');
        }

        //$var_em_id = $request->session()->get('em_id');
        //return $var_em_id;

        $result = Customer::Sel_cus_id($var_customer_id);
        //$result->customer_file = json_decode($result->customer_file['cPic']);
        $imgFile = json_decode($result->customer_file);
        
        //return $imgFile->cPic;
        return view('data/customer_detail')->with('result', $result)->with('cPic',$imgFile->cPic);
    }

    public function customer_list(Request $request) {
        if ($request->session()->has('em_id')) {

            $result = Customer::Sel_cus_list();

            //return $result;
            return view('data/customer_list')->with('result', $result);
        }
    }

    public function reg() {
        return view('data/customer_reg');
    }

    public function insert(Request $request) {
        if ($request->session()->has('em_id')) {

            $filenameP = "";
            if (!empty($request->hasFile('cPic'))) {

                $file = $request->file('cPic');
                $filenameP = $file->getClientOriginalName();
                $file->move(base_path().'/upload/', $filenameP);
                //return base_path().'/upload/
            }
            
              $filenameF = "";
            if (!empty($request->hasFile('cFile'))) {

                foreach ($request->file('cFile') as $file) {
                    $files_name = $file->getClientOriginalName();
                    $file->move(base_path() . '/uploads/', $file->getClientOriginalName());
                    if ($filenameF == "") {
                        $filenameF = $file->getClientOriginalName();
                    } else {
                        $filenameF = $filenameF . "," . $file->getClientOriginalName();
                    }
                }
            }

            $fileArray = array("cPic" => $filenameP,"cFile" => $filenameF);
            $fileIns = json_encode($fileArray);
            
            //return response()->json($request->all());
            $dataArray = array(
                "customer_name" => $request->input('txtcName'),
                "customer_status" => $request->input('txtcStatus'),
                "customer_tax_id" => $request->input('txtcTaxId'),
                "customer_band_id" => $request->input('txtcBandId'),
                "customer_addr_th" => $request->input('txtcAddrTh'),
                "customer_addr_en" => $request->input('txtcAddrEn'),
                "customer_tel" => $request->input('txtcTel'),
                "customer_fax" => $request->input('txtcFax'),
                "customer_web" => $request->input('txtcWeb'),
                "customer_mail" => $request->input('txtcMail'),
                "customer_condition" => $request->input('txtcCondition'),
                "customer_coor_name" => $request->input('txtcCoorName'),
                "customer_coor_tel" => $request->input('txtcCoorTel'),
                "customer_coor_mail" => $request->input('txtcCoorMail'),
                "customer_lat" => $request->input('txtcLat'),
                "customer_long" => $request->input('txtcLong'),
                "customer_note" => $request->input('txtcNote'),
                "customer_level" => $request->input('selcLevel'),
                "customer_file" => $fileIns
            );
            $result = Customer::Ins_cus($dataArray);
            
            $customerId = Customer::Sel_cus_name($request->input('txtcName'));
            $signNameArray = $request->input('txtSingName');
            $ownerArray = $request->input('selowner');
            $countSign = count($signNameArray);

            for ($i = 0; $i < $countSign; $i++) {
                $dataSign = array("sign_name" => $signNameArray[$i],
                    "customer_id" => $customerId,
                    "sign_cate_id" => $ownerArray[$i]);
                $result = Sign::Ins_sing($dataArray);
            }
            
        }
    }
    
    public function update(Resquest $request){
        
        $dataArray = array(
                "customer_name" => $request->input('txtcName'),
                "customer_status" => $request->input('txtcStatus'),
                "customer_tax_id" => $request->input('txtcTaxId'),
                "customer_band_id" => $request->input('txtcBandId'),
                "customer_addr_th" => $request->input('txtcAddrTh'),
                "customer_addr_en" => $request->input('txtcAddrEn'),
                "customer_tel" => $request->input('txtcTel'),
                "customer_fax" => $request->input('txtcFax'),
                "customer_web" => $request->input('txtcWeb'),
                "customer_mail" => $request->input('txtcMail'),
                "customer_condition" => $request->input('txtcCondition'),
                "customer_coor_name" => $request->input('txtcCoorName'),
                "customer_coor_tel" => $request->input('txtcCoorTel'),
                "customer_coor_mail" => $request->input('txtcCoorMail'),
                "customer_lat" => $request->input('txtcLat'),
                "customer_long" => $request->input('txtcLong'),
                "customer_note" => $request->input('txtcNote'),
                "customer_level" => $request->input('selcLevel')
                
            );
        $result = Customer::Update_cus_id($request->input('customer_id'),$dataArray);
        
        
    }


    public function delete(Request $request) {

        $result = Customer::Delete_cus_id($request->input('customer_id'));
    }


}
