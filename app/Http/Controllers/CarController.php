<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Model\Car\CarModel;
use App\Model\Car\Status;
use App\Model\Car\CarTransmission;
use App\Model\Car\Fuel;
use App\Model\Car\CarOption;
use App\Model\Car\car_option_sale;
use App\Model\Car\Car_License;
use App\Model\Car\Car_image;

use App\Http\Requests\StoreCarSale;


class CarController extends Controller
{
    //This function to get carmake and subdepartment for car  typre from database
     public function getVichels(Request $request)
   {
       $carmake=DB::table('car_make')->orderBy('car_make_eng')->pluck("car_make_eng",'car_make_id');

        $subdepartment_vichels=DB::table('sub_department')->where('department_id','=','1')->pluck('subdepart_name_eng');

        //get car status for radiobutton
         $carstatus=Status::pluck('status_eng');
         $carstatusID=Status::pluck('status_id');

         //get car transmission 0 o 1
         $carTransmission=CarTransmission::pluck('trans_eng');

         //$car_option to show value name in select,car_option_id to get id for insert in database
         $car_option=CarOption::get();

         $carLicense=Car_License::pluck('car_lic_eng');
         $carLicense_ID=Car_License::pluck('car_lic_id');
         $carTransID=CarTransmission::pluck('transmission_id');

      return view('pages.vichels',compact('carmake','subdepartment_vichels','carstatus','carTransmission','carLicense','carstatusID','carTransID','carLicense_ID','car_option'));

   }
   //get car model depend on car make selected
   public function getcarmodel(Request $request)
   {

      $carmodel=CarModel::where("car_make_id",'=',$request->car_make_id)->pluck('car_model_id','car_model_eng');
      return response()->json($carmodel);

   }

   //save car sale
   public function save_data_Car_sale(Request $request)
   {


       //add code to submit data car for sale
       $car_make=$request->input('carmake');
       $car_model=$request->input('carmodel');
       $serial_num=$request->input('txt_eng_ser_num');
       $year=$request->input('year');
       $status=$request->input('radio-status');
       $distance=$request->input('distance');
       $Transmission=$request->input('radio-trans');
       $fuel=$request->input('fuel');
       $car_option=array($request->input('car_option'));

       $car_license=$request->input('radio-licen');
       $car_color=$request->input('car_color');
       $payment_method=$request->input('radio-payment');
       $title=$request->input('title');
       $description=$request->input('description');

       $price=$request->input('txtprice');
       $city=$request->input('city');
       $region=$request->input('region');
       $name=$request->input('name');
       $phone=$request->input('phone');
       foreach($car_option as $option_id)
       {

            for ($i=0; $i < count($option_id); $i++)
            {
                $caroption_save=DB::insert('insert into car_option_sale(option_id,Engine_serial_num)values(?,?)',[$option_id[$i],$serial_num]);
            }
       }

      $save_car_sale=DB::insert('insert into car_sale
      (car_make_id,
      car_model_id,
      Engine_serial_number,
      year,
      status_id,
      distance,
      transmission_id,
      fuel_id,
      car_lic_id,
      hexa_value,
      payment_method_id,
      title,
      description,
      price,
      city_id,
      region_id,
      name,
      phone,
      created_at,
      updated_at
      )
      values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$car_make,$car_model,$serial_num,$year,$status,$distance,$Transmission,$fuel,$car_license,$car_color,$payment_method,$title,$description,$price,$city,$region,$name,$phone,date_create(),date_create()]);



    if($images=$request->file('images'))
    {
        //uploading images
        //upload path
        $DestinationPath=public_path('/images/');
        foreach($images as $image)
        {
            for($j=0;$j<count($images);$j++)
            {
                //upload original image
            $profileimage=$image->getClientOriginalName();
            $image->move($DestinationPath,$profileimage);

            //save in Database
            $image_model=new Car_image();
            $image_model->image_name="$profileimage";
            $image_model->Engine_serial_number=$serial_num;
            $image_model->image_path=$DestinationPath;
            $image_model->save();
            }

        }

    }



    return redirect()->back();


   }

   //save data car rent
   public function save_data_Car_Rent()
   {
       return redirect()->back();
   }



}
