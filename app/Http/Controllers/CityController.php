<?php

namespace App\Http\Controllers;
use DB;
use App\Model\City;
use App\Model\Region;
use App\Model\departments;
use App\Model\subdepartments;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    //This function to retrieve data from database to view
   public function get()
   {
      //return the value retrieve from database to view

      /*Im put this code in AppService Provider to let all view in project see this variable to not duplicate*/
     //  $city = City::pluck("city_name_eng","city_id");
        $department=departments::pluck("depart_name_eng","department_id");

      return view('pages.welcome',compact('department'));
   }


    //This function for get region list from database depend on country selected
    public function getRegionList(Request $request)
     {
            $region = Region::where("city_id",'=',$request->city_id)
            ->pluck("region_id","region_name_eng");
            return response()->json($region);
   }

   //This function to give subdepartment list depend on department selected
   public function getSubDepartmentList(Request $request)
   {
    $subdepartment=DB::table("sub_department")
    ->where("department_id",$request->department_id)
    ->pluck('sub_depart_id','subdepart_name_eng');

    return response()->json($subdepartment);
   }

   //Add Adverstisement
   public function getAdvertise()
   {

       $department=departments::pluck("depart_name_eng","department_id");
      return view('pages.add_advertis',compact('department'));
   }


}
