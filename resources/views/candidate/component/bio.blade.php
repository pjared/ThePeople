@if ($bio != "")
    <article class="flex flex-col background-card w-fit items-center">
        <x-show-more :content="$bio" />
    </article>
@endif
