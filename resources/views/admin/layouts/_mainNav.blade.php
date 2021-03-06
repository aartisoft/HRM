
<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li {{-- class="active" --}}>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            @if(auth()->user()->type=='Admin')
            <li {{-- class="active" --}}>
                <a href="{{ route('user.index') }}">User</a>
            </li>

                <li class="submenu">
                    <a href="#"><span> Transaction </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="{{ route('transaction.index','Income') }}"> Income </a></li>
                        <li><a href="{{ route('transaction.index','Expense') }}"> Expense </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span> Attendence </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li><a href="{{ route('attendence.index') }}"> List </a></li>
                        <li><a href="{{ route('attendence.upload') }}"> Bulk Upload </a></li>
                    </ul>
                </li>
            <li class="submenu">
                <a href="#"><span> Settings </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled" style="display: none;">
                    <li><a href="{{ route('department.index') }}"> Departments </a></li>
                    <li><a href="{{ route('designation.index') }}"> Designations </a></li>
                    <li><a href="{{ route('transaction-head.index') }}"> Transactions Head </a></li>
                    <li><a href="{{ route('application_settings') }}"> Application Settings </a></li>
                </ul>
            </li>
             @endif
        </ul>
    </div>
</div>