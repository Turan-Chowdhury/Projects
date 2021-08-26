<?php

namespace App\Http\Controllers;

use App\Blog;
use Image;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog(){
        return view('front-end.blog.blog');
    }
    public function showAddBlog(){
        return view('admin.blog.add-blog');
    }
    public function showManageBlog(){
        $blogs = Blog::all();
        return view('admin.blog.manage-blog',[
            'blogs'=>$blogs
            ]);
    }
    protected function uploadBlogImage($request){
        $blogImage = $request->file('blog_image');
        $imageType = $blogImage->getClientOriginalExtension();
        $imageName = $request->blog_title.'.'.$imageType;
        $directory = 'admin/blog-images/';
        $imageUrl = $directory.$imageName;
        Image::make($blogImage)->save($imageUrl);
        return $imageUrl;

    }
    public function saveBlog(Request $request){
        $imageUrl = $this->uploadBlogImage($request);
        $blog = new Blog();
        $blog->blog_title= $request->blog_title;
        $blog->writer_name = $request->writer_name;
        $blog->publication_status = $request->publication_status;
        $blog->blog = $request->blog;
        $blog->blog_image = $imageUrl;
        $blog->save();
        return redirect('/blog/add')->with('message','Blog save successfully');
    }
    public function publisheBlog($id){
        $blog = Blog::find($id);
        $blog->publication_status=1;
        $blog->save();
        return redirect('/blog/manage')->with('message','Blog Published successfully!!');

    }
    public function unpublishBlog($id){
        $blog = Blog::find($id);
        $blog->publication_status=0;
        $blog->save();
        return redirect('/blog/manage')->with('message','Blog Unpublished successfully!!');

    }
    public function showEditBlog($id){

        $blog = Blog::find($id);
        return view('admin.blog.edit-blog',[
            'blog'=>$blog
        ]);
    }
    public function deleteBlog($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog/manage')->with('message','Blog deleted successfully!!');

    }
    public function updateBlog($request,$blog,$imageUrl=null){

        $blog->blog_title= $request->blog_title;
        $blog->writer_name = $request->writer_name;
        $blog->publication_status = $request->publication_status;
        $blog->blog = $request->blog;
        if($imageUrl)
        {
            $blog->blog_image = $imageUrl;
        }
        $blog->save();
    }
    public function updateBlogInfo(Request $request){

        $blog = Blog::find($request->room_id);
        $roomImage= $request->file('blog_image');

        if($roomImage)
        {
            unlink($blog->blog_image);
            $imageUrl = $this->uploadBlogImage($request);
            $this->updateBlog($request,$blog,$imageUrl);
        }
        else{
            $this->updateBlog($request,$blog);
        }
        return redirect('/room/manage')->with('message','Room updated successfully!!');
    }

}
