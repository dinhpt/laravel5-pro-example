<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
$(document).ready(function() {
	var width = $(window).width();
	if(width > 480){
		$('#pagination-pc').show();
		$('#pagination-mb').hide();
	}else {
		$('#pagination-pc').hide();
		$('#pagination-mb').show();
	}
	//alert($(window).height());
});
</script>

<?php
// config
$link_limit = 7; 
$next = $paginator->currentPage() +1;
$prev = $paginator->currentPage() -1;
?>
@if ($paginator->lastPage() > 1)
    <ul class="pagination" id="pagination-pc" style="display: none;">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">{{Lang::get('properties.common.pagging.first')}}</a>
        </li>
        @if ($paginator->currentPage() > floor($link_limit / 2))
        	<li class="">
                <a href="{{ $paginator->url($prev) }}">Previous</a>
            </li>
            <li class="disabled">
                <span>...</span>
            </li>
        @endif
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
               $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        @if ($paginator->currentPage() < $paginator->lastPage() - floor($link_limit / 2))
            <li class="disabled">
                <span>...</span>
            </li>
            <li class="">
                <a href="{{ $paginator->url($next) }}">Next</a>
            </li>
        @endif
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->lastPage()) }}">{{Lang::get('properties.common.pagging.last')}}</a>
        </li>
    </ul>
    <?php $link_limit = 5;?>
    <ul class="pagination" id="pagination-mb" style="display: none;">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url(1) }}">{{Lang::get('properties.common.pagging.first')}}</a>
        </li>
        @if ($paginator->currentPage() > floor($link_limit / 2))
            <li class="disabled">
                <span>...</span>
            </li>
        @endif
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
               $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        @if ($paginator->currentPage() < $paginator->lastPage() - floor($link_limit / 2))
            <li class="disabled">
                <span>...</span>
            </li>
        @endif
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->lastPage()) }}">Last</a>
        </li>
    </ul>
@endif
</html>