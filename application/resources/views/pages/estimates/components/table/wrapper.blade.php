@if(isset($page['page']) && $page['page'] == 'estimates')
@include('pages.estimates.components.actions.checkbox-actions')
@endif

<!--main table view-->
@include('pages.estimates.components.table.table')

<!--filter-->
@if(auth()->user()->is_team)
@include('pages.estimates.components.misc.filter-estimates')
@endif
<!--filter-->

<!--export-->
@if(config('visibility.list_page_actions_exporting'))
@include('pages.export.estimates.export')
@endif