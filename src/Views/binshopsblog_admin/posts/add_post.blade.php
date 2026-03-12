@extends("binshopsblog_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Add post</h5>
    
    <form method='post' action='{{route("binshopsblog.admin.store_post")}}'  enctype="multipart/form-data" >

        @csrf
        @include("binshopsblog_admin::posts.form", ['post' => new \BinshopsBlog\Models\BinshopsBlogPost()])

        @if(isset($parent_id))
        <input type="hidden" name="parent_id" value="{{$parent_id}}">
        @endIf

        <input type='submit' class='btn btn-primary' value='Add new post' >

    </form>

@endsection
