<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hackathon;
use App\Idea;


class WebsiteController extends Controller
{
    public function hackathon()
    {
        return view('web.hackathon');
    }

    public function meetup()
    {
        # code...
    }

    public function register(Request $request)
    {
        $messages = [
            'name.required' => 'Please tell us your name!',
            'email.required' => 'We need to know your e-mail address!',
            'email.unique' => 'It seems you have registered for this event already!',
            'jobtitle.required' => 'We need to know your job title!',
            'phone.required' => 'We love to call you on your, we need your phone number!',
            'organisation.required' => 'We need to know your organisation!',
        ];

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:hackathon|email',
            'phone' => 'required',
            'jobtitle' => 'required',
            'organisation' => 'required'
        ], $messages);

        $hackathon = new Hackathon;

        $hackathon->name = $request->name;
        $hackathon->email = $request->email;
        $hackathon->phone = $request->phone;
        $hackathon->jobtitle = $request->jobtitle;
        $hackathon->organisation = $request->organisation;

        $hackathon->save();

        // var_export($request->all());

        return view('web.registered', compact('hackathon'))->with(['message'=>'We have recieved your registration']);
        
    }

    public function submitIdea(Request $request)
    {
        $messages = [
            'title.required' => 'Please tell us the title of the idea!',
            'description.required' => 'Describe your idea!'
        ];

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|max:255',
        ], $messages);

        $idea = new Idea;

        $idea->title = $request->title;
        $idea->description = $request->description;

        $idea->save();


        return view('web.idea-success', compact('idea'))->with(['message'=>'We have recieved your ideas.']);
        
    }
}
