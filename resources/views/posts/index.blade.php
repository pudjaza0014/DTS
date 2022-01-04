 @extends('layouts.app')

 @section('content')
 <div class="container">
     <div class="row my-5">
         <div class="col-md">
             <h2>{{ __('Document Tracking System')}}</h2>

             <a href="{{ route('posts.create') }}" class="btn btn-success"> Create</a>
         </div>
     </div>

     @if ($message = Session::get('success'))

     <div class="alert alert-success">
         {{ $message }}
     </div>

     @endif

    <table class="table table-bordered"> 
    <tr>
        <th>No.</th>
        <th>DocumentID.</th>
        <th>Title.</th>
        <th>firstName.</th>
        <th>lastName.</th> 
        <th width="280px">Action</th>


    </tr>
    </table>


 </div>
 @endsection