<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Configuration;
use App\Models\Appointment;
use DB;





class BookingController extends Controller
{

    public function create(){

        return view('appointments.book_appointment');
    }

    public function appointment_book_success($booking_id, $attendee_name,  $start_date_time, $end_date_time, $appointment_token, $msg){

        return view('appointments.appointment_book_success', compact('booking_id', 'attendee_name', 'start_date_time', 'end_date_time', 'appointment_token', 'msg'));

    }

    public function appointment_book_failure($msg){

        return view('appointments.appointment_book_failure', compact('msg'));

    }


    public function store(Request $request){

        $data = $request->all();
        date_default_timezone_set('Asia/Kolkata');
        $start_date_time = date("Y-m-d H:i:s", time());
        $start_date_time = date("Y-m-d H:i:s",strtotime($start_date_time." +45 minutes"));
        $appointment_date = date("Y-m-d",strtotime($start_date_time));
        $break_start_time = $appointment_date.' 13:00:00';
        $break_end_time = $appointment_date.' 13:59:00';
        $day_start_time = $appointment_date.' 09:00:00';
        $day_end_time = $appointment_date.' 18:59:00';

        if($start_date_time > $break_start_time && $start_date_time < $break_end_time){
            $start_date_time = $appointment_date.' 15:00:00';
        } 
        if($start_date_time < $day_start_time || $start_date_time  > $day_end_time){
            $msg = 'Appointment is not available for the todays date, please try again tomorrow';
            return redirect()->route('appointment_book_failure'
                , array('msg' =>$msg)
            );
        }

        $attendee_details = self::getAttendeeForAppointment($data, $start_date_time, $day_start_time, $day_end_time);
        // dd($day_start_time);
        $attendee_data = Attendee::find($attendee_details['attendee_id']);
        $average_time = $attendee_data['average_time'];
        $end_date_time = date("Y-m-d H:i:s",strtotime($attendee_details['appointment_date_time']." +".$average_time."minutes"));
        
        $current_date =  date("Y-m-d");
        // $start_date_time = "2021-05-15 12:00:00";
        $appointment_token = self::randomToken();
        $already_exists = self::checkIfAlreadyAppointed($data, $day_start_time, $day_end_time);
        if($already_exists){

            // dd($already_exists);
            $msg = 'Appointment is already schedule for today';
            $attendee_data = Attendee::find($already_exists[0]->attendee_id);
            return redirect()->route('appointment_book_success'
                , array('booking_id' =>$already_exists[0]->id, 'attendee_name' => $attendee_data['name'], 'start_date_time' => $already_exists[0]->appointment_start_time, 'end_date_time' => $already_exists[0]->appoitment_end_time, 'appointment_token' => $already_exists[0]->appointment_token, 'msg' => $msg)
            );

        }
        $attendee_id = $attendee_details['attendee_id'];
        $appointment = new Appointment;
        $appointment->attendee_id = $attendee_id;
        $appointment->appointment_start_time = $attendee_details['appointment_date_time'];
        $appointment->appoitment_end_time = $end_date_time;
        $appointment->user_name = $data['name'];
        $appointment->user_mobile = $data['mobile'];
        $appointment->appointment_token = $appointment_token;
        $appointment->save();
        $attendee_name = 'test';

        if($appointment){
            $msg = 'Appointment is booked successfully';
            return redirect()->route('appointment_book_success'
                , array('booking_id' =>$appointment->id, 'attendee_name' => $attendee_name, 'start_date_time' => $start_date_time, 'end_date_time' => $end_date_time, 'appointment_token' => $appointment_token, 'msg' => $msg)
            );

        } else {
            return redirect()->route('appointment_book_failure'
        );
        }
    }

    public function cancel_booking(Request $request){
        $data = $request->all();
        $booking_id = $data['booking_id']; 
        $res = Appointment::where('id', $booking_id)->delete();
        if($res){
            return 'Appointment deleted successfully';
        } else {
            return 'Could not delete appointment';
        }

    }

    public static function randomToken() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

public static function getAttendeeForAppointment($data, $start_date_time, $day_start_time, $day_end_time){
    $start_date = date("Y-m-d",strtotime($start_date_time));
    $todays_appointments = Appointment::where(['user_name' => $data['name'], 'user_mobile' => $data['mobile']])->get();
    // dd($todays_appointments);
    $todays_appointments_for_attendee_one = Appointment::WhereBetween('appointment_start_time', array($day_start_time, $day_end_time))
    ->where('attendee_id', 1)
    ->get();
    $attendee = 1;
    if(count($todays_appointments_for_attendee_one) == 0){
        $attendee = 1;
    }
    $todays_appointments_for_attendee_two = Appointment::WhereBetween('appointment_start_time',array($day_start_time, $day_end_time))
    ->where('attendee_id', 2)
    ->get();
    if(count($todays_appointments_for_attendee_two) == 0){
        $attendee = 2;
    }
    $todays_appointments_for_attendee_three = Appointment::WhereBetween('appointment_start_time',array($day_start_time, $day_end_time))
    ->where('attendee_id', 3)
    ->get();
    if(count($todays_appointments_for_attendee_three) == 0){
        $attendee = 3;
    }
    $appointment_data = [];
    if(count($todays_appointments_for_attendee_one) == 0 || count($todays_appointments_for_attendee_two) == 0 || count($todays_appointments_for_attendee_three) == 0) {
        $appointment_data['appointment_date_time'] = $start_date_time;
        $appointment_data['attendee_id'] = $attendee;
    }

    else {

    //get the attendee which gets free at the first
        $data = self::getTheAvailableAttendee($data, $start_date_time,$day_start_time, $day_end_time);
        // dd($data);
        $appointment_data['appointment_date_time'] = $data['new_start_time'];
        $appointment_data['attendee_id'] = $data['attendee_id'];

    }

    return $appointment_data;

}

public static function getTheAvailableAttendee($data, $start_date_time,$day_start_time, $day_end_time){
    //find the attendee having minimun end time
    $attendees = Attendee::where('id', '!=', NULL)->pluck('id');
    $attendees =  [1,2,3];
    $xyz = [];
    foreach ($attendees as $key => $value) {
       $xyz[$value] = self::getTheMinWaitAsPerAttendee($day_start_time, $day_end_time, $value);
   }
   $min = min($xyz);
   $actual_available = DB::select("select * from appointments where appoitment_end_time = "."'".$min."'");
   $data = [];
   $data['attendee_id'] = $actual_available[0]->attendee_id;
   $data['new_start_time'] = $actual_available[0]->appoitment_end_time;
   return $data;

}
public static function getTheMinWaitAsPerAttendee($day_start_time, $day_end_time, $value){

    $actual_available = DB::select("select * from appointments where attendee_id = ".$value." and appointment_start_time > "."'".$day_start_time."'"." and appointment_start_time < "."'".$day_end_time."'"."order by appoitment_end_time DESC limit 1");
    return $actual_available[0]->appoitment_end_time;

}

public static function checkIfAlreadyAppointed($data, $day_start_time, $day_end_time){

$flag = DB::select("select * from appointments where user_name = "."'".$data['name']."'"." and user_mobile = "."'".$data['mobile']."'"." and appointment_start_time > "."'".$day_start_time."'"." and appointment_start_time < "."'".$day_end_time."'");
// dd($flag);
    return $flag;



}


}
