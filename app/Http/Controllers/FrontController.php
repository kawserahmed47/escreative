<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Slider;
use App\Service;
use App\Project;
use App\Testimonial;
use App\News;
use App\Faq;
use App\Gallery;

class FrontController extends Controller
{
    public function index(){
        $data = array();
        $data['title']="Home" ;
        $data['menu']= "Home";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
        return view('frontend.pages.index',$data);
    }

    public function about(){
        $data = array();
        $data['title']="About Us" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();    
        return view('frontend.pages.about',$data);

    }

    public function ceoMessage(){
        $data = array();
        $data['title']="CEO Message" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();   
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();     
        return view('frontend.pages.ceoMessage',$data);
    }

    public function contact(){
        $data = array();
        $data['title']="Contact Us" ;
        $data['menu']= "Contact";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get(); 
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
      
        return view('frontend.pages.contact',$data);
    }

    public function services(){
        $data = array();
        $data['title']="Services" ;
        $data['menu']= "Service";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();        
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.services',$data);
    }

    public function serviceDetails(){
        $data = array();
        $data['title']="Service Details" ;
        $data['menu']= "Service";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();       
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.serviceDetails',$data);
    }

    public function quotation(){
        $data = array();
        $data['title']="Quotation" ;
        $data['menu']= "";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();        
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
        return view('frontend.pages.quotation', $data);
    }

    public function faq(){
        $data = array();
        $data['title']="FAQ" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get(); 
        $data['faqs'] = Faq::where('status', 1)->get(); 
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();   
        return view('frontend.pages.faq',$data);
    }

    public function products(){
        $data = array();
        $data['title']="Products" ;
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
        return view('frontend.pages.products',$data);
    }

    public function productDetails(){
        $data = array();
        $data['title']="Products Details" ;
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();


        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.productDetails',$data);
    }

    public function news(){
        $data = array();
        $data['title']="News" ;
        $data['menu']= "News";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.news',$data);
    }

    public function newsDetails(){
        $data = array();
        $data['title']="News Details" ;
        $data['menu']= "News";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        return view('frontend.pages.newsDetails',$data);
    }

    public function gallery(){
        $data = array();
        $data['title']="Gallery" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries1'] =Gallery::where('status',1)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.gallery',$data);
    }
    
    public function team(){
        $data = array();
        $data['title']="Team" ;
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
        return view('frontend.pages.team', $data);
    }

    public function profile(){
        $data = array();
        $data['title']="Profile" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.profile',$data);
    }

    public function mission(){
        $data = array();
        $data['title']="Mission" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.mission',$data);
    }

    public function vision(){
        $data = array();
        $data['title']="Vision" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.vision',$data);
    }

    public function history(){
        $data = array();
        $data['title']="History" ;
        $data['menu']= "About";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.history',$data);
    }

    public function projects(){
        $data = array();
        $data['title']="Projects" ;
        $data['menu']= "Project";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.projects',$data);
    }

    public function projectDetails(){
        $data = array();
        $data['title']="Project Details";
        $data['menu']= "Project";
        $data['about']= About::first();
        $data['active_slider']= Slider::where('status', 2)->first();
        $data['sliders']= Slider::where('status', 1)->get();
        $data['services'] = Service::where('status', 1)->get();
        $data['projects'] = Project::where('status', 1)->get();
        $data['testimonial']=Testimonial::where('status',1)->get();
        $data['news'] = News::where('status',1)->limit(3)->get();
        $data['galleries'] = Gallery::where('status',1)->limit(4)->get();

        return view('frontend.pages.projectDetails',$data);
    }

}
