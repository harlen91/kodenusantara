<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a href="#" aria-expanded="false">
                    <i class="icon bi bi-speedometer2"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.workshop') }}" aria-expanded="false">
                    <i class="icon bi bi-person-workspace"></i><span class="nav-text">Workshop</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.workshop.bayar') }}" aria-expanded="false">
                    <i class="bi bi-cash-coin"></i><span class="nav-text">Pembayaran Workshop</span>
                </a>
            </li>
            <li class="nav-label">Master Data</li>
            <li><a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icon icon-single-copy-06"></i><span class="nav-text">Kelola</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.tim') }}">Tim</a></li>
                    <li><a href="{{ route('admin.users') }}">Users</a></li>
                    <li><a href="{{ route('admin.bank') }}">Bank</a></li>
                    <li><a href="{{ route('admin.proyek') }}">Project</a></li>
                </ul>
            </li>
        </ul>
    </div>


</div>
