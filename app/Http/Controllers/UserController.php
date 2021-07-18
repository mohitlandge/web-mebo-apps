<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleUser;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\Email;
use App\Models\Address;
use App\Models\Contact;
use DB;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;




class UserController extends Controller
{

    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        try{
            // $check = DB::transaction(function () use ($data) {

            if($data['role_id'] == 1){
                //admin
                $users = new Admin;
                $users->first_name = $data['first_name'];
                $users->last_name = $data['last_name'];
                $users->role_id = $data['role_id'];
                $users->password = $data['password_id'];
                $users->email = $data['email_id'];
                $userData = $users->save();
            } else {
                //users
                $users = new User;
                $users->first_name = $data['first_name'];
                $users->last_name = $data['last_name'];
                $users->role_id = $data['role_id'];
                $users->password = $data['password_id'];
                $users->email = $data['email_id'];
                $userData = $users->save();
            }

            $role_user_data = new RoleUser;
            $role_user_data->role_id = $data['role_id'];
            $role_user_data->users_id = $users->id;
            $role_user_data->save();

            $contact_data = new Contact;
            $contact_data->name = $data['contact_id'];
            $contact_data->user_id = $users->id;
            $contact_data->save();


            $address_data = new Address;
            $address_data->name = $data['email_id'];
            $address_data->user_id = $users->id;
            $address_data->save();


            if($data['role_id'] == 1){
                //admin
                $user = Admin::find($users->id);
            } else {
                //users
                $user = User::find($users->id);
            }

            $user->update([
                'contact_id' => $contact_data->id,
                'address_id' => $address_data->id]);

            if($user){
                return redirect()->route('login');
            } else {
             return back()->with('fail', 'something went wrong, try again later');
         }


     } catch (Exception $e) {
        // dd($e);
      //   $data = [
      //     'success' => false,
      //     'message'=> $e->getMessage(),

      // ] ;
      // return back()->with('success', 'New user has been registered into system');
        return back()->with('fail', 'something went wrong, try again later');
    } 
}



public function show($id)
{
        //
}


public function edit($id)
{
        //
}


public function update(Request $request, $id)
{
        //
}


public function destroy($id)
{
        //
}

public function home() {

    return view('home');
}


public function login() {

    return view('login');
}

public function vertifyUser(Request $request){

    $data = $request->all();
    // dd($data);
    $email = $data['email_id'];
    $password = $data['password_id'];
    $user_data = User::where(['email' => $email, 'password' => $password ])->first();
    
    $admin_data = Admin::where(['email' => $email, 'password' => $password ])->first();
    // dd($user_data);
    if($user_data) {
        return view('users.user_landing_page');
    } elseif($admin_data){
        return view('admins.admin_ladning_page');

    } else {
        return back()->with('fail', 'credentials does not matched');
    }



    // $role_id = $request
    // $flag = 

}

public function registration() {
    $roles = Role::all();
    return view('registration', compact('roles'));
}

public function forgot_password() {

    return view('forgot_password');
}

public function retrieve_password(Request $request){

    $data = $request->all();
    // dd($data);
    $email = $data['email_id'];
    // dd($email);

    $user_data = User::where('email', $email)->first();
    // dd($user_data);
    
    $admin_data = Admin::where('email', $email)->first();
    // dd($admin_data);

    if($user_data || $admin_data) {

        // dd('in if');
        $new_pass = self::randomPassword();
        // dd($new_pass);
        if($user_data){
            $update_array = ['password' => $new_pass];
            $res = User::where('email', $email)->update($update_array);

        } else {
            $update_array = ['password' => $new_pass];
            $res = Admin::where('email', $email)->update($update_array);
        }
        // try{
            // self::sendMail($email);
        // dd($email);

        $title="Reset password";
        $message = "This is your new password";
        $message_data = ["message" => $message, "email"=> $email];
        Mail::send('welcome', ['title' => $title, 'message_data' => $message_data], function ($message) use($message_data)
        {
            $message->from('laraveldeveloper10@gmail.com');
            $message->to($message_data['email'])->subject('password reset link');
        });
        // }catch(Exception $e){
        //     return back()->with('fail', 'There is some problem in sending mail');    
        // }
        return back()->with('success', 'Mail sent successfully');

    } else {
        return back()->with('fail', 'There is some problem in sending mail');
    }

    

}

public static function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

public function convertDocToPDF(){

    // Make sure you have `dompdf/dompdf` in your composer dependencies.
    Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
// Any writable directory here. It will be ignored.
    Settings::setPdfRendererPath('.');
    // dd(storage_path());
    $file_path =  storage_path().'/test_file.docx';
    $final_path = storage_path().'/document.pdf';

    $phpWord = IOFactory::load($file_path, 'Word2007');
    $phpWord->save($final_path, 'PDF');
}

}
