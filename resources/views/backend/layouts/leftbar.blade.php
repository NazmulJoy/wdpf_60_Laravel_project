<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li>
            <a  class="active" href="/admin/dashboard" ><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"></i></span></a>
            
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Specialist<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="ecom_dr" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('specialist.index')}}">All Specialist</a>
                </li>
                <li>
                    <a href="{{route('specialist.create')}}">New Specialist</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#dr_list"><i class="icon-basket-loaded mr-10"></i>Doctors<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
            <ul id="dr_list" class="collapse collapse-level-1">
                <li>
                    <a href="{{route('specialist.index')}}">All Doctor</a>
                </li>
                <li>
                    <a href="{{route('specialist.create')}}">New Doctor</a>
                </li>
            </ul>
        </li>
        
    </ul>
</div>