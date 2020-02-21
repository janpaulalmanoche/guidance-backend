<?php

namespace App\Http\Controllers;

use App\Father;
use App\Mother;
use App\PersonalInformation;
use App\PersonalInformationIncaseOfEmergency;
use App\PersonalInformationWhereDoYouStay;
use App\StudentEconomicStatus;
use App\StudentFamilyVehicle;
use App\StudentLiveAtPresent;
use App\StudentParentStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RecordController extends Controller
{
    //

    public function store(Request $request){

        $new = new PersonalInformation;
        $new->user_id = $request->user_id;
        $new->birth_date = $request->birthday;
        $new->place_of_birth = $request->place_of_birth;
        $new->birth_order = $request->birth_order;
        $new->no_of_sibling = $request->number_of_siblings;
        $new->religion = $request->religion;
        $new->tribal_group = $request->tribal;
        $new->contact_no = $request->number;
        $new->provincial_address = $request->provincial_address;
        $new->current_city_address = $request->current_city_address;
        $new->save();
        //wher do you stay
        $new_w = new PersonalInformationWhereDoYouStay;
        $new_w->place_staying_in_gensan_id = $request->place;
        $new_w->contact_number = $request->landlord_number;
        $new_w->landlord_name = $request->landlord;
        $new_w->user_id = $request->user_id;
        $new_w->save();

        //perosnal information contact in case of emergency
        $new_e = new PersonalInformationIncaseOfEmergency;
        $new_e->user_id = $request->user_id;
        $new_e->person_to_be_contacted_emergency = $request->person_to_be_contacted_emergency;
        $new_e->relationship = $request->relationship_person_to_be_contacted_emergency;
        $new_e->contact_no = $request->relationship_person_to_be_contacted_emergency_no;
        $new_e->address = $request->complete_address;
        $new_e->save();

        //fathers info
        $father = new Father;
        $father->user_id = $request->user_id;
        $father->first_name = $request->f_first_name;
        $father->middle_name = $request->f_middle_name;
        $father->last_name = $request->f_last_name;
        $father->current_address = $request->f_current_address;
        $father->permanent_address = $request->f_permanent_address;
        $father->religion = $request->f_religious_affiliation;
        $father->contact_no = $request->f_contact_no;
        $father->email_address = $request->f_email_address;
        $father->highest_educational_attainment = $request->f_highes_education_attainment;
        $father->office_address = $request->f_office_address;
        $father->position = $request->f_position;
        $father->save();
        //mother info
        $mother = new Mother();
        $mother->user_id = $request->user_id;
        $mother->first_name = $request->m_first_name;
        $mother->middle_name = $request->m_middle_name;
        $mother->last_name = $request->m_last_name;
        $mother->current_address = $request->m_current_address;
        $mother->permanent_address = $request->m_permanent_address;
        $mother->religion = $request->m_religious_affiliation;
        $mother->contact_no = $request->m_contact_no;
        $mother->email_address = $request->m_email_address;
        $mother->highest_educational_attainment = $request->m_highes_education_attainment;
        $mother->office_address = $request->m_office_address;
        $mother->position = $request->m_position;
        $mother->save();

        //parent status, or parent maritues status
        $parent_status = new StudentParentStatus;
        $parent_status->parent_marital_statuse_id = $request->marital_status_id;
        $parent_status->user_id = $request->user_id;
        $parent_status->save();
        //place where the student is living for now
        $student_live_at_present = new StudentLiveAtPresent;
        $student_live_at_present->live_at_present_id = $request->live_at_present_id;
        $student_live_at_present->user_id = $request->user_id;
        $student_live_at_present->save();

            //socio economic status
        $economic_status = new StudentEconomicStatus;
        $economic_status->socio_economic_status_id = $request->economic_status_id;
        $economic_status->user_id = $request->user_id;
        $economic_status->save();

        //vehicle ownded by the stuednt family
        $vehicle = new StudentFamilyVehicle;
        $vehicle->user_id = $request->user_id;
        $vehicle->vehicle_id = $request->vehicle_id;
        $vehicle->save();

        return response()->json([
            'first' => $new,
            'second' => $new_w,
            'third' => $new_e,
            'father' => $father,
            'mother' => $mother,
            'parent_status' => $parent_status,
            'student live at present' =>  $student_live_at_present,
            'economic status' => $economic_status,
            'vehicle owned' => $vehicle
        ]);

    }

    public function student_record($student_id){

        $user = User::find($student_id);
        $personal_info = PersonalInformation::where('user_id',$student_id)->first();
        $perosnal_info_where_you_stay =PersonalInformationWhereDoYouStay::with('place')->where('user_id',$student_id)->first();
        $personal_info_incase_emergency = PersonalInformationIncaseOfEmergency::where('user_id',$student_id)->first();
        $father = Father::where('user_id',$student_id)->first();
        $mother = Mother::where('user_id',$student_id)->first();
        $student_parent_status = StudentParentStatus::with('marital_status')->where('user_id',$student_id)->first();
        $economic_status = StudentEconomicStatus::with('economic')->where('user_id',$student_id)->first();
        $vehicle = StudentFamilyVehicle::with('vehicle')->where('user_id',$student_id)->first();

        return response()->json([
           'user' => $user,
           'personal_info' => $personal_info,
           'personal_where_do_stay' => $perosnal_info_where_you_stay,
           'personal_incase_emergency' => $personal_info_incase_emergency,
           'father' => $father,
           'mother' => $mother,
           'parent_status'=> $student_parent_status,
           'economic' => $economic_status,
            'vehicle' => $vehicle
        ]);



    }


}
