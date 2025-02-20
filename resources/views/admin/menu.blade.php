<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li class="user-pro"> <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{\App\Libs\AppContainer::get('public_path')}}/admin/assets/images/users/1.jpg"
                                                                                                                       alt="user-img"
                                                                                                                       class="img-circle"><span
                    class="hide-menu">{{$user['username']}}</span></a>

        </li>
        <li><a class="waves-effect waves-dark" href="{{route('admin.dashboard.index')}}" aria-expanded="false"><i
                    class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
        </li>
        @foreach($menus['menus'] as $menu)
            <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">{{$menu}}</span></a>
                <ul aria-expanded="false" class="collapse">
                    @if($menus['endpoints'][$menu])
                        @foreach($menus['endpoints'][$menu] as $endpoint)
                            @php
                                if($menu===$endpoint){
                                    $link = \Illuminate\Support\Str::camel($menu);
                                }
                                else{
                                     $link = \Illuminate\Support\Str::camel($menu.'_'.$endpoint);
                                }

                            @endphp
                            <li><a href="{{\App\Libs\AppContainer::get('adminUrl')}}/pages/{{$link}}?range=desc">{{$endpoint}}</a>
                            </li>
                        @endforeach

                    @endif
                </ul>
            </li>
        @endforeach

    </ul>
</nav>
