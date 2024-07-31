<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerApplicant;
use App\Models\Lead;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Redirect;
use PDF;
use Mail;

class ContactController extends Controller
{
    public function contactForm(Request $request)
    {
        $messages = [
            'name' => 'Name is Required ',
            'email' => 'Email is Required ',
            'phone' => 'Mobile No. is Required ',
            'formName' => 'Form Name is required',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'formName' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()], 401);
        }
            $contact = new Lead;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->fullNumber ? $request->fullNumber : $request->phone;
            $contact->form_name = $request->formName;
            $contact->message = $request->message;
            $contact->submit_date = date('Y-m-d H:i:s');
            $contact->page_url = url()->previous();

            $contact->save();
            $data = "{
                'name: ' . $contact->name .',
                'email:' . $contact->email.',
                'phone: ' .$contact->phone.',
                'message: ' .$contact->message.',
                'page_url':' . $contact->page_url.',
                'form_name: ' .$contact->form_name.',
                'submit_date: ' .$contact->submit_date.'
            }";
           
            if ($contact->save()  ) {
                $msg = 'Thank you for Contacting Us. A member from our team will ring you shortly.';
               
            } else {
                $msg = "Something Went Wrong, Please Try Again";
            }
                return redirect()->route('thank-you')->with(['msg' => $msg]);

        die;
    }
    public function careerForm(Request $request)
    {

        $messages = [
            'name' => 'Name is Required ',
            'email' => 'Email is Required ',
            'phone' => 'Mobile No. is Required ',
            'cvFile' => 'Please upload CV',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:60',
            'email' => 'required|email|max:60',
            'phone' => 'required|numeric',
            'cvFile' => 'required|mimes:doc,docx,pdf',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()], 401);
        }
       
            $career = new CareerApplicant;


            $career->name = $request->name;
            $career->email = $request->email;
            $career->contact_number = $request->full_number ? $request->full_number : $request->phone;
            $career->cover_letter = $request->cover_letter;

            if ($request->hasFile('cvFile')) {
                $img =  $request->file('cvFile');
                $imgExt = $img->getClientOriginalExtension();
                $imageName =  Str::slug($request->name) . '.' . $imgExt;
                $career->addMedia($img)->usingFileName($imageName)->toMediaCollection('CVS', 'careerFiles');
            }

            $career->submit_date = date('Y-m-d H:i:s');
            $career->page_url = url()->previous();
            $career->save();

            $details = [
                'position' => $career->career ? $career->career->position : 'General',
                'name' => $career->name,
                'email' => $career->email,
                'phone' => $career->contact_number,
                'coverletter' => $request->cover_letter,
                'cv' => $career->cv,
                'form_name' => 'Career Form',
                'submit_date' => $career->submit_date,
                'page_url' => $career->page_url,
            ];
           
            if ($career->save()) {
                $msg = 'Thank you for showing interest to work with Timeless Properties, and we wish you the best of luck in your job search.';
            } else {
                $msg = "Something Went Wrong, Please Try Again";
            }
            return redirect()->route('thank-you')->with(['message' => $msg]);
        
   
        die;
    }
    public function bookViewForm(Request $request)
    {

        $messages = [
            'name' => 'Name is Required ',
            'email' => 'Email is Required ',
            'phone' => 'Mobile No. is Required ',
            'ths_time' => 'Please Choose a time',
            'ths_date' => 'Please Choose a date',
            'formFrom' => 'Form Name is required',
        ];
        $validator = Validator::make($request->all(), [
            'formFrom' => 'required',
            'ths_date' => 'required',
            'ths_time' => 'required',
            'name' => 'required|min:3|max:60',
            'email' => 'required|email|max:60',
            'phone' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()], 401);
        }
       
            $contact = new Lead;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->fullNumber ? $request->fullNumber : $request->phone;
            
            $contact->form_name = $request->formFrom;
            $contact->booking_time = $request->ths_time;
            $contact->booking_date = $request->ths_date;
            $contact->submit_date = date('Y-m-d H:i:s');
            $contact->page_url = url()->previous();

            $contact->save();
            $data = [
                'name' => $contact->name,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'message' => $contact->message,
                'page_url' => $contact->page_url,
                'form_name' => $contact->form_name
            ];

            if ($contact->save()) {
                $msg = 'Thank you for Booking With Us. A member from our team will ring you shortly.';
            } else {
                $msg = "Something Went Wrong, Please Try Again";
            }
            return redirect()->route('thank-you')->with(['message' => $msg]);
       
        die;
    }
    public function listingForm(Request $request)
    {
        $messages = [
            'purpose' => 'Purpose is Required ',
            'fname' => 'First Name is Required ',
            'email' => 'Email is Required ',
            'phone' => 'Mobile No. is Required ',
            'location' => 'Location is required',
            'property_type' => 'Property Type is required',
        ];
        $validator = Validator::make($request->all(), [
            'fname' => 'required|min:3|max:60',
            'email' => 'required|email|max:60',
            'phone' => 'required|numeric',
            'purpose' => 'required',
            'location' => 'required',
            'property_type' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()], 401);
        }
            $contact = new Lead;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->full_number ? $request->full_number : $request->phone;
            $contact->form_name = 'List Your Property Form';
            $contact->message = $request->message;
            $contact->detail = 'Location: '.$request->location.'</br> Property Type: '.$request->property_type.'</br> Price: '.$request->price.'</br> Area: '.$request->area.'</br> Beds: '.$request->beds.'</br> Baths: '.$request->baths;
            $contact->submit_date = date('Y-m-d H:i:s');
            $contact->page_url = url()->previous();

            $contact->save();
            $data = [
                'name' => $contact->name,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'message' => $contact->message,
                'detail' => $contact->detail,
                'page_url' => $contact->page_url,
                'submit_date' => $contact->submit_date,
                'form_name' => $contact->form_name
            ];
            if ($contact->save()) {
                $msg = 'Thank you for Contacting Us. A member from our team will ring you shortly.';
            } else {
                $msg = "Something Went Wrong, Please Try Again";
            }
            return redirect()->route('thank-you')->with(['message' => $msg]);
       
        die;
    }
}
