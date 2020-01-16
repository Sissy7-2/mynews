@extends('layouts.profilefront')

@section('content')
 <!--<div class="container">-->
 <!--    <hr color="#c0c0c0">-->
 <!--    @if (!is_null($headline))-->
 <!--      <div class="row">-->
 <!--        <div class="headline col-md-10 mx-auto">-->
 <!--          <div class="row">-->
 <!--            <div class="col-md-6">-->
 <!--             <div class="caption mx-auto">-->
 <!--              <div class="image">-->
 <!--               @if ($headline->image_path)-->
 <!--                <img src="{{ asset('storage/image/' . $headline->image_path) }}">-->
 <!--                @endif-->
 <!--             </div>-->
 <!--             <div class="title p-2">-->
 <!--               <h1>{{ str_limit($headline->title, 70) }}</h1>-->
 <!--             </div>-->
 <!--             </div>-->
 <!--             </div>-->
 <!--             <div class="col-md-6">-->
 <!--               <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>-->
 <!--             </div>-->
 <!--             </div>-->
 <!--             </div>-->
 <!--             </div>-->
 <!--             @endif-->
             <div class="container">
              <hr color="#c0c0c0">
              <div class="row">
               <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                 <div class="post">
                  <div class="row">
                   <div class="text col-md-12 mx-auto mt-3">
                    <div class="date">
                     {{ $post->updated_at->format('Y年m月d日') }}
                    </div>
                    <table class="table table-dark">
                     <thead>
                         <tr>
                             <th width="10%">ID</th>
                             <th width="20%">名前</th>
                             <th width="20%">性別</th>
                             <th width="40%">趣味</th>
                             <th width="40%">自己紹介欄</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($posts as $profile)
                         <tr>
                             <!--<th>{{ $profile->id }}</th>-->
                             <td>{{ \Str::limit($profile->id, 20) }}</td>
                             <td>{{ \Str::limit($profile->name, 40) }}</td>
                             <td>{{ \Str::limit($profile->gender, 20) }}</td>
                             <td>{{ \Str::limit($profile->hobby, 60) }}</td>
                             <td>{{ \Str::limit($profile->introduction, 100) }}</td>
                             <!--<td>-->
                             <!--</td>-->
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
                   </div>
                 </div>
                 <hr color="#c0c0c0">
                @endforeach
           </div>
       </div>
    </div>
 </div>
@endsection
              