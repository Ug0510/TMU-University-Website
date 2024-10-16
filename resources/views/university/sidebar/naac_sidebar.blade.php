<div class="col-sm-3 col-lg-2 sticky-sidebar-wrap pe-5 py-0 py-lg-3" style="background-color: #55555510;">
    <span class="undernav-locator mb-2 ms-3">
        <span style="color:#fe8d00; font-size:24px">
            <a href="/"><i class="fa-solid fa-house"></i></a>
        </span>
        <i class="fa-solid fa-chevron-right" style="color:#fe8d00"></i>
        <span style="color:#001055; font-weight:700;">Internal Quality Assurance Cell (IQAC)</span>
    </span>

    <ul class="list-unstyled items-nav sticky-sidebar shop-filter mt-4 d-none d-sm-block" data-container="#shop">
        <li class="no-divider">
            <a href="#" class="text-dark fw-semibold side-head" data-filter=".sf-new">NAAC</a>
        </li>
        <li class="no-divider">
            <a href="{{ route('naac.home') }}" class="text-dark fw-semibold side-head {{ Route::is('naac.home') ? 'active' : '' }}" data-filter=".sf-new">Cycle-II</a>
        </li>
        <li class="no-divider">
            <a href="{{ route('naac.cycle.i') }}" class="text-dark fw-semibold side-head {{ Route::is('naac.cycle.i') ? 'active' : '' }}" data-filter=".sf-new">Cycle-I</a>
        </li>
    </ul>
</div>
