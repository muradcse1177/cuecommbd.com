<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Sessions;
use Hash;
use Auth;
use Redirect;
use Session;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class settingController extends Controller
{
    public function frontPage (Request $request){
        try {
            $companyInfo = DB::table('company_info')->get();
            $companyInfo = json_decode($companyInfo, true);
            $_SESSION['companyInfo'] = $companyInfo;
            $about_us = DB::table('about_us')->get();
            $about_us = json_decode($about_us, true);
            $_SESSION['about_us'] = $about_us;
            $contents = DB::table('contents')->orderBy('id','desc')->get();
            $contents = json_decode($contents, true);
            $_SESSION['contents'] = $contents;
            $employee = DB::table('employee')->orderBy('id','desc')->get();
            $employee = json_decode($employee, true);
            $_SESSION['employee'] = $employee;
            return view('/index');
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function fullGallery(Request $request){
        try{
            $rows =  DB::table('contents')->where('type','Gallery')->orderBy('id','desc')->paginate(12);
            return view('front_layout/gallery_view', ['gallery' => $rows]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function fullEmployee(Request $request){
        try{
            $rows =  DB::table('employee')->orderBy('id','desc')->paginate(12);
            return view('front_layout/employee_view', ['employees' => $rows]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function fullBlog_view(Request $request){
        try{
            $rows =  DB::table('contents')->where('type','Blog')->orderBy('id','desc')->paginate(4);
            return view('front_layout/fullBlog_view', ['blog' => $rows]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }

    public function cvUpload(Request $request){
        try {
            if ($request->submit == 'insert') {
                $pathPhoto = "";
                if ($request->hasFile('photo')) {
                    $targetFolder = 'back_resource/images/upload/';
                    $file = $request->file('photo');
                    $name = time() . '.' . $file->getClientOriginalName();
                    $image['filePath'] = $name;
                    $file->move($targetFolder, $name);
                    $pathPhoto = $targetFolder . $name;
                }
                $pathCv = "";
                if ($request->hasFile('cv')) {
                    $targetFolder = 'back_resource/images/upload/';
                    $file = $request->file('cv');
                    $name = time() . '.' . $file->getClientOriginalName();
                    $image['filePath'] = $name;
                    $file->move($targetFolder, $name);
                    $pathCv = $targetFolder . $name;
                }
                $result = DB::table('cv_store')->insert([
                    'name' => $request->name,
                    'college' => $request->college,
                    'address' => $request->address,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'photo' => $pathPhoto,
                    'cv' => $pathCv,
                    'date' => date("Y-m-d"),
                ]);
                if ($result) {
                    return response()->json(array('successMsg' => 'Congratulation!Your CV is successfully uploded.'));
                } else {
                    return response()->json(array('errorMsg' => 'Sorry!Your CV is not uploded.Please try again.'));
                }

            }

        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function index (Request $request){
        try {
            if(isset($_SESSION["username"])){
                return view('/web_mngt/index');
            }
            else {
                $username = $request->username;
                $username =  htmlspecialchars(stripslashes(trim($username)));
                $password = $request->password;
                $password =htmlspecialchars(stripslashes(($password)));
                $password = md5($password);
                $rows = DB::table('user')
                    ->select('id')
                    ->where([
                        ['username', '=', $username],
                        ['password', '=', $password]
                    ])
                    ->distinct()->get()->count();

                if ($rows == 1) {
                    $rows = DB::table('user')->get();
                    $arr = $rows->toArray();
                    $_SESSION["username"] = $arr[0]->username;
                    $_SESSION["name"] =$arr[0]->name;
                    $_SESSION["email"] = $arr[0]->email;
                    $companyInfo = DB::table('company_info')->get();
                    $companyInfo = json_decode($companyInfo, true);
                    $_SESSION['companyInfo'] = $companyInfo;
                    return view('/web_mngt/index');
                } else {
                    return view('web_mngt/sign-in', ['errorInfo' => 'Username & Password not correct.']);
                }
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function sessionCheck (Request $request){
        try {
            if(isset($_SESSION["username"])){
                return view('web_mngt/index');
            }
            else{
                return view('web_mngt/sign-in', ['errorInfo' => 'Session are not set.Please login again']);
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function insertCompanyInfo(Request $request){
        try {
            $rows = DB::table('company_info')->groupBy('id')->count();
            if ($rows > 0) {
                if ($request->submit == 'update') {
                    $path = "";
                    if ($request->hasFile('logo')) {
                        $targetFolder = 'back_resource/images/upload/';
                        $file = $request->file('logo');
                        $name = time() . '.' . $file->getClientOriginalName();
                        $image['filePath'] = $name;
                        $file->move($targetFolder, $name);
                        $path = '/' . $targetFolder . $name;
                    }
                    if ($path != "") {
                        $result = DB::table('company_info')
                            ->where('id', $request->dbid)
                            ->update([
                                'name' => $request->name,
                                'logo' => $path,
                                'about' => $request->about,
                                'contact1' => $request->contact1,
                                'contact2' => $request->contact2,
                                'address' => $request->address,
                                'email' => $request->email,
                                'opening' => $request->opening,
                                'closing' => $request->closing,
                                'fblink' => $request->fblink,
                                'twitlink' => $request->twitlink,
                                'youLink' => $request->youlink,
                                'instalink' => $request->instalink,
                                'linkedlink' => $request->linkedlink,
                            ]);
                    } else {
                        $result = DB::table('company_info')
                            ->where('id', $request->dbid)
                            ->update([
                                'name' => $request->name,
                                'about' => $request->about,
                                'contact1' => $request->contact1,
                                'contact2' => $request->contact2,
                                'address' => $request->address,
                                'email' => $request->email,
                                'opening' => $request->opening,
                                'closing' => $request->closing,
                                'fblink' => $request->fblink,
                                'twitlink' => $request->twitlink,
                                'youLink' => $request->youlink,
                                'instalink' => $request->instalink,
                                'linkedlink' => $request->linkedlink,
                            ]);
                    }
                    if ($result) {
                        return response()->json(array(
                            'successMsg' => 'Company Information is successfully updated.'
                        ));
                    } else {
                        return response()->json(array('errorMsg' => 'SCompany Information is not updated.Please try again'));
                    }
                } else {
                    return response()->json(array('errorMsg' => 'Company information already exists.If needed please update your information.'));
                }

            } else {
                if ($request->submit == 'insert') {
                    $path = "";
                    if ($request->hasFile('logo')) {
                        $targetFolder = 'back_resource/images/upload/';
                        $file = $request->file('logo');
                        $name = time() . '.' . $file->getClientOriginalName();
                        $image['filePath'] = $name;
                        $file->move($targetFolder, $name);
                        $path = '/' . $targetFolder . $name;
                    }
                    $result = DB::table('company_info')->insert([
                        'name' => $request->name,
                        'logo' => $path,
                        'about' => $request->about,
                        'contact1' => $request->contact1,
                        'contact2' => $request->contact2,
                        'address' => $request->address,
                        'email' => $request->email,
                        'opening' => $request->opening,
                        'closing' => $request->closing,
                        'fblink' => $request->fblink,
                        'twitlink' => $request->twitlink,
                        'youLink' => $request->youlink,
                        'instalink' => $request->instalink,
                        'linkedlink' => $request->linkedlink,
                    ]);
                    if ($result) {
                        return response()->json(array(
                            'successMsg' => 'Congratulation! New Company Details Information  is successfully added.',
                        ));
                    } else {
                        return response()->json(array('errorMsg' => 'Failed to add Company Info name. Please try again.'));
                    }
                }
            }

        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function showCompanyInfo(Request $request){
        try{
            $rows =  DB::table('company_info')->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function insertContentInfo(Request $request){
        try {
            if($request->submit == 'insert'){
                $path = "";
                if ($request->hasFile('file')) {
                    $targetFolder = 'back_resource/images/upload/';
                    $file = $request->file('file');
                    $name = time() . '.' . $file->getClientOriginalName();
                    $image['filePath'] = $name;
                    $file->move($targetFolder, $name);
                    $path = '/' . $targetFolder . $name;
                }
                $result = DB::table('contents')->insert([
                    'type' => $request->type,
                    'file' => $path,
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                    'uploadBy' => 'Murad',
                ]);
                if ($result) {
                    return response()->json(array(
                        'successMsg' => 'Congratulation! New Content is successfully uploded.',
                    ));
                } else {
                    return response()->json(array('errorMsg' => 'Failed to upload Content. Please try again.'));
                }
            }
            if($request->submit == 'update'){
                $path = "";
                if ($request->hasFile('file')) {
                    $targetFolder = 'back_resource/images/upload/';
                    $file = $request->file('file');
                    $name = time() . '.' . $file->getClientOriginalName();
                    $image['filePath'] = $name;
                    $file->move($targetFolder, $name);
                    $path = '/' . $targetFolder . $name;
                }
                if( $path != "" ){
                    $result =DB::table('contents')
                        ->where('id', $request->dbid)
                        ->update([
                            'type' => $request->type,
                            'file' => $path,
                            'name' => $request->name,
                            'description' => $request->description,
                            'status' => $request->status,
                            'uploadBy' => 'Murad',
                        ]);
                }
                else{
                    $result =DB::table('contents')
                        ->where('id', $request->dbid)
                        ->update([
                            'type' => $request->type,
                            'name' => $request->name,
                            'description' => $request->description,
                            'status' => $request->status,
                            'uploadBy' => 'Murad',
                        ]);
                }
                if ($result) {
                    return response()->json(array(
                        'successMsg' => 'Comtent Information is successfully updated.'
                    ));
                } else {
                    return response()->json(array('errorMsg' => 'Comtent Information is not updated.Please try again' ));
                }
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }

    public function showContentInfo(Request $request){
        try{
            $rows =  DB::table('contents')->where('type',$request->type)->where('status','Active')->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function showEmployeeInfo(Request $request){
        try{
            $rows =  DB::table('employee')->where('status','Active')->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function insertEmployeeInfo(Request $request){
        try {
            if($request->submit == 'insert'){
                $path = "";
                if ($request->hasFile('file')) {
                    $targetFolder = 'back_resource/images/upload/';
                    $file = $request->file('file');
                    $name = time() . '.' . $file->getClientOriginalName();
                    $image['filePath'] = $name;
                    $file->move($targetFolder, $name);
                    $path = '/' . $targetFolder . $name;
                }
                $result = DB::table('employee')->insert([
                    'name' => $request->name,
                    'file' => $path,
                    'designation' => $request->designation,
                    'value' => $request->value,
                    'status' => $request->status,
                    'fblink' => $request->fblink,
                    'twitlink' => $request->twitlink,
                    'linkedlink' => $request->linkedlink,
                ]);
                if ($result) {
                    return response()->json(array(
                        'successMsg' => 'Congratulation! New Stuff is successfully uploded.',
                    ));
                } else {
                    return response()->json(array('errorMsg' => 'Failed to upload Stuff. Please try again.'));
                }
            }
            if($request->submit == 'update'){
                $path = "";
                if ($request->hasFile('file')) {
                    $targetFolder = 'back_resource/images/upload/';
                    $file = $request->file('file');
                    $name = time() . '.' . $file->getClientOriginalName();
                    $image['filePath'] = $name;
                    $file->move($targetFolder, $name);
                    $path = '/' . $targetFolder . $name;
                }
                if( $path != "" ){
                    $result =DB::table('employee')
                        ->where('id', $request->dbid)
                        ->update([
                            'name' => $request->name,
                            'file' => $path,
                            'designation' => $request->designation,
                            'value' => $request->value,
                            'status' => $request->status,
                            'fblink' => $request->fblink,
                            'twitlink' => $request->twitlink,
                            'linkedlink' => $request->linkedlink,
                        ]);
                }
                else{
                    $result =DB::table('employee')
                        ->where('id', $request->dbid)
                        ->update([
                            'name' => $request->name,
                            'designation' => $request->designation,
                            'value' => $request->value,
                            'status' => $request->status,
                            'fblink' => $request->fblink,
                            'twitlink' => $request->twitlink,
                            'linkedlink' => $request->linkedlink,
                        ]);
                }
                if ($result) {
                    return response()->json(array(
                        'successMsg' => 'Comtent Information is successfully updated.'
                    ));
                } else {
                    return response()->json(array('errorMsg' => 'Comtent Information is not updated.Please try again' ));
                }
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function insertNewsletter(Request $request){
        try {

            $result = DB::table('newsletter')->insert([
                'email' => $request->email,
            ]);
            if ($result) {
                return response()->json(array(
                    'successMsg' => 'Congratulation! We send our work via mail.',
                ));
            } else {
                return response()->json(array('errorMsg' => 'Failed to Subscribe. Please try again.'));
            }

        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }


    }
    public function showNewsLetter(Request $request){
        try{
            $rows =  DB::table('newsletter')->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function insertContactUs(Request $request){
        try {

            $result = DB::table('contact_us')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'comment' => $request->comment,
            ]);
            if ($result) {
                return response()->json(array(
                    'successMsg' => 'Congratulation! We Got It',
                ));
            } else {
                return response()->json(array('errorMsg' => 'Failed to send. Please try again.'));
            }

        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function showContactUs(Request $request){
        try{
            $rows =  DB::table('contact_us')->orderBy('id','desc')->limit(30)->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function insertAboutUs(Request $request){
        try {
            $rows = DB::table('about_us')->groupBy('id')->count();
            if ($rows>0) {
                if($request->submit == 'update'){
                    $result =DB::table('about_us')
                        ->where('id', $request->dbid)
                        ->update([
                            'heading' => $request->heading,
                            'about' => $request->about,
                        ]);
                    if ($result) {
                        return response()->json(array(
                            'successMsg' => 'About Information is successfully updated.'
                        ));
                    } else {
                        return response()->json(array('errorMsg' => 'About Information is not updated.Please try again' ));
                    }
                }
                else{
                    return response()->json(array('errorMsg' => 'About information already exists.If needed please update your information.'));
                }
            }
            else {
                if($request->submit == 'insert'){
                    $result = DB::table('about_us')->insert([
                        'heading' => $request->heading,
                        'about' => $request->about,
                    ]);
                    if ($result) {
                        return response()->json(array(
                            'successMsg' => 'Congratulation! New Company About Information  is successfully added.',
                        ));
                    } else {
                        return response()->json(array('errorMsg' => 'Failed to add Company About. Please try again.'));
                    }
                }
            }

        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function showAboutUs(Request $request){
        try{
            $rows =  DB::table('about_us')->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function showuserInfo(Request $request){
        try{
            $rows =  DB::table('user')->get();
            return response()->json(array('data'=>$rows));
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function adduser(Request $request){
        try {

            if($request->submit == 'insert'){
                $password = $request->password;
                $password = htmlspecialchars(stripslashes(($password)));
                $password = md5($password);
                $result = DB::table('user')->insert([
                    'email' => $request->email,
                    'username' => $request->username,
                    'password' => $password,
                    'name' => $request->name,
                ]);
                if ($result) {
                    return response()->json(array(
                        'successMsg' => 'Congratulation! New User  is successfully added.',
                    ));
                } else {
                    return response()->json(array('errorMsg' => 'Failed to add User. Please try again.'));
                }
            }
            if($request->submit == 'delete'){
                $result =  DB::table('user')
                    ->where('id',$request->dbid)
                    ->delete();
                if ($result) {
                    return response()->json(array(
                        'successMsg' => 'Congratulation!User is successfully Deleted.',
                    ));
                } else {
                    return response()->json(array('errorMsg' => 'Failed to delete User. Please try again.'));
                }
            }
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function cvBank(Request $request){
        try{
            $rows =  DB::table('cv_store')->orderBy('id','desc')->get();
            return view('web_mngt/cvBankForm', ['cvlist' => $rows]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
    public function downloadPdf(Request $request){
        try{
            $file= $request->download;
            return Response::download($file, 'cv.pdf');
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(array('errorMsg' => $ex->getMessage() ));
        }

    }
}