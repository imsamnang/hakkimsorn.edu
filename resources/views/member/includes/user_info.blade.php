<div class="my-container text-center">
</div>
<div class="my-container">
  <div class="user-profile">
    <div>
      <a href="#member/edit-profile" class="user-photo" style="background: url('{{ asset('assets/img/default_profile.jpg') }}') no-repeat center; background-size: cover;">
      </a>
      <div class="user-info">
        <div class="name">Hi! <span id="text_name">{{ $user->firstname }}</span>
            <a id="btn-edit-name" class="text " data-toggle="modal" data-target="#popup_change_name" href="#popup_change_name"><span class="icon icon-edit"></span></a>
            <a href="#membership.html" style="position: absolute; right: 15px;" class="btn btn-sm btn-warning btn_yellow_brown">Upgrade To Business Account</a>
        </div>
        <ul class="info list-unstyled">
            <li>
            <b>Username:</b> <span id="username_text">p-{{ $user->phone }}</span>
            <a class="text " data-toggle="modal" data-target="#popup_change_username" href="#popup_change_username"><span class="icon icon-edit"></span> Edit</a>
            </li>
            <li>
            <b>Register Phone:</b> {{ $user->phone }} <span class="icon icon-check"></span>
            <a class="text " data-toggle="modal" data-target="#popup_change_phone" href="#popup_change_phone"><span class="icon icon-edit"></span> Change</a>
            </li>
            <li><b>Account Type:</b> {{ $user->account_type }} <a href="#membership.html">Update</a></li>
            <li>
              <b>Email:</b> 
              @if ($user->email)
                {{$user->email}}
                <span id="email_text"></span>
              <a class="text " data-toggle="modal" data-target="#popup_change_email" href="#popup_change_email">Change Email</a>
              @else
                <span id="email_text"></span>
                <a class="text " data-toggle="modal" data-target="#popup_change_email" href="#popup_change_email">Add Email</a>                                
              @endif                              
            </li>
            <li>
            <b>Connect with Facebook <span class="icon icon-facebook"></span></b>
            <span class="icon icon-delete"></span>
            <a href="http://facebook.com/">Conncet Now</a>
            </li>
            <li class="store_url">
            <b>Store URL:</b> <a id="store_url" class="btn-link" href="#p-70393143">https://www.tinhtoday.com/p-70393143</a>
            </li>
        </ul>
      </div>
    </div>
    <div class="nav-controls">
      <ul class="nav nav-pills nav-fill">
          <li class="nav-item {{ Request::segment(1)=='manage_ads'?'active' :'' }}">
            <a class="nav-link" href="{{ route('member.home') }}">
            <span class="icon icon-folder"></span> My Ads</a>
          </li>
          <li class="nav-item {{ Request::segment(1)=='likes'?'active' :'' }}">
             <a class="nav-link" href="{{ route('likes') }}">
             <span class="icon icon-like"></span> Likes</a>
          </li>
          <li class="nav-item {{ Request::segment(1)=='notifications'?'active' :'' }}">
            <a class="nav-link" href="{{ route('notifications') }}">
            <span class="icon icon-notification"></span> Notification</a>
          </li>
          <li class="nav-item {{ Request::segment(1)=='setting'?'active' :'' }}">
            <a class="nav-link" href="{{ route('setting') }}">
            <span class="icon icon-setting-outline"></span> Setting</a>
          </li>
      </ul>
    </div>
  </div>
</div>
@if (Request::route()->getName() == "member.home")
  @include('member.my_ads')
@endif
@if (Request::route()->getName() == "likes")
  @include('member.my_like')
@endif  
@if (Request::route()->getName() == "notifications")
  @include('member.my_notifications')
@endif  
@if (Request::route()->getName() == "setting")
  @include('member.my_setting')
@endif  