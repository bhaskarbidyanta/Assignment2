<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
        <style type="text/css">
            .div_deg{
                text-align: center;
            }
            .title_deg{
                font-size:30px;
                font-weight:bold;
                padding:30px;
            }
            label{
                display:inline-block;
                width:200px;
                font-size:18px;
                font-weight:bold;
            }
            .field_deg{
                padding:25px;
            }
        </style>
        @include('home.homecss');
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header');
         @if(session()->has('message'))
        <div class="alert alert-success text-green-500">
            <button type="button" class="close bg-white"
            data-dismiss="alert" aria-hidden="true" >x</button>
            {{session()->get('message')}}
        </div>
        @endif
      </div>



        <div class="div_deg">

            <h3 class="title_deg">Add Post</h3>
            <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="field_deg">
                    <label>Title</label>
                    <input type="text"name="title">
                </div>
                <div class="field_deg">
                    <label>Description</label>
                    <textarea name="description"></textarea>
                </div>
                <div class="field_deg">
                    <label>Add Image</label>
                    <input type="file"name="image">
                </div>
                <div class="field_deg">

                    <input type="submit" value="Add Post" class="btn btn-primary" style="background-color: black;">

                </div>
            </form>

      </div>

        @include('home.footer')
   </body>
</html>

