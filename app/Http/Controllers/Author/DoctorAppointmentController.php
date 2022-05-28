<?php

namespace App\Http\Controllers\author;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Medicine;
use App\Prescription;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as MPDF;
class DoctorAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('author.presception');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // $dompdf = App::make('mpdf.wrapper');
        // $dompdf->loadView('doctor.prescription')->setOptions(['defaultFont' => 'nikosh']);
        // $dompdf->setPaper('A4');
        // //$dompdf->stream();
        // // View PDF on browser instead of download
        // // $pdf->loadview('doctor.prescription')->setOptions(['defaultFont' => 'sans-serif']);
        //  return $dompdf->stream();
         $mpdf = new \Mpdf\Mpdf([
        'default_font' => 'ayar',
        'mode' => 'utf-8',
        'tempDir' => storage_path('temp')
    ]);
    $mpdf->allow_charset_conversion = true;
    $mpdf->autoScriptToLang = true;
    $mpdf->autoLangToFont = true;
    $mpdf->WriteHTML('<h1>অনলাইনে Google ইনপুট সরঞ্জামগুলি ব্যবহার করে দেখুন</h1>       
    ');
    $mpdf->Output();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // dd( $request);
        $presscription = new Prescription();
      
        if($request->type_of_medicine == null){
            Toastr::error('Plaase Add Medecine.','Error');
            return redirect()->back();        
        }
        // if($request->type_of_exam == null){
        //     Toastr::error('Plaase Add Any Note.','Error');
        //     return redirect()->back();        
        // }
        
        // if($request->type_of_exam == null){
        //     $type_of_exam='null';
        // }else{
        //     $type_of_exam=$request->type_of_exam;
        // }
        if($request->chife_complaint == null){
            $chife_complaint='null';
        }else{
            $chife_complaint=$request->chife_complaint;

        }
        if($request->history_type_of_exam == null){
            $history_type_of_exam='null';
        }else{
            $history_type_of_exam=$request->history_type_of_exam;

        }
        if($request->diagnosis_type_of_exam == null){
            $diagnosis_type_of_exam='null';
        }else{
            $diagnosis_type_of_exam=$request->diagnosis_type_of_exam;

        }
        if($request->investigation_type_of_exam == null){
            $investigation_type_of_exam='null';
        }else{
            $investigation_type_of_exam=$request->investigation_type_of_exam;

        }
        
        foreach ($request->type_of_medicine as $key => $dm) {
            //dd($type_of_exam);
            
                $data[] = [
                    'doctor_id'        =>Auth::id(),
                    'user_id'          =>$request->user_id,
                    'appointment_id'   => $request->appointment_id,
                    'name'             => $request->name,
                    'age'              => $request->age,
                    'come_after'       => $request->come_after,
                    'type_of_medicine' => $request->type_of_medicine[$key],
                    'name_of_medicine' => $request->name_of_medicine[$key],
                    'strenth_of_medicine' => $request->strenth_of_medicine[$key],
                    'duration_of_medicine' => $request->duration_of_medicine[$key],
                    'does_of_medicine' => $request->does_of_medicine[$key],
                    'suggestion_of_medicine' => $request->suggestion_of_medicine[$key],
                    //'type_of_exam' => $request->type_of_exam[$key],
                    'chife_complaint' => implode(',', $request->chife_complaint),
                    'history_type_of_exam' => implode(',', $request->history_type_of_exam),
                    'diagnosis_type_of_exam' => implode(',', $request->diagnosis_type_of_exam),
                    'investigation_type_of_exam' => implode(',', $request->investigation_type_of_exam),
                    'created_at' => Carbon::now(),
                ];
            
        }
        $save=Prescription::insert($data);

        // $store = new Prescription();
        // $store->appointment_id = $request->appointment_id;
        // $store->user_id = $request->user_id;
        // $store->doctor_id = Auth::id();
        // $store->name = $request->name;
        // $store->age = $request->age;
        // $store->come_after = $request->come_after;
        // $store->chife_complaint = implode(',', $request->chife_complaint);
        // $store->history_type_of_exam = implode(',', $request->history_type_of_exam);
        // $store->diagnosis_type_of_exam = implode(',', $request->diagnosis_type_of_exam);
        // $store->investigation_type_of_exam = implode(',', $request->investigation_type_of_exam);
        // $store->type_of_medicine = implode(',', $request->type_of_medicine);
        // $store->name_of_medicine = implode(',', $request->name_of_medicine);
        // $store->strenth_of_medicine = implode(',', $request->strenth_of_medicine);
        // $store->duration_of_medicine = implode(',', $request->duration_of_medicine);
        // $store->does_of_medicine = implode(',', $request->does_of_medicine);
        // $store->suggestion_of_medicine = implode(',', $request->suggestion_of_medicine);
        // $store->save();
        if($request->appointment_id){
            $doctor=Appointment::where('id',$request->appointment_id)->update(['status'=>'1']);
        }
        Toastr::success('Prescription Create Successfully','Success');
        return redirect()->route('author.prescription.download');    
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('ok');
        $appointment=Appointment::where('id',$id)->first();
        $medicines=Medicine::all();
        return view('author.appointment_details',compact('appointment','medicines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function downloadList(){
         // dd('ok');
         $user = Auth::user();
         $doctor=Doctor::where('user_id',$user->id)->select('id')->first();
         // dd($doctor);
         $appoinment=Appointment::with('prescription','doctor')->where('status','1')->where('doctor_id',$doctor['id'])->orderBy('id','DESC')->get();
         // dd($appoinment);
        
         return view('author.all_prescription',compact('appoinment'));
    }

    public function edit($id)
    {
        if($id){
             $presscription = Prescription::where('appointment_id',$id)->get();
            $presscription_info = Prescription::where('appointment_id',$id)->first();
            $appointment_id = Appointment::where('id',$presscription_info->appointment_id)->first();
            // $count=count($presscription) ;
      
        }
        //dd($presscription_info);
        $currentDate = $presscription_info->created_at;
        // $currentDate =Carbon::now();

        //    $currentDate = date("l, F j, Y");
        $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
        'May','June','July','August','September','October','November','December','Saturday','Sunday',
        'Monday','Tuesday','Wednesday','Thursday','Friday');
        $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
        'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
        বুধবার','বৃহস্পতিবার','শুক্রবার' 
        );
        // $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
        $convertedDATE = Carbon::createFromFormat('Y-m-d H:i:s', $currentDate)->format('d/m/Y');
        // dd($convertedDATE);
        
        $type_of_medicine=Prescription::where('type_of_medicine','!=','null')->where('appointment_id',$id)->first(['type_of_medicine']);
        $name_of_medicine=Prescription::where('name_of_medicine','!=','null')->where('appointment_id',$id)->first(['name_of_medicine']);
      //  $type_of_exam=Prescription::where('type_of_exam','!=','null')->where('appointment_id',$id)->get(['type_of_exam']);
        $chife_complaintt=Prescription::where('chife_complaint','!=','null')->where('appointment_id',$id)->first(['chife_complaint']);
        $history_type_of_examm=Prescription::where('history_type_of_exam','!=','null')->where('appointment_id',$id)->first(['history_type_of_exam']);
        $diagnosis_type_of_examm=Prescription::where('diagnosis_type_of_exam','!=','null')->where('appointment_id',$id)->first(['diagnosis_type_of_exam']);
        $investigation_type_of_examm=Prescription::where('investigation_type_of_exam','!=','null')->where('appointment_id',$id)->first(['investigation_type_of_exam']);
        $strenth_of_medicine=Prescription::where('strenth_of_medicine','!=','null')->where('appointment_id',$id)->first(['strenth_of_medicine']);
        $duration_of_medicine=Prescription::where('duration_of_medicine','!=','null')->where('appointment_id',$id)->first(['duration_of_medicine']);
        $does_of_medicine=Prescription::where('does_of_medicine','!=','null')->where('appointment_id',$id)->first(['does_of_medicine']);
        $suggestion_of_medicine=Prescription::where('suggestion_of_medicine','!=','null')->where('appointment_id',$id)->first(['suggestion_of_medicine']);
        $chife_complaint=$chife_complaintt!== null ? $chife_complaintt->chife_complaint:'';
        $history_type_of_exam=$history_type_of_examm !== null? $history_type_of_examm->history_type_of_exam:'';
        $diagnosis_type_of_exam=$diagnosis_type_of_examm !== null ? $diagnosis_type_of_examm->diagnosis_type_of_exam:'';
        $investigation_type_of_exam=$investigation_type_of_examm !== null ? $investigation_type_of_examm->investigation_type_of_exam:'';
      

        $doctor_info=Doctor::where('user_id',$presscription_info->doctor_id )->first();
//         $doctor_info=Appointment::where('id',$presscription->id )->first();
    //dd($chife_complaint->chife_complaint);
         // $dompdf = App::make('mpdf.wrapper');
         
         $html='
        <html>
 
        <head>
          <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
        
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>'.$appointment_id ->appointment_id.'</title>
            <style>
        
                @page *{
                    margin-top: 0cm;
                    margin-bottom: 0cm;
                    margin-left: 0cm;
                    margin-right: 0cm;
                }
                @page {
                    margin: 0mm;
                    margin-header: 0mm;
                    margin-footer: 0mm;
                }
        
             
                header {
                    position: fixed;
                    top: -10px;
                    left: 0px;
                    right: 0px;
                    /** Extra personal styles **/
                    background-color: #e9eaec;
                    color: #888;
                    // text-align: center;
                    padding: 0px 20px;
                  
                }
        
                h4 {
               
                    text-align: left;
                    font-size: 13px;
                    text-transform: uppercase;
                    margin: 10 0 0 0;
                    padding: 0;
                    text-decoration: underline;
                }
        
                .page-break {
                    page-break-after: always;
                }
        
                strong {
                    font-weight: normal;
                }
        
                table {
                    border-collapse: collapse;
                    width: 100%;
                }
        
                td,
                th {
                   
                    text-align: left;
                    padding: 8px;
                    
                }
                ul, li {
                    margin-left: 200px;
                }

            </style>
        </head>
        
        <body>
                
            <div style="padding: 30px; padding-bottom: 10px;  background-color: #EAFDFF;">
                <header style="background-color: #EAFDFF;">
                <table>
                <tr>
                    <td>
                    <div style="width: 100%; font-size: 28px; font-weight: 500; margin-top: 15px;  text-transform: uppercase; padding:10px auto; "> '.$doctor_info->name_bn.'<br>
                    <span style="text-align:left !important; font-size: 19px; margin-top: -5px; color: black;" > '.$doctor_info->educational_qualification_bn .'</span><br />
                    <span style="text-align:left !important;font-size: 17px; margin-top: -5px; color: black;" > '.$doctor_info->experience_bn .'</span><br />
                    <span style="font-size: 21px; font-weight: 500; margin-top: -5px; color: #5a26d0;" > '.$doctor_info->specialist_bn.'</span><br />
                        <span style="font-size: 18px;color: #df78bd;">'.$doctor_info->designation_bn.'</span>
                        <span style="font-size: 18px;color: #c6a98b;"><br/>'.$doctor_info->hospital_name_bn.'</span>
                    </div>
                        </td>
                        <td style="text-align: right;"><div style="width: 100%; font-size: 20px; text-transform: uppercase; padding:10px auto;">'.$doctor_info->name.' <br>
                    <span style="text-align:left !important;font-size: 15px; margin-top: -5px; color: black;" > '.$doctor_info->educational_qualification .'</span><br />
                    <span style="text-align:left !important;font-size: 15px; margin-top: -5px; color: black;" > '.$doctor_info->experience .'</span><br />
                    <span style="font-size: 16px; margin-top: -15px; color: #5a26d0; text-transform: capitalize; font-weight: bold" > '.$doctor_info->specialist.'</span><br />
                    <span style="font-size: 16px; color: #df78bd;text-transform: capitalize; ">'.$doctor_info->designation.'</span><br />
                    <span style="font-size: 16px;color: #c6a98b; text-transform: capitalize; ">'.$doctor_info->hospital_name.'</span></div>
                    </td>
                  </tr>
                </table>
        
        
                </header>
 
                
            </div>
        
            <main >
        
        
                <div>
                <table style=" font-size:12px; background-color: #ACE4FF;" width="100%">
                  <tr>
                      <td style="padding:10px 55px; font-size:15px; font-weight: bold" width="240px">Name :   <span style="font-size:15px; font-weight: bold">'.$presscription_info->name.'</span></td>

                      <td style="padding:2px auto;font-size:15px; font-weight: bold" width="150px"> Age :   <span style="font-size:15px;  font-weight: bold">'.$presscription_info->age.' Y </span></td>

                      <td style="padding:2px auto;font-size:15px; font-weight: bold" width="150px"> SL No :   <span style="font-size:15px; font-weight: bold">'.$appointment_id ->appointment_id.'  </span></td>

                      <td style="padding:2px auto;font-size:15px; font-weight: bold; text-align: right; padding-right: 60px" width="200px"> Date :  <span style="font-size:15px; font-weight: bold">'.$convertedDATE.' </span></td>
                  </tr>
                </table>
                <div>


                <table width="100%" >
        
                    <tr>
                        <th width="250px" rowspan="2" style="background-color: #DFF4C9; vertical-align: top; padding: 20px; padding-left: 55px;" >';
                       
                        if($chife_complaint !=null){
                            $html .= '
                                <label>Chife Complaint </label>
                                    <br>
                                <ul>
                                    ';

                                    foreach (explode(',' ,$chife_complaint) as $pres){
                                            $html .= '<li style="font-size:15px; display:block;">'.$pres.'</li>' ;
                                         }
                                   
                                $html .= '
                                </ul>
                                <br>';
                            }
                            
                        

                            if($history_type_of_exam !=null){

                            $html .= '  
                            <label>History </label>
                            <br>
                            <ul >
                            ';


                                foreach (explode(',' , $history_type_of_exam) as $pres){
                                    $html .= '<li style="text-align:center; font-size:15px; padding-left:200px; display:block;"> '.$pres.'</li>' ;
                                    }
                               
                            $html .= '</ul>
                            <br>';
                            
                            }
                            if($diagnosis_type_of_exam !=null){

                                $html .= '
                                <label>Diagnosis </label>
                                    <br>
                                <ul >
                                    ';

                                    foreach (explode(',' , $diagnosis_type_of_exam) as $pres){

                                        $html .= '<li style="text-align:center; font-size:15px; padding-left:200px; display:block;"> '.$pres.'</li>' ;
                                        }
                                   

                                    $html .= '</ul>
                                    <br>';

                                }
                                if($investigation_type_of_exam !=null){

                                $html .= '
    
                                <label>Investigation </label>
                                <br>
                                <ul >
                                ';
                                foreach (explode(',' , $investigation_type_of_exam)  as $pres){

                                    $html .= '<li style="text-align:center; font-size:15px; padding-left:200px; display:block;"> '.$pres.'</li>' ;
                                    }
                                
                                $html .= '
                                </ul>
                                <br>';
                            }


                            $html .= '
                        </th>
                        <th height="700px" style="background-color: #EAFDFF; vertical-align: top;">

                        <ul>
                       ';
                       $html .= '<div><i style="margin-top: 40px;"><br/>Rx</i></div>';
                       foreach ($presscription as $key => $pres){
                        
                           $html .= '<br><span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; &nbsp;&nbsp;'.($key + 1 ).'.</span>' ;
                           $html .= '<span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; &nbsp;&nbsp;'.$pres->type_of_medicine.',</span>' ;
                           $html .= '<span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; '.$pres->name_of_medicine.'</span>' ;
                           $html .= '<span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; '.$pres->strenth_of_medicine.'</span><br>' ;
                           $html .= '<span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;'.$pres->duration_of_medicine.'</span>' ;
                           $html .= '<span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; '.$pres->suggestion_of_medicine.'</span>' ;
                           if($pres->does_of_medicine !== null) {
                               $html .= '<span style=" width:10px; text-align:center; font-size:15px; marging-left:200px; display:block;"> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;'.$pres->does_of_medicine.' </span>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;' ;
                           }
                        }
                      $html .= '
                      </ul>
                        </th>

                       
                    
                    </tr>
                    <tr>
                        <th style="background-color: #f1d7c0; font-size:16px; color: #5e13f0; text-align: center;">
                        '.$presscription_info->come_after.' দিন পর আসবেন।
                        </th>
                    </tr>
           
                </table>
                
               


                <table width="100%">
        
                  <tr>
                      <th colspan="2" style="background-color: #E5F0F2; width: 100%;">
                        <h5 style="font-size:30px; color: #6815f1;"> &nbsp;&nbsp;&nbsp;
                        চেম্বার
                        </h5>

                        <table>
                            <tr>
                                <td style="padding: 3px 0 0 30px">
                                    <p style="text-align:center; font-size:16px;">'.$doctor_info->chember_bn.'</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 3px 0 0 30px">
                                    <p style="text-align:center; font-size:16px;">Mobile :'.$doctor_info->phone.'</p>
                                </td>
                            </tr>
                        </table>
                      </th>

                  
                  </tr>
               
         
              </table>
           
        
        
            </main>
        
        </body>
        
        </html>
        '; 


        $mpdf = new \Mpdf\Mpdf([
         'default_font' => 'ayar',
         'mode' => 'utf-8',
         'tempDir' => storage_path('temp')
     ]);
     $mpdf->allow_charset_conversion = true;
     $mpdf->autoScriptToLang = true;
     $mpdf->autoLangToFont = true;
     $mpdf->WriteHTML($html);
     $mpdf->Output();
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
}