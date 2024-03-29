<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyModel;
use App\Models\CompanyDetailModel;
use App\Models\User;
use App\Models\Team;
use App\Models\CompanyTeam;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class Company extends Controller
{
    public function page1(){
        return view('pages.company.page1',[ 
            'temperature'=>($this->weather()['main']['temp'] ?? '')
        ]);
    }
    public function handleCompany(Request $request, User $user, CompanyModel $model){
    
        $rules=[
            'CompanyName'=>'required',
            'CompanyWeb'=>'required',
            'Location'=>'required|not_in:0',
            'Logo'=>'required|image|mimes:png,jpg',
            'Wallpaper'=>'required|image|mimes:png,jpg',
            'Gallery'=>'required|image|mimes:png,jpg',
            'Definition'=>'required',
            'LongDefinition'=>'required',
            'Website'=>'required',
            'Linkedin'=>'required',
            'Twitter'=>'required',
            'Facebook'=>"required"
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            dd($validator->errors());
        } 

        if($request->file('Logo') && $request->file('Wallpaper') && $request->file('Gallery') != null){
            $user=User::find(auth()->user()->id);
              $pp=$request->file('Logo')->store('postZurag','public');
              $dd=$request->file('Wallpaper')->store('postZurag','public');
              $ss=$request->file('Gallery')->store('postZurag','public');
              $model->CompanyName=$request->get('CompanyName');
              $model->CompanyWeb=$request->get('CompanyWeb');
              $model->Location=$request->get('Location');
              $model->Logo=$pp;
              $model->Wallpaper=$dd;
              $model->Gallery=$ss;
              $model->Definition=$request->get('Definition');
              $model->LongDefinition=$request->get('LongDefinition');
              $model->Website=$request->get('Website');
              $model->Linkedin=$request->get('Linkedin');
              $model->Twitter=$request->get('Twitter');
              $model->Facebook=$request->get('Facebook');
              $user->bridgeToCompany()->save($model);
          }
          return redirect('/company')->with('companyform2','companyform2');
    }


    public function page2(){
        return redirect('/company')->with('companyform2','companyform2');
    }
    public function handleSecondCompany(Request $request, User $user, CompanyDetailModel $model){
        $request->validate([
            'firstSector'=>'required|not_in:0',
            'secondSector'=>'required|not_in:0',
            'vertical'=>'required',
            'startup'=>'required',
        ]);
        $user=User::find(auth()->user()->id);
        $model->Begin_time=$request->get('firstSector');
        $model->End_Time=$request->get('secondSector');
        $model->Vertical=$request->get('vertical');
        ($request->get('menu1') || $request->get('menu2') != null) ? $model->Donate=true : $model->Donate=false;
        $model->StartUp=$request->get('startup');
        ($request->get('choose1') != null) ? $model->S1=true : $model->S1=false;
        ($request->get('choose2') != null) ? $model->S2=true : $model->S2=false;
        ($request->get('choose3') != null) ? $model->S3=true : $model->S3=false;
        $user->bridgeToCompanyDetail()->save($model);

        return redirect('/company')->with('companyform3','companyform3');
    }

    public function page3(User $user){
        $user = User::find(auth()->user()->id);
        return redirect('/company')->with([
            'companyform3'=>true,
            'name'=>$user->bridgeToProfile->fullName ?? '',
            'img'=>$user->bridgeToProfile->Image ?? '',
            'role'=>$user->bridgeToProfile->headLine ?? '',
            'team'=>User::all() ?? '',
        ]);
    }
    public function handleThirdCompany(Request $request){
           return response()->json(['status'=>$request->data]);

    }
    public function addTeam(Request $request, User $user, Team $team){
        $user=User::where('name',$request->team_member)->first();
        $team=Team::where('user_id',auth()->user()->id)->first();
        if($user && $team){
            $user->bridgeToTeam()->attach($team);
        }
        return response()->json(['msg'=>'Success']);
    }

    public function page4(){
        return view('pages.company.page4',[ 
            'temperature'=>($this->weather()['main']['temp'] ?? '')
        ]
    );
    }
    public function retriveCompany(){
        return view('pages.company.CompanyProfile',[ 
            'temperature'=>($this->weather()['main']['temp'] ?? '')
        ]);
    }
}
