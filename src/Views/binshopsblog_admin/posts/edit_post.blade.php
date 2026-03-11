@extends("binshopsblog_admin::layouts.admin_layout")
@section("content")


    <h5>Admin - Editing post
    <a target='_blank' href='{{$post->url()}}' class='float-right btn btn-primary'>View post</a>
    </h5>
    @if(!empty($post->scheduled_at))
        <p>
            Scheduled in 
            <span class="text-danger">
                {{$post->scheduled_at->diffForHumans()}}
            </span>
        </p>
    @endIf

    <form method='post' action='{{route("binshopsblog.admin.update_post",$post->id)}}'  enctype="multipart/form-data" >

        @csrf
        @method("patch")
        @include("binshopsblog_admin::posts.form", ['post' => $post])

        <input type='submit' class='btn btn-primary' value='Save Changes' >

    </form>

@endsection