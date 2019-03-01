<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contacts;

class ContactController extends Controller
{

    //validate if is not empty
    public function submit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required',
        'phone' => 'required'
      ]);

      //retrive all data from database
      $data = Contacts::all();

      //check if there is data in the database
      if (count($data) > 0) {
        //search mobile number and email in the database
        $checknumber = DB::table('Contacts')->select('mobile_number')->where('mobile_number',$request->phone)->first();
        $checkemail = DB::table('Contacts')->select('email')->where('email',$request->email)->first();

        //check if mobile number and email exist in the database
        if (!$checknumber ==null || !$checkemail ==null) {
          //Redirect to Contact/home page
          return redirect('/')->with('failed','data already exist ');
        }
        else {
          //inser data into database
          $contact = new Contacts;
          $contact->first_name = $request->name;
          $contact->last_name = $request->surname;
          $contact->email = $request->email;
          $contact->mobile_number = $request->phone;
          $contact->active = 1;
          //Save contact details
          $contact->save();

          //Redirect to ContactsData page
          return redirect('/ContactsData')->with('success','successfully uploaded');
        }

      }
      else {
        //inser data into database
        $contact = new Contacts;
        $contact->first_name = $request->name;
        $contact->last_name = $request->surname;
        $contact->email = $request->email;
        $contact->mobile_number = $request->phone;
        $contact->active = 1;
        //Save contact details
        $contact->save();

        //Redirect to ContactsData page
        return redirect('/ContactsData')->with('success','successfully uploaded ');

      }
}

    public function update(Request $request){

      //validate if is not empty
      $this->validate($request, [
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required',
        'phone' => 'required'
      ]);

      //update data to database
      $id = $request->email;
      $contact = new Contacts;
      DB::table('contacts')->where('email',$id)->update([
        'first_name'=>$request['name'],
        'last_name'=>$request['surname'],
        'mobile_number'=>$request['phone']
      ]);
      //Save updated contact details
      $contact->save();

      //Redirect to ContactsData page
      return redirect('/ContactsData')->with('success','successfully uploaded ');
    }

    public function delete($id){
      $status =0;

  //Delete data in the database
      $contact = new Contacts;
      DB::table('contacts')->where('email',$id)->update([
        'active'=>$status
]);
      //Save changes
      $contact->save();

      //Redirect to ContactsData page
      return redirect('/ContactsData')->with('success','Deleted successfully');
    }

    public function getcontacts(){
//      $ContactsData = Contacts::all();

//retrieve data from database
      $ContactsData = DB::table('Contacts')->select('*')->where('active','1')->get();

      return view('ContactsData')->with('ContactsData',$ContactsData);
    }
}
