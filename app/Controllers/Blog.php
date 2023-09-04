<?php
namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data =[
            'meta_title'=> 'Codeignitor 4 blog',
            'title'=> 'This is a Blog Page'
        ];

        $posts = ['Title 1','Title 2','Title 3'];
        $data['posts']= $posts;

        
        return view('blog',$data);
        
    }

    public function post()
    {
        $data =[
            'meta_title'=> 'Codeignitor 4 Post Page',
            'title'=> 'This is an Awesome Blog'
        ];
        
        return view('single_post',$data);
    
    }


    public function new(){
        $data =[
            'meta_title'=> 'New Post',
            'title'=> 'Create a new post'
        ];

        return view('new_post',$data);
    
    }

}
