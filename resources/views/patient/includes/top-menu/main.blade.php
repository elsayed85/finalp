<div id="navbar1" class="app-navbar horizontal">
    <div class="navbar-wrap"><button
            class="no-style navbar-toggle navbar-open d-lg-none"><span></span><span></span><span></span></button>
        <form class="app-search d-none d-md-block">
            <div class="form-group typeahead__container with-suffix-icon mb-0">
                <div class="typeahead__field">
                    <div class="typeahead__query"><input class="form-control autocomplete-control topbar-search"
                            type="search" placeholder="Type page's title" autocomplete="off"
                            data-source="{{ asset("/assets/medical/data/search-menu.json") }}">
                        <div class="suffix-icon icofont-search"></div>
                    </div>
                </div>
            </div>
        </form>
        <div class="app-actions">
            @include('patient.includes.top-menu.left')
        </div>
        <div class="navbar-skeleton horizontal">
            <div class="left-part d-flex align-items-center"><span
                    class="navbar-button bg animated-bg d-lg-none"></span> <span
                    class="sk-logo bg animated-bg d-none d-lg-block"></span> <span
                    class="search d-none d-md-block bg animated-bg"></span></div>
            <div class="right-part d-flex align-items-center">
                <div class="icon-box"><span class="icon bg animated-bg"></span> <span class="badge"></span>
                </div><span class="avatar bg animated-bg"></span>
            </div>
        </div>
    </div>
</div>
