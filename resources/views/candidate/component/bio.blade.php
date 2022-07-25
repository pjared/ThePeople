@if($bio != "")
    <div class="flex flex-col background-card w-fit items-center">
        <p
        x-data="{ isCollapsed: false, maxLength: 215, originalContent: '', content: '' }"
        x-init="originalContent = $el.firstElementChild.textContent.trim(); content = originalContent.slice(0, maxLength)"
        >
        {{-- + '...' --}}
            <span x-text="isCollapsed ? originalContent : content">{{$bio}}</span>
            <button
            @click="isCollapsed = !isCollapsed"
            x-show="originalContent.length > maxLength"
            x-text="isCollapsed ? 'Show less' : 'Show more'"
            class="link"
            ></button>
        </p>             
    </div>
@endif