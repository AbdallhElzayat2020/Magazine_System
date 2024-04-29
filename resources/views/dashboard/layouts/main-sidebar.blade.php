<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('settings') }}"><i class="icon-speedometer"></i>
                    {{ __('words.dashboard') }}
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-user-follow"></i> ثبت کاربر</a>
                <a class="nav-link" href="#"><i class="icon-people"></i> لیست کاربران</a>
                <a class="nav-link" href="#"><i class="icon-user-following"></i> دسترسی کاربران</a>
            </li>

            <li class="nav-title">
                مدیریت فایل ها
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-docs"></i> لیست فایل ها</a>
            </li>

            <li class="nav-title">
                {{ __('words.settings') }}
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link" href="#"><i class="icon-people"></i> --}}
                <a class="nav-link" href="{{ route('settings') }}"><i class="icon-speedometer"></i>
                    {{ __('words.settings') }}
                </a>
                {{-- </a> --}}
                <a class="nav-link" href="#"><i class="icon-docs"></i> فایل ها</a>
            </li>

        </ul>
    </nav>
</div>
