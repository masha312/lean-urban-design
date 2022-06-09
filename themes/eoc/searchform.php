<form role="search" autocomplete="off" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input aria-label="Search resources" type="text" class="search-field" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
    <button aria-label="Search resources" type="submit"><svg class="icon--search" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.0625 15.625C12.6869 15.625 15.625 12.6869 15.625 9.0625C15.625 5.43813 12.6869 2.5 9.0625 2.5C5.43813 2.5 2.5 5.43813 2.5 9.0625C2.5 12.6869 5.43813 15.625 9.0625 15.625Z" stroke="#595959" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.7031 13.7031L17.5 17.5" stroke="#595959" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


    </button>
</form>
