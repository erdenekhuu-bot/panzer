<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\ProfileModel;
use App\Models\SkillModels;
use App\Models\EmailModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Team;
use Illuminate\Support\Facades\Validator;

class Profile extends Controller
{
    public function page1(){
        return view('pages.profile.page1',[
            'temperature'=>$this->weather()['main']['temp'] ?? '',
        ]);
    }
    

    public function handleProfile(Request $request, User $umodel)
    {
        $rules = [
            'fullName'=>'required',
            'Image'=>'required|image|mimes:png,jpg',
            'headLine'=>'required',
            'dropDown'=>'required|not_in:0',
            'unknown'=>'required',
            'textArea'=>'required',
            'website'=>'required',
            'linkedin'=>'required',
            'twitter'=>'required',
            'facebook'=>'required'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            dd($validator->errors());
        } 
        if($request->file('Image') && $request->dropDown != null ){
            $img=$request->file('Image')->store('profileZurag','public');
            $umodel=User::find(auth()->user()->id);
            if ($umodel->bridgeToProfile()->exists()) {
                $umodel->bridgeToProfile()->update([
                    'fullName' => $request->fullName,
                    'Image' => $img,
                    'headLine' => $request->headLine,
                    'dropDown' => $request->dropDown,
                    'unknown' => $request->unknown,
                    'textArea' => $request->textArea,
                    'website' => $request->website,
                    'linkedin' => $request->linkedin,
                    'twitter'=>$request->twitter,
                    'facebook' => $request->facebook
                ]);
            } else {
                $umodel->bridgeToProfile()->create([
                    'fullName' => $request->fullName,
                    'Image' => $img,
                    'headLine' => $request->headLine,
                    'dropDown' => $request->dropDown,
                    'unknown' => $request->unknown,
                    'textArea' => $request->textArea,
                    'website' => $request->website,
                    'linkedin' => $request->linkedin,
                    'twitter'=>$request->twitter,
                    'facebook' => $request->facebook
                ]);
            }
        }
        return redirect('/profile')->with('form2','profileform2');
    }


    public function page2(){
        return redirect('/profile')->with('form2','profileform2');
    }
    public function handleSecondProfile(Request $request, User $umodel, SkillModels $skill){
        $this->validate($request,[
                'skill'=>'required',
                'role'=>'required',
                'start_month'=>'required|not_in:0',
                'start_year'=>'required|not_in:0|numeric',
                'end_month'=>'required|not_in:0',
                'end_year'=>'required|not_in:0|numeric',
        ]);
        if($request->get('start_month') && $request->get('start_year') && $request->get('end_month') && $request->get('end_year') != null ){
            $umodel=User::find(auth()->user()->id);   
            if($umodel != null){
                $skill->Company=$request->skill;
                $skill->Role=$request->role;
                $skill->start_month=$request->start_month;
                $skill->end_month=$request->end_month;
                $skill->start_year=$request->start_year;
                $skill->end_year=$request->end_year;
                $skill->status=($request->state=='on') ? true : false;
                $umodel->bridgeToSkill()->save($skill);
            }
        }
        return redirect('/profile')->with('form3','profileform3');

    }
    public function page3(){
        return redirect('/profile')->with('form3','profileform3');
    }
    public function handleThirdProfile(Request $request,User $model, EmailModel $email){
        
        $model=User::find(auth()->user()->id);
        $email->news=($request->news == null) ? false : true;
        $email->wnews=($request->wnews == null) ? false : true;
        $email->dnews=($request->dnews == null) ? false : true;
        $email->snews=($request->snews == null) ? false : true;
        $email->mnews=($request->mnews == null) ? false : true;
        $model->bridgeToEmail()->save($email);
         
        return redirect('/final');
    }

    public function viewProfile(User $user){
        $user=User::find(auth()->user()->id);
        return view('pages.profile.UserProfile',[
            'temperature'=>$this->weather()['main']['temp'] ?? '',
            'turshlaga'=>($user) ?? '',
            'img'=>($user->bridgeToProfile->Image) ?? '',
            'name'=>($user->bridgeToProfile->fullName) ?? '',
            'role'=>($user->bridgeToProfile->headLine) ?? '',
            'content'=>($user->bridgeToProfile->textArea) ?? '',
            'blog_head'=>($user) ?? '',
            'size'=>Post::all(),
        ]);
    }
}
