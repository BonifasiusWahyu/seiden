<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
              <!-- <li class="sb-nav-child"><a href="{{ url('/dashboard') }}" data-toggle="collapse"><i class="fa fa-home"></i> <span>Dashboard</span></a></li> -->
              <li class="sb-nav-child"><a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
              <li class="sb-nav-child"><a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                <div id="subPages" class="collapse ">
                  <ul class="nav">
                    <li class="sb-nav-child"><a href="{{ url('/negara') }}"><i class="fa fa-flag"></i> <span>Negara</span></a></li>
                    <li class="sb-nav-child"><a href="{{ url('/kpbc') }}"><i class="fa fa-id-badge"></i> <span>KPBC</span></a></li>
                    <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                  </ul>
                </div>
              </li>
              <li class="sb-nav-child"><a href="{{ url('/user') }}"><i class="fa fa-group"></i> <span>User</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/invoice') }}"><i class="fa fa-file-text"></i> <span>Invoice</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/bc_20') }}"><i class="fa fa-file-text"></i> <span>BC 2.0</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/bukti_terima_barang') }}"><i class="fa fa-file-text"></i> <span>Bukti Terima Barang</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/purchase_order') }}"><i class="fa fa-file-text"></i> <span>Purchase Order</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/bill_of_material') }}"><i class="fa fa-file-text"></i> <span>Bill of Material</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/tahun-anggaran') }}"><i class="fa fa-calendar-check-o"></i> <span>Tahun Anggaran</span></a></li>
              <li class="sb-nav-child"><a href="{{ url('/satuan-kerja') }}"><i class="fa fa-users"></i> <span>Satuan Kerja</span></a></li>
              {{-- <li class="sb-nav-child"><a href="{{ url('/dipa') }}"><i class="fa fa-stack-overflow"></i> <span>DIPA</span></a></li> --}}
            </ul>
        </nav>
    </div>
</div>
